@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<a href="{{route('portfolio')}}" class="btn btn-info fa fa-plus float-sm-right"> Back Portfolio</a>
				<form action="{{route('portfolio.store')}}" method="POST" id="educationForm" enctype="multipart/form-data">
					@csrf
					<h2 class="text-center">Portfolio Create</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Heading</label>
								<input type="text" class="form-control" name="heading" placeholder="Enter Heading">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Image</label>
								<input type="file" class="form-control" name="image" placeholder="Enter Exanmination Name" id="imgload">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Portfolio Link</label>
								<input type="text" class="form-control" name="link" placeholder="Enter Link">
							</div>
						</div>
						
					
						
						<div class="col-md-4">
							<button class="btn btn-success"  style="margin-top: 32px;" type="submit">Submit</button>
						</div>

						<div class="col-md-4">
							<label for="name">Now You Select</label>
								<img id="showImage" src="{{asset('upload/no_found.png')}}"  style="height: 150px;width: 200px;border: 1px solid #eee">
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>




@endsection