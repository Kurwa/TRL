@include('layouts.header')
<style type="text/css">
    .panel1 {
        padding: 15px;
        margin-bottom: 20px;
        background-color: #f7f7f7;
        border: 3px solid #666666;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        font-family: DejaVu Sans, 'trebuchet ms', verdana, sans-serif;
    }
    .panel-primary .panel-heading {
        color: #ffffff;
        background-color: #428bca;
        border-color: #428bca;
    }

    .panel.noborder {
        border: none;
        box-shadow: none;
    }
    .panel.noborder > .panel-heading {
        border: 1px solid #dddddd;
        border-radius: 0;
    }
    .navbar{
        margin-bottom: 0px;
    }
    .heading{
        font-weight: bold;
    }
    .required{
        color: #e58007;
        font-weight: bold;
    }
    .disp{
        color: green;
    }
    /* tab color */
    .menu>li>a {
        background-color: #ABC5DD;
        border-color: #09048d;
        color: #020101;
        padding-top: 4px;
        padding-bottom: 4px;
    }
    .logouts>li>a {
        /*background-color: #ABC5DD;*/
        /*border-color: #09048d;*/
        /*margin-top:10p;*/
        padding-top: 4px;
        padding-bottom: 4px;
    }
    /*active tab color */
    .menu>li.active>a, .menu>li.active>a:hover, .menu>li.active>a:focus {
        color: #020101;
        background-color: #8DC0DE;
        border: 1px solid #09048d;
    }
            .stats-number{
            font-size: 20px !important;
            color: black;
            font-weight: bold;
        }
        .stats-icon{
            float: right !important;
        }
        .lead-stats{
            text-decoration: none !important;
            font-family: DejaVu Sans, 'trebuchet ms', verdana, sans-serif;
            color: black;
        }
</style>
<script>
    $(document).ready(function () {
        var url = window.location;
        $('a[href="' + url + '"]').closest('li').addClass('active');
        $('a[href="' + url + '"]').parent().parent().parent().addClass('active');
//        jQuery('.leftmenu ul.nav li.dropdown a').filter(function() {
//            return this.href == url;
//        }).parent().addClass('active');

    });
</script>
<nav class="navbar">
    <div class="container">
        <ul class="nav navbar-nav logouts">
            <li class=""><a href="#"> Logged on as <strong>Admin </strong></a></li>
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li ><a href="{{ url('logout') }}" class="btn btn-xs btn-primary">Logout</a></li>
            <li>&nbsp;&nbsp;&nbsp;</li>
            <li> <a href="#"> Change Password</a></li>
        </ul>
    </div>
