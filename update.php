<?php
@include 'connection.php';

if(isset($_GET['editid'])) {
    $eid = $_GET['editid'];
    $result = mysqli_query($conn, "SELECT * FROM user WHERE id = '$eid'");
    $row = mysqli_fetch_assoc($result);
}

if(isset($_POST['update'])){
    $eid = $_GET['editid'];

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];

    $sql = "UPDATE user SET fname = '$fname', lname = '$lname', email = '$email' WHERE id = '$eid'";
    $result = mysqli_query($conn, $sql);

    if($result){
        echo "<script>alert('Successful Edit');</script>";
        echo "<script>document.location='admin-page.php'</script>";
    } else {
        echo "<script>alert('Something went wrong')</script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit User</title>
    <link rel="stylesheet" href="projekti.css">
</head>
<body>

    <div class="form-container">
      <form class="form-content" method="POST" action="" >

        <h1>Update user</h1>

        <input type="text" name="fname" placeholder="First name" id="firstName" value="<?php echo $row['fname']; ?>"/>
        <input type="text" name="lname" placeholder="Last name" id="lastName"  value="<?php echo $row['lname']; ?>"/>
        <input type="email" name="email" placeholder="Email" id="signUpEmail" value="<?php echo $row['email']; ?>"/><br>

        <button class="form-btn" name="update" >Update</button>
      </form>
    </div>
</body>
</html>
