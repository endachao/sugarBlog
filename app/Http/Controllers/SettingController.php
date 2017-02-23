<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;

class SettingController extends Controller
{
	public function __construct () 
	{
		// session::put('key', 'value');
	}

	/**
	 * 通用设置
	 */
	public function index ()
	{
		// dd(session::all());
		// die;
		return view('setting.index');
	}
}
