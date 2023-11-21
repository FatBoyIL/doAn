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
<form style="width: 500px;position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);border: 3px solid #000;padding: 10px;border-radius: 10px;" id="add-form" method = "POST" action="../index.php?act=updateuser">
  <div style="width: 300px;margin: auto;">
  <h1  id="form-them">Form thêm user</h1>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Fullname</label>
    <input  name ="name" type="text" class="form-control" id="name"  placeholder="Fullname phải có từ 3 ký tự trở lên" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Email</label>
    <input  name ="email" type="email" class="form-control" id="email">
    <div id="emailHelp" class="form-text">Ví dụ: xxx@gmail.com </div>
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
    <div id="emailHelp" class="form-text">Password bắt buộc phải có trên 6 ký tự</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmPassword">
  </div>
  <button type="submit" class="btn btn-secondary" onclick="validateForm(event)" id="btn-them" name="act-add">Add</button>
  
  </div>
</form>

<script>
    function validateForm(event) {
        // Lấy giá trị từ các trường nhập liệu
        var fullname = document.getElementById("name").value;
        var email = document.getElementById("email").value;
        var phone = document.getElementById("phone").value;
        var address = document.getElementById("address").value;
        var password = document.getElementById("password").value;
        var confirmPassword = document.getElementById("confirmPassword").value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        // Kiểm tra điều kiện (đây là ví dụ, bạn có thể thay đổi theo yêu cầu của bạn)
        if (fullname.length < 3) {
            alert("Tên đăng nhập ít nhất phải có 3 ký tự.");
            event.preventDefault(); // Ngăn chặn form submit
            return;
        }

        else if (password.length < 6) {
            alert("Mật khẩu ít nhất phải có 6 ký tự.");
            event.preventDefault();
            return;
        }
        else if (isNaN(phone)) {
            alert("Số điện thoại phải là một số.");
            event.preventDefault(); // Ngăn chặn form submit
            return;
        }

        else  if (password !== confirmPassword) {
            alert("Mật khẩu nhập lại không khớp.");
            event.preventDefault();
            return;
        }

        // Kiểm tra định dạng email đơn giản (bạn có thể sử dụng biểu thức chính quy phức tạp hơn)
        
        else if (!emailRegex.test(email)) {
            alert("Địa chỉ email không hợp lệ.");
            event.preventDefault();
            return;
        }
        else{
          return 
        }
    }
</script>
</body>
</html>
