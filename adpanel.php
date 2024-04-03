<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fonts/themify-icons-font/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="fonts/fontawesome-free-6.4.0-web/css/all.min.css">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/adpanel.css">
    <title>Document</title>
</head>
<body>
    <div id="rapper-admin">
        <div id="header">
            <div class="container-item"><i class="ti-layout-grid2-alt"></i> Administrator</div>
            <div class="container-item" onclick="cook()"><i class="ti-share-alt"></i> Vào trang web</div>
            <div class="container-item right-item">Xin chào: admin <i class="ti-angle-down"></i></div>
        </div>
        <div id="content">
            <div class="left-content">
                <div class="container active" id="cmm">
                    <i class="ti-home"></i>
                    Trang chủ Admin
                </div>
                <div class="container">
                    <i class="ti-server"></i>
                    Quản lý Kho
                </div>
                <div class="container">
                    <i class="ti-money"></i>
                    Quản lý Bán Hàng
                </div>
                <div class="container">
                    <i class="ti-package"></i>
                    Thống kê doanh thu
                </div>
            </div>
            <div id="right-content" >
                <div class="model-banhang model-right">
                    <div class="top-menu">
                    <ul class="list-group list-group-horizontal menu-container">
                        <li class="list-group-item item-menu active">Thêm sửa xóa khách hàng</li>
                        <li class="list-group-item item-menu">Duyệt đơn hàng</li>
                        <li class="list-group-item item-menu">In hóa đơn bán hàng</li>
                        <li class="list-group-item item-menu">Xem hóa đơn bán hàng</li>
                        <li class="list-group-item item-menu">Xem thống kê bán hàng</li>
                    </ul>
                    </div>
                </div>
                <div class="model-kho model-right">
                    <div class="top-menu">
                    <ul class="list-group list-group-horizontal menu-container">
                        <li class="list-group-item item-menu active">Quản lý sản phẩm</li>
                        <li class="list-group-item item-menu">Quản lý nhà cung cấp</li>
                        <li class="list-group-item item-menu">Tìm kiếm sản phẩm</li>
                        <li class="list-group-item item-menu">Lập phiếu nhập kho</li>
                        <li class="list-group-item item-menu">In phiếu nhập kho</li>
                        <li class="list-group-item item-menu">Thống kê lịch sử nhập</li>
                    </ul>
                    </div>
                </div>
                <div class="model-baocao model-right">
                    <div class="top-menu">
                    <ul class="list-group list-group-horizontal menu-container">
                        <li class="list-group-item item-menu active">Quản lý sản phẩm</li>
                        <li class="list-group-item item-menu">Quản lý nhà cung cấp</li>
                        <li class="list-group-item item-menu">Tìm kiếm sản phẩm</li>
                        <li class="list-group-item item-menu">Lập phiếu nhập kho</li>
                        <li class="list-group-item item-menu">Thống kê lịch sử nhập</li>
                    </ul>
                    </div>
                </div>
                <!-- <div class="content-doanhthu">
                    <p>báo cáo doanh thu</p>
                    <label for="1">từ ngày</label>
                    <input type="date" name="1" id="from-date"> 
                    <label for="2">đến ngày</label>
                    <input type="date" id="to-date">
                    <button onclick="showdate()">xx</button>
                    <div class="header-right-content top-menu">
                        <div class="id-kh">id khach hàng</div>
                        <div class="ten-sp">Tên Sản Phẩm</div>
                        <div class="so-luong">Số Lượng</div>
                        <div class="gia-sp">Đơn giá</div>
                        <div class="gia-sp">Thành tiền</div>
                    </div>
                  </div> -->
            </div>
        </div>
    </div>
    <!-- <div class="modal-add-product">
        <div class="container-modal">
            <form action="" id="testt">
                <div class="item-modal">
                    <p class="left-modal">Thể loại</p>
                    <select name="" class="right-modal" id="select-category" onchange="Preview()">
                        <option value="vanhoc">Văn học</option>
                        <option value="amthuc-nauan">Ẩm thực</option>
                        <option value="yhoc-suckhoe">Sức khỏe</option>
                        <option value="kientruc-xaydung">Kiến trúc</option>
                        <option value="kinhte">Kinh tế</option>
                        <option value="ngoaingu">Ngoại ngữ</option>
                        <option value="phapluat">Pháp luật</option>
                    </select>
                </div>
                <div class="item-modal">
                    <p class="left-modal">Hình ảnh</p>
                    <input type="file" class="right-modal" onchange="Preview()" id="inputfile">
                </div>
                <div class="item-modal">
                    <p class="left-modal">Tên sản phẩm</p>
                    <input type="text" placeholder="Nhập tên" class="right-modal" id="product-name-js" onchange="Preview()">
                </div>
                <div class="item-modal">
                    <p class="left-modal">Số lượng sản phẩm</p>
                    <input type="text" placeholder="Nhập số lượng" class="right-modal" id="product-sl-js" onchange="Preview()">
                </div>
                <div class="item-modal">
                    <p class="left-modal">Giá tiền</p>
                    <input type="text" placeholder="Giá Thành VNĐ" class="right-modal" id="product-price-js" onchange="Preview()">
                </div>
                <div class="item-modal">
                    <p class="left-modal">Giới thiệu sản phẩm</p>
                    <textarea name="" cols="30" rows="10" class="right-modal" id="product-details-js" onchange="Preview()"></textarea>
                </div>
                <div class="item-modal button-add-product" id="getShowBtn">
                </div>
                <div class="show-product container-content" id="show-product-tmp"></div>
            </div>
        </form>

    </div> -->
    <?php 
        include './pages/footer.php';
    ?>
    <script src="./js/jquery.min.js"></script>
    <script src="./js/adpanel.js"></script>
</body>
</html>