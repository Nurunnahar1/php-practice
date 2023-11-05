<?php 
include("connect.php");
$id = $_GET['updateid'];
$sql = "SELECT * FROM `crud` WHERE id=$id";
$result = mysqli_query($connect, $sql);
$row = mysqli_fetch_array($result);

 $name=$row["name"];
 $email=$row["email"];
 $mobile=$row["mobile"];
 $password=$row["password"];



if(isset($_POST['submit'])){

    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    // $sql = "insert into 'crud' (name, email, mobile, password)  values('$name', '$email', '$mobile','$password')";
    $sql = "UPDATE `crud` SET id=$id , name='$name',email='$email',mobile='$mobile',password='$password' WHERE id='$id' ";

    $result = mysqli_query($connect, $sql);
    if ($result) {
        // echo "Data inserted successfully";
        header("location:display.php");
    } else {
        die("Query error: " . mysqli_error($connect));
    }
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Crud Operation</title>
</head>

<body>
    <div class="container mt-5 ">
        <form method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name"
                    autocomplete="off" value="<?php echo $name; ?>">
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email"
                    autocomplete="off" value="<?php echo $email; ?>">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile Number</label>
                <input type="text" name="mobile" class="form-control" id="mobile" placeholder="Enter your mobile number"
                    autocomplete="off" value="<?php echo $mobile; ?>">
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="text" name="password" class="form-control" id="password"
                    placeholder="Enter your password" autocomplete="off" value="<?php echo $password; ?>">
            </div>
            <button name="submit" type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>


</body>

</html>