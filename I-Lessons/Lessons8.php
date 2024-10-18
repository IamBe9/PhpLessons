<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <div class="Drinks">
        <h1>Drinks</h1>
        <?php 
            $drinks = [
                "Cola",
                "Tea",
                "Water"
            ];
        ?>

        <p><?= $drinks[0] ?></p>

    </div>

    <!-- First option -->

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
                ],
                [
                    'name' => 'Brave New World',
                    'author' => 'Aldous Huxley',
                    'releaseYear' => '1932',
                    'URL' => 'http://example.com'
                ],
                [
                    'name' => 'Fahrenheit 451',
                    'author' => 'Ray Bradbury',
                    'releaseYear' => '1953',
                    'URL' => 'http://example.com'
                ]
            ];


            function  filterByAuthor($books) {

                $filteredBooks = [];

                foreach($books as $book){
                    if($book['author'] === 'George Orwell') {
                        $filteredBooks[] = $book;
                    }
                }

                return $filteredBooks;

            }

        ?>

        <ul>
            <?php foreach(filterByAuthor($books) as $book) : ?>
                <a href="<?php echo($book['URL']) ?>">
                    <li><?php echo($book['name']. " " .  $book['releaseYear'] . " " . "By" . " " . $book['author'])?></li>
                </a>
            <?php endforeach; ?>
        </ul>

    </div>

    <!-- Second option -->

    <div class="Books">
        <h2>Shop</h2>
        <?php 
            $clothes = [
                [
                    'name' => 'T-shirt',
                    'brand' => 'Nike',
                    'size' => 'M',
                    'price' => '25.99',
                    'URL' => 'http://example.com/t-shirt'
                ],
                [
                    'name' => 'Jeans',
                    'brand' => 'Levi\'s',
                    'size' => '32',
                    'price' => '49.99',
                    'URL' => 'http://example.com/jeans'
                ],
                [
                    'name' => 'Jacket',
                    'brand' => 'Adidas',
                    'size' => 'L',
                    'price' => '79.99',
                    'URL' => 'http://example.com/jacket'
                ],
                [
                    'name' => 'Sneakers',
                    'brand' => 'Puma',
                    'size' => '42',
                    'price' => '89.99',
                    'URL' => 'http://example.com/sneakers'
                ]
            ];

            function sortByBrand($clothes, $brand){
                $sortedBrand = [];

                foreach($clothes as $costume){
                    if($costume['brand'] = $brand){
                        $sortedBrand[] = $brand;
                    }
                }

                return $sortedBrand;
            }

        ?>

        <ul>
            <?php foreach(sortByBrand($clothes, 'Puma') as $costume) : ?>
                <a href="<?php echo($costume['URL']) ?>">
                    <li><?php echo($costume['name']. " " .  $costume['price'] . " " . "Brand" . " " . $costume['brand'])?></li>
                </a>
            <?php endforeach; ?>
        </ul>

    </div>

</body>
</html>