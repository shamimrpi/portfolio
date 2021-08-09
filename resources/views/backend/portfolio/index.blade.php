@extends('backend.main.main')
@section('main_content')
	<div class="box">
		<div class="card-body">

			<div class="container">
				<h2 class="text-center"> Portfolio Information Table</h2>
				<a href="{{route('portfolio.create')}}" class="btn btn-info fa fa-plus float-sm-right"> Add Portfolio</a>
				<br/>
				<br/>
				<hr>
				<div class="row">
				
					<table class="table table-dark table-bordered table-hover">
						<thead>
							<tr>
								<th class="text-center">#SL</th>
								<th class="text-center">Heading</th>
								<th class="text-center">Image</th>
								<th class="text-center">Link</th>
								<th class="text-center">Action</th>
							</tr>
						</thead>
						<tbody>
							@foreach($portfolios as $key=> $portfolio)
							<tr>
								<td class="text-center">{{$key+1}}</td>
								<td class="text-center">{{$portfolio->heading}}</td>
								<td class="text-center">
									<img src="{{(!empty($portfolio->image))?url('upload/portfolio/'.$portfolio->image):''}}" style="height: 100px;width: 100px">
								</td>
								<td class="text-center">{{$portfolio->link}}</td>
								<td class="text-center">

									<a class="btn btn-info fa fa-edit" href="{{route('portfolio.edit',$portfolio->id)}}"></a>
									 <a href="javascript:;" class="btn btn-danger fas fa-trash-alt sa-delete" data-form-id="portfolio-delete-{{$portfolio->id}}"></a>

		                              <form id="portfolio-delete-{{$portfolio->id}}" action="{{route('portfolio.delete',$portfolio->id)}}" method="POST">
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