
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> برنامج الطلبات الإدارية | توثيق المستخدمين</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <meta content="" name="description" />
        <meta content="" name="author" />
        <!-- BEGIN GLOBAL MANDATORY STYLES -->
        <!-- <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" /> -->
        <link rel="stylesheet" href="{{ asset("/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}">
        <link href="{{ asset("/assets/global/plugins/font-awesome/css/font-awesome.min.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/plugins/simple-line-icons/simple-line-icons.min.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/plugins/uniform/css/uniform.default.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css") }}" rel="stylesheet" type="text/css" >
        <!-- END GLOBAL MANDATORY STYLES -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <link href="{{ asset("/assets/global/plugins/select2/css/select2.min.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/plugins/select2/css/select2-bootstrap.min.css") }}" rel="stylesheet" type="text/css" >
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL STYLES -->
        <link href="{{ asset("/assets/global/css/components-md-rtl.min.css") }}" rel="stylesheet" id="style_components" type="text/css" >
        <link href="{{ asset("/assets/global/css/plugins-md-rtl.min.css") }}" rel="stylesheet" type="text/css" >
        <!-- END THEME GLOBAL STYLES -->
        <!-- BEGIN PAGE LEVEL STYLES -->
        <link href="{{ asset("/assets/pages/css/login-rtl.min.css") }}" rel="stylesheet" type="text/css" >
        <link href="{{ asset("/assets/global/css/sweetalert.css") }}" rel="stylesheet" type="text/css" >

        <!-- END PAGE LEVEL STYLES -->
        <!-- BEGIN THEME LAYOUT STYLES -->
        <!-- END THEME LAYOUT STYLES -->
        <link rel="shortcut icon" href="{{ asset("/favicon.ico") }}">
    </head>
    <!-- END HEAD -->

    <body class=" login">
        <div class="menu-toggler sidebar-toggler"></div>
        <!-- END SIDEBAR TOGGLER BUTTON -->
        <!-- BEGIN LOGO -->
        <div class="logo">
            <a href="/">
                    <script src="{{ asset("js/main.js") }}"></script>

                <img src="{{ asset("assets/pages/img/logophoto.jpg") }}" alt=""  style="border-radius: 10px"/> </a>
        </div>
        <!-- END LOGO -->
        <div class="content">
            @yield('content')
        </div>

        <div class="copyright"> <i class="fa fa-lock" style="color: white; font-size: 14px;"> </i>&nbsp;  ٢٠١٦ © تقنية المعلومات - مكتب الدعوة بالجبيل&nbsp;  </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script> 
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
        <script src="{{ asset("/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/jquery.blockui.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/uniform/jquery.uniform.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}" type="text/javascript"></script>
        <!-- END CORE PLUGINS -->
        <!-- BEGIN PAGE LEVEL PLUGINS -->
        <script src="{{ asset("/assets/global/plugins/jquery-validation/js/jquery.validate.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/jquery-validation/js/additional-methods.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/plugins/select2/js/select2.full.min.js") }}" type="text/javascript"></script>
        <!-- END PAGE LEVEL PLUGINS -->
        <!-- BEGIN THEME GLOBAL SCRIPTS -->
        <script src="{{ asset("/assets/global/scripts/app.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/scripts/sweetalert-dev.js") }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--         <script src="../assets/pages/scripts/login.min.js" type="text/javascript"></script>
 -->        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        @include('flash')
<!--         <script type="text/javascript">
            swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });
        </script> -->
    </body>

</html>