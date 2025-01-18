<!DOCTYPE html>
<html>
<head>
    <link rel="icon" href="/favicon.ico?v=2" type="image/x-icon">
    <title>Sellers List</title>
</head>
<body>
    <h1>Sellers</h1>
    <a href="/sellers/create">Add New Seller</a>
    <table border="1">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Store Name</th>
                <th>Address</th>
                <th>Registration Date</th>
                <th>Last Updated</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($sellers as $seller): ?>
                <tr>
                    <td><?= $seller->id ?></td>
                    <td><?= $seller->name ?></td>
                    <td><?= $seller->email ?></td>
                    <td><?= $seller->phone ?></td>
                    <td><?= $seller->storeName ?></td>
                    <td><?= $seller->address ?></td>
                    <td><?= $seller->registrationDate->format('Y-m-d H:i:s') ?></td>
                    <td><?= $seller->updated_at->format('Y-m-d H:i:s') ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>
