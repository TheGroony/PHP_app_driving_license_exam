<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP aplikace - test</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<main>
    <?php
    require_once "test.php";
    // Vytvoří se test na základě instance jeho třídy
    $test = new Test();
    // Zobrazí se na stránce
    $test->start();
    ?>
</main>
</body>
</html>