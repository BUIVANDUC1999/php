<?php
include '../config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $item_code = $_POST['item_code'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $expired_date = $_POST['expired_date'];
    $note = $_POST['note'];

    $sql = "INSERT INTO item_sale (item_code, item_name, quantity, expired_date, note)
            VALUES ('$item_code', '$item_name', $quantity, '$expired_date', '$note')";
    
    if ($conn->query($sql) === TRUE) {
        header("Location: list_item.php");
        exit();
    } else {
        echo "Lỗi: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Thêm Sản Phẩm</title>
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

        /* 🔹 Container */
        .container {
            max-width: 600px;
            margin-top: 50px;
        }

        /* 🔹 Card Form */
        .card {
            border-radius: 10px;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }

        /* 🔹 Tiêu đề */
        .card h4 {
            color: #2C3E50;
            font-weight: bold;
        }

        /* 🔹 Nút bấm */
        .btn-custom {
            background: linear-gradient(135deg, #3498DB, #2980B9);
            color: white;
            font-weight: bold;
            padding: 10px;
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
            <a class="navbar-brand fw-bold" href="../index.php">V_Store</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="../index.php">Trang Chủ</a></li>
                    <li class="nav-item"><a class="nav-link" href="list_item.php">Danh Sách Sản Phẩm</a></li>
                    <li class="nav-item"><a class="nav-link active" href="add_item.php">Thêm Sản Phẩm</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- 🔹 Form Thêm Sản Phẩm -->
    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="text-center">Nhập Thông Tin Sản Phẩm</h4>
                <form method="POST">
                    <div class="mb-3">
                        <label class="form-label">Mã Sản Phẩm:</label>
                        <input type="text" name="item_code" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tên Sản Phẩm:</label>
                        <input type="text" name="item_name" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Số Lượng:</label>
                        <input type="number" name="quantity" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hạn Sử Dụng:</label>
                        <input type="date" name="expired_date" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Ghi Chú:</label>
                        <textarea name="note" class="form-control" rows="2"></textarea>
                    </div>
                    <button type="submit" class="btn btn-custom w-100">➕ Thêm Sản Phẩm</button>
                    <a href="list_item.php" class="btn btn-secondary w-100 mt-2">⬅ Quay Lại</a>
                </form>
            </div>
        </div>
    </div>

    <!-- 🔹 Footer -->
    <div class="footer text-center p-3 mt-4">
    Số 113 Trường Chinh - Hai Bà Chưng - Hà Nội | © 2025 V_Store
    </div>

</body>
</html>
