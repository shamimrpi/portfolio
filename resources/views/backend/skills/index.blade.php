@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				<h2 class="text-center"> Skills Information Table</h2>
				<a href="{{route('skills.create')}}" class="btn btn-info fa fa-plus float-sm-right"> Add Skill</a>
				<br>
				<br>
				<hr>
				<div class="row">
				
					<table class="table table-dark table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center">#SL</th>
								<th class="text-center">Fontawesome</th>
								<th class="text-center">Name</th>
							
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($skills as $key=> $skill)
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td class="text-center" style="font-size: 25px">{!!$skill->fonts!!}</td>
								<td class="text-center">{{$skill->name}}</td>
							
								<td class="text-center">
									<a class="btn btn-info fa fa-edit" href="{{route('skills.edit',$skill->id)}}"></a>
									<a href="javascript:;" class="btn btn-danger fas fa-trash-alt sa-delete" data-form-id="skill-delete-{{$skill->id}}"></a>

		                              <form id="skill-delete-{{$skill->id}}" action="{{route('skills.delete',$skill->id)}}" method="POST">
		                                @csrf
		                                @method('DELETE')
		                            
		                               
		                              </form>
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