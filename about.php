<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Author</title>
    <link rel="stylesheet" href="form.css">
</head>

<body>
    <?php include 'menu.php'; ?>
    <h1>Sherlock Holmes</h1>

    <p>
        <?php
        $about = "In general the stories in The Adventures of Sherlock Holmes identify, and try to correct, social injustices. Holmes is portrayed as offering a new, fairer sense of justice. The stories were well received, and boosted the subscriptions figures of The Strand Magazine, prompting Doyle to be able to demand more money for his next set of stories. The first story, 'A Scandal in Bohemia', includes the character of Irene Adler, who, despite being featured only within this one story by Doyle, is a prominent character in modern Sherlock Holmes adaptations, generally as a love interest for Holmes. Doyle included four of the twelve stories from this collection in his twelve favourite Sherlock Holmes stories, picking 'The Adventure of the Speckled Band' as his overall favourite.";
        echo "<p>$about</p>";
        ?>
    </p>
    <img src="cover.jpg">

</body>

</html>