@extends('layouts.cheque')
@section('content')
    <!-- BEGIN LOGIN FORM -->
    <form class="cheque-form" action="{{ url('/printCheque') }}" method="post">
        {!! csrf_field() !!}
        <h3 style="font-weight: bold" class="form-title font-green">أدخل بيانات الشيك</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> تأكد من إدخال البيانات </span>
        </div>
        {{--<div class="form-group{{ $errors->has('national_id') ? ' has-error' : '' }}">--}}
            {{--<!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->--}}
            {{--<label class="control-label visible-ie8 visible-ie9">التاريخ</label>--}}
            {{--<input class="form-control form-control-solid placeholder-no-fix" type="number" placeholder="التاريخ" name="national_id" value="{{ old('national_id') }}"/>--}}
            {{--@if ($errors->has('national_id'))--}}
                {{--<span class="help-block">--}}
                                            {{--<strong>{{ $errors->first('national_id') }}</strong>--}}
                                        {{--</span>--}}
            {{--@endif--}}
        {{--</div>--}}
        <div class="form-group{{ $errors->has('country') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">حرر في :</label>
            <input class="form-control form-control-solid placeholder-no-fix country" type="text" autocomplete="on" placeholder="حرر في : مثال : الجبيل" name="country" value="@if(Request::segment(1) !== null){{ Request::segment(1)}} @else{{ old('country') }}@endif"/>
            @if ($errors->has('country'))
                <span class="help-block">
                                            <strong>{{ $errors->first('country') }}</strong>
                                        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('payTo') ? ' has-error' : '' }}">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">إدفعوا لأمر :</label>
            <input class="form-control form-control-solid placeholder-no-fix payTo" type="text" autocomplete="on" placeholder="إدفعوا لأمر : مثال : مكتب الدعوة بالجبيل" name="payTo" value="@if(Request::segment(2) !== null){{ Request::segment(2)}} @else{{ old('payTo') }}@endif"/>
            @if ($errors->has('payTo'))
                <span class="help-block">
                                            <strong>{{ $errors->first('payTo') }}</strong>
                                        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('money') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">المبلغ</label>
            <input class="form-control form-control-solid placeholder-no-fix money" type="number" autocomplete="on" placeholder="المبلغ : مثال : 5434" name="money" data-money="{{ Request::segment(3) }}" value="{{ Request::segment(3) }}"/>
            @if ($errors->has('money'))
                <span class="help-block">
                                            <strong>{{ $errors->first('money') }}</strong>
                                        </span>
            @endif
        </div>
        <div class="form-group{{ $errors->has('note') ? ' has-error' : '' }}">
            <label class="control-label visible-ie8 visible-ie9">ملاحظات</label>
            <input class="form-control form-control-solid placeholder-no-fix" type="text" autocomplete="on"  placeholder="ملاحظات : مثال : تبرع لبرامج دعوة غير المسلمين" name="note" value="{{ old('note') }}"/>
            @if ($errors->has('note'))
                <span class="help-block">
                                            <strong>{{ $errors->first('note') }}</strong>
                                        </span>
            @endif
        </div>
        <center>
        <div class="form-group margin-top-20 {{ $errors->has('kind') ? ' has-error' : '' }}">
            <div class="row">
                {{--<div class="col-md-12 col-md-3" style="background-color: #dde3ec;border-radius: 10px;">--}}
                        <div class="md-radio-inline">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio0" name="kind" class="md-radiobtn" value="0" checked>
                                    <label for="radio0">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> راجحي كبير </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio1" name="kind" class="md-radiobtn" value="1">
                                    <label for="radio1">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> راجحي صغير </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio10" name="kind" class="md-radiobtn" value="10">
                                    <label for="radio10">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> راجحي تميز </label>
                                </div>
                            </div>
                        </div>
                {{--</div>--}}
                <br><br>
                {{--<div class="col-md-12 col-md-3" style="background-color: #dde3ec;border-radius: 10px;">--}}
                        <div class="md-radio-inline">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio3" name="kind" class="md-radiobtn" value="3">
                                    <label for="radio3">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> أهلي أبيض</label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio9" name="kind" class="md-radiobtn" value="9">
                                    <label for="radio9">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> أهلي أصفر</label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio4" name="kind" class="md-radiobtn" value="4">
                                    <label for="radio4">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> الإنـــــــمـــــــــاء </label>
                                </div>
                            </div>
                        </div>
                {{--</div>--}}
                <br><br>
                {{--<div class="col-md-12 col-md-3" style="background-color: #dde3ec;border-radius: 10px;">--}}
                        <div class="md-radio-inline">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio6" name="kind" class="md-radiobtn" value="6">
                                    <label for="radio6">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> ســــــــــــاب </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio7" name="kind" class="md-radiobtn" value="7">
                                    <label for="radio7">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> الـــــجزيــــــرة </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio8" name="kind" class="md-radiobtn" value="8">
                                    <label for="radio8">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> البنك الأول </label>
                                </div>
                            </div>
                        </div>
                {{--</div>--}}
                <br><br>
                {{--<div class="col-md-12 col-md-3" style="background-color: #dde3ec;border-radius: 10px;">--}}
                        <div class="md-radio-inline">
                            <div class="col-sm-4 col-md-4 col-lg-4">
                              <div class="md-radio pull-center">
                                  <input type="radio" id="radio5" name="kind" class="md-radiobtn" value="5">
                                  <label for="radio5">
                                      <span></span>
                                      <span class="check"></span>
                                      <span class="box"></span> الـــــبــــــلاد </label>
                              </div>
                          </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <input type="radio" id="radio2" name="kind" class="md-radiobtn" value="2">
                                    <label for="radio2">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> الريـــــــاض </label>
                                </div>
                            </div>
                            <div class="col-sm-4 col-md-4 col-lg-4">
                                <div class="md-radio pull-center">
                                    <!-- <input type="radio" id="##" name="##" class="md-radiobtn" value="#">
                                    <label for="##">
                                        <span></span>
                                        <span class="check"></span>
                                        <span class="box"></span> القادم</label> -->
                                </div>
                            </div>
                        </div>
                {{--</div>--}}

            </div>
            {{--<div class="col-md-12 col-md-3" style="background-color: #dde3ec;border-radius: 10px;">--}}
                {{--<div class="md-radio-inline">--}}
                    {{--<div class="col-md-2">--}}
                        {{--<div class="md-radio">--}}
                            {{--<input type="radio" id="radio6" name="kind" class="md-radiobtn" value="6">--}}
                            {{--<label for="radio6">--}}
                                {{--<span></span>--}}
                                {{--<span class="check"></span>--}}
                                {{--<span class="box"></span> الجزيرة </label>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



        {{--</div>--}}
            @if ($errors->has('kind'))
                <span class="help-block" style="color: red">
                                            <strong>{{ $errors->first('kind') }}</strong>
                                        </span>
            @endif</center>
        <div class="form-actions">
            <center>
            {{--<button type="button" class="btn green uppercase">راجحي صغير</button>--}}
            <button type="submit" class="btn btn-large btn-circle green uppercase">طباعة الشيك</button>
            {{--<button type="button" class="btn green uppercase">الرياض</button>--}}
            {{--<button type="button" class="btn green uppercase">الأهلي</button>--}}
            {{--<button type="button" class="btn green uppercase">الإنماء</button>--}}
            {{--<button type="button" class="btn green uppercase">البلاد</button>--}}
            </center>
        </div>
    </form>


@endsection
