@extends('layouts.main')
@section('contents')
<style type="text/css">
.modal{
  /*top: 10px;*/
  left: -20%;
  /*width: 100%;*/
    }
</style>
    <div class="starter-template">
        <div class="row">
            <table class="table table-striped table-condensed table-responsive" style="margin-top: -28px; margin-left: -12px; margin-right: -10px;">
                <thead style="background-color: #435970; color: white; font-size: 12px; font-weight: bold">
                <tr>
                    <th></th>
                    <th>Route</th>
                    <th>Train</th>
                    <th>Trip</th>
                    <th>Status</th>
                    <th>Record Data</th>
                    <th>Start Time</th>
                    <th>Current Stop</th>
                    <th>Locomotive Operators</th>
                    <th>Conductors/TTE</th>
                    <th>Latitude</th>
                    <th>Longitude</th>
                    <th>Created On</th>
                    <th>Updated On</th>
                    <th>Sync</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>Booking </td>
                    <td width="150">Dar es Salaam to Tabora</td>
                    <td>4536 TRL</td>
                    <td>AH1</td>
                    <td>Boarding</td>
                    <td>30/06/2016</td>
                    <td>08.00.00</td>
                    <td>Dar es Salaam</td>
                    <td>Juma Khamis</td>
                    <td>halima Kimwana</td>
                    <td></td>
                    <td></td>
                    <td>29/06/2016 15.32.08</td>
                    <td>29/06/2016 15.32.08</td>
                    <td>
                        <input type="checkbox" checked>
                    </td>
                </tr>
                </tr>
                <tr>
                    <td><span style="text-decoration: underline">Booking</span></td>
                    <td>Dar es Salaam to Kigoma</td>
                    <td>2345 TRL</td>
                    <td>AH2</td>
                    <td>Boarding</td>
                    <td>31/06/2016</td>
                    <td>08.00.00</td>
                    <td>Dar es Salaam</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>29/06/2016 15.32.08</td>
                    <td>29/06/2016 15.32.08</td>
                    <td>
                        <input type="checkbox" checked>
                    </td>
                </tr>
                <tr>
                    <td><span style="text-decoration: underline">Booking</span></td>
                    <td>Tabora - kaliua to Kigoma</td>
                    <td>8764 TRL</td>
                    <td>AH3</td>
                    <td>Boarding</td>
                    <td>30/06/2016</td>
                    <td>08.00.00</td>
                    <td>Tabora</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>29/06/2016 15.32.08</td>
                    <td>29/06/2016 15.32.08</td>
                    <td>
                        <input type="checkbox" checked>
                    </td>
                </tr>
                <tr>
                    <td><a href="#"  data-toggle="modal" data-target="#myLargeModal">Booking (5)</a></td>
                    <td>Tabora - Kaliua to Mpanda</td>
                    <td>6476 TRL</td>
                    <td>AH4</td>
                    <td>Boarding</td>
                    <td>30/06/2016</td>
                    <td>08.00.00</td>
                    <td>Tabora</td>
                    <td>chale</td>
                    <td>Anna</td>
                    <td></td>
                    <td></td>
                    <td>29/06/2016 15.32.08</td>
                    <td>29/06/2016 15.32.08</td>
                    <td>
                        <input type="checkbox" checked>
                    </td>
                </tr>
                <tr>
                    <td><span style="text-decoration: underline">Booking</span></td>
                    <td>Ubungo To Posta</td>
                    <td>4533 TRL</td>
                    <td>AH1</td>
                    <td>Boarding</td>
                    <td>30/06/2016</td>
                    <td>08.00.00</td>
                    <td>Posta</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>29/06/2016 15.32.08</td>
                    <td>29/06/2016 15.32.08</td>
                    <td>
                        <input type="checkbox" checked>
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade modal-style6" id="myLargeModal" tabindex="-1" data-backdrop="dynamic" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg">
            {{--<div class="modal-content">--}}
                {{--<div class="modal-header">--}}
                    {{--<button type="button" class="close" data-dismiss="modal">--}}
                        {{--<span aria-hidden="true">&times;</span><span class="sr-only">Close</span>--}}
                    {{--</button>--}}
                    {{--<h4 class="modal-title" id="myModalLabel">New Request</h4>--}}
                {{--</div>--}}
                {{--<div class="modal-body" id="positiontoadd" >--}}
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
                            <th>Fares(TSH)</th>
                            <th>Payment Received</th>
                            <th>Payment Method</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>F6AO1K</td>
                            <td><strong>Tabora</strong></td>
                            <td><strong>Mpanda</strong></td>
                            <td>Tabora - Kaliua to Mpanda</td>
                            <td>AH1</td>
                            <td>31/06/2016</td>
                            <td>08.00.00</td>
                            <td></td>
                            <td>RUVU</td>
                            <td>Mwajuma Khamis</td>
                            <td>+255-767887923</td>
                            <td>kjom@hfj.com</td>
                            <td>Payments received</td>
                            <td>10</td>
                            <td>10,600</td>
                            <td>80.00</td>
                            <td>Cash on pickup</td>
                        </tr>
                        <tr>
                            <td>F6AO2K</td>
                            <td><strong>Tabora</strong></td>
                            <td><strong>Mpanda</strong></td>
                            <td>Tabora - Kaliua to Mpanda</td>
                            <td>AH3</td>
                            <td>31/06/2016</td>
                            <td>08.00.00</td>
                            <td></td>
                            <td>MSUA</td>
                            <td>Kimwana Juma</td>
                            <td>+255-767887923</td>
                            <td>kjom@hfj.com</td>
                            <td>Payments received</td>
                            <td>20</td>
                            <td>12,700</td>
                            <td>80.00</td>
                            <td>Cash on pickup</td>
                        </tr>                        <tr>
                            <td>F6AO3K</td>
                            <td><strong>Tabora</strong></td>
                            <td><strong>Mpanda</strong></td>
                            <td>Tabora - Kaliua to Mpanda</td>
                            <td>AH2</td>
                            <td>31/06/2016</td>
                            <td>08.00.00</td>
                            <td></td>
                            <td>Ngerengere</td>
                            <td>Jumanne Kimwana</td>
                            <td>+255-767887923</td>
                            <td>kjom@hfj.com</td>
                            <td>Payments received</td>
                            <td>2</td>
                            <td>80.00</td>
                            <td>80.00</td>
                            <td>Cash on pickup</td>
                        </tr>                        <tr>
                            <td>F6AO4K</td>
                            <td><strong>Tabora</strong></td>
                            <td><strong>Mpanda</strong></td>
                            <td>Tabora - Kaliua to Mpanda</td>
                            <td>AH2</td>
                            <td>31/06/2016</td>
                            <td>08.00.00</td>
                            <td></td>
                            <td>KINONKO</td>
                            <td>David</td>
                            <td>+255-767887923</td>
                            <td>kjom@hfj.com</td>
                            <td>Payments received</td>
                            <td>1</td>
                            <td>12,700</td>
                            <td>80.00</td>
                            <td>Cash on pickup</td>
                        </tr>                        <tr>
                            <td>F6AO5K</td>
                            <td><strong>Tabora</strong></td>
                            <td><strong>Mpanda</strong></td>
                            <td>Tabora - Kaliua to Mpanda</td>
                            <td>AH5</td>
                            <td>31/06/2016</td>
                            <td>08.00.00</td>
                            <td></td>
                            <td>MAZIMBU</td>
                            <td>halima Kimwana</td>
                            <td>+255-767887923</td>
                            <td>kjom@hfj.com</td>
                            <td>Payments received</td>
                            <td>31</td>
                            <td>12,700</td>
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