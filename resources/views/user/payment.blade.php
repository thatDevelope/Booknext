<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Payment Page</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<style>
        /* General styles */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

/* Container for the payment options */
.payment-container {
    background-color: white;
    padding: 20px 40px;
    border-radius: 8px;
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    text-align: center;
    width: 300px;
}

/* Heading style */
h1 {
    font-size: 24px;
    margin-bottom: 20px;
    color: #333;
}

/* Styling for the payment links */
.payment-options {
    display: flex;
    flex-direction: column;
}

.payment-link {
    text-decoration: none;
    font-size: 18px;
    color: black;
    margin: 10px 0;
    padding: 10px;
    border: 2px solid #000;
    border-radius: 5px;
    transition: background-color 0.3s ease, color 0.3s ease;
}

.payment-link:hover {
    background-color: black;
    color: white;
}

    </style>
    <div class="payment-container">
        <h1>Select Your Payment Method</h1>

        <div class="payment-options">
            <a href="" class="payment-link">Pay with Transfer</a>
            <a href="{{ route('flutterwave.index')}}" class="payment-link">Pay with Card</a>
            <a href="/pay-with-ussd" class="payment-link">Pay with USSD</a>
        </div>
    </div>
</body>
</html>
