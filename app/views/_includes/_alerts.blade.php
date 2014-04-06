@foreach ($errors->all('<div class="alert alert-danger">:message</div>') as $error)
{{ $error }}
@endforeach

@if (Session::has('alert'))
<div class="alert">{{ Session::get('alert') }}</div>
@endif

@if (Session::has('alertSuccess'))
<div class="alert alert-success">{{ Session::get('alertSuccess') }}</div>
@endif

@if (Session::has('alertInfo'))
<div class="alert alert-info">{{ Session::get('alertInfo') }}</div>
@endif


@if ($message = Session::get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	{{ $message }}
</div>
@endif