$(document).ready(async function(){
  app.init();
  $("#reload-app").click(async function(){
    app.ipc.send('reload');
  });
  $(".app-item").click(async function(){
    var all=document.getElementsByClassName("app-item");
    for (var i=0;i<all.length;i++) {
      all[i].classList.remove("active");
    }
    var all=document.getElementsByClassName("app-sv");
    for (var i=0;i<all.length;i++) {
      all[i].classList.remove("active");
    }
    this.classList.add("active");
    if(this.id){
      $("#main-load").load("sources/html/"+this.id+".php");
    }
  });
  $("#app_add").click(async function(){
    var view=`<div class="flex">
    <div class="guide">
      <div class="guide-section"><i class="fa-regular fa-lightbulb"></i> Mẹo nhỏ</div>
      <div class="guidebox">
        <div class="guide-icon"><img src="/sources/img/web/freepik/avatar0.png"></div>
        <div class="guide-content">
          <div class="guide-title">Gian hàng là gì?</div>
          <div class="guide-text">- Gian hàng là nơi để bạn quản lý hàng hóa và đơn hàng.</div>
        </div>
      </div>
      <div class="guidebox">
        <div class="guide-icon"><img src="/sources/img/web/freepik/avatar1.png"></div>
        <div class="guide-content">
          <div class="guide-title">Avatar</div>
          <div class="guide-text">- Một logo nhỏ nhỏ xinh xinh sẽ giúp quán dễ tiếp cận hơn </br>- Hoặc một món ăn, một loại nước uống nổi tiếng của quán</div>
        </div>
      </div>
      <div class="guidebox">
        <div class="guide-icon"><img src="/sources/img/web/freepik/avatar2.png"></div>
        <div class="guide-content">
          <div class="guide-title">Tên quán</div>
          <div class="guide-text">- Tên quán hay sẽ giúp cho tiệm của bạn trở nên nổi tiếng hơn đó!</div>
        </div>
      </div>
    </div>
    <div class="flex-cl create_store">
      <div class="avatar">
        <div class="avatar-preview">
          <img src="/sources/img/template/store_avatar.png">
          <label for="rg_str_avatar" class="avatar-label">
          <text><i class="fa-regular fa-image"></i> tải lên</text>
          </label>
          <input type="file" id="rg_str_avatar">
        </div>
      </div>
      <div class="form-data">
        <div class="flex name">Loại hình</div>
        <select>
          <option value="store_food">Quán ăn</option>
          <option value="store_tea">Quán nước</option>
        </select>
        <div class="flex name">Tên gian hàng</div>
        <input type="text" id="crt_store_name" placeholder="gian hàng...">
        <div class="flex acenter"><button><i class="fa-regular fa-pen-to-square"></i> Tạo gian hàng</button></div>
      </div>
    </div></div>`;
    app.whitebox("Gian hàng mới",view);
    $("#crt_store_name").focus();
  });
  $(".app-sv").click(async function(){
    var all=document.getElementsByClassName("app-sv");
    for (var i=0;i<all.length;i++) {
      all[i].classList.remove("active");
    }
    var all=document.getElementsByClassName("app-item");
    for (var i=0;i<all.length;i++) {
      all[i].classList.remove("active");
    }
    this.classList.add("active");
    if(this.id){
      $("#main-load").load("sources/html/tools/store.php?id="+this.id);
      window.history.replaceState( {} , 'foo', '?function=store&id='+this.id);
    }
  });
  $("#win-min").click(async function(){
    app.ipc.send('maximize');
  });
  $("#win-close").click(async function(){
    app.ipc.send('exit');
  });
  $("#win-miniminze").click(async function(){
    app.ipc.send('minimize');
  });
});