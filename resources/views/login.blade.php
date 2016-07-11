<!doctype html>
<html  lang="en">
<meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Login</title>
    <link href="{{ asset('assets/css/icons.css') }}" rel="stylesheet" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <link REL="stylesheet" href="{{ asset('assets/styles/default.css') }}" type="text/css">
    <link REL="stylesheet" href="{{ asset('assets/styles/FusionAqua/style.css') }}" type="text/css">
    <link REL="stylesheet" href="{{ asset('assets/pagestyles/login2.css') }}" type="text/css">
    <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <script src="{{ asset('assets/js/jquery-1.9.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui-1.9.2.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
</head>
<body class="FusionAqua page-login2 function-login" style="margin-top: 10px" >
<script type="text/javascript" src="{{ asset('assets/include/loadfirst.js') }}">
</script>
<script type="text/javascript" src="include/lang/English.js">
</script>
    <div class="rnr-page">
        <div style="margin-left: 30%; margin-right: 30%">
            @if(Session::has('error'))
                <div class="alert alert-danger">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ Session::get('error') }}
                </div>
            @elseif(Session::has('message'))
                <div class="alert alert-success">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    {{ Session::get('message') }}
                </div>
            @endif
        </div>

            <form method=post action="{{ url('login') }}" id='form1 name=form1'>
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="rnr-top ">

            <div  class="rnr-cw-login rnr-s-1 asbuttons FusionAqua">
                <div class="rnr-c rnr-cv rnr-c-login">
                    <div  class="rnr-brickcontents style2 rnr-b-loginheader "><span>Login</span></div>
                    <div  class="rnr-brickcontents style1 rnr-b-wrapper  rnr-wrapper rnr-cbw-fields">
                        <div  class="rnr-cw-fields rnr-s-fields asbuttons FusionAqua">
                            <div class="rnr-c rnr-cv rnr-c-fields">
                                <div  class="rnr-brickcontents style1 rnr-b-loginfields ">
                                    <table class="fieldGrid">
                                        <tr><td>Username:</td><td class="rnr-control">
                                                <input type="text" required name="username" value="" placeholder="UserName"></td></tr>
                                        <tr><td>Password: </td>
                                            <td class="rnr-control">
                                                <input type="password" required name="password" value="" placeholder="Password">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                Remember Password:
                                            </td>
                                            <td>
                                                <input type="checkbox" name="remember_password" value="1">
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                                <div  class="rnr-brickcontents style3 rnr-b-mesforgot "><a href="#" >Forgot password?</a>
                                </div>

                                <div  class="rnr-brickcontents style2 rnr-b-loginbuttons ">
                                    <button type="submit"  class="rnr-button main">Submit</button>
                               </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<div class="rnr-middle">--}}
            {{--<div class="rnr-left ">--}}
            {{--</div>--}}
            {{--<div class="rnr-center ">--}}
            {{--</div>--}}
            {{--<div class="rnr-right ">--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="rnr-bottom ">--}}
            {{--<!--%%bottom%%-->--}}
        {{--</div>--}}
            </form>
    </div>
</body>
<!-- Mirrored from www.geodirect.in/geoadmin/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 08 Jul 2016 08:29:46 GMT -->
</html>
