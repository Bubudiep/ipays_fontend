const app = {
  config:{
    demo: true,
    debug:true,
    checkDev: false,
    api_app: "api",
    api_host: 'localhost',
    api_port: 8000,
    socket_host: 'localhost',
    socket_port: 3000
  },
  user:{
    token: null,
    profile: null,
    last_check: null,
    services: null
  },
  checkToken: async function(){
    const token= app.getCookie("token");
    app.user.token=token;
    if(token){
      try {
        var user=await app.api("GET",`/${app.config.api_app}/user/`);
        if(user.id){
          app.user.profile=user.profile;
          app.user.last_check=new Date();
        }
        await app.sleep(400);
        $("#loader-first").remove();
      } catch (e) {
        await app.sleep(400);
        $("#loader-first").remove();
        if(await app.confirm("Phiên đăng nhập đã hết hạn! Bạn có muốn đăng nhập lại không?","confirm",false)==true) {
          console.log("Đăng nhập lại!");
          location.href="/login";
        } else {
          location.reload();
        }
      };
    } else {
      location.href="/login";
    }
  },
  confirm: function(message,type="confirm",close=true) {
    return new Promise((resolve) => {
      const cf_id=app.random(5,"Confirm-");
      var view=``;
      switch(type) {
        case "confirm":
          view= $(`<div class="bg">
            <div class="detectOut"></div>
            <div id="${cf_id}" class="cf-box">
              <div class="cf-title">
                <div class="text">Xác nhận</div>
                <button class="cls"><i class="fa-solid fa-xmark"></i></button>
              </div>
              <div class="cf-content">
                <div class="message">${message}</div>
                <div class="cf-btn">
                  <button id="${cf_id}-no" class="no">Không</button>
                  <button id="${cf_id}-yes" class="yes">Có</button>
                </div>
              </div>
            </div>
          </div>`);
          break;
      }
      $('body').append(view);
      if (close){
        $(".cls").click(function() {
          this.parentNode.parentNode.parentNode.remove();
        })
        $(".detectOut").click(function() {
          this.parentNode.remove();
        })
      }
      $(`#${cf_id}-yes`).on('click', function() {
          $(`#${cf_id}`).remove();
          resolve(true);
      });
      $(`#${cf_id}-no`).on('click', function() {
          $(`#${cf_id}`).remove();
          resolve(false);
      });
    });
  },
  ipc:null,
  random:function (length,prefix="RD") {
    let result = prefix;
    const characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    const charactersLength = characters.length;
    let counter = 0;
    while (counter < length) {
      result += characters.charAt(Math.floor(Math.random() * charactersLength));
      counter += 1;
    }
    return result;
  },
  error: function(text, canclose=true){
    var id="error_popup" + app.random();
    $("body").append(`<div class="app_error" id="${id}">
      <div class="box">
        <div class="icon"><img src="/sources/img/web/warning.png"></div>
        <div class="messages">${text}</div>
        <div class="btn right"><button class="cls-btn">Đóng</button></div>
      </div>
      <div class="error_background"></div>
    </div>`);
    if(canclose){
      $(".cls-btn").focus();
      $(".cls-btn").click(function(){
          this.parentNode.parentNode.parentNode.remove();
        }
      );
      $(".error_background").click(function(){
          this.parentNode.remove();
      });
    }
  },
  success:()=>{

  },
  done:()=>{

  },
  loading:async (id,text)=>{
    $("body").append(`<div class="load-bg" id="${id}">
      <div class="box">
        <svg viewBox="25 25 50 50">
          <circle r="20" cy="50" cx="50"></circle>
        </svg>
        <div class="text loading-text">${text}</div>
      </div>
    </div>`);
    $(".error_background").click(function(){
      if(canclose){
        this.parentNode.remove();
      }
    });
    await app.sleep(500);
  },
  load:(id)=>{
    const load_screen_view=`<div class="loading-bg" id="${id}">
      <div class="load-box">
        <span class="loader">iPays</span>
      </div>
    </div>`;
    $(`body`).append(load_screen_view);
  },
  view : function(view){
    var box=`<div class="app_bg">
    <div class="app_bg_autoclose"></div>
    <div class="app_bg_view">${view}</div></div>`
    $("body").append(box);
    $(".app_bg_autoclose").click(function(){
      this.parentNode.remove();
    });
  },
  whitebox : function(title,view){
    var box=`<div class="app_bg">
      <div class="autoclose"></div>
      <div class="whitebox">
        <div class="box-header">
          <div class="box-title">${title}</div>
          <div class="box-close">
            <button class="cls"><i class="fa-solid fa-xmark"></i></button>
          </div>
        </div>
        <div class="box-body">
          ${view}
        </div>
      </div>
    </div>`
    $("body").append(box);
    $(".autoclose").click(function(){
      this.parentNode.remove();
    });
    $(".cls").click(function(){
      this.parentNode.parentNode.parentNode.parentNode.remove();
    });
  },
  init: async function(checktoken=true){
    if (checktoken) await app.checkToken(); //check token
    if (window.electron){
      app.ipc=window.electron;
    }
    if(app.config.checkDev){
      const widthThreshold = window.outerWidth - window.innerWidth > 160;
      const heightThreshold = window.outerHeight - window.innerHeight > 160;
      if (widthThreshold || heightThreshold) {
        devToolsOpened = true;
        alert("Developer tools are opened. Access is restricted.");
        window.location.replace("access_forbidden.php");
      } else {
        devToolsOpened = false;
      }
    }
    await app.sleep(1000);
  },
  sleep:function(ms) {
    return new Promise(resolve => setTimeout(resolve, ms));
  },
  setCookie: function setCookie(name, value, time) {
    let expires = "";
    if (time) {
        const date = new Date();
        date.setTime(date.getTime() + (time));
        expires = "; expires=" + date.toUTCString();
    }
    document.cookie = name + "=" + (value || "")  + expires + "; path=/";
  },
  getCookie: function getCookie(name) {
    const nameEQ = name + "=";
    const ca = document.cookie.split(';');
    for(let i = 0; i < ca.length; i++) {
        let c = ca[i];
        while (c.charAt(0) === ' ') c = c.substring(1, c.length);
        if (c.indexOf(nameEQ) === 0) return c.substring(nameEQ.length, c.length);
    }
    return null;
  },
  deleteCookie: function (name) {   
    document.cookie = name + '=; Max-Age=-99999999;';  
  },
  login: async function (formData){
    var load_id="login-"+app.random(10);
    await app.loading(load_id,"Đang đăng nhập!");
    return new Promise((resolve, reject) => {
      const startTime = Date.now();  // Record the start time
      $.ajax({
        type: 'POST',
        url: `http://${app.config.api_host}:${app.config.api_port}/o/token/`,
        data: formData,
        processData: false,
        contentType: false,
        success: function(response) {
          const endTime = Date.now();  // Record the end time
          const processTime = endTime - startTime;  // Calculate the processing time
          if(app.config.debug) console.log(response,processTime + " ms");
          $(`#${load_id}`).remove();
          resolve({ response, processTime });  // Return the response and processing time
        },
        error: function(xhr, status, error) {
          const endTime = Date.now();  // Record the end time
          const processTime = endTime - startTime;  // Calculate the processing time
          $(`#${load_id}`).remove();
          console.log({ xhr: xhr, status: status, error: error },processTime + " ms");
          reject({ xhr, status, error, processTime });  // Return the error details and processing time
        }
      });
    });
  },
  api: function (type, url, data) {
    var newUrl= `http://${app.config.api_host}:${app.config.api_port+url}`;
    if(url[0]!=="/") newUrl=url;
    return new Promise((resolve, reject) => {
      $.ajax({
        type: type,
        url: newUrl,
        data: type === 'GET' ? data : JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        dataType: 'json',
        headers: {
          'Authorization': 'Bearer ' + app.user.token
        },
        success: function(response) {
          if(app.config.debug) console.log(response);
          resolve(response);
        },
        error: function(xhr, status, error) {
          reject({ xhr: xhr, status: status, error: error });
        }
      });
    });
  }
};
console.log(app);