<!doctype html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <title>راجحي كبير - طباعة شيكات الجهات الخيرية</title>
    {{--<link href="labels.css" rel="stylesheet" type="text/css" >--}}
    <style>
        @import url(https://fonts.googleapis.com/earlyaccess/notonaskharabic.css);
        @import url(https://fonts.googleapis.com/earlyaccess/notokufiarabic.css);
        body {
            /*font-family: 'Noto Naskh Arabic', serif;*/
            font-family: 'Noto Kufi Arabic', sans-serif;
            line-height: 15pt;
            width: 8.80in;
            /*margin: 0 .1875in;*/
            direction: rtl;
            margin-top: 15px;
            font-size: 14px;
        }
        img {
            padding-top: 5px;
            width: 200px;
            height: 30px;
        }
        .date{
            float:right;
            right: 0;
        }
        @page{
            margin:  0 0 0.10in 0;
        }
        table, th, td {
            /*font-family: "HelveticaNeue", sans-serif;*/
            border: 0px solid black;
            border-collapse: collapse;
        }
        td {
            /*font-family: "HelveticaNeue", sans-serif;*/
            min-width: 2px;
            padding: 3px;
        }
        .btn {
            font-family: 'Noto Kufi Arabic', sans-serif;
            display: inline-block;
            margin-bottom: 0;
            font-weight: 400;
            text-align: center;
            touch-action: manipulation;
            cursor: pointer;
            border: 1px solid transparent;
            white-space: nowrap;
            padding: 6px 12px;
            font-size: 14px;
            line-height: 1.42857;
            border-radius: 4px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        .label{
            /* Avery 5160 labels — CSS and HTML by MM at Boulder Information Services */
            width: 2.025in; /* plus .6 inches from padding */
            height: .875in; /* plus .125 inches from padding */
            padding: .120in .2in 0;
            margin-right: .4in; /* the gutter */
            font-family: "Lucida Grande", "Lucida Sans Unicode", Arial, sans-serif;
            font-size: 13px;

            float: left;

            text-align: center;
            overflow: hidden;

            outline: 1px hidden; /* outline doesn’t occupy space like border does */
        }
        .page-break {
            clear: left;
            display:block;
            page-break-after:always;
        }
        @media print {
            .hidden-print {
                display: none !important;
            }
        }
    </style>

</head>

    <body>
        <table style="width:100%" dir="rtl">
            {{--<tr>--}}
                {{--<th>Firstname</th>--}}
                {{--<th>Lastname</th>--}}
                {{--<th>Age</th>--}}
            {{--</tr>--}}
            <tr>
                <td>&nbsp;&nbsp;</td>
                <td style="width:120px">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$date}}</td>
                <td>&nbsp;</td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr>
                <td>&nbsp;&nbsp;</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$country}}</td>
                <td style="text-align: left;">لا يصرف إلا للمستفيد الأول&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
                {{--<td>&nbsp;</td>--}}
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td></td>
                <td></td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr>
                <td></td>
                <td></td>
                {{--<td>&nbsp;</td>--}}
                <td style="font-size:20px">{{$payTo}}</td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr style="height: 20px">
                <td></td>
                <td></td>
                <td></td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr>
                <td></td>
                <td style="font-size: 16px">&nbsp;&nbsp;&nbsp;#{{\Abuhamidah\Number\Number::int2indic(number_format($money,2,'.',','))}}#</td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{ \Alkoumi\LaravelArabicTafqeet\Tafqeet::inArabic($money,'sar') }}</td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{$note}}</td>
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
                {{--<td></td>--}}
            </tr>
        </table>
        <br/><br/><br/><br/><br/><br/><br/><br/><br/><br/><br/>
        <div class="page-break">
            <p style="display: inline-block;font-size: 10px" class="hidden-print"> </p><center><button style="background-color: #32c5d2" onclick="myFunction()" class="btn hidden-print">طباعة الشيك</button>  <button style="background-color: #ed6b75" onclick="goBack()" class="btn hidden-print">عودة</button></center><br/>
            <center>
        <h3 class="hidden-print">أخي المستخدم : تختلف إعدادات كل طابعة عن الأخرى ، لذا قبل الطباعة على الشيك جرب الطباعة على الورق الأبيض مع وضع اعدادات الطابعة portrait - A4 وحتى تصل إلى أفضل اعدادات ممكنة ولأفضل نتيجة حاول تثبيت الشيك أعلى يمين الورقة و بعدما تتأكد أن الاعدادات التي تستخدمها هي المطلوبة .. توكل على الله</h3>
            </center>
        </div>

    <script>
        function myFunction() {
            window.print();
        }
    </script>
    <script>
        function goBack() {
            window.history.back();
        }
    </script>
    </body>
</html>
