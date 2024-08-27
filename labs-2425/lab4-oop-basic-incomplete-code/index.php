<?php

require "Profile.php";

$profile = new Profile(
    "Santos",
    "Mark Jerome",
    "B."
);

$profile->setEmail('santos.markjerome@auf.edu.ph');
$profile->setAddress('Los Angeles, California');

// TO DO
$profile->setFavoriteQuote('Wake up to reality! Nothing ever goes as planned in this accursed world. The longer you live, the more you realize that the only things that truly exist in this reality are merely pain. suffering and futility. Listen, everywhere you look in this world, wherever there is light, there will always be shadows to be found as well. As long as there is a concept of victors, the vanquished will also exist. The selfish intent of wanting to preserve peace, initiates war. and hatred is born in order to protect love. There are nexuses causal relationships that cannot be separated. ')

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile: <?php echo $profile->getCompleteName(); ?></title>
    <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css"
    >
</head>
<body>
    <div class="container" style="padding: 50px 0;">
        <h1><kbd>Name: </kbd> <?php echo $profile->getCompleteName(); ?></h1>
        <hr>
        <h2><kbd>Email: </kbd> <?php echo $profile->getEmail();?></h2>
        <hr>
        <h2><kbd>Address: </kbd> <?php echo $profile->getAddress();?></h2>
        <hr>
        <blockquote>
            <?php echo $profile->getFavoriteQuote(); ?>
            <footer>
                <cite>— Madara Uchiha</cite>
            </footer>
        </blockquote>
    </div>
</body>
</html>