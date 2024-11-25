<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Flutterwave Payment Form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f5f5f5;
            font-family: 'Arial', sans-serif;
        }

        .payment-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .payment-form {
            background-color: #0A0E27;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 450px;
        }

        .payment-form h2 {
            color: #FB9129;
            text-align: center;
            margin-bottom: 20px;
        }

        .payment-form div {
            font-size: 1.2rem;
            color: #ffffff;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-control {
            border-radius: 30px;
            padding: 12px 20px;
            border: 2px solid #FB9129;
            background-color: #f0f0f0;
        }

        .btn-custom {
            background-color: #FB9129;
            color: #0A0E27;
            border-radius: 30px;
            padding: 12px;
            font-weight: bold;
            font-size: 1.2rem;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-custom:hover {
            background-color: #0A0E27;
            color: #FB9129;
            border: 2px solid #FB9129;
        }

        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 0.9rem;
            color: #ffffff;
        }
    </style>
</head>
<body>

    <div class="container payment-container">
        <div class="payment-form">
            <h2>Payment Summary</h2>
            <div>Your order is </div>
            <form method="POST" action="https://checkout.flutterwave.com/v3/hosted/pay">
                <input type="hidden" name="public_key" value="FLWPUBK_TEST-02b9b5fc6406bd4a41c3ff141cc45e93-X" />
                <input type="hidden" name="customer[email]" value="test@mailnator.com" />
                <input type="hidden" name="customer[name]" value="Ayomide Jimi-Oni" />
                <input type="hidden" name="tx_ref" value="txref-81123" />
                <input type="hidden" name="amount" value="2000" />
                <input type="hidden" name="currency" value="NGN" />
                <input type="hidden" name="meta[source]" value="docs-html-test" />
                <button type="submit" class="btn btn-custom" id="start-payment-button">Pay Now</button>
            </form>
            <div class="footer">Powered by Flutterwave</div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
