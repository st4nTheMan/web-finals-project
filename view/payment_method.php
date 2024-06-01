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
                        <div class="user-payment-option">
                            <a href="?action=gcash">G-Cash</a>
                            
                            <button class="btn">PayMaya</button>
                            <button class="btn">Credit Card</button>
                            <div class="back-btn">
                                <a href="?action=login">< Go Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>

</html>