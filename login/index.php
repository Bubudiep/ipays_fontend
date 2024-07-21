<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>iPays - Đăng nhập</title>
  <!-- Include your favicon -->
  <link rel="icon" type="image/png" href="../sources/img/web/icon.png">
  <!-- Other meta tags, stylesheets, etc. -->
  <link rel="stylesheet" type="text/css" href="../sources/styles/app.css">
  <link rel="stylesheet" type="text/css" href="../sources/lib/fontawesome-free-6.5.2-web/css/all.min.css">
  <script src="../sources/lib/jquery-3.6.0.min.js"></script>
  <script src="../sources/js/app.js"></script>
</head>
<body class="login-box">
  <div class="left-container"></div>
  <div class="right-container">
    <div class="login-container">
      <div class="login-title">Đăng nhập</div>
      <div class="login-hi">Chào mừng bạn quay trở lại!</div>
      <div class="login-form">
        <div class="name">Tài khoản</div>
        <div class="input">
          <input type="text" id="user">
          <i class="fa-solid fa-user"></i>
          <i class="fa-solid fa-user"></i>
        </div>
        <div class="name">Mật khẩu</div>
        <div class="input">
          <input type="password" id="pass">
          <i id="show_pass" class="fa-solid fa-eye-slash"></i>
        </div>
        <div class="flex remember_me">
          <input type="checkbox" id="remember_me" checked> Nhớ tài khoản mật khẩu!
        </div>
        <button id="btn-login" class="login">Vào trang quản lý <i class="fa-solid fa-location-arrow"></i></button>
        <div class="register">Chưa có tài khoản, <a href="">đăng ký ngay!</a></div>
        <div class="register">Cần trợ giúp, <a href="">liên hệ!</a></div>
        <div class="exit" id="exit_app">Thoát</div>
      </div>
    </div>
  </div>
</body>
<script>
$(document).ready(async function(){
  var islogin=true;
  var app_infor=await app.api("GET", "/api/auth-info/");
  app.init(false);
  try{
    var user = localStorage.getItem('username');
    var pass = localStorage.getItem('password');
    if (user&&pass){
      $("#user").val(user);
      $("#pass").val(pass);
    }
  } catch (e){
    console.log(e);
  }
  $("#exit_app").click(async function(){
    app.ipc.send('exit');
  });
  $("#show_pass").on("mousedown", function(){
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
    $("#pass").prop('type', 'text');
  });
  $("#show_pass").on("mouseup", function(){
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
    $("#pass").prop('type', 'password');
  });
  $("#btn-login").click(async function(){
    login_btn();
  });
  $("#user").keydown(e=>{
    if(e.which == 13) $("#pass").select();
  });
  $("#pass").keydown(e=>{
    if(e.which == 13) login_btn();
  });
  async function login_btn(){
    if(islogin){
      islogin=false;
      var user=$("#user").val();
      var pass=$("#pass").val();
      if (user&&pass){
        var form=new FormData();
        if($("#remember_me").prop('checked')){
          localStorage.setItem('username', user);
          localStorage.setItem('password', pass);
        }
        var data={
          username:user,
          password:pass,
          grant_type:"password",
          client_id:app_infor.client_id,
          client_secret:app_infor.client_secret
        }
        for (var key in data) {
          form.append(key, data[key]);
        }
        try{
          var token=await app.login(form);
          if (token.response.access_token){
            app.setCookie("token",token.response.access_token,token.response.expires_in*1000);
            app.ipc.send("maximize");
            location.href="/";
          } else {
            console.log(token);
            app.error("Lỗi tài khoản hoặc mật khẩu!");
            islogin=true;
            return;
          }
        } catch (e){
          if(e.xhr.responseJSON.error=="invalid_grant"){
            app.error("Tài khoản/mật khẩu không chính xác!");
          } else {
            app.error("Lỗi kết nối máy chủ!");
          }
          islogin=true;
          return;
        }
      } else {
        app.error("Hãy nhập đủ tài khoản và mật khẩu!");
        islogin=true;
        return;
      }
    }
  }
})
</script>
</html>