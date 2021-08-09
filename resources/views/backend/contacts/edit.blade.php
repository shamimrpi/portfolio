@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">
			<div class="container">
				<a href="{{route('contacts')}}" class="btn btn-info fa fa-plus float-sm-right"> Back Contacts</a>
				<form action="{{route('contacts.update',$contact->id)}}" method="POST" id="skillsForm" enctype="multipart/form-data">
					@csrf
					@method("PUT")
					<h2 class="text-center">Contact Create</h2>
					<hr>
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Fontsawesome</label>
								<input type="text" class="form-control" name="fonts" value="{{$contact->fonts}}">
							</div>
						</div>
						
						<div class="col-md-4">
							<div class="form-group">
								<label for="name">Contact name</label>
								<input type="text" class="form-control" name="name" value="{{$contact->name}}">
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