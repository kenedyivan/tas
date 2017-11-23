<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capture;
use Illuminate\Support\Facades\Input;

class CapturesController extends Controller
{
    //
    function submitCaptures(Request $request)
    {
        $captures = new Capture();

        if(Input::has('price_of_initial_stock')) $captures->price_of_initial_stock = Input::get('price_of_initial_stock');
        if(Input::has('price_of_new_stock')) $captures->price_of_new_stock = Input::get('price_of_new_stock');
        $captures->user_id = 1;
        $captures->month_id = 1;
        $captures->gross_revenue = $this->gross_revenue(Input::get('price_of_initial_stock'),Input::get('price_of_new_stock'));

        if($captures->save())
        {
            return "submited succesfully";
        }


    }

    function capturePreview(){
        return view('capture_preview');
    }

    function gross_revenue($stock_price, $remaining_stock_price)
    {
        $gross_revenue = $stock_price-$remaining_stock_price;
        return $gross_revenue;
    }

}
