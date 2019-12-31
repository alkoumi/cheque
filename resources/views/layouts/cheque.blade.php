<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" dir="rtl">
    <!--<![endif]-->
    <!-- BEGIN HEAD -->

    <head>
        <meta charset="utf-8" />
        <title> تطبيق طباعة الشيكات | دعوة الجبيل</title>
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
        <div class="logo" style="margin: 0px auto 0;">
            <a href="/">
                    <script src="{{ asset("js/main.js") }}"></script>
                <img src="{{ asset("assets/pages/img/logophoto.jpg") }}" alt=""  style="border-radius: 10px;width: 75px"/> </a>
        </div>
        <!-- END LOGO -->
        <div class="content" style="margin: 0px auto 0;">
            @yield('content')
        </div>

        <div class="copyright" style="color: white;"> <i class="fa fa-lock" style="color: white; font-size: 14px;"> </i>&nbsp;{{ Carbon\Carbon::now()->format('Y') }} - {{ Abuhamidah\Hijri\Hijri::date('Y') }} © تقنية المعلومات - مكتب الدعوة بالجبيل&nbsp;  </div>
        <!--[if lt IE 9]>
<script src="../assets/global/plugins/respond.min.js"></script>
<script src="../assets/global/plugins/excanvas.min.js"></script>
<![endif]-->
        <!-- BEGIN CORE PLUGINS -->
{{--        <script src="{{ asset("/assets/global/plugins/jquery.min.js") }}" type="text/javascript"></script>--}}
        <script
            src="https://code.jquery.com/jquery-1.12.4.min.js"
            integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ="
            crossorigin="anonymous"></script>
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
        <script src="{{ asset("/assets/global/plugins/clipboardjs/clipboard.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/scripts/app.min.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/global/scripts/sweetalert-dev.js") }}" type="text/javascript"></script>
        <script src="{{ asset("/assets/pages/scripts/components-clipboard.min.js") }}" type="text/javascript"></script>
        <!-- END THEME GLOBAL SCRIPTS -->
        <!-- BEGIN PAGE LEVEL SCRIPTS -->
<!--         <script src="../assets/pages/scripts/login.min.js" type="text/javascript"></script>
 -->        <!-- END PAGE LEVEL SCRIPTS -->
        <!-- BEGIN THEME LAYOUT SCRIPTS -->
        <!-- END THEME LAYOUT SCRIPTS -->
        {{-- @include('flash') --}}
