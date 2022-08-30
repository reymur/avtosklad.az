@extends('layouts.app')

@section('content')
    <div class="container-xl container-lg col-12 d-xl-flex d-lg-flex p-0 align-items-center">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-flex">
            <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 me-xl-2">
                <!--Search element-->
                @include('inputs.search.search')
            </div>
{{--            <div class="col-xl-3 col-lg-3 col-md-1 col-sm-1">--}}
{{--                <!--Search More button element-->--}}
{{--                @include('elements.search_more')--}}
{{--            </div>--}}
        </div>

        <div class="col-lg-4 col-md-12 col-sm-12">
            <!--Bur Partials element-->
            @include('elements.buy_partials')
        </div>
        <div class="col-lg-4 col-md-12 col-sm-12">
            <!--Announcement element-->
            @include('elements.announcement')
        </div>
    </div>

    <div class="container-xl container-lg col-12 d-xl-flex d-lg-flex pe-xl-1 pe-lg-1 p-md-0 p-sm-0 pt-xl-0 pt-lg-0 pt-md-2 pb-md-3 t-sm-2 pb-sm-3">
        <div class="col-12">
            <!--Search More button element-->
            @include('elements.search_more')
        </div>
    </div>

    <div class="container-xl container-lg p-3 car__names-bg-color">
        <!--Car Names page-->
        @include('pages.car_names')
    </div>


@endsection
