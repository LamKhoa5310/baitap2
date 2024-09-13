<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Bài tập </title>
</head>
<body>
<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL để thêm dữ liệu vào bảng
$sql = "INSERT INTO ten_bang (cot1, cot2) VALUES ('gia_tri1', 'gia_tri2')";

if (mysqli_query($conn, $sql)) {
    echo "Thêm dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>
<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL để cập nhật dữ liệu
$sql = "UPDATE ten_bang SET cot1='gia_tri_moi' WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Cập nhật dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>

<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL để xóa dữ liệu
$sql = "DELETE FROM ten_bang WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Xóa dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
}

// Đóng kết nối
mysqli_close($conn);
?>
<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

// Tạo kết nối
$conn = mysqli_connect($servername, $username, $password, $database);

// Kiểm tra kết nối
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// SQL để hiển thị dữ liệu
$sql = "SELECT cot1, cot2 FROM ten_bang";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // Lặp qua và hiển thị dữ liệu
    while($row = mysqli_fetch_assoc($result)) {
        echo "cot1: " . $row["cot1"] . " - cot2: " . $row["cot2"] . "<br>";
    }
} else {
    echo "Không có dữ liệu";
}

// Đóng kết nối
mysqli_close($conn);
?>

<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // Thiết lập chế độ lỗi PDO
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh SQL để thêm dữ liệu
    $sql = "INSERT INTO ten_bang (cot1, cot2) VALUES (:gia_tri1, :gia_tri2)";
    $stmt = $conn->prepare($sql);

    // Ràng buộc các tham số
    $stmt->bindParam(':gia_tri1', $gia_tri1);
    $stmt->bindParam(':gia_tri2', $gia_tri2);

    // Gán giá trị cho các tham số
    $gia_tri1 = "giá trị 1";
    $gia_tri2 = "giá trị 2";

    // Thực thi câu lệnh
    $stmt->execute();
    echo "Thêm dữ liệu thành công";
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>

<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh SQL để cập nhật dữ liệu
    $sql = "UPDATE ten_bang SET cot1 = :gia_tri_moi WHERE id = :id";
    $stmt = $conn->prepare($sql);

    // Ràng buộc các tham số
    $stmt->bindParam(':gia_tri_moi', $gia_tri_moi);
    $stmt->bindParam(':id', $id);

    // Gán giá trị cho các tham số
    $gia_tri_moi = "giá trị mới";
    $id = 1;

    // Thực thi câu lệnh
    $stmt->execute();
    echo "Cập nhật dữ liệu thành công";
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>

<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh SQL để xóa dữ liệu
    $sql = "DELETE FROM ten_bang WHERE id = :id";
    $stmt = $conn->prepare($sql);

    // Ràng buộc tham số
    $stmt->bindParam(':id', $id);

    // Gán giá trị cho tham số
    $id = 1;

    // Thực thi câu lệnh
    $stmt->execute();
    echo "Xóa dữ liệu thành công";
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>

<?php
$servername = "localhost";
$database = "databasename";
$username = "username";
$password = "password";

try {
    // Tạo kết nối PDO
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Câu lệnh SQL để hiển thị dữ liệu
    $sql = "SELECT cot1, cot2 FROM ten_bang";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    // Đặt chế độ fetch dạng associative array
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
    
    // Lặp qua và hiển thị dữ liệu
    foreach($stmt->fetchAll() as $row) {
        echo "cot1: " . $row['cot1'] . " - cot2: " . $row['cot2'] . "<br>";
    }
} catch(PDOException $e) {
    echo "Lỗi: " . $e->getMessage();
}

// Đóng kết nối
$conn = null;
?>

</body>
