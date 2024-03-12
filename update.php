
<?php

include 'connection.php';

$id=$_GET['updateid'];
$sql = "select * from `crudopration`";
$result = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$moblie = $row['mobile'];
$password = $row['password'];

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $moblie=$_POST['mobile'];
    $password=$_POST['password'];

    $sql = "update `crudopration` set name='$name',email='$email',mobile='$moblie',password='$password' where id=$id";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location:display.php');
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
              <input type="text" class="form-control" placeholder="enter your name" required value="<?php echo $name;  ?>"  name="name">
            </div>
            <div class="mb-3">
                <label class="form-label">email</label>
                <input type="email" class="form-control" placeholder="enter your email" value="<?php echo $email;  ?>" required name="email">
            </div>
            <div class="mb-3">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" placeholder="enter your phone number" value="<?php echo $moblie;  ?>" required name="mobile">
            </div>
            
        
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
          </form>
    </div>
</body>
</html>