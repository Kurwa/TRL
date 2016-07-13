@extends('layouts.main')
@section('contents')
    <div class="starter-template">
        <div class="row">
            <ul class="nav nav-tabs">
                <li role="presentation"><a href="#">Dar es salaam to Tabora</a></li>
                <li role="presentation"><a href="#">Dar es salaam to Kigoma</a></li>
                <li role="presentation"><a href="#">Tabora - Kaliua – Kigoma</a></li>
                <li role="presentation" class="active"><a href="#">Tabora- Kaliua- Mpanda</a></li>
                <li role="presentation"><a href="#posta">Ubungo – Posta</a></li>
            </ul>
            <table class="table table-condensed table-responsive table-bordered" style="margin-top: -28px; margin-left: -12px; margin-right: 10px;">
                <thead style="font-size: 12px; font-weight: bold">
                <tr>
                    <th colspan="10" style="color: green">Train From Tabora to Mpanda</th>
                </tr>
                <tr>
                    <th colspan="10"><span style="color: red">Today is {{Date('l jS \of F Y')}}</span></th>
                </tr>
                <tr>
                    <th width="200" style="text-align: center;"></th>
                    <th></th>
                    <th colspan="2"  style="text-align: center;">Departure</th>
                    <th colspan="2"  style="text-align: center;">Arrival</th>
                </tr>
                <tr>
                    <th>Trips</th>
                    <th width="200" style="text-align: center;">Train Number</th>
                    <th>Days</th>
                    <th>Time</th>
                    <th>Days</th>
                    <th>Time</th>
                </tr>
                </thead>
                <tbody>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">TABORA</td>
                    <td> TrainNo1</td>
                    <td> Wed / Sat</td>
                    <td> 21:00</td>
                    <td> Fri / Mon </td>
                    <td> 02:45 </td>
                </tr>
                <tr style="background-color: #f1f1f0">
                    <td style="background-color: #d2dfcc">MPANDA</td>
                    <td> TrainNo1</td>
                    <td> Thu / Sun</td>
                    <td> 13:00</td>
                    <td> Thu / Sun</td>
                    <td> 10 : 30</td>
                </tr>
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">MABAMA</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">USOKE</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">URAMBO</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">KALIUA</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">UYUMBU</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">KENGEME</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">LUMBE</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">USINGA</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr> --}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">UGALLA RIVER</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr> --}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">KATUMBA</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>  --}}
                {{--<tr style="background-color: #f1f1f0">--}}
                    {{--<td style="background-color: #d2dfcc">MPANDA</td>--}}
                    {{--<td> 07: 00 AM</td>--}}
                    {{--<td> 07: 45 AM</td>--}}
                    {{--<td> 08: 30 AM</td>--}}
                    {{--<td> 09: 30 AM</td>--}}
                    {{--<td> 10 :45 AM</td>--}}
                    {{--<td> 11: 15 AM</td>--}}
                    {{--<td> 12: 15 PM</td>--}}
                    {{--<td> 03: 00 PM</td>--}}
                    {{--<td> 04: 14 PM</td>--}}
                {{--</tr>--}}
                </tbody>
            </table>
            {{--<div id="posta">ajl;fja;fja;fj;ajdf</div>--}}
        </div>
    </div>
@endsection