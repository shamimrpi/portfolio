
@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				<a href="{{url('backend/about/edit/1')}}" class="btn btn-info">Edit</a>
						<br/>
						<br/>
				<div class="row">
				
					<table class="table table-dark table-bordered table-hover">
						
								<tr>
									<th class="text-center">Name</th>
									<td class="text-center">{{$about->name}}</td>
								</tr>
								<tr>
									<th class="text-center">Age</th>
									<td class="text-center">{{$about->age}}</td>
								</tr>
								<tr>
									<th class="text-center">Post</th>
									<td class="text-center">{{$about->post}}</td>
								</tr>
								<tr>
									<th class="text-center">Qualification</th>
									<td class="text-center">{{$about->qualification}}</td>
								</tr>
								<tr>
									<th class="text-center">Language</th>
									<td class="text-center">{{$about->lang}}</td>
								</tr>
								<tr>
									<th class="text-center">Experience</th>
									<td class="text-center">{{$about->experience}}</td>
								</tr>
								<tr>
									<th class="text-center">Project</th>
									<td class="text-center">{{$about->project}}</td>
								</tr>
								<tr>
									<th class="text-center">Image</th>
									<td class="text-center">
										<img src="{{(!empty($about->image))?url('upload/portfolio/'.$about->image):''}}" style="height: 100px;width: 100px">
									</td>
								</tr>
								<tr>
									<th class="text-center">Project</th>
									<td class="text-center">{{$about->cv_link}}</td>
								</tr>
							
						
					</table>
				</div>
			</div>
		</div>
	</div>




@endsection