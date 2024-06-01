<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Payment</title>
    <link rel="stylesheet" href="../css/payment_method_style.css" />
</head>

<body>
    <div id="payment">
        <div class="container">
            <div class="payment-option">
                <form action="action=?payment" method="POST">
                    <h1>Payment Method</h1>
                    <div class="payment-selection">
                        <a href="?action=gcash">G-Cash</a>
                        <a href="?action=paymaya">Paymaya</a>
                        <a href="?action=credit">Credit Card</a>
                    </div>
                    <div class="back-btn">
                        <a href="?action=login">
                            < Go Back</a>
                    </div>
                </form>
            </div>

        </div>
    </div>

</html>