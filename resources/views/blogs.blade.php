<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="/css/app.css">
</head>
<body>
<?php foreach($arr as $a): ?>
    <h1><a href="route1/<?= $a->slug; ?>"><?= $a->title; ?></a></h1>
    <div>
        <p><?= $a->date; ?></p>
        <p><?= $a->intro; ?></p>
<?php endforeach; ?>
</body>
</html>