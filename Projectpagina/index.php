<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/project.css">
    <title>Projectpagina</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="../index.html" >Home</a></li>
        <li><a class="active">Projectpagina</a></li>
        <li><a href="../About/index.html">About</a></li>
        <li><a href="../Contact/index.php">Contact</a></li>
    </ul>
</nav>
<main>
    <h1>Leerjaar 1:</h1>
<?php

class MyDB extends SQLite3

{
    function __construct()
    {
        $this->open('../db/database.db');
    }
}

$sql = <<<EOF

SELECT * from projecten;

EOF;

$db = new MyDB();

$ret = $db->query($sql);
?>
<div class="projects">

<?php
while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {

?>

  <?php
    echo "<div class='project' onclick=\"window.open('{$row['url']}', '_blank')\">";

    // echo "<img src='media/{$row['image']}'>";

    // echo "<div class='title'>{$row['title']}</div>";

    // echo "<div class='desc'>{$row['desc']}</div>";

    // echo "</project>";
    ?>
<img src='../files/<?= $row['image'] ?>'>

<h1 class='title'><?=$row['title']?></h1>

<p class='desc'><?=$row['desc']?></p>
</div>

    <?php
}
$db->close();
?>
</div>
</main>

</body>
</html>