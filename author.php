<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Author Biodata</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <h1>
        <?php include 'menu.php'; ?>
        <p>
        <h1>Sir Arthur Conan Doyle</h1>
        <p>
            <?php
            $author = "Sir Arthur Ignatius Conan Doyle (22 May 1859 – 7 July 1930) was a British writer and physician. He created the character Sherlock Holmes in 1887 for A Study in Scarlet, the first of four novels and fifty-six short stories about Holmes and Dr. Watson. The Sherlock Holmes stories are milestones in the field of crime fiction.";
            echo "<p>$author</p>";
            ?>
        </p>
        <img src="conandoyle.jpg">
</body>

</html>