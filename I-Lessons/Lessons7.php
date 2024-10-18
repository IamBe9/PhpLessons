<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="Drinks">

        <?php 
            $drinks = [
                "Cola",
                "Tea",
                "Water"
            ];
        ?>

        <p><?= $drinks[0] ?></p>

    </div>

    <div class="Books">
        <h2>Library Books</h2>
        <?php 
            $books = [
                [
                    'name' => 'Animal Farm',
                    'author' => 'George Orwell',
                    'releaseYear' => '1945',
                    'URL' => 'http://example.com'
                ],
                [
                    'name' => '1984',
                    'author' => 'George Orwell',
                    'releaseYear' => '1949',
                    'URL' => 'http://example.com'
                ]
            ]
        ?>

        <ul>
            <?php foreach($books as $book) : ?>
                <a href="<?php echo($book['URL']) ?>">
                    <li><?php echo($book['name'] ."<br>". $book['author'])?></li>
                </a>
            <?php endforeach; ?>
        </ul>
    </div>

</body>
</html>