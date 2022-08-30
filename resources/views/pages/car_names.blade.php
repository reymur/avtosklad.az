
<div class="">
    @if( isset($car_names) && count($car_names) > 0 )
        <div class="row row-cols-lg-6 row-cols-md-4 row-cols-sm-1">
            @foreach( $car_names as $car_name)
                <div class="col ">
                    {{ $car_name->name }} {{ $car_name->id }}
                </div>
            @endforeach
        </div>
    @endif
</div>
