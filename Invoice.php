<?php 
declare (strict_types = 1);

class Invoice
{
    /**
     * Numer Faktury VAT.
     * 
     * @var string
     */
    public $numberInvoice;
    /**
     * Data wystawienia faktury VAT
     * 
     * @var DataTime
     */
    public $data;
    /**
     * Klient, na którego wystawiamy fakturę VAT.
     * 
     * @var Customer
     */
    public $customer;

    public function setCustomer(Customer $customer)
    {
        $this->customer = $customer;
    }
  

}