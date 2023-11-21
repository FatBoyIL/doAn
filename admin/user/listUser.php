<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dữ liệu từ MySQL</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

    <h2>Dữ liệu từ MySQL</h2>
    <div >
<a href="./user/addUser.php"><button>Add</button></a>   
<a href="./user/updateUser.php"><button>Update</button></a>
<a href="./user/deleteUser.php"><button>Delete</button></a>
</div>
<?php
// Thông tin kết nối đến MySQL
$servername = "localhost";
$username = "root";
$password = "123456";//option
$dbname = "giay";

try {
    // Kết nối đến MySQL thông qua PDO
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // Thiết lập chế độ lấy dữ liệu theo mảng kết hợp
    $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    die("Kết nối thất bại: " . $e->getMessage());
}


// Truy vấn dữ liệu từ bảng MySQL
$sql = "SELECT * FROM `user`";
$stmt = $conn->prepare($sql);
$stmt->execute();

// Hiển thị dữ liệu trong bảng HTML
if ($stmt->rowCount() > 0) {
    echo "<table>";
    echo "<tr>
    <th>ID</th>
    <th>Fullname</th>
    <th>Email</th>
    <th>Phone</th>
    <th>Address</th>
    <th>Password Hash</th>
    <th>Role ID</th>
    <th>Create at</th>
    <th>Update at</th>
    <th>Deleted</th>
    </tr>";

    while ($row = $stmt->fetch()) {
        echo "<tr>";
        echo "<td>" . $row["user_id"] . "</td>";
        echo "<td>" . $row["fullname"] . "</td>";
        echo "<td>" . $row["email"] . "</td>";
        echo "<td>" . $row["phone_number"] . "</td>";
        echo "<td>" . $row["address"] . "</td>";
        echo "<td>" . $row["password_hash"] . "</td>";
        echo "<td>" . $row["role_id"] . "</td>";
        echo "<td>" . $row["created_at"] . "</td>";
        echo "<td>" . $row["updated_at"] . "</td>";
        echo "<td>" . $row["deleted"] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "Không có dữ liệu.";
}

// Đóng kết nối
$conn = null;
?>

</body>
</html>