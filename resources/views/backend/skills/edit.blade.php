@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<a href="{{route('skills')}}" class="btn btn-info fa fa-plus float-sm-right"> Back Skills</a>
				<form action="{{route('skills.update',$skill->id)}}" method="POST" id="skillsForm" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<h2 class="text-center">Skill Create</h2>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Fontsawesome</label>
								<input type="text" class="form-control" name="fonts" value="{{$skill->fonts}}">
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Skills name</label>
								<input type="text" class="form-control" name="name" value="{{$skill->name}}">
							</div>
						</div>
						
					
						
						<div class="col-md-4">
							<button class="btn btn-success"  style="margin-top: 32px;" type="submit">Update</button>
						</div>

						
					</div>
				</form>
			</div>
		</div>
	</div>




@endsection