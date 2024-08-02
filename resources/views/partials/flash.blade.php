@if(session('success'))
<div class="alert alert-primary theme-alert" role="alert">
  {{session('success')}}
</div>
@endif
@if(session('error'))
<div class="alert alert-danger theme-alert" role="alert">
  {{session('error')}}
</div>
@endif
@if(session('warning'))
<div class="alert alert-warning theme-alert" role="alert">
  {{session('warning')}}
</div>
@endif