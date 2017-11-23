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
            <div class="container" style="margin: 25px auto; width:100%;">
                <table id="example1" class="table table-striped table-bordered dt-responsive nowrap"
                       cellspacing="0" width="100%">
                    <thead>
                    <tr style="color: white; background-color: #538db0;">
                        <td style="color: #0d0d0d">Record No.</td>
                        <td style="color: #0d0d0d">Date Recorded</td>
                        <td style="color: #0d0d0d">Owner</td>
                        <td style="color: #0d0d0d">Month</td>
                        <td style="color: #0d0d0d">Year</td>
                        <td style="color: #0d0d0d">Initial Stock Cost</td>
                        <td style="color: #0d0d0d">Remaining Stock Cost</td>
                        <td style="color: #0d0d0d">Gross Revenue</td>
                        <td style="color: #0d0d0d">Profit Generated</td>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>Record No.</td>
                        <td>Date Recorded</td>
                        <td>Owner</td>
                        <td>Month</td>
                        <td>Year</td>
                        <td>Initial Stock Cost</td>
                        <td>Remaining Stock Cost</td>
                        <td>Gross Revenue</td>
                        <td>Profit Generated</td>
                    </tr>
                    <tr>
                        <td>Michael</td>
                        <td>Bruce</td>
                        <td>Javascript Developer</td>
                        <td>Singapore</td>
                        <td>29</td>
                        <td>2011/06/27</td>
                        <td>$183,000</td>
                        <td>5384</td>
                        <td>m.bruce@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Donna</td>
                        <td>Snider</td>
                        <td>Customer Support</td>
                        <td>New York</td>
                        <td>27</td>
                        <td>2011/01/25</td>
                        <td>$112,000</td>
                        <td>4226</td>
                        <td>d.snider@datatables.net</td>
                    </tr>
                    <tr>
                        <td>Record No.</td>
                        <td>Date Recorded</td>
                        <td>Owner</td>
                        <td>Month</td>
                        <td>Year</td>
                        <td>Initial Stock Cost</td>
                        <td>Remaining Stock Cost</td>
                        <td>Gross Revenue</td>
                        <td>Profit Generated</td>
                    </tr>
                    </tbody>
                </table>

            </div><!--container-->

        </div>
    </div>

@endsection




