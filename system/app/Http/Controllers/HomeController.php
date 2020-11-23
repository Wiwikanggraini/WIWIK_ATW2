<?php 

namespace App\Http\Controllers;

class HomeController extends Controller {

	function showHome (){
		return view('home');
	}

	function showMenu () {
		return view('menu');
	}

	function showStuff () {
		return view('stuff');
	}

	
	function showContact () {
		return view('contact');
	}
	
	function showTemplate () {
		return view('template');
	}

	function showmenu2 () {
		return view('menu2');
	}

	function showStuff2 () {
		return view('stuff2');
	}

	function showProductCart () {
		return view('product-cart');
	}

	function showProductPayment () {
		return view('product-payment');
	}

	function showInbox () {
		return view('inbox');
	}

	function showViewMail () {
		return view('view-mail');
	}

	function showCompose () {
		return view('compose');
	}
	function test ($menu2) {
		echo "test";
		if ($produk == 'sate') {
			echo "Tampilkan Menu Sate";
		}elseif ($menu == 'sate') {
			echo "menu sate";
			# code...
		}
	}
