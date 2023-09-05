<?php

class MyDB extends SQLite3

{

    function __construct()

    {

        $this->open('files/database.db');

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

<img src='media/<?= $row['image'] ?>'>

<h1 class='title'><?=$row['title']?></h1>

<div class='desc'><?=$row['desc']?></div>

</project>

</div>
    <?php
}
$db->close();
?>