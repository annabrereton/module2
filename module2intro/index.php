<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Intro to PHP</title>

    <meta name="description" content="Introduction to PHP">
    <meta name="author" content="Anna Brereton">

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/styles.css">

    <link rel="icon" href="images/favicon.png" sizes="192x192">
    <link rel="shortcut icon" href="images/favicon.png">
    <link rel="apple-touch-icon" href="images/favicon.png">

    <!-- <script defer src="js/index.js"></script> -->
</head>

<body>

<h1>Intro to PHP</h1>

<?php
/*Within HTML, PHP code is enclosed special start and end processing
*instructions that allow you to jump in and out of "PHP mode".
 */

$hour = date('H');
$timeOfDay = '';

if ($hour < '12') {
    $timeOfDay = 'morning';
} elseif ($hour < '18') {
    $timeOfDay = 'afternoon';
} else {
    $timeOfDay = 'evening';
}

echo '<p>Good ' . $timeOfDay . '!</p>';
?>

<p><a href="message.php">Go to our motivation page </a>for a message</p>


</body>
</html>
