<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pendidikan;

class PendidikanController extends Controller
{
    public function index() {

        $data = Pendidikan::all();
        return view ('datapendidikan',compact('data'));
    }
    public function tambahdata(){
        return view('tambahdata');
    }
}
