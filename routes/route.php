<?php

    if(isset($_GET['action'])) {
        $request = $_GET['action'];

        if($request == 'home'){$route = "HomeController@indexAction";}
        if($request == 'login'){$route = "UserController@loginAction";}
        if($request == 'logout'){$route = "UserController@logoutAction";}
        if($request == 'register'){$route = "UserController@registerAction";}

        if($request == 'payment'){$route = "DashboardController@paymentAction";}
        if($request == 'gcash'){$route = "PaymentController@gCashPayment";}
        if($request == 'paymaya'){$route = "PaymentController@paymayaPayment";}
        if($request == 'credit'){$route = "PaymentController@creditCardPayment";}
    }

?>