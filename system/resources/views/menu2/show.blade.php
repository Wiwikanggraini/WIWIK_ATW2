@extends ('template.base')

@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="card">
					<div class="card-header">
						Detail Data Menu
					</div>
						<div class="card-body">
							<h3>{{$menu2->nama}}</h3>
							<hr>
							<p>
								Rp. {{number_format($menu2->harga)}} |
								Stok : {{$menu2->stok}} |
								Jenis : {{$menu2->jenis}} 
							</p>
							<p>
								{!! nl2br ($menu2->deskripsi) !!}
							</p>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection