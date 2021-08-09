@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				<h2 class="text-center"> Education Information Table</h2>
				<hr>
				<div class="row">
				
					<table class="table table-dark table-bordered table-hover">
						<thead>
							<tr>
								<th>#SL</th>
								<th>Year</th>
								<th>Examination Name</th>
								<th>Institute Name</th>
								<th>Result</th>
								<th>Duration</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($educations as $key=> $education)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$education->year}}</td>
								<td>{{$education->exam_name}}</td>
								<td>{{$education->institute_name}}</td>
								<td>{{$education->result}}</td>
								<td>{{$education->duration}}</td>
								<td>
									<a class="btn btn-info fa fa-edit" href="{{route('education.edit',$education->id)}}"></a>
								</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>




@endsection