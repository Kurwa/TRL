@extends('layouts.main')
@section('contents')
    <div class="starter-template">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation" class="active"><a href="{{ url('/') }}">Dar es salaam to Tabora</a></li>
                {{--<li role="presentation"><a href="{{ url('train-trips') }}">Trips</a></li>--}}
                {{--<li role="presentation"><a href="{{ url('stop-fares') }}">Fares</a></li>--}}
            </ul>
            <table class="table table-condensed table-responsive table-bordered" style="margin-top: -28px; margin-left: -12px; margin-right: 10px;">
                <thead style="font-size: 12px; font-weight: bold">
                <tr>
                    <th colspan="10" style="color: green">Train To Tabora Phase III</th>
                </tr>
                <tr>
                    <th colspan="10"><span style="color: red">Today is {{Date('l jS \of F Y')}}</span></th>
                </tr>
                <tr>
                    {{--<th
                    <th>Trip</th>></th>--}}
                    <th width="200">Trip</th>
                    <th>AH1</th>
                    <th>AH2</th>
                    <th>AH3</th>
                    <th>AH4</th>
                    <th>AH5</th>
                    <th>AH6</th>
                    <th>AH7</th>
                    <th>AH8</th>
                    <th>AH9</th>
                </tr>
                </thead>
                <tbody>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">Dar es Salaam Station</td>
                    <td> 07: 00 AM</td>
                    <td> 07: 45 AM</td>
                    <td> 08: 30 AM</td>
                    <td> 09: 30 AM</td>
                    <td> 10 :45 AM</td>
                    <td> 11: 15 AM</td>
                    <td> 12: 15 PM</td>
                    <td> 03: 00 PM</td>
                    <td> 04: 14 PM</td>
                </tr>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">Dar es Salaam Station</td>
                    <td> 07: 00 AM</td>
                    <td> 07: 45 AM</td>
                    <td> 08: 30 AM</td>
                    <td> 09: 30 AM</td>
                    <td> 10 :45 AM</td>
                    <td> 11: 15 AM</td>
                    <td> 12: 15 PM</td>
                    <td> 03: 00 PM</td>
                    <td> 04: 14 PM</td>
                </tr>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">Dar es Salaam Station</td>
                    <td> 07: 00 AM</td>
                    <td> 07: 45 AM</td>
                    <td> 08: 30 AM</td>
                    <td> 09: 30 AM</td>
                    <td> 10 :45 AM</td>
                    <td> 11: 15 AM</td>
                    <td> 12: 15 PM</td>
                    <td> 03: 00 PM</td>
                    <td> 04: 14 PM</td>
                </tr>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">Dar es Salaam Station</td>
                    <td> 07: 00 AM</td>
                    <td> 07: 45 AM</td>
                    <td> 08: 30 AM</td>
                    <td> 09: 30 AM</td>
                    <td> 10 :45 AM</td>
                    <td> 11: 15 AM</td>
                    <td> 12: 15 PM</td>
                    <td> 03: 00 PM</td>
                    <td> 04: 14 PM</td>
                </tr>

                </tbody>
            </table>
        </div>
    </div>

@endsection