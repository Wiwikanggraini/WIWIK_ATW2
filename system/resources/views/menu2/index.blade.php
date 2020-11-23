@extends('template.base')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-md-10 mt-5">
			<div class="card">
			<div class="card-header">
				Filter
			</div>

			<div class="card-body">
				<form action="{{url('template/menu2/Filter')}}" method="post">
					@csrf
					<div class="form-group">
						<label for="" class="controll-label">Nama</label>
						<input type="text" class="form-control" name="nama">
					</div>
					<button class="btn btn-dark float-right"><i class="fa fa-search"></i>i>Filter</button>

				</form>

			<div class="card">
				<div class="card-header">
					Data Menu
					<a href="{{url('menu2/create')}}" class="btn btn-dark float-right"><i class="fa fa-plus"></i>Tambah Data</a>
				</div>
				<div class="card-body">
					<table class="table">
							<thead>
									<th>No</th>
									<th>Aksi</th>
									<th>Id</th>
									<th>Nama</th>
									<th>Jenis</th>
									<th>Harga</th>
									<th>Deskripsi</th>
									<th>stok</th>
							</thead>
							<tbody>
								@foreach($list_menu2 as $menu2)
								<tr>
									<td>{{$loop->iteration}}</td>
									<td>

										<div class="btn-group">
											<a href="{{url('menu2', $menu2->id)}}" class="btn btn-dark"><i class="fa fa-info"></i></a>

											<a href="{{url('menu2', $menu2->id)}}/edit" class="btn btn-warning"><i class="fa fa-edit"></i></a>
										
										</div>

									</td>
									<td>{{$menu2->id}}</td>
									<td>{{$menu2->nama}}</td>
									<td>{{$menu2->jenis}}</td>
									<td>{{$menu2->harga}}</td>
									<td>{{$menu2->deskripsi}}</td>
									<td>{{$menu2->stok}}</td>
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