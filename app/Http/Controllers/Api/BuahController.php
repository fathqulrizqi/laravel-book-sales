<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Buah;
use Illuminate\Http\Request;
// use Illuminate\Support\Facades\DB; // dipakai php native dan query builder

class BuahController extends Controller 
{
    public function index(){ //index untuk kirim semua data 
        // $buah = DB::select('SELECT * FROM buah'); // PHP Native
        // $buah = DB::table('movies')->get(); //query builder

        $buah = Buah::all();
        return response()->json($buah);
    }
}
?>