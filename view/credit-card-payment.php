<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Credit Card</title>
    <link rel="stylesheet" href="css/credit_card_payment.css" />
</head>

<body>
    <div id="credit-card">
        <div class="container">
            <div class="credit-card-logo">
                <h1>Credit Card Payment</h1>
            </div>
            <div class="credit-card-form">
                <form action="">
                    <br />
                    <label class="credit-input">Card Holder Name</label>
                    <br />
                    <input class="credit-input-fields" type="text" placeholder="Ex. John Doe" />
                    <br />
                    <label class="credit-input">Card Number</label>
                    <br />
                    <input class="credit-input-fields" type="number" placeholder="1234-5678-9101" />
                    <br />
                    <label class="credit-input">Expiration date</label>
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <label class="credit-input">Security Code</label>
                    <br />
                    <input class="credit-input-fields-date-amount" type="date" />
                    &nbsp; &nbsp; &nbsp;
                    <input class="credit-input-fields-code" type="password" placeholder="・・・・・・・・・・・" />
                    <br />
                    <label class="credit-input"> Enter Amount</label>
                    <br />
                    <input class="credit-input-fields-date-amount" type="text" placeholder="Amount" />
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;
                    <button class="credit-pay-btn">Pay</button>
                    <br />
                    <button class="credit-back-btn">
                        < Go back</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>