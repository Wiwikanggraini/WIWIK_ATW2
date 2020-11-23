@extends('template.base')
@section('content')

	<div class = "container">
		<div class = "row">
			<div class = "col-md-10 mt-5">
				<div class = "card">
					<div class ="card-header">
					Tambah Data Menu
					</div>
					<div class="card-body">
					<form action="{{url('menu2', $menu2->id)}}" method="post">
						@csrf
						@method('PUT')
					<div class="form-group">
						<label for="" class ="control-label">Id</label>
						<input type="text" class="form-control" name="id" value="{{$menu2->id}}">
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="form-group">
								<label for="" class ="control-label">Nama</label>
								<input type="text" class="form-control" name="nama" value="{{$menu2->nama}}">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="" class ="control-label">Jenis</label>
								<input type="text" class="form-control" name="jenis" value="{{$menu2->jenis}}">
							</div>
						</div>

						<div class="col-md-3">
							<div class="form-group">
								<label for="" class ="control-label">Harga</label>
								<input type="text" class="form-control" name="harga" value="{{$menu2->harga}}">
							</div>
						</div>						
					</div>
					
							<div class="form-group">
								<label for="" class ="control-label">Deskripsi</label>
								<textarea name="deskripsi" class="form-control">{{$menu2->deskripsi}}</textarea>
							</div>

					<div class="form-group">
						<label for="" class ="control-label">Stok</label>
						<input type="text" class="form-control" name="stok" value="{{$menu2->stok}}">
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