@extends('layouts.app')

@section('content')
    <!--Main Section-->
    @include('sections.main_section')

    <!--Search More section-->
    @include('sections.search_more')

    <div class="container-xl container-lg p-3 car__names-bg-color">
        <!--Car Names page-->
        @include('pages.car_names')
    </div>
@endsection
