<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>IPAYS - Ứng dụng bán hàng</title>
  <!-- Include your favicon -->
  <link rel="icon" type="image/png" href="sources/img/web/icon.png">
  <!-- Other meta tags, stylesheets, etc. -->
  <link rel="stylesheet" type="text/css" href="sources/styles/app.css">
  <link rel="stylesheet" type="text/css" href="sources/lib/fontawesome-free-6.5.2-web/css/all.min.css">
  <script src="sources/lib/jquery-3.6.0.min.js"></script>
  <script src="sources/js/app.js"></script>
</head>
<body class="default">
  <div class="body-container">
    <div class="top-container">
      <div class="left">
        <div class="logo">iPays</div>
      </div>
      <div class="mid"><input type="text" placeholder="Notifications..."></div>
      <div class="right">
        <div class="UI-btn"><button id="win-miniminze"><i class="fa-solid fa-minus"></i></button></div>
        <div class="UI-btn"><button id="win-min"><i class="fa-solid fa-expand"></i></button></div>
        <div class="UI-btn"><button id="win-close" class="close"><i class="fa-solid fa-xmark"></i></button></div>
      </div>
    </div>
    <div class="main-container">
      <div class="app-container">
        <div class="flex-c">
          <div class="app-item active" id="report">
            <i class="fa-solid fa-chart-pie"></i>
            <div class="tooltiptext">Báo cáo</div>
          </div>
          <div class="split"></div>
          <div class="flex-c" id="list_services">
            <div class="app-sv">
              <img src='sources/img/web/icon.png'>
              <div class="tooltiptext">${list_services[i].Name}</div>
            </div>
            <div class="app-sv">
              <div class="app-sv-name">A</div>
              <div class="tooltiptext">${list_services[i].Name}</div>
            </div>
          </div>
          <div class="app-item" id="add_services">
            <i class="fa-solid fa-plus"></i>
            <div class="tooltiptext">Thêm dịch vụ</div>
          </div>
        </div>
        <div class="flex-c">
          <div class="app-item" id="profile">
            <i class="fa-solid fa-user"></i>
            <div class="tooltiptext">Tài khoản</div>
          </div>
          <div class="app-item" id="setting">
            <i class="fa-solid fa-gear"></i>
            <div class="tooltiptext">Cài đặt</div>
          </div>
        </div>
      </div>
      <div class="app-view" id="main-load"></div>
    </div>
  </div>
</body>
<script src="sources/js/index.js"></script>
</html>