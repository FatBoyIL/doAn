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
<form style="width: 500px;position: absolute;left: 50%;top: 50%;transform: translate(-50%,-50%);border: 3px solid #000;padding: 10px;border-radius: 10px;" id="add-form" method = "POST" action="../index.php?act=delus">
  <div style="width: 300px;margin: auto;">
  <h1  id="form-them">Form delete user</h1>
    <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User id</label>
    <input  name ="userID" type="text" class="form-control" id="userID" aria-describedby="emailHelp">
  
  <button type="submit" class="btn btn-secondary" id="btn-them" name="act-delete">Delete</button>
  
  </div>
</form>


</body>
</html>
