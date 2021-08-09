@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<form action="{{route('education.store')}}" method="POST" id="educationForm">
					@csrf
					<h2 class="text-center">Aboute Create</h2>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Year</label>
								<input type="text" class="form-control" name="year" placeholder="Enter Year">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Examination Name</label>
								<input type="text" class="form-control" name="exam_name" placeholder="Enter Exanmination Name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Institute Name</label>
								<input type="text" class="form-control" name="institute_name" placeholder="Enter Institute name">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Result</label>
								<input type="text" class="form-control" name="result" placeholder="Enter Result">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Duration</label>
								<input type="text" class="form-control" name="duration" placeholder="Enter Duration">
							</div>
						</div>
					
						
						<div class="col-md-4">
							<button class="btn btn-success"  style="margin-top: 32px;" type="submit">Submit</button>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Duration</label>
								<input type="text" class="form-control" name="duration" placeholder="Enter Duration">
							</div>
						</div>
						
					</div>
				</form>
			</div>
		</div>
	</div>




@endsection