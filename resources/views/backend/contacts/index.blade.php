@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				<h2 class="text-center"> Contact Information Table</h2>
				<a href="{{route('contacts.create')}}" class="btn btn-info fa fa-plus float-sm-right"> Add Contact</a>
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
							@foreach($contacts as $key=> $contact)
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td class="text-center" style="font-size: 25px">{!!$contact->fonts!!}</td>
								<td class="text-center">{{$contact->name}}</td>
							
								<td class="text-center">
									<a class="btn btn-info fa fa-edit" href="{{route('contacts.edit',$contact->id)}}"></a>
									<a href="javascript:;" class="btn btn-danger fas fa-trash-alt sa-delete" data-form-id="contact-delete-{{$contact->id}}"></a>

		                              <form id="contact-delete-{{$contact->id}}" action="{{route('contacts.delete',$contact->id)}}" method="POST">
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