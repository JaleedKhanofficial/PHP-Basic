<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Recommended Programmes</h1>
    <?php

    $books = [
        [
            "title" => "The Silent Patient",
            "author" => "Alex Michaelides",
            "publish_date" => "2019",
            "genre" => "Psychological Thriller"
        ],
        [
            "title" => "Atomic Habits",
            "author" => "James Clear",
            "publish_date" => "2018",
            "genre" => "Self-help"
        ],
        [
            "title" => "Dune",
            "author" => "Frank Herbert",
            "publish_date" => "1965",
            "genre" => "Science Fiction"
        ],
        [
            "title" => "To Kill a Mockingbird",
            "author" => "Harper Lee",
            "publish_date" => "1960",
            "genre" => "Classic Literature"
        ],
        [
            "title" => "Atomic Habits",
            "author" => "James Clear",
            "publish_date" => "1988",
            "genre" => "Adventure, Philosophy"
        ],
];

// You can use the below function just change the name of the filter(array_filter)
/*
function filter($items, $fn){
    $filteredItem = [];
    foreach($items as $item){
        if ($fn($item)){
            $filteredItem[] = $item ;
        }
    }
    return $filteredItem;
}
*/


$filteredBooks = array_filter($books , function($book){
    return $book['publish_date'] <= 2018;
})






?>
    <ul>
        <?php foreach($filteredBooks as $book): ?>
                <li>
                    <a href="<?= $book['publish_date'] ?>">
                    <?= $book['title']; ?> (<?= $book['publish_date']?>) - BY <?= $book['author'] ?></a>
                </li>
                <?php endforeach; ?>
    </ul>
</body>
</html>