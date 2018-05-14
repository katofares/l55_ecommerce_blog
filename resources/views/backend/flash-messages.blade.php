@if ($message = Session::get('success'))
    <div class="alert card-success alert-block">
        <strong class="text-white">{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('error'))
    <div class="alert card-danger alert-block">
        <strong class="text-white">{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('warning'))
    <div class="alert card-warning alert-block">
        <strong class="text-white">{{ $message }}</strong>
    </div>
@endif


@if ($message = Session::get('info'))
    <div class="alert card-info alert-block">
        <strong class="text-white">{{ $message }}</strong>
    </div>
@endif


@if ($errors->any())
    <div class="alert card-danger">
        <strong class="text-white">Please check the form below for errors</strong>
    </div>
@endif