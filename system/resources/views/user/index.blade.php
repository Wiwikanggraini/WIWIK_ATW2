@extends('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 mt-5">
			<div class="card">
				<div class="card-header">
					Data Menu
					<a href="{{url('template/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah User</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>Id</th>
									<th>Username</th>
									<th>Email</th>
									<th>Nama</th>
									<th>Password</th>
									<th>Remember_token</th>
									
							</thead>
							<tbody>
								@foreach($list_user as $user)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>

										<div class="btn-group">
											<a href="{{url('template', $user->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>

											<a href="{{url('template', $user->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										
										</div>

									</td>
									<td>{{$user->Id}}</td>
									<td>{{$user->Username}}</td>
									<td>{{$user->Email}}</td>
									<td>{{$user->Nama}}</td>
									<td>{{$user->Password}}</td>
									<td>{{$user->Remember_token}}</td>
								</tr>
								@endforeach
							</tbody>	
								
					</table>
				</div>
			</div>	
		</div>	
	</div>	
</div>
@endsection