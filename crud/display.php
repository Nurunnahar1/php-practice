<?php include('connect.php');
session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Operation</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet"  >

    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
 
</head>

<body>
    <div class="container">
        <button class="btn btn-primary my-5"><a href="user.php" class="text-light">Add user</a></button>
        <table class="table   table-striped" id="myTable">
            <thead class="table-dark">
                <tr>
                    <th scope="col">Sl No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>

            <?php 
                $sql="SELECT * FROM `crud`";
                 $result = mysqli_query($connect, $sql);
                //  if($result){
                //     header("location:create.php");
                //  }
                //  else{
                //     echo "Something went wrong";
                //  }
                if ($result) {
                    // $_SESSION['status'] ='Data inserted successfully'; 
                    // header("location:display.php");
      
                        while($row = mysqli_fetch_assoc($result)){
                            $id=$row["id"];
                            $name=$row["name"];
                            $email=$row["email"];
                            $mobile=$row["mobile"];
                            $password=$row["password"];
    
                             echo '
                             <tr>
                             <th scope="row">'.$id.'</th>
                             <td>'.$name.'</td>
                             <td>'.$email.'</td>
                             <td>'.$mobile.'</td>
                             <td>'.$password.'</td>
                             <td>
                             <button class="btn btn-primary "><a href="update.php?updateid='.$id.'" class="text-light">Update</a></button>
                             <button class="btn btn-primary "><a href="delete.php?deleteid='.$id.'" class="text-light">Delete</a></button>
                             </td>
                             </tr>
                             ';
    
                
                    }
                } else {
                    echo "Error: " . mysqli_error($connect);
                }
            ?>
       

            </tbody>
         
        </table>
    </div>




    <script src="https://code.jquery.com/jquery-3.7.0.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
    </script>
</body>

</html>