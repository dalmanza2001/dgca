@if (session('message'))
	<div class="alert alert-success" role="alert">
	  	<span class="glyphicon glyphicon-ok-sign" aria-hidden="true"></span>
		{{ session('message') }}
	</div>
@endif