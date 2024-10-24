@if(!empty(session('sucess')))
<div class="alert-alert-sucess" role="alert">
    {{session('success')}}
</div>
@endif

@if(!empty(session('error')))
<div class="alert-alert-danger" role="alert">
    {{session('error')}}
</div>
@endif

@if(!empty(session('warning')))
<div class="alert-alert-warning" role="alert">
    {{session('warning')}}
</div>
@endif

@if(!empty(session('info')))
<div class="alert-alert-info" role="alert">
    {{session('info')}}
</div>
@endif

@if(!empty(session('secondary')))
<div class="alert-alert-secondary" role="alert">
    {{session('secondary')}}
</div>
@endif