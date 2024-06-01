<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>PayMaya</title>
    <link rel="stylesheet" href="../css/paymaya_payment_style.css" />
</head>

<body>
    <div id="paymaya">
        <div class="container">
            <div class="paymaya-form">
                <div class="paymaya-logo">
                    <h1>PayMaya</h1>
                </div>
                <form action="?action=paymaya">
                    <br>
                    <label class="login-note">Login to your PayMaya Account</label>
                    <br />
                    <br />
                    <label class="input-label">Email or Mobile No.</label>
                    <br />
                    <input type="text" class="paymaya-input-fields" placeholder="Enter Email or Mobile No." />
                    <br />
                    <label class="input-label">Enter amount</label>
                    <br />
                    <input type="text" class="paymaya-input-fields" placeholder="Enter Amount" />
                    <br />
                    <label class="input-label">Password:</label>
                    <br />
                    <input type="password" class="paymaya-input-fields" placeholder="Password" />
                    <br />
                    <button class="paymaya-login-btn">Login</button>
                    <div class="back-btn">
                        <a href="?action=payment">
                            < Go Back</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>