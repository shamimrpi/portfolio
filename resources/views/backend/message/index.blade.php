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
								<th>From</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Description</th>
								<th>Date</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($messages as $key=> $message)
							<tr>
								<td>{{$key+1}}</td>
								<td>{{$message->name}}</td>
								<td>{{$message->email}}</td>
								<td>{{$message->phone}}</td>
								<td>{{$message->description}}</td>
								<td>{{date('d-M-Y/h:i:s',strtotime($message->created_at))}}</td>
								<td>
									<a class="btn btn-info fa fa-eye" href="{{route('message.show',$message->id)}}"></a>
									<a href="javascript:;" class="btn btn-danger fas fa-trash-alt sa-delete" data-form-id="message-delete-{{$message->id}}"></a>

		                              <form id="message-delete-{{$message->id}}" action="{{route('message.delete',$message->id)}}" method="POST">
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