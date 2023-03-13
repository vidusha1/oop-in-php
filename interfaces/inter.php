<?php

// Interface
interface PaymentInterface{
    public function pay_now();
}

class Paypal implements PaymentInterface{
    public function log_in_first(){}
    public function pay_now(){}
    public function payment_process(){
        $this->log_in_first();
        $this->pay_now();
    }
}

class Visa implements PaymentInterface{
    public function pay_now(){}    
    public function payment_process(){
        $this->pay_now();
    }
}

class Cash implements PaymentInterface{
    public function pay_now(){}
    public function payment_process(){
        $this->pay_now();
    }
}

class BuyProduct{
    public function pay(PaymentInterface $payment_type){
        $payment_type->payment_process();
    }
}

$payment_type = new Cash();
$buy_product = new BuyProduct();
$buy_product->pay($payment_type);


?>