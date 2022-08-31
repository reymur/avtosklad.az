
<div class="">
    @if( isset($viewed_cars) && count($viewed_cars) > 0 )
        <div class="">
            <p class="fw-bold text-uppercase fs-5">Populyar markalar</p>
        </div>
        <div class="row row-cols-lg-6 row-cols-md-2 row-cols-sm-1 mx-1">
            @foreach( $viewed_cars as $car_name)
                <div class="col">
                    {{ $car_name->name }} {{ $car_name->id }}
                </div>
            @endforeach
        </div>
        <div class="mt-2">
            <a href="" class="show__all-text">Hamısını göstər</a>
        </div>
    @else
        @if( isset($car_names) && count($car_names) > 0 )
            <div class="">
                <p class="fw-bold text-uppercase fs-5">Bütün markalar</p>
            </div>
            <div class="row row-cols-lg-6 row-cols-md-2 row-cols-sm-1 mx-1">
                @foreach( $car_names as $car_name)
                    <div class="col ">
                        {{ $car_name->name }} {{ $car_name->id }}
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</div>
