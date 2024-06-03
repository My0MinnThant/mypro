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
    <h1>Welcome Note Page</h1>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Book Name</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($posts as $post) : ?>
                <tr>
                    <td><?= $post['id']; ?></td>
                    <td><?= $post['name']; ?></td>
                    <td><?= $post['email']; ?></td>
                    <td><a href="/note?id=<?= $post['id']; ?>"><?= $post['body']; ?></a></td>
                </tr>

            <?php endforeach; ?>
        </tbody>
    </table>
    </div>
   
   

</body>
</html>