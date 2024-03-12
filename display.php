
<?php
include 'connection.php';
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
        <button class="btn btn-primary my-5">
            <a href="user.php" class="text-light text-decoration-none">Add user</a>
        </button>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">id</th>
                <th scope="col">name</th>
                <th scope="col">email</th>
                <th scope="col">phone number</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>

                <?php
                $sql = "select * from `crudopration`";
                $result = mysqli_query($conn,$sql);
                if($result){
                    if (mysqli_num_rows($result) > 0) {

                    while($row=mysqli_fetch_assoc($result)) {
                        
                        $id=$row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $moblie = $row['mobile'];
                        echo '
                        <tr>
                        <th scope="row">'.$id.'</th>
                        <td>'.$name.'</td>
                        <td>'.$email.'</td>
                        <td>'.$moblie.'</td>
                        <td>
                         <button type="submit" class="btn btn-warning"><a href="update.php?updateid='.$id.'" class="text-decoration-none text-dark">update</a></button>
                         <button type="button" class="btn btn-danger"><a href="delete.php?deleteid='.$id.'" class="text-decoration-none text-light">delete</a></button>
                        
                        </td>
                      </tr>
                        ';
                    }
                    }
                }
                
                ?>
                
              <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
              </tr> -->
             
            </tbody>
          </table>
    </div>
</body>
</html>