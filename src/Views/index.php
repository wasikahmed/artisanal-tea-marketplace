<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon">
    <title>Artisanal Tea Marketplace</title>
</head>
<body>
    <h1>Welcome to Artisanal Tea Marketplace!</h1>

    <ul>
        <?php foreach ($journals as $journal) : ?>
            <li><?= $journal->name ?> (<?= $journal->publishYear ?>)</li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
