<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sherlock Holmes Book</title>
    <link rel="stylesheet" href="form.php">
</head>

<body>
    <?php
    $name = 'Sherlock Holmes';
    echo "<h1>$name</h1>";
    $release = 'October 14, 1892';
    echo "<h1>$release</h1>";
    $author = "Sir Arthur Conan Doyle";
    echo "<h1>$author</h1>";
    ?>

    <h2>
        <li><a href="about.php">About Author</a></li>
    </h2>
    <h2>
        <li><a href="author.php">Author Biodata</a></li>
    </h2>
    <img src="cover.jpg">
</body>

</html>