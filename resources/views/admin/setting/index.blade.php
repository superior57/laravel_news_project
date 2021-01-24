@extends('layouts.app')

@section('content')
<div class="container">
	<br>
    <div class="row justify-content-center">
    	<div class="col-md-12">
    		<h2>Main page settings</h2>
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
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_img">News image:</label>	
					<input type="file" class="form-control" id="news_img" name="news_img" accept="image/*">					
					<div class="text-center py-3">
						<img width="300" src="{{ asset($settings->news_img) }}" alt="">
					</div>					
				</div>
			</form>
			<form id="f_news_video" name="f_news_video" action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_video">News video:</label>
					<input type="file" class="form-control" id="news_video" name="news_video" accept="video/*">
					<div class="text-center py-3">
						<video src="{{ asset($settings->news_video) }}" width="300" controls></video>
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_img">Artist image:</label>					
					<input type="file" class="form-control" id="artist_img" name="artist_img" accept="image/*">
					<div class="text-center py-3">
						<img width="300" src="{{ asset($settings->artist_img) }}" alt="">
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_video">Artist video:</label>
					<input type="file" class="form-control" id="artist_video" name="artist_video" accept="video/*">
					<div class="text-center py-3">
						<video src="{{ asset($settings->artist_video) }}" width="300" controls></video>
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_img">Project image:</label>					
					<input type="file" class="form-control" id="project_img" name="project_img" accept="image/*">
					<div class="text-center py-3">
						<img width="300" src="{{ asset($settings->project_img) }}" alt="">
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_video">Project video:</label>
					<input type="file" class="form-control" id="project_video" name="project_video" accept="video/*">
					<div class="text-center py-3">
						<video src="{{ asset($settings->project_video) }}" width="300" controls></video>
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_img">Shop image:</label>					
					<input type="file" class="form-control" id="shop_img" name="shop_img" accept="image/*">
					<div class="text-center py-3">
						<img width="300" src="{{ asset($settings->shop_img) }}" alt="">
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_video">Shop video:</label>
					<input type="file" class="form-control" id="shop_video" name="shop_video" accept="video/*">
					<div class="text-center py-3">
						<video src="{{ asset($settings->shop_video) }}" width="300" controls></video>
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_img">Contact us image:</label>					
					<input type="file" class="form-control" id="contact_us_img" name="contact_us_img" accept="image/*">
					<div class="text-center py-3">
						<img width="300" src="{{ asset($settings->contact_us_img) }}" alt="">
					</div>
				</div>
			</form>
			<form action="{{ route('settings.store') }}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="form-group">
					<div class=" text-right">
						<button type="submit" class="btn btn-success">Save</button>
					</div>
					<label for="news_video">Contact us video:</label>
					<input type="file" class="form-control" id="contact_us_video" name="contact_us_video" accept="video/*">
					<div class="text-center py-3">
						<video src="{{ asset($settings->contact_us_video) }}" width="300" controls></video>
					</div>
				</div>
			</form>
				{{-- <button type="submit" class="btn btn-primary">Submit</button> --}}

        </div>
    </div>
</div>
@endsection