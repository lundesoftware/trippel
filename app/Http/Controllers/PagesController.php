<?php

namespace App\Http\Controllers;

class PagesController extends Controller {

	# actions
	public function getIndex() {
		return view('pages.welcome');
	}
	
	public function getAbout() {
		$first = "Tron";
		$last = "Lunde";
		$fullname = $first." ".$last;
		$email = "tron.lunde@gmail.com";
		$data = [];
		$data['email'] = $email;
		$data['fullname'] = $fullname;
		return view('pages.about')->withData($data);
	}
	
	public function getContact() {
		return view('pages.contact');
	}
	
}
