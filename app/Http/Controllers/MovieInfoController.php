<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\DB;

use App\Models\Movie;

class MovieInfoController extends Controller
{
    public function listMovies() {
        $data = Movie::paginate(10);

        return view('movie-db-main', ['data'=>$data]);
    }

    public function viewDetails(int $mov_id) {
        $data = Movie::find($mov_id);
        
        return view('movie-detail', ['data'=>$data]);
    }
}
