<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <!-- First option -->

    <div class="Drinks">
        <h1>Recommended dirnks</h1>

        <?php 
            $drinks = [
                "Cola",
                "Tea",
                "Water"
            ];
        ?>

        <ul>
            <?php
                foreach($drinks as $drink){
                    echo ("<li>" . $drink . "</li>");
                }
            ?>
        </ul>
    </div>

    <!-- Second option -->

    <div class="colors">
            <h2>List of my favorite colors</h2>

            <?php
                $colors = ["Green","Black","Blue","White"]
            ?>

            <ul>
                <?php foreach($colors as $color) : ?>
                    <li><?= $color ?></li>
                <?php endforeach; ?>
            </ul>
    </div>
</body>
</html>