<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherlock Holmes Book</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php
    include 'menu.php';
    $name = 'Sherlock Holmes';
    echo "<h1>$name</h1>";
    $release = 'October 14, 1892';
    echo "<h2>$release</h2>";
    $author = "Sir Arthur Conan Doyle";
    echo "<h2>$author</h2>";
    ?>
    <img src="cover.jpg">
</body>

</html>