<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $M83->name?></title>
</head>
<body>
    <h1><?= $M83->name?></h1>
    <p><?= $M83->bio?></p>
    <img style="width: 500px" src="<?= $M83->image?>" alt="<?= $M83->name?>">
    <ul>
        <?php
foreach($M83->albums as $album) {
    echo "<li>{$album->name} - Length: {$album->calculateLength()}</li><ul>";

    foreach($album->songs as $song) {
        echo "<li>{$song->name}</li>";
    }
    echo "</ul>";
}
?>
    </ul>
</body>
</html>