<!--         <script type="text/javascript">
            swal({   title: "Error!",   text: "Here's my error message!",   type: "error",   confirmButtonText: "Cool" });
        </script> -->
        <script type="text/javascript">
            <!-- END LOGIN FORM -->

            // ADD PUBLISHER
            $(document).ready(function() {
            $(document).ready(function() {
                $( ".copy" ).click(function() {
                    if($("#mt-target-1").text() === ""){
                        Swal.fire({
                            type: 'error',
                            title: 'للأسف ...',
                            text: 'لم تقم بتعبئة الحقول!',
                            //footer: '<a href>Why do I have this issue?</a>',
                            timer: 2000,
                            showCloseButton:false,
                            showConfirmButton:false
                        });
                        // Swal.fire({"title":"للأسف","text":"لم تقم بتعبئة الحقول","timer":2000,"width":"30rem","heightAuto":true,"padding":"1.50rem","showConfirmButton":false,"showCloseButton":false,"icon":"error"});
                    }else{
                        Swal.fire({"title":"الحمد لله","text":"تم النسخ إلى الحافظة بنجاح","timer":2000,"width":"30rem","heightAuto":true,"padding":"1.50rem","showConfirmButton":false,"showCloseButton":false,
                            // "icon":"success",
                            imageUrl: "../assets/file.png",
                            imageWidth: 30,
                            imageHeight: 30,
                            imageAlt: 'copied!',});
                    }
                    // swal({
                    //         title: "أنت على وشك إضافة طلب جديد للطبخ العربي ",
                    //         text: '- هل أنت متأكد ؟',
                    //         showCancelButton: true,
                    //         cancelButtonColor: "#DD6B55",
                    //         confirmButtonColor: "#C5B96B",
                    //         cancelButtonText: "تراجع",
                    //         confirmButtonText: "نعم ، متأكد بارك الله فيك!",
                    //         closeOnConfirm: false,
                    //         closeOnCancel: false,
                    //         imageUrl: "../assets/money.png"
                    //     });
                });
            });

            $(document).ready(function() {
                $( ".testUrl" ).click(function() {
                    if($("#mt-target-1").text() === ""){
                        //alert('NO DATA');
                        Swal.fire({"title":"للأسف","text":"لم تقم بتعبئة الحقول","timer":3000,"width":"30rem","heightAuto":true,"padding":"1.50rem","showConfirmButton":false,"showCloseButton":false,
                            "type":"error",
                            //imageUrl: "../assets/file.png",
                            imageWidth: 50,
                            imageHeight: 50,
                            imageAlt: 'copied!',});
                    }else{
                        document.location.href = $("#mt-target-1").text();
                    }
                    // swal({
                    //         title: "أنت على وشك إضافة طلب جديد للطبخ العربي ",
                    //         text: '- هل أنت متأكد ؟',
                    //         showCancelButton: true,
                    //         cancelButtonColor: "#DD6B55",
                    //         confirmButtonColor: "#C5B96B",
                    //         cancelButtonText: "تراجع",
                    //         confirmButtonText: "نعم ، متأكد بارك الله فيك!",
                    //         closeOnConfirm: false,
                    //         closeOnCancel: false,
                    //         imageUrl: "../assets/money.png"
                    //     });
                });
            });

            $(document).ready(function() {

            //alert(mony);
            //var mony = $('.money').val();
            parseArabic();
            //alert(parseArabic());
            $('.money').val(parseArabic());
            function parseArabic(){ // PERSIAN, ARABIC, URDO
                    var mony = $('.money').data('money');
                    mony = (mony.replace(/[٠١٢٣٤٥٦٧٨٩]/g, function (d) {
                        return d.charCodeAt(0) - 1632;
                        }).replace(/[۰۱۲۳۴۵۶۷۸۹]/g, function (d) { return d.charCodeAt(0) - 1776; })
                    );
                    return mony;
            };

        });

                $(document).on('click','.rajhiTamayoz',function () {
                    var country = $('.country').val();
                    var payTo = $('.payTo').val();
                    var money = $('.money').val();
                    if(money != "" || money != null || money > 0)
                    {
                        {{--$.ajax({--}}
                        {{--url:'{{ url('/print/rajhiTamayoz') }}',--}}
                        {{--type:'post',--}}
                        {{--dataType:'json',--}}
                        {{--data:{--}}
                            {{--country:country ,--}}
                            {{--payTo:payTo ,--}}
                            {{--money:money ,--}}
                            {{--'_token':'{!! csrf_token() !!}'}--}}
                    {{--});--}}
                        //
                        $.ajax({
                            url:'{{ url('/print/rajhiTamayoz') }}',
                            type:'post',
                            dataType:'json',
                            data:{
                                country:country ,
                                payTo:payTo ,
                                money:money ,
                                '_token':'{!! csrf_token() !!}'},
//                            beforeSend:function () {
//                                $('.spin_dist').removeClass('hidden');
//                                $('.fetched-translators').select2("val", "");
//                            },
//                            success:function (data) {
//                                if (data != undefined || data != null || data != '') {
//                                    $('.spin_dist').addClass('hidden');
//                                    $('#addTranslator').modal('hide');
//                                    $('.fetched-translators').empty().append(data).trigger('change');
//                                    swal({
//                                        title:  "تهانينا " ,
//                                        text: 'تمت إضافة المترجم بنجاح',
//                                        type: "success",
//                                        timer: 2000,
//                                        showCancelButton: false,
//                                        showConfirmButton: false
//                                    });
//                                    $(".fetched-translators option:last").select2().attr("selected", "selected").trigger('change');
//                                }
//                            },
//                            error: function(data){
////                            var errors = JSON.stringify(data);
////                                var errors = data.responseJSON;
////                            var errors = JSON.parse(data);
////                            alert(errors.length);
////                            console.log(errors);
//                                swal({
//                                    title:  " حدث خطأ راجع البيانات المدخلة" ,
////                                    text: errors,
//                                    type: "error",
//                                    timer: 3000,
//                                    showCancelButton: false,
//                                    showConfirmButton: false
//                                });
////                                $('.spin_dist').addClass('hidden');
//                            }
                        });


                        //
                    }
                });
        });

            let to = "";
            let body = "";
            //console.log(to,body);

            function updateResult() {
                let result = $("#mt-target-1").text();
                let url = "";
                if(to){
                    url += "https://cheque.jdc.org.sa/sms?number=" + to;
                    if(body){
                        url += "&text=" + body;
                    }
                }
                $("#mt-target-1").text(url);
            };

            function phoneChange(e) {
                to = e.target.value;
                updateResult();
            };

            function messageChange(e) {
                body = encodeURIComponent(e.target.value);
                body = body.replace(/~/g, "%7E");
                body = body.replace(/!/g, "%21");
                body = body.replace(/\*/g, "%23");
                body = body.replace(/\(/g, "%28");
                body = body.replace(/\)/g, "%29");
                body = body.replace(/'/g, "%27");

                updateResult();
            };

            $(function() {
                $("#number").keyup(function(e) {
                    phoneChange(e);
                });
                $("#text").keyup(function(e) {
                    messageChange(e);
                });
                updateResult();
            });

            function textAreaAdjust(o) {
                o.style.height = "1px";
                o.style.height = (25+o.scrollHeight)+"px";
            }

            $(document).ready(function() {
                // var tx = document.getElementsByTagName('textarea');
                // for (var i = 0; i < tx.length; i++) {
                //     tx[i].setAttribute('style', 'height:' + (tx[i].scrollHeight) + 'px;overflow-y:hidden;');
                //     tx[i].addEventListener("onchange", OnInput, false);
                // }
                // function OnInput() {
                //     this.style.height = 'auto';
                //     this.style.height = (this.scrollHeight) + 'px';
                // }


                // $('textarea').each(function () {
                //     this.setAttribute('style', 'height:' + (this.scrollHeight) + 'px;overflow-y:hidden;');
                // }).on('change', function () {
                //     this.style.height = 'auto';
                //     this.style.height = (this.scrollHeight) + 'px';
                // });
            });

        </script>
        @include('sweetalert::alert')
    </body>


</html>
