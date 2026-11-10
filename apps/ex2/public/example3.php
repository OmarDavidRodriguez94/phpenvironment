<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Handling thrown exeptions</title>
    <?php include_once("../includes/styles.php"); ?>
</head>
<body>
    <h1>Handling thrown exeptions</h1>
    <a href="/">Home</a>
    <div>
        <?php
            try{
                $date = new DateTime('Invalid Format');

                echo $date->format('Y-m-d');
                
            } catch (Exception $ex) {
                echo "An error occured " . $ex->getMessage();
            }
        ?>
    </div>
</body>
</html>