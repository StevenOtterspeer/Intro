<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.css">
    <link rel="stylesheet" href="/CSS/project.css">
    <title>Projectpagina</title>
</head>
<body>

<nav>
    <ul>
        <li><a href="/index.html" >Home</a></li>
        <li><a class="active">Projectpagina</a></li>
        <li><a href="/About/index.html">About</a></li>
        <li><a href="/Contact/index.php">Contact</a></li>
    </ul>
</nav>
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

while ($row = $ret->fetchArray(SQLITE3_ASSOC)) {

?>

<div class="myC">
  <?php
    echo "<project onclick=\"window.open('{$row['url']}', '_blank')\">";

    // echo "<img src='media/{$row['image']}'>";

    // echo "<div class='title'>{$row['title']}</div>";

    // echo "<div class='desc'>{$row['desc']}</div>";

    // echo "</project>";
    ?>
<img src='/files/<?= $row['image'] ?>'>

<h1 class='title'><?=$row['title']?></h1>

<div class='desc'><?=$row['desc']?></div>
</project>
</div>
    <?php
}
$db->close();
?>

<div class="hero">

    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    <div class="cube"></div>
    </div> 

</body>
</html>