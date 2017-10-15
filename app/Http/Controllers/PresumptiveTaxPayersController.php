<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PresumptiveTaxPayersController extends Controller
{
    public $RANGE1 = 937500; //ABOVE 50M BUT LESS THAN 75M
    public $RANGE2 = 1312500; //ABOVE 75M BUT LESS THAN 100M
    public $RANGE3 = 1687500; //ABOVE 100M BUT LESS THAN 125M
    public $RANGE4 = 2062500; //ABOVE 125M BUT LESS THAN 150M

    public $tax_rate = 0.015; //TAX RATE

    public $LOCATION1 = "Kampala City and Divisions of Kampala";
    public $LOCATION2 = "Municipalities";
    public $LOCATION3 = "Towns and Trading Centres";



    //

    function part1($gross_turnover, $credit_tax)
    {

        switch ($gross_turnover) {
            case $gross_turnover > 50000000 && $gross_turnover <= 75000000:
                echo $this->taxReturnsPart1($gross_turnover, $this->RANGE1, $credit_tax);
                //echo "i reached";
                break;
            case $gross_turnover > 75000000 && $gross_turnover <= 100000000:
                echo $this->taxReturnsPart1($gross_turnover, $this->RANGE2, $credit_tax);
                break;
            case $gross_turnover > 100000000 && $gross_turnover <= 125000000:
                echo $this->taxReturnsPart1($gross_turnover, $this->RANGE3, $credit_tax);
                break;
            case $gross_turnover > 125000000 && $gross_turnover <= 150000000:
                echo $this->taxReturnsPart1($gross_turnover, $this->RANGE4, $credit_tax);
                break;
            default:
                echo "You don't qualify for this package range";
        }

    }

    function taxReturnsPart1($gross_turnover, $range, $credit_tax)
    {
        //echo "tax payable";
        $tax_payable = $gross_turnover * $this->tax_rate;
        //echo $tax_payable;
        if ($tax_payable > $range) {
            if ($credit_tax>0)
            return $range-$credit_tax;
        } else {
            if ($credit_tax>0)
            return $tax_payable-$credit_tax;
        }
    }


}
