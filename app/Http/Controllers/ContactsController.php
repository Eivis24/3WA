<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class ContactsController extends Controller
{
	public function index(){
		return view('.contacts', compact('contacts'));
	}
}