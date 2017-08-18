<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ItemReclaim;

class ItemReclaimController extends Controller
{
	public function index(){
		return view('.itemReclaim', compact('itemReclaim'));
	}
}