</nav>
<!-- <br><br ><br> -->
<div class="container">
    <ul class="nav nav-tabs menu">
        <li role="presentation"><a href="{{ url('/') }}">Dashboards</a></li>
        <li role="presentation"><a href="{{ url('train-trips') }}">Trips</a></li>
        <li role="presentation"><a href="{{ url('stop-fares') }}">Fares</a></li>
        <li role="presentation"><a href="{{ url('cities') }}">City</a></li>
        <li role="presentation"><a href="{{ url('timetable') }}">TimeTables</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                APP
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background-color: #aacbff">
                <li><a href="#">Customers</a></li>
                <li><a href="#">Conductors</a></li>
            </ul>
        </li>
        <li role="presentation"><a href="{{ url('booking') }}">Booking</a></li>
        <li role="presentation"><a href="{{ url('payments-details') }}">Payment Details</a></li>
        <li class="dropdown">
            <a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Masters
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background-color: #aacbff">
                <li><a href="#">Users</a></li>
                <li><a href="#">Customers</a></li>
                <li><a href="#">Trains</a></li>
                <li><a href="#">Routes</a></li>
                <li><a href="#">Stops</a></li>
                <li><a href="#">Trips</a></li>
                <li><a href="#">Holidays</a></li>
            </ul>
        </li>
        <li role="presentation"><a href="#">Reports</a></li>
        <li   class="dropdown"><a class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Others
                <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1" style="background-color: #aacbff">
                <li><a href="#">Enquiry</a></li>
                <li><a href="#">Daily Issues</a></li>
            </ul>
        </li>
    </ul>
    <br>
    <div class="panel panel1" >
        <div class="panel-body">
    <div class="starter-template">
        <div style="margin-bottom: 20px; text-align: center">
            <select>
                <option>{{ Date('d') }}</option>
            </select>
            <select>
                <option>{{ date('M')}}</option>
            </select>
            <select>
                <option>{{ Date('Y') }}</option>
            </select>
        </div>
        <div class="row" style="background-color: #e7e7e7; margin-left: -30px;margin-right: -30px">
            <div class="col-md-4">
                <span style="margin-left:15px;margin-top:10px;"><strong>Total Collection of The day</strong> <a href="#" class="pull-right"></a></span>
                <hr>
                <div class="col-md-12 col-xs-6 col-small-enlarge"><!-- col-md-6 start here -->
                    <div id="dash_0" class="panel panel-default"><!-- Start .panel -->
                        <!-- <div class="panel-heading"></div> -->
                        <div class="panel-body">
                            <span style="color:#00003e;font-weight:bold;">Dar es salaam to Tabora</span>
                            <a class="lead-stats" href="#">
                                <span class="stats-number"></span>
                                <span class="stats-icon"><i class="fa fa-money fa-3x color-green"></i></span>
                                <h5>Today's Collection <strong class="pull-right">Tsh 100,200.00 /=</strong></h5>
                            </a>
                        </div>
                    </div>
                </div><!-- col-md-6 end here -->
                <div class="col-md-12 col-xs-6 col-small-enlarge"><!-- col-md-6 start here -->
                    <div id="dash_0" class="panel panel-default"><!-- Start .panel -->
                        <!-- <div class="panel-heading"></div> -->
                        <div class="panel-body">
                            <span style="color:#00003e;font-weight:bold;">Dar es Salaam to Kigoma</span>
                            <a class="lead-stats" href="#">
                                <span class="stats-number"></span>
                                <span class="stats-icon"><i class="fa fa-money fa-3x color-green"></i></span>
                                <h5>Today's Collection <strong class="pull-right">Tsh 100,200.00 /=</strong></h5>
                            </a>
                        </div>
                    </div>
                </div><!-- col-md-6 end here -->
                <div class="col-md-12 col-xs-6 col-small-enlarge"><!-- col-md-6 start here -->
                    <div id="dash_0" class="panel panel-default"><!-- Start .panel -->
                        <!-- <div class="panel-heading"></div> -->
                        <div class="panel-body">
                            <span style="color:#00003e;font-weight:bold;">Tabora - kaliua to Kigoma</span>
                            <a class="lead-stats" href="#">
                                <span class="stats-number"></span>
                                <span class="stats-icon"><i class="fa fa-money fa-3x color-green"></i></span>
                                <h5>Today's Collection <strong class="pull-right">Tsh 100,200.00 /=</strong></h5>
                            </a>
                        </div>
                    </div>
                </div><!-- col-md-6 end here -->
                <div class="col-md-12 col-xs-6 col-small-enlarge"><!-- col-md-6 start here -->
                    <div id="dash_0" class="panel panel-default"><!-- Start .panel -->
                        <!-- <div class="panel-heading"></div> -->
                        <div class="panel-body">
                            <span style="color:#00003e;font-weight:bold;">Tabora - Kaliua to Mpanda</span>
                            <a class="lead-stats" href="#">
                                <span class="stats-number"></span>
                                <span class="stats-icon"><i class="fa fa-money fa-3x color-green"></i></span>
                                <h5>Today's Collection <strong class="pull-right">Tsh 100,200.00 /=</strong></h5>
                            </a>
                        </div>
                    </div>
                </div><!-- col-md-6 end here -->
                <div class="col-md-12 col-xs-6 col-small-enlarge"><!-- col-md-6 start here -->
                    <div id="dash_0" class="panel panel-default"><!-- Start .panel -->
                        <!-- <div class="panel-heading"></div> -->
                        <div class="panel-body">
                            <span style="color:#00003e;font-weight:bold;">Ubungo To Posta</span>
                            <a class="lead-stats" href="#">
                                <span class="stats-number"></span>
                                <span class="stats-icon"><i class="fa fa-money fa-3x color-green"></i></span>
                                <h5>Today's Collection <strong class="pull-right">Tsh 100,200.00 /=</strong></h5>
                            </a>
                        </div>
                    </div>
                </div><!-- col-md-6 end here -->
            </div>
            <div class="col-md-4">
                <div class="profile-left">
                    <span style="margin-left:15px;margin-top:10px;"><strong>Daily Issues</strong> <a href="#" class="pull-right">Add New</a></span>
                    <hr style="">
                    <!-- <div style="width: 300px;margin-left: 15px;margin-top: 0px"> -->
                    <ul class="taglist">
                        <li>M2KQ Cracking Noice <a href="mailto:info@makgrp.com">ae@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>1TQ Door N't working <a href="mailto:info@makgrp.com">dar@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>M2KQ Water Leakage <a href="mailto:info@makgrp.com">ab@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>M245 Cracking Noice <a href="mailto:info@makgrp.com">ef@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>Water Leakage <a href="mailto:info@makgrp.com">cd@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>MKQ Cracking Noice <a href="mailto:info@makgrp.com">as@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>Not Working <a href="mailto:info@makgrp.com">ch@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>Socket Broken <a href="mailto:info@makgrp.com">em@makgrp.com</a> - <span class='required'>New</span></li>
                        <li>About Bus Clearning <a href="mailto:info@makgrp.com">info@makgrp.com</a> - <span class='required'>New</span></li>
                    </ul>
                </div>
                <hr>
                <div class="profile-left">
                    <span  style="margin-left:5px;margin-top:10px;"><strong>Train's Schedule</strong>
                        {{--<a href="#" class="pull-right">Add New</a>--}}
                    </span>
                    <hr style="margin-top: 1px;">
                    <!-- <div style="width: 300px;margin-left: 15px;margin-top: 0px"> -->
                    <table class="table table-condensed table-striped table-bordered" style="background-color: white">
                        <thead>
                        <tr><td colspan="5" align="center" style="background-color:#d2d2d2;font-weight: bold">Tabora to Mpanda</td></tr>
                        <tr><th></th><th>Days</th><th>Departure Time</th><th>Arrival Time</th><th>Status</th></tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td rowspan="2">Tabora</td>
                            <td width="">Wed</td>
                            <td>21:00</td>
                            <td rowspan="2"></td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Sat</td>
                            <td>21:00</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td rowspan="2">Mpanda</td>
                            <td>Thr</td>
                            <td>13:00</td>
                            <td>10:30</td>
                            <td>Intime</td>
                        </tr>
                        <tr>
                            <td>Sun</td>
                            <td>13:00</td>
                            <td>10:30</td>
                            <td>Scheduled</td>
                        </tr>
                        <tr>
                            <td rowspan="2">Tabora</td>
                            <td>Fri</td>
                            <td rowspan="2"></td>
                            <td>02:45</td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>Mon</td>
                            <td>02:45</td>
                            <td></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-left">
                    <span style="margin-left:15px;margin-top:10px;"><strong>Total Bookings</strong></span>
                    <hr>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">TTE No1 John khamis - (<small class="required">Payment Received</small>)</li>
                        <li><strong>Tabora to Mpanda <span class="pull-right">Tsh 2,000,000/=</span></strong></li>
                        <li>Machine Serial No : <span class="required">KWLF008461</span></li>
                        {{--<li>&nbsp;<li>--}}
                        <li><strong><a href="mailto:info@makgrp.com">Send Email</a> <a href="#">Send SMS</a></strong></li>
                    </ul>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">TTE No2 Christian - (<small class="required">Payment Received</small>)</li>
                        <li><strong>Tabora to Mpanda <span class="pull-right">Tsh 2,000/=</span></strong></li>
                        <li>Machine Serial No : <span class="required">KWLF008162</span></li>
                        <li><strong><a href="mailto:info@makgrp.com">Send Email</a> <a href="#">Send SMS</a></strong></li>
                    </ul>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">TTE No3 John David - (<small class="required">Payment Received</small>)</li>
                        <li><strong>Tabora to Mpanda <span class="pull-right">Tsh 12,000,000/=</span></strong></li>
                        <li>Machine Serial No : <span class="required">KWLF008163</span></li>
                        <li><strong><a href="mailto:info@makgrp.com">Send Email</a> <a href="#">Send SMS</a></strong></li>
                    </ul>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">TTE No3 Kurwa J. khamis - (<small class="required">Payment Received</small>)</li>
                        <li><strong>Tabora to Mpanda <span class="pull-right">Tsh 21,020,100/=</span></strong></li>
                        <li>Machine Serial No : <span class="required">KWLF008164</span></li>
                        <li><strong><a href="mailto:info@makgrp.com">Send Email</a> <a href="#">Send SMS</a></strong></li>
                    </ul>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">TTE No5 Yohana J. khamis - (<small class="required">Payment Received</small>)</li>
                        <li><strong>Tabora to Mpanda <span class="pull-right">Tsh 2,100,000/=</span></strong></li>
                        <li>Machine Serial No : <span class="required">KWLF008165</span></li>
                        <li><strong><a href="mailto:info@makgrp.com">Send Email</a> <a href="#">Send SMS</a></strong></li>
                    </ul>
            </div>
            </div>
        </div>
        </div>
        </div>
    </div>
</div><!-- /.container -->
@include('layouts.footer')