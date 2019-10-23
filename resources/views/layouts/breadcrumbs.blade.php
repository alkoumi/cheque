<!-- BEGIN BREADCRUMBS -->
{{--{{Request::segment(1)}}--}}
<div class="breadcrumbs hidden-print" dir="rtl">
    <h1 class="page-title" style="font-weight: 600"><a href="{{url('/')}}"> <i class="fa-fw fa fa-home"></i> {{ trans('web.dashboard') }} </a>
        <?php   $segment =10 ?>
        @for($i = 1;$i < $segment ;$i++)
        @if(!empty(Request::segment($i)) and !is_numeric(Request::segment($i)))
                <span>> <a href="{{url(Request::segment($i))}}" class="active">{{trans('web.'.Request::segment($i))}}</a></span>
        @endif
        @endfor
    </h1>
    {{--<ol class="breadcrumb">--}}
        {{----}}
        {{--<li>--}}
            {{--<a href="{{url('/')}}" class="active">{{trans('web.dashboard')}}</a>--}}
        {{--</li>--}}
        {{--<li class="active">{{trans('web.dashboard')}}</li>--}}
    {{--</ol>--}}
</div>
<!-- END BREADCRUMBS -->