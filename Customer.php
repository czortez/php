<?php 
declare (strict_types = 1);
class Customer

/**
 * Status danego Klienta (moze być basic lub premium)
 * 
 * @var string
 */

{
    public $status = 'basic';

    protected $name;

    public $age;

    public function __construct(int $age = 0)
    {
        $this->age = $age;
    }

    public function getDiscount() : int
    {
        return 20;
    }
    public function setName(string $name) : void
    {
        $this->name = $name;
    }
    public function getName() : string
    {
        return $this->name;
    }
    public function askForDiscount()
    {
        echo " Good morning my name is $this->name Can I have a discount", PHP_EOL;
    }
    public static function getClassName() : void
    {
        echo ' Jestem klasą ', get_called_class(), PHP_EOL;
    }
    public function askForInvoice(int $invoiceId) : Invoice
    {
        $invoice = new Invoice();
        $invoice->number = $invoiceId;
        $invoice->date = new DateTime('now');
        $invoice->setCustomer($rudolf);

        return $invoice;

    }
    public $firstName;
    public $lastname;
    public $nip;

}