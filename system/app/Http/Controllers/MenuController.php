<?php 
namespace App\Http\Controllers;
use App\Models\menu2;


class MenuController extends Controller{	
	function index(){
		$id_user index = request()->user()->id;

		}
		$data['list_menu2'] = menu2::where('id_user, $id_user')->get();

		return view('menu2.index', $data);
	}
	function create(){
		return view('menu2.create');
	}
	function store(){
		$menu2 = new menu2;
		$menu2->i_user = request ('id');
		$menu2->nama = request ('nama');
		$menu2->jenis = request ('jenis');
		$menu2->harga = request ('harga');
		$menu2->deskripsi = request ('deskripsi');
		$menu2->stok = request ('stok');
		$menu2->save();
			
		return redirect('menu2')->with('success','Data Berhasil Ditambahkan');
		
	}
	function show(menu2 $menu2){
		$data['menu2'] = $menu2;
		return view('menu2.show', $data);
	}
	function edit(menu2 $menu2){
		$data['menu2'] = $menu2;
		return view('menu2.edit', $data);
	}
	function update(menu2 $menu2){
	
		$menu2->id = request ('id');
		$menu2->nama = request ('nama');
		$menu2->jenis = request ('jenis');
		$menu2->harga = request ('harga');
		$menu2->deskripsi = request ('deskripsi');
		$menu2->stok = request ('id');
		$menu2->save();
			
		return redirect('menu2')->with('success','Data Berhasil Diedit');
	}
	function destroy(menu2 $menu2){
		$menu2->delete();

		return redirect('menu2')->with('danger','Data Berhasil Dihapus');

	}
}