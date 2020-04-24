<?php
//connect to db
$mysqli = new mysqli('localhost','a3001325_a30013256','Toiohomai1234', 'a3001325_SCP_DATABASE') or die(mysqli_error($mysqli));

//Select data from db
$resultSet = $mysqli->query("SELECT `itemNo`, `id` FROM `SCPTable`");

//selecy data from db
if(isset($_POST['scpFile'])) 
{
    $i = $_POST['scpFile'];
    $result = $mysqli->query("SELECT * FROM `SCPTable` WHERE `id` = $i") or die(mysqli_error($mysqli));
}

//Insert data into db
if(isset($_POST['itemNo']))
{
    $itemNo = $_POST['itemNo'];
    $objectClass = $_POST['objectClass'];
    $image = $_POST['image'];
    $SCP = $_POST['SCP'];
    $description = $_POST['description'];

    $sql = "insert into SCPTable(itemNo, objectClass, image, SCP, description) values('$itemNo', '$objectClass', '$image', '$SCP','$description')";
    
    if ($mysqli->query($sql) === TRUE) 
    {
        include 'submit.php';
        echo "<h1>Record created successfully</h1> <p><a href='index.php' class='btn btn-primary'>Back to SCP App</a></p>";   
    } 
    else 
    {
        include 'submit.php';
        echo "<h1>Error creating record: {$mysqli->error}</h1><p><a href='add.php' class='btn btn-warning'>Back to form</a></p>";      
    }
}
?>


