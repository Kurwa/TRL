@include('layouts.header')
<style type="text/css">
.panel {
  padding: 15px;
  /*margin-bottom: 20px;*/
    margin-top: -13px;
  background-color: #FFFFFF;
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
.well{
    padding-top: 4px;
    padding-bottom: 4px;
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
    color: orange;
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
            <li class=""><a href="javascript()"> Logged on as <strong>Admin </strong></a></li>
              <li>&nbsp;&nbsp;&nbsp;</li>
            <li ><a href="{{ url('logout') }}" class="btn btn-xs btn-primary">Logout</a></li>
              <li>&nbsp;&nbsp;&nbsp;</li>
            <li> <a href="javascript()"> Change Password</a></li>
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
    <li role="presentation"><a href="{{ url('reports') }}">Reports</a></li>
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
    <div class="well well-sm" style="background-color: #435970;">
        <span>
            <input type="text" placeholder="Search">
            <button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-search"></i> </button>
            <button class="btn btn-primary btn-xs"><i class=" glyphicon glyphicon-pushpin"></i> </button>
            <button class="btn btn-primary btn-xs"><i class="glyphicon glyphicon-fast-forward"></i> </button>
        </span>
        <span class="pull-right">
            <b style="color: #FFFFFF">Record Per Page</b>
            <select>
                <option>15</option>
            </select>
        </span>
    </div>
<div class="panel" >
  <div class="panel-body">
      @yield('contents')
  </div>
</div>
</div><!-- /.container -->
@include('layouts.footer')