<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Throwing Exeptions in a function</title>
    <?php include_once("../includes/styles.php"); ?>
</head>

<body>
    <h1>Throwing Exeptions in a function</h1>
    <a href="/">Home</a>

    <div>
        <?php
            function divide ($a, $b){
                if ($b == 0) {
                    throw new InvalidArgumentException("Cannot divide by zero");
                }

                return $a / $b;
            }

            try{
                echo divide(10,0);
            } catch (InvalidArgumentException $ex) { //catch(Exception $ex) will also work because it's the base class
                echo "Error: " . $ex->getMessage();
            }
        ?>
    </div>

</body>
</html>