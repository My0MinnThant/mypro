<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php require 'partials/nav.php'; ?>

    

    <div class="container">
    <h1>Welcome Book-Detail Page</h1>
    <p>
    <a href="/notes">Go Back...</a>
    </p>
    <?php foreach($posts as $post) : ?>
        <h2><?= $post['body']; ?></h2>
        <p><?= $post['description']; ?></p>
        >><span>Written By : <?= $post['name'];  ?></span><<


    <?php endforeach; ?>
    </div>
   
   

</body>
</html>