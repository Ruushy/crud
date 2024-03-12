
<?php

include 'connection.php';

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $moblie=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "insert into `crudopration`(name,email,mobile,password)
    values('$name','$email','$moblie','$password')";
    $result = mysqli_query($conn,$sql);
    if($result){
        echo "inserted succesfully";
    }
    else{
        echo "sabr";
    }
}
?>



<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  
</head>
<body>
    <div class="container my-5">
    <form method="post">
            <div class="mb-3">
              <label class="form-label">Name</label>
              <input type="text" class="form-control" placeholder="enter your name" required name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" placeholder="enter your email" required name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" placeholder="enter your phone number" required name="mobile">
            </div>
            <div class="mb-3">
                <label class="form-label">password</label>
                <input type="password" class="form-control" placeholder="enter your password" required name="password">
             </div>
        
            <button type="submit" class="btn btn-success" name="submit">register</button>
          </form>
       
    </div>
</body>
</html>