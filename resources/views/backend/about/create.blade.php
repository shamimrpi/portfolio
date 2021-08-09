@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<form action="{{route('about.store')}}" method="POST" id="aboutForm" enctype="multipart/form-data">
					@csrf
					<h2 class="text-center">Aboute Create</h2>
					<div class="row">
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Name</label>
								<input type="text" class="form-control" name="name">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Image</label>
								<input type="file" class="form-control" name="image" id="imgload">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Age</label>
								<input type="number" class="form-control" name="age">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Qualification</label>
								<input type="text" class="form-control" name="qualification">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Post</label>
								<input type="text" class="form-control" name="post">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Language</label>
								<input type="text" class="form-control" name="lang">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Experience</label>
								<input type="text" class="form-control" name="experience">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">Project</label>
								<input type="text" class="form-control" name="project">
							</div>
						</div>
						<div class="col-md-3">
							<div class="form-group">
								<label for="name">CV Link</label>
								<input type="text" class="form-control" name="cv_link">
							</div>
						</div>
						
						<div class="col-md-4">
							<button class="btn btn-success" style="margin-top:32px" type="submit">Submit</button>
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