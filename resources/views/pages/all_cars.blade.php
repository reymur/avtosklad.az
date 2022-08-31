@extends('layouts.app')

@section('content')
    <!--Main Section-->
    @include('sections.main_section')

    <!--Search More section-->
    @include('sections.search_more')

    <div class="container-xl container-lg all__cars-bg-color">
        @if( isset($all_cars) && count($all_cars) > 0 )
            <div class="">
                <p class="fw-bold text-uppercase fs-5">Bütün markalar</p>
            </div>
            <div class="row row-cols-lg-6 row-cols-md-2 row-cols-sm-1 mx-1">
                @foreach( $all_cars as $car)
                    <div class="col ">
                        {{ $car->name }} {{ $car->id }}
                    </div>
                @endforeach
            </div>
        @endif
    </div>

@endsection
