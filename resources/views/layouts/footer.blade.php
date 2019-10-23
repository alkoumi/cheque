<!--[if lt IE 9]>
<script src="{{ asset("/assets/global/plugins/respond.min.js") }}"></script>
<script src="{{ asset("/assets/global/plugins/excanvas.min.js") }}"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="{{ asset("/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/bootstrap/js/bootstrap.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/bootstrap-hover-dropdown/bootstrap-hover-dropdown.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/jquery.blockui.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/uniform/jquery.uniform.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/morris/morris.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/morris/raphael-min.js") }}" type="text/javascript"></script>

<!-- END CORE PLUGINS -->
<!-- BEGIN PAGE LEVEL PLUGINS -->
    @yield('footer-js')
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="{{ asset("/assets/global/scripts/app.min.js") }}" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="{{ asset("/assets/pages/scripts/dashboard.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/global/plugins/select2/js/select2.full.min.js") }}" type="text/javascript"></script>
<script src="{{ asset("/assets/pages/scripts/components-select2.min.js") }}" type="text/javascript"></script>


<!-- END PAGE LEVEL SCRIPTS -->

<script src="{{ asset("/assets/layouts/layout5/scripts/layout.min.js") }}" type="text/javascript"></script>
{{--<script src="{{ asset("assets/layouts/global/scripts/quick-sidebar.min.js") }}" type="text/javascript"></script>--}}
<script src="{{ asset("/assets/global/scripts/sweetalert-dev.js") }}" type="text/javascript"></script>
<!-- END THEME LAYOUT SCRIPTS -->
@include('flash')
</body>

</html>