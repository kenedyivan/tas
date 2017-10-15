<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NormalTaxPayersController extends Controller
{

    public $RATE1 = 0.1; //BELOW SALARY OF 335000
    public $RATE2 = 0.2; //ABOVE SALARY OF 335000 BUT LESS THAN 410000
    public $RATE3 = 0.3; //ABOVE SALARY OF 410000 BUT LESS THAN 10000000

    function salaryTax($monthly_salary){
        switch ($monthly_salary) {
            case $monthly_salary <= 335000:
                $tax_payable = $monthly_salary * $this->RATE1;
                echo $tax_payable*12;
                //echo "i reached";
                break;
            case $monthly_salary > 335000 && $monthly_salary <= 410000:
                $tax_payable = $monthly_salary * $this->RATE2;
                echo $tax_payable;
                break;
            case $monthly_salary > 410000 && $monthly_salary <= 10000000:
                $tax_payable = $monthly_salary * $this->RATE3;
                echo $tax_payable*12;
                break;
            case $monthly_salary > 10000000:
                $excess_income = $monthly_salary-10000000;
                $int_tax = 10000000 * $this->RATE3;
                $excess_tax = $excess_income * $this->RATE1;
                $tax_payable = $int_tax+$excess_tax;
                echo $tax_payable*12;
                break;
            default:
                echo "You don't qualify for this package range";
        }


    }




}
