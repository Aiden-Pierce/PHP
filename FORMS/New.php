<?php
require ('validator.php');


if(isset($_POST['submit']))
{
    $validation = new UserValidation($_POST);
    $errors = $validation->validation();

    //save data to DB
    $conn = mysqli_connect('localhost','root','','FormsDB');

    if(!$conn)
{
    echo 'Connection error: ' . mysqli_connect_error();
}
else{
    echo'Success';
}

if(array_filter($errors))
{
    //echo 'errors in the form';
}
else
{
    $Email = mysqli_real_escape_string($conn, $_POST['Email']);
    $Name = mysqli_real_escape_string($conn, $_POST['Name']);
    $User = mysqli_real_escape_string($conn, $_POST['User']);
    $Address = mysqli_real_escape_string($conn, $_POST['Address']);
    $Contact = mysqli_real_escape_string($conn, $_POST['Contact']);

    //Create sql

    $sql = "INSERT INTO Form(Name,UserName,EmailID,Address,ContactNumber) VALUES ('$Name','$User','$Email','$Address','$Contact')";
     
    //saving and checking DB
    if(mysqli_query($conn,$sql))
    {
        header('Location:result.php');
    }
    else
    {
        echo 'query error: ' . mysqli_error($conn);
    }


   
    //echo'form is valid';
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>DB AND OOPS</title>
    <link rel="stylesheet" type="text/css" href="oops.css"> 
</head>
<body>

   <div class="new">
   <form action="New.php" method="POST">

   <label>Name:</label>
   <input type="text" name="Name" value="<?php echo htmlspecialchars($_POST['Name'] ?? '' )?>">
        <div class="error">
        <?php echo $errors['Name'] ?? ''?>
        </div>

   <label>UserName:</label>
   <input type="text" name="User" value="<?php echo htmlspecialchars($_POST['User'] ?? '' )?>">
        <div class="error">
        <?php echo $errors['User'] ?? ''?>
        </div>

   <label>EmailID:</label>
   <input type="text" name="Email" value="<?php echo htmlspecialchars($_POST['Email'] ?? '' )?>">
        <div class="error">
        <?php echo $errors['Email'] ?? ''?>
        </div>

   <label>Address:</label>
   <input type="text" name="Address" value="<?php echo htmlspecialchars($_POST['Address'] ?? '' )?>">
        <div class="error">
        <?php echo $errors['Address'] ?? ''?>
        </div>

   <label>Contact Number:</label>
   <input type="text" name="Contact" value="<?php echo htmlspecialchars($_POST['Contact'] ?? '' )?>">
        <div class="error">
        <?php echo $errors['Contact'] ?? ''?>
        </div>

   <input type="submit" name="submit" value="submit" class="submit"></input>
   </form>
   </div>


   </form>
   </div>
</body>
</html>