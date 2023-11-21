<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm Người Dùng</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("https://images.unsplash.com/photo-1460353581641-37baddab0fa2?q=80&w=2671&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); 
            /* Change background here */
            background-size: cover;
        }
        #add-form{
          background-image: url("https://images.unsplash.com/photo-1587563871167-1ee9c731aefb?q=80&w=2631&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D"); 
            /* Change background here */
            background-size: cover;
            background-position: center;
            width: max-content;
          border: 3px solid #000;
          padding: 5%;
          border-radius: 10px;
          margin: auto;
          margin-top: 50px;
        }
        #haha{
          background-color: aqua;
          padding: 5px;
          width: max-content;
          margin: auto;
         
        }
        #haha th, #haha td {
        padding: 8px; /* Để tạo khoảng cách bên trong mỗi ô */
    }
        #form-them{
         
          padding: 5px;
          border-radius: 10px;
        }
        #btn-them{
          margin-left: 50%;
          transform: translateX(-50%);
        }
        
    </style>
</head>
<body >
<a href="../index.php"><button type="button" class="btn btn-secondary">Back to Hometown</button></a>
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
  echo "<div  id='haha'>";
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
    echo "</div>";
} else {
    echo "Không có dữ liệu.";
}
// Đóng kết nối
$conn = null;
?>
<form style="" id="add-form" method = "POST" action="../index.php?act=updateuser">
  <div style="">
  <h1  id="form-them">Form update user</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input  name ="user_id" type="text" class="form-control" id="user_id" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input  name ="name" type="text" class="form-control" id="name"  aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input  name ="email" type="email" class="form-control" id="email">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Phone</label>
    <input  name ="phone" type="number" class="form-control" id="phone" placeholder="Chỉ nhập số">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Address</label>
    <input  name ="address" type="text" class="form-control" id="address">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input  name ="password" type="password" class="form-control" id="password">
  </div>
  <!-- <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Role ID</label>
    <input  name ="roldID" type="password" class="form-control" id="roldID">
  </div> -->
  
  <button type="submit" class="btn btn-secondary" onclick="validateForm(event)" id="btn-them" name="act-update">Update</button>
  
  </div>
</form>

</body>
</html>
