<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>V_Store - Trang Chủ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <style>
        /* 🔹 Navbar & Footer */
        .navbar, .footer {
            background-color: #2C3E50;
        }
        .navbar-brand, .nav-link, .footer {
            color: white !important;
        }
        .nav-link:hover {
            color: #F39C12 !important;
        }

        /* 🔹 Nội dung */
        .container {
            margin-top: 50px;
        }
        .hero-section {
            text-align: center;
            padding: 50px 20px;
            background: linear-gradient(135deg, #1ABC9C, #16A085);
            color: white;
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* 🔹 Nút bấm */
        .btn-custom {
            background: linear-gradient(135deg, #3498DB, #2980B9);
            color: white;
            font-weight: bold;
            padding: 12px 25px;
            border-radius: 5px;
            text-decoration: none;
            transition: 0.3s;
        }
        .btn-custom:hover {
            background: linear-gradient(135deg, #2980B9, #1F618D);
        }
    </style>
</head>
<body>

    <!-- 🔹 Thanh Điều Hướng -->
    <nav class="navbar navbar-expand-lg">
        <div class="container">
            <a class="navbar-brand fw-bold" href="index.php">V_Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/list_item.php">Danh Sách Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/add_item.php">Thêm Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link" href="pages/edit_item.php">Chỉnh Sửa Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🔹 Nội dung chính -->
    <div class="container">
        <div class="hero-section">
            <h1 class="fw-bold">Chào mừng đến với V_Store</h1>
            <p class="lead">Hệ thống quản lý bán hàng đơn giản và hiệu quả</p>
            <div class="mt-4">
                <a href="pages/list_item.php" class="btn-custom">📦 Xem Danh Sách Sản Phẩm</a>
                <a href="pages/add_item.php" class="btn-custom">➕ Thêm Sản Phẩm Mới</a>
            </div>
        </div>
    </div>

    <!-- 🔹 Footer -->
    <div class="footer text-center p-3 mt-4">
        Số 8, Tôn Thất Thuyết, Cầu Giấy, Hà Nội | © 2025 V_Store
    </div>

</body>
</html>
