@extends('layouts.cheque')
@section('content')
    <!-- BEGIN LOGIN FORM -->
{{--    <form class="SMS-form" action="{{ url('/sms') }}" method="GET">--}}
{{--        {!! csrf_field() !!}--}}
        <h3 style="font-weight: bold" class="form-title font-green">أدخل بيانات التبرع عن طريق الرسائل النصية</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> تأكد من إدخال البيانات </span>
        </div>
        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">الرقم الذي تريد إرسال الرسالة له :</label>
            <input class="form-control form-control-solid placeholder-no-fix number" id="number" type="text" autocomplete="off" placeholder="الرقم الذي تريد إرسال الرسالة له : 5421" name="number"/>
            @if ($errors->has('number'))
                <span class="help-block">
                                            <strong>{{ $errors->first('number') }}</strong>
                                        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('text') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">النص المراد إرساله :</label>
            <input class="form-control form-control-solid placeholder-no-fix text" onkeyup="textAreaAdjust(this)" type="text" id="text" autocomplete="off" placeholder="النص المراد إرساله : 1" name="text" value="@if(Request::segment(2) !== null){{ Request::segment(2)}} @else{{ old('text') }}@endif"/>
            @if ($errors->has('text'))
                <span class="help-block">
                                            <strong>{{ $errors->first('text') }}</strong>
                                        </span>
            @endif
        </div>
        <center>
            <div class="mt-clipboard-container">
                <textarea rows="4" id="mt-target-1" class="form-control text-center"></textarea>
                <br>
                <br>
                <br>
{{--                <code class="center-text" id="mt-target-1"></code>--}}
                <a href="javascript:;" class="btn btn-lg green mt-clipboard copy" data-clipboard-action="copy" data-clipboard-target="#mt-target-1">
                    <i class="icon-note"></i> نسخ للحافظة </a>
                <a href="javascript:;" class="btn btn-lg yellow-casablanca testUrl">
                    <i class="icon-bubbles"></i> تجربة </a>
            </div>

{{--            <div class="row align-center">--}}

{{--                <div class="large-6 medium-10 small-12 column copy-region">--}}

{{--                    <button id="toClipboard" class="btn btn-large btn-circle green uppercase copy-btn" data-tooltip="نسخ إلى الحافظة">--}}
{{--                        <span class="octicon light octicon-clippy"></span>--}}
{{--                    </button>--}}

{{--                    <div class="link-container">--}}
{{--                        <code class="center-text" id="result"></code>--}}
{{--                    </div>--}}

{{--                </div>--}}
{{--            </div>--}}
            @if ($errors->has('kind'))
                <span class="help-block" style="color: red">
                                            <strong>{{ $errors->first('kind') }}</strong>
                                        </span>
            @endif</center>
        <div class="form-actions">
            <center>
            {{--<button type="button" class="btn green uppercase">راجحي صغير</button>--}}
{{--            <button type="submit" class="btn btn-large btn-circle green uppercase">طباعة الشيك</button>--}}
            {{--<button type="button" class="btn green uppercase">الرياض</button>--}}
            {{--<button type="button" class="btn green uppercase">الأهلي</button>--}}
            {{--<button type="button" class="btn green uppercase">الإنماء</button>--}}
            {{--<button type="button" class="btn green uppercase">البلاد</button>--}}
            </center>
        </div>
{{--    </form>--}}
@endsection
