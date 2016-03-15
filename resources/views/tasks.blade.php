<!-- resources/views/tasks.blade.php -->
@extends('layouts.app')
@section('content')

	<!--Botstrap Boilerplate... -->

	<div class="panel-body">
	@include('common.errors')

	<!-- New Task Form -->
		<form action="{{url('task')}}" method="POST" class="from-horizontal">

			{!! csrf_field() !!}
			<!-- Task Name -->
			<div class = "form-group">
				<lable for="task" class ="col-sm-3 control-label">Task</lable>

				<div class="col-sm-6">
					<input type="text" name="name" id="task-name" class="form-control">
				</div>
			</div>

			<!-- Add Task Button -->
			<div class="form-group">
				<div class="col-sm-offset-3 col-sm-6">
					<button type="submit" class="btn btn-default">
						<i class="fa fa-plus"></i> Add Task
					</button>
				</div>
			</div>
		</form>
	</div>
@endsection

