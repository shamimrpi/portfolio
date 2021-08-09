@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<form action="{{route('education.update',$education->id)}}" method="POST" id="educationForm">
					@csrf
					@method('PUT')
					<h2 class="text-center">Education Update</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Year</label>
								<input type="text" class="form-control" name="year" value="{{$education->year}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Examination Name</label>
								<input type="text" class="form-control" name="exam_name" value="{{$education->exam_name}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Institute Name</label>
								<input type="text" class="form-control" name="institute_name" value="{{$education->institute_name}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Result</label>
								<input type="text" class="form-control" name="result" value="{{$education->result}}">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Duration</label>
								<input type="text" class="form-control" name="duration" value="{{$education->duration}}">
							</div>
						</div>
					
						
						<div class="col-md-4">
							<button class="btn btn-success" style="margin-top: 32px;" type="submit">Update</button>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>




@endsection