<?php
//database Connection
$conn = mysqli_connect('localhost','root','','FormsDB');

//check connection
if(!$conn)
{
    echo 'Connection error: ' . mysqli_connect_error();
}
//Query for Form
$sql = 'SELECT * FROM Form';

//Make Query

$result = mysqli_query($conn, $sql);

//fetching Result
$form = mysqli_fetch_all($result, MYSQLI_ASSOC);

//free Result from Memory
mysqli_free_result($result);

//Close connection
mysqli_close($conn)

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form validation</title>
    <link rel="stylesheet" type="text/css" href="oops.css"> 
</head>
<body>
    <h4>Form Details</h4>
    <div class="container">
    <div class="row">

        <?php foreach($form as $formdetails)
         { ?>

        <div class="col">

        <div class="card">
        
        <div class="card_d">

        <h6>Name: <?php echo htmlspecialchars($formdetails['Name']); ?></h6>

        <h6>UserName: <?php echo htmlspecialchars($formdetails['UserName']); ?></h6>
        
        <h6>EmailID: <?php echo htmlspecialchars($formdetails['EmailID']); ?></h6>

        <h6>Address: <?php echo htmlspecialchars($formdetails['Address']); ?></h6>

        <h6>Contact Number: <?php echo htmlspecialchars($formdetails['ContactNumber']); ?></h6>
        
        </div>
        </div>
        </div>
        <?php } ?>
    </div>
    </div>
</body>
</html>