<?php  
class Fund{
    private $fund;
    public function __construct($initialFund = 0){
        $this->fund = $initialFund;
    }

    function addFund($money){
        $this->fund += $money;
        
    }

    function deductFund($money){
        $this->fund -= $money;
    }

    function getTotal(){
        echo "Total fund is {$this->fund }\n";
    }
}

$ourFund = new Fund(100);
$ourFund->getTotal();
// $ourFund->addFund(0);
$ourFund->deductFund(50);
$ourFund->getTotal();


$ourFund->addFund(500);
$ourFund->getTotal();

$ourFund->deductFund(0);
$ourFund->getTotal();
?>