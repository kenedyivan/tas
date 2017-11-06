@extends('layouts.panel_layout')
@section('content')

    <!--banner-->
    <div class="banner">

        <h2>
            <a href="index.html">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Gross return</span>
        </h2>
    </div>
    <!--//banner-->
    <!--grid-->
    <div class="grid-form">
        <div class="grid-form1">
            <h3 id="forms-example" class="">Gross Return</h3>
            <form>
                <div class="form-group">
                    <label for="start-stock">Start stock</label>
                    <input type="text" class="form-control" id="start-stock" placeholder="Start stock">
                </div>
                <div class="form-group">
                    <label for="new-stock">New stock</label>
                    <input type="text" class="form-control" id="new stock" placeholder="New stock">
                </div>

                <button type="submit" class="btn btn-default">Calculate</button>
            </form>
        </div>
        <!----->

@endsection




