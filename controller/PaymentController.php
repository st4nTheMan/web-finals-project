<?php

    class PaymentController {
        public $model;

        public function gCashPayment() {
            require('../view/gcash-payment.php');
        }

        public function paymayaPayment() {
            require('../view/paymaya-payment.php');
        }

        public function creditCardPayment() {
            require('../view/credit-card-payment.php');
        }
    }

?>