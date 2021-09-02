<html>

<head>
    <style>
        html {
            font-family: Arial;
            display: inline-block;
            margin: 0px auto;
            text-align: center;
        }

        body {
            background-color: burlywood;
        }

        h1 {
            color: blue;
        }

        h2 {
            color:blueviolet
        }

        a {
            color:blueviolet
        }

    </style>
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
        <li><a href="about.php">About</a></li>
    </h2>
    <h2>
        <li><a href="author.php">Author Biodata</a></li>
    </h2>
    <img src="cover.jpg">

</body>

</html>