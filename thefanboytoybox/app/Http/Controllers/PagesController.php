<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class PagesController extends Controller {

	public function welcome()
	{
		return view('pages.welcome');
	}

	public function about()
	{
		return view('pages.about');
	}

	public function collectible_stores()
	{
		return view('pages.collectible_stores');
	}

	public function autograph_sellers()
	{
		return view('pages.autograph_sellers');
	}

	public function live_events()
	{
		return view('pages.live_events');
	}

	public function profile()
	{
		return view('pages.profile');
	}

	public function contact()
	{
		return view('pages.contact');
	}

}
