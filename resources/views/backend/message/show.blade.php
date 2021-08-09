
@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				
						<br/>
						<br/>
				<div class="row">
				
					<table class="table table-dark table-bordered table-hover">
						
								<tr>
									<th class="text-center">From</th>
									<td class="text-center">{{$message->name}}</td>
								</tr>
								<tr>
									<th class="text-center">Email</th>
									<td class="text-center">{{$message->email}}</td>
								</tr>
								<tr>
									<th class="text-center">Phone</th>
									<td class="text-center">{{$message->phone}}</td>
								</tr>
								<tr>
									<th class="text-center">Description</th>
									<td class="text-center">{{$message->description}}</td>
								</tr>
								
						
					</table>
				</div>
			</div>
		</div>
	</div>




@endsection