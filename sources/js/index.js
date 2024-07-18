$(document).ready(async function(){
  app.init();
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
      $("#main-load").load("sources/html/tools/services.php?id="+this.id);
      window.history.replaceState( {} , 'foo', '?function=UserServices&id='+this.id);
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