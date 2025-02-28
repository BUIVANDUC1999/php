<?php
include '../config.php';

$sql = "SELECT * FROM item_sale";
$result = $conn->query($sql);

if (!$result) {
    die("Lỗi truy vấn: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Danh sách sản phẩm</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        body { background-color: #f4f7f9; }
        .table th { background-color: #007bff; color: white; }
        .table tbody tr:hover { background-color: #cce5ff; }
        .btn-edit { background-color: #007bff; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; }
        .btn-delete { background-color: #dc3545; color: white; padding: 5px 10px; border-radius: 5px; text-decoration: none; }
        .btn-add { background-color: #28a745; color: white; padding: 10px; border-radius: 5px; text-decoration: none; font-weight: bold; }
    </style>
</head>
<body>
    <div class="container mt-4">
        <h3 class="text-center text-warning">📋 Danh sách sản phẩm</h3>
        <div class="text-end mb-3">
            <a href="add_item.php" class="btn-add">➕ Thêm sản phẩm mới</a>
        </div>
        <table class="table table-bordered text-center">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã SP</th>
                    <th>Tên SP</th>
                    <th>Số Lượng</th>
                    <th>HSD</th>
                    <th>Ghi Chú</th>
                    <th>Hành động</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $result->fetch_assoc()) { ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= htmlspecialchars($row['item_code']) ?></td>
                        <td><?= htmlspecialchars($row['item_name']) ?></td>
                        <td><?= htmlspecialchars($row['quantity']) ?></td>
                        <td><?= date('d/m/Y', strtotime($row['expired_date'])) ?></td>
                        <td><?= htmlspecialchars($row['note']) ?></td>
                        <td>
                            <a href="edit_item.php?id=<?= $row['id'] ?>" class="btn-edit">✏️ Sửa</a>
                            <a href="delete_item.php?id=<?= $row['id'] ?>" class="btn-delete" onclick="return confirm('Bạn có chắc không?')">❌ Xóa</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</body>
</html>
