console.log(window);
const app = {
  config:{
    checkDev: false,
  },
  user:{
    token: null,
    profile: null,
    last_check: null,
  },
  ipc:null,
  random:function (length) {
    let result = '';
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
      <div class="error_background"></div>
      <div class="box">
        <div class="icon"><img src="/electron/assets/img/warning.png"></div>
        <div class="messages">${text}</div>
      </div>
    </div>`);
    $(".error_background").click(function(){
      if(canclose){
        this.parentNode.remove();
      }
    });
  },
  view : function(view){
    var box=`<div class="app_bg"><div class="app_bg_autoclose"></div><div class="app_bg_view">${view}</div></div>`
    $("#main-load").append(box);
    $(".app_bg_autoclose").click(function(){
      this.parentNode.remove();
    });
  },
  init: function(){
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
  }
};
console.log(app);