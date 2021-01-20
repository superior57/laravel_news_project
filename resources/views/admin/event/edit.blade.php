@extends('layouts.app')

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-6">
    		<h2>Edit Event</h2>
    	</div>
    	<div class="col-md-6">
    		<div class="float-right">
    			<a href="{{ route('event.index') }}" class="btn btn-primary">Back</a>
    		</div>
    	</div>
    	<br>
        <div class="col-md-12">
        	@if (session('success'))
                <div class="alert alert-success" role="alert">
                    {{ session('success') }}
                </div>
            @endif
            @if (session('error'))
                <div class="alert alert-error" role="alert">
                    {{ session('error') }}
                </div>
            @endif
			<form action="{{ route('event.update', ['event' => $item->id]) }}" method="POST">
				@csrf
                @method('PUT')
				<div class="form-group">
					<label for="title">Title:</label>
					<input type="text" class="form-control" id="title" name="title" value="{{ $item->title }}">
				</div>
				<div class="form-group">
					<label for="description">Description:</label>
					<textarea name="description" class="form-control" id="description" rows="5">{{ $item->description }}</textarea>
				</div>
				<div class="form-group">
					<label for="time">Time:</label>
					<input type="datetime-local" class="form-control" id="time" name="time" value="{{ date("Y-m-d\TH:i", strtotime($item->time)) }}">
				</div>
				<div class="form-group">
					<label for="main_image">Photo: </label>
					<input type="file" class="form-control" id="main_image" name="main_image" value="{{ $item->main_image }}">					
				</div>
				<button type="submit" class="btn btn-primary">Submit</button>
			</form>
        </div>
    </div>
</div>
@endsection