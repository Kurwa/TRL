@include('layouts.header')
<style type="text/css">
    .panel {
        padding: 15px;
        margin-bottom: 20px;
        background-color: #f7f7f7;
        border: 3px solid #666666;
        border-radius: 4px;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
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
    <div class="panel" >
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
            {{----}}
            <div class="col-md-4">
                <!-- <div class="widgetcontent"> -->
                <div class="row-fluid">
                    <div class="profile-left">
                        <span><strong>Total Travellers</strong> <a href="#" class="pull-right"></a></span>
                        <!-- <div style="width: 300px;margin-left: 15px;margin-top: 0px"> -->
                        <hr>
                        <!-- <ol></ol> -->
                        <ul class="taglist" style="width: 100%;list-style-type: none;">
                            <li class="heading">#L303F John - <span class="required">Payment Received</span></li>
                            <li>Tabora to Mpanda <span class="badge badge-warning">Tsh 10,000 /=</span></li>
                            <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                            <li>Web Order</li>
                            <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                        </ul>
                        <br>
                        <ul class="taglist" style="width: 100%;list-style-type: none;">
                            <li class="heading">#KJ9303F Khamis - <span class="required">Payment Received</span></li>
                            <li>Tabora to Mpanda <span class="badge badge-warning">Tsh 10,000 /=</span></li>
                            <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                            <li>Web Order</li>
                            <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                        </ul>
                        <br>
                        <ul class="taglist" style="width: 100%;list-style-type: none;">
                            <li class="heading">#L3093F Shamsa - <span class="required">Payment Received</span></li>
                            <li>Tabora to Mpanda <span class="badge badge-warning">Tsh 10,000 /=</span></li>
                            <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                            <li>Web Order</li>
                            <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                        </ul>
                    </div>
                    <!-- </div> -->
                </div><!--widgetcontent-->
            </div>
            <div class="col-md-4">
                <div class="profile-left">
                    <span><strong>Daily Issues</strong> <a href="#" class="pull-right">Add New</a></span>
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
                <hr style="">
                <div class="profile-left">
                    <span><strong>Inquiry's</strong> <a href="#" class="pull-right">Add New</a></span>
                    <hr style="">
                    <!-- <div style="width: 300px;margin-left: 15px;margin-top: 0px"> -->
                    <ul class="taglist" style="width: 100%;">
                        <li>Test <span class="required">New</span></li>
                        <li>Dar es Salaam <span class="required">New</span></li>
                        <li>Inquiry <span class="required">New</span></li>
                        <li>Stations <span class="required">New</span></li>
                        <li>Dar to Tabora <span class="required">New</span></li>
                        <li>Dar Station <span class="required">New</span></li>
                        <li>Customer will Call <span class="required">New</span></li>
                        <li>Tabora Station<span class="required">New</span></li>
                        <li>Inquiry() <span class="required">New</span></li>
                        <li>Customer will Call <span class="required">New</span></li>
                        <li>Customer will visit() <span class="required">New</span></li>
                        <li>Inquiry <span class="required">New</span></li>
                        <li>Customer will Call <span class="required">New</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-4">
                <div class="profile-left">
                    <span><strong>Total Bookings</strong></span>
                    <hr>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">#TON3IL John - <span class="required">Payment Received</span></li>
                        <li><strong>Tabora to Mpanda <span class="disp">AH[AH3] - </span><span>Tsh.0.0 (Cash on Pickup)</span></strong></li>
                        <li>Boarding Point : <span class="disp"> URAMBO </span></li>
                        <li>Pass Number : <span class="required">#12345</span></li>
                        <li>&nbsp;<li>
                        <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                        <li>Conductor App</li>
                        <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                    </ul>
                    <br>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">#TO83IL Khamis - <span class="required">Payment Received</span></li>
                        <li><strong>Tabora to Mpanda <span class="disp">AH[AH3] - </span><span>Tsh.0.0 (Cash on Pickup)</span></strong></li>
                        <li>Boarding Point : <span class="disp"> USINGA</span></li>
                        <li>Pass Number : <span class="required">#13345</span></li>
                        <li>&nbsp;<li>
                        <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                        <li>Conductor App</li>
                        <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                    </ul>
                    <br>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">#TON3IL John - <span class="required">Payment Received</span></li>
                        <li><strong>Tabora to Mpanda <span class="disp">AH[AH3] - </span><span>Tsh.0.0 (Cash on Pickup)</span></strong></li>
                        <li>Boaring Point : <span class="disp"> URAMBO </span></li>
                        <li>Pass Number : <span class="required">#14345</span></li>
                        <li>&nbsp;<li>
                        <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                        <li>Conductor App</li>
                        <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                    </ul>
                    <br>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">#TON3IL Juma khan - <span class="required">Payment Received</span></li>
                        <li><strong>Tabora to Mpanda <span class="disp">AH[AH3] - </span><span>Tsh.0.0 (Cash on Pickup)</span></strong></li>
                        <li>Boarding Point : <span class="disp"> URAMBO</span></li>
                        <li>Pass Number : <span class="required">#15345</span></li>
                        <li>&nbsp;<li>
                        <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                        <li>Conductor App</li>
                        <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                    </ul>
                    <br>
                    <ul class="taglist" style="width: 100%;list-style-type: none;">
                        <li class="heading">#TON3IL John - <span class="required">Payment Received</span></li>
                        <li><strong>Tabora to Mpanda <span class="disp">AH[AH3] - </span><span>Tsh.0.0 (Cash on Pickup)</span></strong></li>
                        <li>Boarding Point : <span class="disp"> MPANDA</span></li>
                        <li>Pass Number : <span class="required">#7487684</span></li>
                        <li>&nbsp;<li>
                        <li><a href="#">Quick Fill</a> <a href="#">Payments</a> <a href="#">Booking</a></li>
                        <li>Conductor App</li>
                        <li><a href="">Send Email</a> <a href="">Send SMS</a></li>
                    </ul>
                    <br>
                </div>
            </div>


        </div>
    </div>
        </div>
    </div>
</div><!-- /.container -->
@include('layouts.footer')