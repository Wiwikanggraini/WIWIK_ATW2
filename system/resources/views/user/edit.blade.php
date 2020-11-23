@extends('template.base')
@section('content')

	<div class = "container">
		<div class = "row">
			<div class = "col-md-10 mt-5">
				<div class = "card">
					<div class ="card-header">
					Edit User
					</div>
					<div class="card-body">
					<form action="{{url('template/user', $user->id)}}" method="post">
						@csrf
						@method('put')
					
					<div class="form-group">
						<label for="" class ="control-label">Id</label>
						<input type="id" class="form-control" name="id value="{{$user->id}}">
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class ="control-label">Username</label>
								<input type="text" class="form-control" name="username value="{{$user->usrename}}">
							</div>
						</div>
							<div class="col-md-6">
								<div class="form-group">
								<label for="" class ="control-label">Email</label>
								<input type="email" class="form-control" name="email value="{{$user->email}}">
							</div>
						</div>


						<<div class="col-md-6">
								<div class="form-group">
								<label for="" class ="control-label">Nama</label>
								<input type="text" class="form-control" name="nama value="{{$user->nama}}">
							</div>
						</div>						
					</div>
					
							<div class="col-md-6">
								<div class="form-group">
								<label for="" class ="control-label">Password</label>
								<input type="password" class="form-control" name="nama value=">
							</div>
							<div class="col-md-6">
								<div class="form-group">
								<label for="" class ="control-label">Password</label>
								<input type="password" class="form-control" name="nama value=">
							</div>


					<div class="form-group">
						<label for="" class ="control-label">No HP</label>
						<input type="text" class="form-control" name=no_handphone="{{$user->}}">
					</div>	
							
					<button class = "btn btn-dark float-right"><i class="fa fa-save"></i>Simpan</button>
					</form>
						<table>
							
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection 