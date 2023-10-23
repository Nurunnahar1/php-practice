

<?php include_once('header.php') ; ?>

<?php
if(isset($_POST['forml'])){
    try {
        if($_POST['firstName']==''){
            throw new Exception('First name is required');
        }
        if($_POST['lastName']==''){
            throw new Exception('Last name is required');
        }
        if($_POST['email']==''){
            throw new Exception('Email is required');
        }
        if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
            throw new Exception('Email is required');
        }
        if($_POST['phone']==''){
            throw new Exception('Phone is required');
        }
        if($_POST['password']=='' || $_POST['retype_password']==''){
            throw new Exception('Password is required');
        }
        if($_POST['password'] != $_POST['retype_password']==''){
            throw new Exception('Password is required');
        }

        $success_message = 'Registration is completed. An email is send to your email address. Please check that and verify the registration.';

    } catch (Exception $e) {
        $error_message= $e->getMessage();
    }
}
?>
<h2 class="mb_10">Registration</h2>
<?php 
if(isset($error_message)){
    echo '<div class="error">';
    echo $error_message;
    echo '</div>';
}
if(isset($success_message)){
    echo '<div class="success">';
    echo $success_message;
    echo '</div>';
}
?>
<form action="" method="post">
    <table class="t2">
        <tr>
            <td>First Name</td>
            <td><input type="text" name="firstName" autocomplete="off" value="<?php if(isset($_POST['firstName'])) {echo $_POST['firstName']; } ?>"></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><input type="text" name="lastName" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><input type="text" name="phone" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Password</td>
            <td><input type="password" name="password" autocomplete="off"></td>
        </tr>
        <tr>
            <td>Retype Password</td>
            <td><input type="password" name="retype_password" autocomplete="off"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Submit" name="form1"></td>
        </tr>
    </table>
</form>
<?php include_once('footer.php') ; ?>