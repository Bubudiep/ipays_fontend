const app = {
  config:{
    checkDev: false,
    threshold: 160,
  },
  init: () => {
    if(app.config.checkDev){
      const widthThreshold = window.outerWidth - window.innerWidth > app.config.threshold;
      const heightThreshold = window.outerHeight - window.innerHeight > app.config.threshold;
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