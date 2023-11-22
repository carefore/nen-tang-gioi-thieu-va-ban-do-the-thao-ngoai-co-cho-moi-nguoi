// Đoạn code JavaScript có thể được thêm vào nếu cần thêm chức năng
// Ví dụ: kiểm tra độ hợp lệ của dữ liệu trước khi submit form
<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost"; // Thay đổi tùy theo cấu hình của bạn
$username = "username"; // Thay đổi thành username của bạn
$password = "password"; // Thay đổi thành password của bạn
$dbname = "ten_co_so_du_lieu"; // Thay đổi thành tên cơ sở dữ liệu của bạn

// Tạo kết nối đến MySQL
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];

// SQL để chèn dữ liệu vào cơ sở dữ liệu
$sql = "INSERT INTO products (productName, productDescription, productPrice) VALUES ('$productName', '$productDescription', '$productPrice')";

if ($conn->query($sql) === TRUE) {
    echo "Thêm sản phẩm thành công!";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
