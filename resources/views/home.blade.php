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
            <form method="post" action="{{route('captures.submit')}}" >
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="start-stock">Cost of monthly purchased stock</label>
                    <input type="text" class="form-control"
                    id="start-stock" name="price_of_initial_stock" placeholder="Cost of monthly purchased stock">
                </div>
                <div class="form-group">
                    <label for="new-stock">Cost of remaining stock</label>
                    <input type="text" class="form-control"
                    id="new stock" name="price_of_new_stock" placeholder="Cost of remaining stock">
                </div>

                <button type="submit" class="btn btn-default">Calculate</button>
            </form>
        </div>
        <!----->
    </div>

@endsection




