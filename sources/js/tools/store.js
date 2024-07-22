$(document).ready(async function() {
  $("#main-container").load(`/sources/html/tools/store/dashboard.php`, (responseText, textStatus, jqXHR) => {
    if (textStatus === "error") {
      console.error("Error loading content:", jqXHR.status, jqXHR.statusText);
      // Additional error handling logic here
    } else {
      console.log("Content loaded successfully:", responseText);
      console.log("Status:", textStatus);
      console.log("jqXHR object:", jqXHR);
    }
  });
  $(".subItem").click(async function(){
    $(".subItem").each((id,item)=>{
      item.classList.remove("active");
    });
    this.classList.add("active");
    $("#main-container").load(`/sources/html/tools/store/${this.id}.php`);
  });
  $(".subNav-tools").click(async function(){
    this.classList.toggle("active");
    $(".left-subItem").each((idx,item)=>{
      item.classList.toggle("active");
    })
  });
});