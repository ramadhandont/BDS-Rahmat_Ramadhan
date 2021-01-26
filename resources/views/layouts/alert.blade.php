
@if ($message = Session::get('success_log'))
    <div class="alert alert-success alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
        <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('error_log'))
    <div class="alert alert-danger alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
    <strong>{{ $message }}</strong>
    </div>
@endif

@if ($message = Session::get('warning_log'))
    <div class="alert alert-warning alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('warning_log_lst'))
    <div class="alert alert-warning alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('success_logout'))
    <div class="alert alert-info alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
    <strong>{{ $message }}</strong>
</div>
@endif

@if ($message = Session::get('info'))
    <div class="alert alert-info alert-block">
    <!-- <button type="button" class="close" data-dismiss="alert">×</button>  -->
    <strong>{{ $message }}</strong>
    </div>
@endif