<?php
if (isset($_POST['act-add'])) {
    // Nhận dữ liệu từ form
        $username = $_POST["name"];
        $password = $_POST["password"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $phone = $_POST["phone"];
        // Kết nối đến cơ sở dữ liệu
        
 try {
        $dsn = 'mysql:host=localhost;dbname=giay';
        $username_db = 'root';
        $password_db = '123456';//option
    $db = new PDO($dsn, $username_db, $password_db);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Thêm dữ liệu vào cơ sở dữ liệu
    $sql = "INSERT INTO user (
      fullname,	
      email,	
      phone_number,	
      address,	
      password_hash) VALUES (:username, :email,:phone,:address,:password)";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':phone', $phone);
    $stmt->bindParam(':address', $address);
    $stmt->bindParam(':password', $password);
    $stmt->execute();

    echo "Người dùng đã được thêm thành công.";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
}
if (isset($_POST['act-delete'])) {
    // Nhận dữ liệu từ form hoặc từ nơi khác (tùy thuộc vào cách bạn thiết kế form và xử lý dữ liệu)
    $userIdToDelete = $_POST["userID"]; // Giả sử có một trường user_id để xác định người dùng cần xóa

    // Kết nối đến cơ sở dữ liệu
    $dsn = 'mysql:host=localhost;dbname=giay';
    $username_db = 'root';
    $password_db = '123456'; // Thay đổi nếu cần

    try {
        $db = new PDO($dsn, $username_db, $password_db);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Thực hiện câu lệnh DELETE
        $sql = "DELETE FROM user WHERE user_id = :userIdToDelete";
        $stmt = $db->prepare($sql);
        $stmt->bindParam(':userIdToDelete', $userIdToDelete, PDO::PARAM_INT);

        $stmt->execute();

        echo "Người dùng đã được xóa thành công.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
if (isset($_POST['act-update'])) {
    // Nhận dữ liệu từ form hoặc từ nơi khác (tùy thuộc vào cách bạn thiết kế form và xử lý dữ liệu)
    $userIdToUpdate = $_POST["user_id"]; // Giả sử có một trường user_id để xác định người dùng cần cập nhật
    $newUsername = $_POST["name"];
    $newPassword = $_POST["password"];
    $newAddress = $_POST["address"];
    $newEmail = $_POST["email"];
    $newPhone = $_POST["phone"];
    // $newRoldID= $_POST["roldID"];

    // Kết nối đến cơ sở dữ liệu
    $dsn = 'mysql:host=localhost;dbname=giay';
    $username_db = 'root';
    $password_db = '123456'; // Thay đổi nếu cần

    try {
        $db = new PDO($dsn, $username_db, $password_db);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        // Thực hiện câu lệnh UPDATE
        $sql = "UPDATE user SET
                fullname = :newUsername,
                email = :newEmail,
                phone_number = :newPhone,
                address = :newAddress,
                password_hash = :newPassword
                -- ,role_id=:newRoldID
                WHERE user_id = :userIdToUpdate";

        $stmt = $db->prepare($sql);
        $stmt->bindParam(':userIdToUpdate', $userIdToUpdate, PDO::PARAM_INT);
        $stmt->bindParam(':newUsername', $newUsername);
        $stmt->bindParam(':newEmail', $newEmail);
        $stmt->bindParam(':newPhone', $newPhone);
        $stmt->bindParam(':newAddress', $newAddress);
        $stmt->bindParam(':newPassword', $newPassword);

        $stmt->execute();

        echo "Người dùng đã được cập nhật thành công.";
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}
?>





