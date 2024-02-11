<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kesar Penda</title>
    <style>
        /* Add your custom CSS styles here */
        .card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 20px;
            width: 300px;
            margin: 0 auto;
            background-color: #f9f9f9;
        }
        .form-group {
            margin-bottom: 15px;
        }
        label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <h1>Kesar Penda</h1>
    <div class="card">
        <p>Kesar Penda is made using the following ingredients and steps:</p>
        <p><strong>Ingredients:</strong></p>
        <ul>
            <li>Milk solids (khoya)</li>
            <li>Sugar</li>
            <li>Saffron (kesar)</li>
            <li>Cardamom powder</li>
        </ul>
        <p><strong>Method:</strong></p>
        <ul>
            <li>Prepare khoya by cooking milk until it thickens.</li>
            <li>Mix khoya with sugar, saffron, and cardamom powder.</li>
            <li>Cook until the mixture thickens and leaves the sides of the pan.</li>
            <li>Shape the mixture into small round balls and flatten them.</li>
            <li>Let them cool and enjoy your Kesar Pendas!</li>
        </ul>
        <form action="payment.php" method="POST">
            <div class="form-group">
                <label for="quantity">Select Quantity:</label>
                <select name="quantity" id="quantity">
                    <option value="100">100g</option>
                    <option value="150">150g</option>
                    <option value="200">200g</option>
                    <!-- Add more options as needed -->
                </select>
            </div>
            <input type="submit" value="Order Now">
        </form>
    </div>
</body>
</html>
