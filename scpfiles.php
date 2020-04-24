<!DOCTYPE html>
<html lang="en">
<?php include 'head.php'; ?>
<body class="text-white text-monospace">
    <?php include 'nav.php'; ?>
    <?php include 'data.php'; ?> 
    <div class="container pt-3">       
        <div class="row ml-0">
            <h1>Item#:</h1>                                       
            <form class="form" action="scpfiles.php" method="POST"> 
            <div class="row ml-2"> 
                <div class="col-7 mt-2">           
                    <select class="custom-select" name="scpFile" id="">
                        <?php
                            while($rows = $resultSet->fetch_assoc())
                            {
                                $itemNo = $rows['itemNo'];
                                $idd = $rows['id'];
                                echo "<option value='$idd'>$itemNo</option>";                               
                            }
                        ?>
                    </select>
                </div>
                <div class="col-5"> 
                    <button class="btn btn-primary btn-lg mb-3" type="submit">Select</button>
                </div>
            </div>    
            </form> 
        </div>         
    </div>
    
    <!--Loop to display the selected scpfile-->
    <div class="container text-break">
        <?php while($row = $result->fetch_assoc()): ?>
            <?php if($row['id'] == $i):?>                                                                           
                <br>
                <h2>Object Class: <?php echo $row['objectClass']; ?></h2>
                <br>
                <img class="img-fluid" src="<?php echo $row['image']; ?>">
                <br>
                <h3>Special Containment Procedures: </h3>     
                <p><?php echo $row['SCP']; ?></p> 
                <h3>Description: </h3> 
                <p><?php echo $row['description']; ?></p> 
            <?php endif; ?>
        <?php endwhile; ?>    
    </div>
</body>
</html>