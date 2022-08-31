
<div class="container-xl container-lg col-12 d-xl-flex d-lg-flex p-0 align-items-center">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-flex">
        <div class="col-xl-11 col-lg-11 col-md-12 col-sm-12 me-xl-2">
            <!--Search element-->
            @include('inputs.search.search')
        </div>
    </div>

    <div class="col-lg-4 col-md-12 col-sm-12">
        <!--Bur Partials element-->
        @include('elements.buy_partials_button')
    </div>
    <div class="col-lg-4 col-md-12 col-sm-12">
        <!--Announcement element-->
        @include('elements.announcement')
    </div>
</div>
