<!-- resources/views/common/errors.blade.php -->

@if (count($error)>0)
	<!-- Form Error List -->
	<div class="alert alert-danger">
		<strong>Whoops! Something went wrong!</strong>

		<br><br>

		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
@endif