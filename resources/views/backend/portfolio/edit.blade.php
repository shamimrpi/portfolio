@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<a href="{{route('portfolio')}}" class="btn btn-info fa fa-plus float-sm-right"> Back Portfolio</a>
				<form action="{{route('portfolio.update',$portfolio->id)}}" method="POST" id="educationForm" enctype="multipart/form-data">
					@csrf
					@method('PUT')
					<h2 class="text-center">Portfolio Create</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Heading</label>
								<input type="text" class="form-control" name="heading" value="{{$portfolio->heading}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Image</label>
								<input type="file" class="form-control" name="image" placeholder="Enter Exanmination Name"  id="imgload">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Portfolio Link</label>
								<input type="text" class="form-control" name="link" value="{{$portfolio->link}}">
							</div>
						</div>
						
					
						
						<div class="col-md-4">
							<button class="btn btn-success"  style="margin-top: 32px;" type="submit">Update</button>
						</div>

						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Now You Select</label>
								<img id="showImage" src="{{asset('upload/no_found.png')}}"  style="height: 150px;width: 170px;border: 1px solid #eee">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Portfolio Image</label>
								<img src="{{(!empty($portfolio->image))?url('upload/portfolio/'.$portfolio->image):''}}" style="height: 200px;width: 200px">
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>




@endsection