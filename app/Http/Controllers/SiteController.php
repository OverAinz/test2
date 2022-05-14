<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\File;
use App\Models\Image;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SiteController extends Controller
{
    function index(){
        return view('inicio');
    }

    function formulario(){
        return view('formulario');
    }

    function up(Request $datos){
        $name = $datos->imagen->getClientOriginalName();
        $path = $datos->file('imagen')->storeAs('public', $name);

        DB::table('images')->insert([
            'name' => $name,
            'path' => $path,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        return view('inicio');
    }
}
