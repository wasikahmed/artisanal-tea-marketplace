<!DOCTYPE html>
<html>
<head>
    <title>Create Seller</title>
</head>
<body>
    <h1>Create Seller</h1>
    <form method="POST" action="/sellers/create">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" name="phone" required><br>

        <label for="storeName">Store Name:</label>
        <input type="text" name="storeName" required><br>

        <label for="address">Address:</label>
        <textarea name="address" required></textarea><br>

        <button type="submit">Create Seller</button>
    </form>
</body>
</html>
