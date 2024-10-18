<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php 
            $name = "World War";
            $read = true;

            if($read){
                $message = "You have read $name";
            } else { 
                $message = "You have not read $name";
            }
        ?>

        <h1>
            <?php echo $message; ?>
        </h1>

    </div>
</body>
</html>