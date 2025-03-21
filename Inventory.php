<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory Management</title>
    <link rel="stylesheet" href="Inventory.css">
</head>
<body>

<div class="inventory-form">
    <h2>Inventory Management</h2>
    <form action="SubmitInventory.php" method="POST">
        <label for="itemName">Item Name:</label>
        <input type="text" id="itemName" name="itemName" required>

        <label for="itemCategory">Category:</label>
        <select id="itemCategory" name="itemCategory" required>
            <option value="">Select Category</option>
            <option value="Snack">Snack</option>
            <option value="Beverage">Beverage</option>
            <option value="Ingredient">Ingredient</option>
            <option value="Packaging">Packaging</option>
        </select>

        <label for="quantity">Quantity:</label>
        <input type="number" id="quantity" name="quantity" required min="1">

        <label for="unit">Unit:</label>
        <select id="unit" name="unit" required>
            <option value="Kg">Kg</option>
            <option value="Liters">Liters</option>
            <option value="Pieces">Pieces</option>
        </select>

        <label for="purchaseDate">Purchase Date:</label>
        <input type="date" id="purchaseDate" name="purchaseDate" required>

        <label for="expiryDate">Expiry Date (Optional):</label>
        <input type="date" id="expiryDate" name="expiryDate">

        <label for="price">Price (₹):</label>
        <input type="number" id="price" name="price" required step="0.01">

        <label for="supplier">Supplier Name:</label>
        <input type="text" id="supplier" name="supplier">

        <button type="submit">Add to Inventory</button>
    </form>
</div>

</body>
</html>
