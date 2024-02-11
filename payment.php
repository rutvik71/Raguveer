<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile Money Payment</title>
</head>
<body>
    <h1>Mobile Money Payment</h1>
    <form action="feedback.php" method="POST">
        <label for="phone_number">Enter Mobile Money Number:</label>
        <input type="number" id="phone_number" name="phone_number" min="0" required>
        <br>
        <label for="amount">Amount to Pay:</label>
        <input type="number" id="amount" name="amount" min="0" required>
        <br>
        <label for="feedback">Feedback:</label>
        <textarea id="feedback" name="feedback"></textarea>
        <br>
        <input type="submit" value="Make Payment">
    </form>
</body>
</html>
