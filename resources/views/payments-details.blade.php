@extends('layouts.main')
@section('contents')
    <div class="starter-template">
        <div class="row">
            <table class="table table-striped table-condensed table-responsive" style="margin-top: -28px; margin-left: -12px; margin-right: 10px;">
                <thead style="background-color: #435970; color: white; font-size: 12px; font-weight: bold">
                <tr>
                    <th></th>
                    <th>Order Id</th>
                    <th>Transaction Id</th>
                    <th>Payment Id</th>
                    <th>Message</th>
                    <th>Amount</th>
                    <th>Billing Name</th>
                    <th>Billing Address</th>
                    <th>Billing City</th>
                    <th>Billing State</th>
                    <th>Billing Ward</th>
                    <th>Billing Country</th>
                    <th>Billing Phone</th>
                    <th>Billing Email</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td><a href="#">Booking</a></td>
                    <td>ECO90</td>
                    <td>RY783</td>
                    <td>AS475</td>
                    <td>Transaction Successful</td>
                    <td>1,500.00</td>
                    <td>John</td>
                    <td>slp 12 Kinondoni</td>
                    <td>Dar es salaam</td>
                    <td>Magomeni</td>
                    <td>Mapipa</td>
                    <td>Tanzania</td>
                    <td>0564677288</td>
                    <td>one@gmail.com</td>
                </tr>
                <tr>
                    <td><a href="#">Booking</a></td>
                    <td>ECO91</td>
                    <td>EI8373</td>
                    <td>AS8475</td>
                    <td>Transaction Successful</td>
                    <td>1,500.00</td>
                    <td>Khamis</td>
                    <td>slp 12 Kinondoni</td>
                    <td>Dar es salaam</td>
                    <td>Magomeni</td>
                    <td>Mapipa</td>
                    <td>Tanzania</td>
                    <td>0678477783</td>
                    <td>two@gmail.com</td>
                </tr>
                <tr>
                    <td><a href="#">Booking</a></td>
                    <td>ECO92</td>
                    <td>EU467</td>
                    <td>ASB467</td>
                    <td>Transaction Successful</td>
                    <td>1,500.00</td>
                    <td>Juma Khan</td>
                    <td>slp 12 Kinondoni</td>
                    <td>Dar es salaam</td>
                    <td>Magomeni</td>
                    <td>Mapipa</td>
                    <td>Tanzania</td>
                    <td>0766877676</td>
                    <td>three@gmail.com</td>
                </tr>
                <tr>
                    <td><a href="#">Booking</a></td>
                    <td>ECO93</td>
                    <td>QRY524</td>
                    <td>TY2367</td>
                    <td>Transaction Successful</td>
                    <td>1,500.00</td>
                    <td>Mwanaidi Juma</td>
                    <td>slp 12 Kinondoni</td>
                    <td>Dar es salaam</td>
                    <td>Magomeni</td>
                    <td>Mapipa</td>
                    <td>Tanzania</td>
                    <td>0788675789</td>
                    <td>four@gmail.com</td>
                </tr>
                <tr>
                    <td><a href="#">Booking</a></td>
                    <td>ADC853</td>
                    <td>1578JF</td>
                    <td>RTY423</td>
                    <td>Transaction Successful</td>
                    <td>1,500.00</td>
                    <td>Juma</td>
                    <td>slp 12 Kinondoni</td>
                    <td>Dar es salaam</td>
                    <td>Magomeni</td>
                    <td>Mapipa</td>
                    <td>Tanzania</td>
                    <td>0768857466</td>
                    <td>five@gmail.com</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade modal-style6" id="myLargeModal" tabindex="-1" data-backdrop="dynamic" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg">
            <table class="table table-bordered table-striped  table-condensed table-responsive" width="100" style="background-color: white" >
                <thead style="background-color: #435970; color: white; font-size: 12px; font-weight: bold">
                <tr>
                    <th>PNR</th>
                    <th>From Area</th>
                    <th>To Area</th>
                    <th>Route</th>
                    <th>Trip</th>
                    <th>Pickup Date</th>
                    <th>Pickup Time</th>
                    <th>Boarding Point</th>
                    <th>Drop Point</th>
                    <th>Full Name</th>
                    <th>Mobile</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th>Quantity</th>
                    <th>Fares</th>
                    <th>Payment Received</th>
                    <th>Payment Method</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>
                <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>                        <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>                        <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>                        <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>                        <tr>
                    <td>F6AO1K</td>
                    <td>Dar es salaam</td>
                    <td>Tabora phase II</td>
                    <td>Station to Dar</td>
                    <td>AH5</td>
                    <td>30/06/2016</td>
                    <td>20.00.00</td>
                    <td>Station 1</td>
                    <td>Tabora st 1</td>
                    <td>halima Kimwana</td>
                    <td>099887923</td>
                    <td>kjom@hfj.com</td>
                    <td>Payments received</td>
                    <td>1</td>
                    <td>80.00</td>
                    <td>80.00</td>
                    <td>Cash on pickup</td>
                </tr>
                </tbody>
            </table>
            {{--</div>--}}
            {{--</div>--}}
        </div>
    </div>
@endsection