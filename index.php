<?php
echo "hello";

class PaymentService {
    public function pay(): string {
        return "Payment successful!";
    }
}

class Customer {
    private $service;

    public function __construct(PaymentService $var) {
        $this->service = $var;
    }

    public function makePayment() {
        // Call the pay function and echo the result
        echo $this->service->pay();
    }
}

// Example usage:
$paymentService = new PaymentService();
$customer = new Customer($paymentService);
$customer->makePayment();
