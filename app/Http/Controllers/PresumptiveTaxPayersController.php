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


    public $error = "";

  
    public $LOCATION1 = "Kampala City and Divisions of Kampala";
    public $LOCATION2 = "Municipalities";
    public $LOCATION3 = "Towns and Trading Centres";

    /*The amount of tax payable for purposes of Section 4(5)
    where the gross turnover is more than fifty million shillings*/
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


    /*The amount of tax payable for purposes of section 4(5)
    where the gross turnover is less than fifty million shillings*/

    //Kampala city and divisions of Kampala
    function cityAndDivisions($gross_turnover, $business_type)
    {

        echo $this->cityAndDivisionsTaxReturns($gross_turnover, $business_type);

    }

    function cityAndDivisionsTaxReturns($gross_turnover, $business_type)
    {

        define("GENERAL_TRADE", "gt");
        define("CARPENTRY_OR_METAL", "cm");
        define("GARAGES", "g");
        define("HAIR_AND_BEAUTY_SALONS", "hb");
        define("RESTAURANTS", "r");
        define("CLINICS", "c");
        define("DRUG_SHOPS", "ds");

        $tax_payable = null;

        if ($business_type == GENERAL_TRADE) { //General trade

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 500000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 250000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CARPENTRY_OR_METAL) { //Capentry and metal

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 500000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 250000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == GARAGES) {  //Motor vehicle repair

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 550000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 300000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == HAIR_AND_BEAUTY_SALONS) {  //Hair and beauty salons

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 550000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 300000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == RESTAURANTS) {  //Resaurants

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 550000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 300000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CLINICS) {  //Clinics

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 550000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 300000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == DRUG_SHOPS) {  //Drag shops

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 500000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 250000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type != GENERAL_TRADE || CARPENTRY_OR_METAL ||
            GARAGES || HAIR_AND_BEAUTY_SALONS || RESTAURANTS || CLINICS || DRUG_SHOPS
        ) {  //Others

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 200000;

            } else {

                $tax_payable = $this->error;

            }

        }

        return $tax_payable;
    }


    //Municipalities
    function municipalities($gross_turnover, $business_type)
    {

        echo $this->municipalitiesTaxReturns($gross_turnover, $business_type);

    }

    function municipalitiesTaxReturns($gross_turnover, $business_type)
    {

        define("GENERAL_TRADE", "gt");
        define("CARPENTRY_OR_METAL", "cm");
        define("GARAGES", "g");
        define("HAIR_AND_BEAUTY_SALONS", "hb");
        define("RESTAURANTS", "r");
        define("CLINICS", "c");
        define("DRUG_SHOPS", "ds");

        $tax_payable = null;

        if ($business_type == GENERAL_TRADE) { //General trade

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 150000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CARPENTRY_OR_METAL) { //Capentry and metal

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 150000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == GARAGES) {  //Motor vehicle repair

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 200000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == HAIR_AND_BEAUTY_SALONS) {  //Hair and beauty salons

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 550000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 200000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == RESTAURANTS) {  //Resaurants

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 200000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CLINICS) {  //Clinics

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 450000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 200000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == DRUG_SHOPS) {  //Drag shops

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 150000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type != GENERAL_TRADE || CARPENTRY_OR_METAL ||
            GARAGES || HAIR_AND_BEAUTY_SALONS || RESTAURANTS || CLINICS || DRUG_SHOPS
        ) {  //Others

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 400000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 150000;

            } else {

                $tax_payable = $this->error;
            }

        }

        return $tax_payable;
    }

    //End municipalities

    //Towns and trading centers
    function townsAndTradingCenters($gross_turnover, $business_type)
    {

        echo $this->townsAndTradingCentersTaxReturns($gross_turnover, $business_type);

    }

    function townsAndTradingCentersTaxReturns($gross_turnover, $business_type)
    {

        define("GENERAL_TRADE", "gt");
        define("CARPENTRY_OR_METAL", "cm");
        define("GARAGES", "g");
        define("HAIR_AND_BEAUTY_SALONS", "hb");
        define("RESTAURANTS", "r");
        define("CLINICS", "c");
        define("DRUG_SHOPS", "ds");

        $tax_payable = null;

        if ($business_type == GENERAL_TRADE) { //General trade

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 200000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CARPENTRY_OR_METAL) { //Capentry and metal

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 200000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == GARAGES) {  //Motor vehicle repair

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 250000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == HAIR_AND_BEAUTY_SALONS) {  //Hair and beauty salons

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 250000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == RESTAURANTS) {  //Resaurants

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 250000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == CLINICS) {  //Clinics

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 350000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 250000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type == DRUG_SHOPS) {  //Drag shops

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 200000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;

            }

        } elseif ($business_type != GENERAL_TRADE || CARPENTRY_OR_METAL ||
            GARAGES || HAIR_AND_BEAUTY_SALONS || RESTAURANTS || CLINICS || DRUG_SHOPS
        ) {  //Others

            if ($gross_turnover > 35000000 && $gross_turnover <= 50000000) {

                $tax_payable = 300000;

            } elseif ($gross_turnover > 20000000 && $gross_turnover <= 35000000) {

                $tax_payable = 250000;

            } elseif ($gross_turnover > 10000000 && $gross_turnover <= 20000000) {

                $tax_payable = 100000;

            } else {

                $tax_payable = $this->error;
                
            }

        }

        return $tax_payable;
    }

}
