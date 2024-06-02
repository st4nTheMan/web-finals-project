<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>G-Cash</title>
    <link rel="stylesheet" href="../css/gcash_payment_style.css" />
</head>

<body>
    <div id="g-cash-payment">
        <div class="container">
            <div class="g-cash-logo">
                <h6>G-Cash</h6>
            </div>
            <div class="form-container">
                <div class="form">
                    <form action="?action=gcash">
                        <br />
                        <label class="amount-lbl">Amount Due</label> &nbsp; &nbsp;
                        <input class="amount-selection" list="amount-to-pay" />
                        <datalist id="amount-to-pay">
                            <option value="1000.00"></option>
                            <option value="700.00"></option>
                            <option value="600.00"></option>
                            <option value="500.00"></option>
                        </datalist>

                        <br />
                        <br />
                        <h5>Login to Pay with G-Cash</h5>
                        <br />
                        <br />
                        <label class="input-mobile-num">Input your mobile number</label>
                        <br />
                        <br />
                        <label class="ph-num">+63 &nbsp;
                            <input class="mobile-number" type="text" placeholder="Mobile Number" /></label>
                        <br />
                        <br />
                        <button class="confirm-btn">Confirm</button>
                        <div class="gcash-back-btn">
                            <div class="back-btn">
                                <a href="?action=payment">
                                    < Go Back</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>