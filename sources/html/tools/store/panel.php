<div class="sub-view pd10 fix-height">
  <div class="flex f1 g10 ohidden">
    <div class="panel-left">
      <div class="dashboard-container">
        <div class="dashboard-box">
          <div class="data">000</div>
          <div class="content">Bàn đang sử dụng</div>
          <div class="diff">Tỉ lệ lấp đầy<div class="right">00<i class="fa-solid fa-arrow-up-long"></i></div>
          </div>
        </div>
        <div class="dashboard-box">
          <div class="data">000</div>
          <div class="content">Đơn hàng online</div>
          <div class="diff">Chưa có dữ liệu<div class="right">00<i class="fa-solid fa-arrow-up-long"></i></div>
          </div>
        </div>
        <div class="dashboard-box">
          <div class="data">000</div>
          <div class="content">Bàn đang chờ</div>
          <div class="diff">Chưa có dữ liệu<div class="right">00<i class="fa-solid fa-arrow-up-long"></i></div>
          </div>
        </div>
        <div class="dashboard-box">
          <div class="data">000</div>
          <div class="content">Đang ship</div>
          <div class="diff">Chưa có dữ liệu<div class="right">00<i class="fa-solid fa-arrow-up-long"></i></div>
          </div>
        </div>
        <div class="dashboard-box">
          <div class="data">000</div>
          <div class="content">Bàn đặt trước</div>
          <div class="diff">Chưa có dữ liệu<div class="right">00<i class="fa-solid fa-arrow-up-long"></i></div>
          </div>
        </div>
      </div>
      <div class="panel-controlling">
        <div class="panel-tabs">
          <div class="panel-tabs-item active">Bàn ăn</div>
          <div class="panel-tabs-item">Đơn hàng</div>
          <div class="panel-tabs-item">Nhà bếp</div>
          <div class="panel-tabs-item">Đánh giá</div>
        </div>
        <div class="panel-outlet" id="panel-outlet">
          <div class="panel-container">
            <div class="flex searchbox">
              <i class="fa-solid fa-magnifying-glass"></i>
              <input type="text" placeholder="nhập số bàn...">
            </div>
            <div class="filter-group">
              <div class="filter-box active notuse">Bàn trống (0)</div>
              <div class="filter-box using">Bàn đang dùng (0)</div>
              <div class="filter-box pending">Bàn chưa dọn (0)</div>
            </div>
            <div class="filter">Sắp xếp
            </div>
            <select>
              <option>Từ nhỏ đến lớn</option>
              <option>Từ lớn đến nhỏ</option>
            </select>
            <div class="list-button">
              <div class="report-button active" id="list1"><i class="fa-solid fa-bars-staggered"></i></div>
              <div class="report-button" id="list2"><i class="fa-solid fa-border-all"></i></div>
              <div class="report-button" id="list3"><i class="fa-solid fa-table-cells"></i></div>
            </div>
          </div>
          <div class="tabs-ouputs">
            <div class="tableBOX using">
              <div class="BOX-header">
                <div class="table-status">Đang dùng</div>
                <div class="table-name">BÀN 1</div>
                <div class="table-status">#HD-99999999</div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">30 phút 03</div>
                <div class="user-avatar">
                  <div class="avatar"><img src="#"></div>
                  <div class="details">
                    <div class="user">
                      <a herf="#">Người dùng</a>
                    </div>
                    <div class="time">Dùng tại bàn</div>
                    <div class="bill">Hóa đơn: 500.000 VNĐ</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Thanh toán</div>
                  <div class="items">Thêm món</div>
                  <div class="items">Chuyển bàn</div>
                </div>
              </div>
            </div>
            <div class="tableBOX pending">
              <div class="BOX-header">
                <div class="table-status">Đang dọn dẹp</div>
                <div class="table-name">BÀN 2</div>
                <div class="table-status"></div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">30 phút 03</div>
                <div class="user-avatar">
                  <div class="flex-cl acenter g5 pd5">
                    <div class="icon"><img src="/sources/img/web/freepik/clean.png"></div>
                    <div class="text">Đang dọn dẹp</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Đã sãn sàng đặt bàn</div>
                  <div class="items">Không cho đặt bàn</div>
                </div>
              </div>
            </div>
            <div class="tableBOX clear">
              <div class="BOX-header">
                <div class="table-status">Đang trống</div>
                <div class="table-name">BÀN 3</div>
                <div class="table-status"></div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">30 phút 03</div>
                <div class="user-avatar">
                  <div class="flex-cl acenter g5 pd5">
                    <div class="icon"><img src="/sources/img/web/freepik/ready.png"></div>
                    <div class="text">Sãn sàng để sử dụng</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Thanh toán</div>
                  <div class="items">Thêm món</div>
                  <div class="items">Chuyển bàn</div>
                </div>
              </div>
            </div>
            <div class="tableBOX willuse">
              <div class="BOX-header">
                <div class="table-status">Đặt trước</div>
                <div class="table-name">BÀN 4</div>
                <div class="table-status">#HD-99999999</div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">15:00:00</div>
                <div class="user-avatar">
                  <div class="avatar"><img src="#"></div>
                  <div class="details">
                    <div class="user">
                      <a herf="#">Người dùng</a>
                    </div>
                    <div class="time">Dùng tại bàn</div>
                    <div class="bill">Hóa đơn: 500.000 VNĐ</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Hủy đặt bàn</div>
                  <div class="items">Thêm món</div>
                  <div class="items">Chuyển bàn</div>
                </div>
              </div>
            </div>
            <div class="tableBOX usehome">
              <div class="BOX-header">
                <div class="table-status">Đang chờ</div>
                <div class="table-name">BÀN 5</div>
                <div class="table-status">#HD-99999999</div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">30 phút 03</div>
                <div class="user-avatar">
                  <div class="avatar"><img src="#"></div>
                  <div class="details">
                    <div class="user">
                      <a herf="#">Người dùng</a>
                    </div>
                    <div class="time">Đơn mang về</div>
                    <div class="bill">Hóa đơn: 500.000 VNĐ</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Thanh toán</div>
                  <div class="items">Thêm món</div>
                  <div class="items">Chuyển bàn</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" flex right-hight">
      <div class="flex-cl h40">
        <div class="right-boxList">
          <div class="box-header">
            <div class="box-title">
              <t>Thông báo</t>
            </div>
            <div class="right"><i class="fa-solid fa-gears"></i></div>
          </div>
          <div class="box-body">
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Gọi món</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Thanh toán</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
            <div class="box-items">
              <div class="title">
                <t>Đặt bàn</t>
              </div>
              <div class="body">
                <div class="content">
                  <a href="#">Hùng</a> vừa đặt <a href="#">bàn số 7</a>
                </div>
                <div class="time">5 phút trước</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="flex-cl f1">
        <div class="right-boxList">
          <div class="box-header">
            <div class="box-title">
              <select>
                <option value="order-pending">Đơn hàng đang chờ</option>
              </select>
            </div>
            <div class="right">
              <div class="order-filter"><i class="fa-solid fa-filter"></i></div>
            </div>
          </div>
          <div class="box-body">
            <div class="order-card">
              <div class="tilte">
                <t>Đơn hàng</t>
                <a href="#">#HD-99999999</a>
              </div>
              <div class="body"></div>
              <div class="bottom"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  $(document).ready(async function() {
    loadTable();
  });
  async function loadTable() {
    var data = [{
      name: "Bàn 1",
      status: "using",
      details: {
        user: {
          id: 5,
          name: "Hùng đẹp trai"
        },
        type: "Dùng tại bàn",
        order: {
          key: "HD-RXT-0000001",
          price: 500000,
        },
        start_at: new Date("26/07/2024 18:00:00"),
      },
    }, {
      name: "Bàn 2",
      status: "willuse",
      details: {
        user: {
          id: 5,
          name: "Hùng đẹp trai"
        },
        type: "Dùng tại bàn",
        order: {
          key: "HD-RXT-0000002",
          start_at: new Date("26/07/2024 18:00:00"),
          price: 500000,
        },
        start_at: new Date("26/07/2024 18:00:00"),
      },
    }, {
      name: "Bàn 3",
      status: "uselater",
      details: {
        user: {
          id: 5,
          name: "Hùng đẹp trai"
        },
        type: "Dùng tại bàn",
        order: {
          key: "HD-RXT-0000002",
          price: 500000,
          start_at: new Date("26/07/2024 19:00:00"),
        },
        start_at: null,
      },
    }, {
      name: "Bàn 3",
      status: "pending",
    }, {
      name: "Bàn 3",
      status: "clear",
    }];
    var table_item = "";
    data.forEach(function(table, id) {
      var status_name = "",
        order_id = "",
        view = "";
      if (table.status == "using") {

      }
      table_item += `<div class="tableBOX using">
              <div class="BOX-header">
                <div class="table-status">${status_name}</div>
                <div class="table-name">${table.name.toUpperCase()}</div>
                <div class="table-status">#HD-99999999</div>
              </div>
              <div class="BOX-content">
                <div class="details">
                  <box></box>
                </div>
                <div class="time-use">30 phút 03</div>
                <div class="user-avatar">
                  <div class="avatar"><img src="#"></div>
                  <div class="details">
                    <div class="user">
                      <a herf="#">Người dùng</a>
                    </div>
                    <div class="time">Dùng tại bàn</div>
                    <div class="bill">Hóa đơn: 500.000 VNĐ</div>
                  </div>
                </div>
                <div class="BOX-tools">
                  <div class="items">Thanh toán</div>
                  <div class="items">Thêm món</div>
                  <div class="items">Chuyển bàn</div>
                </div>
              </div>
            </div>`;
    });
  }
</script>