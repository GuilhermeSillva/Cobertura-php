<?php

namespace Cobertura\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index()
    {
        $realty = DB::table('v_search')->paginate(3);
        return view('home')->with('search', false)->withDetails($realty);
    }

    public function search()
    {
        $query = Input::get('q');
        
        if(!$query) {
            $realty = DB::table('v_search')->paginate(3);
            return view('home')->with('search', $query)->withDetails($realty);
        }

        $realty = DB::table('v_search')
            ->orWhere('title', 'like', '%'.$query.'%')
            ->orWhere('adress', 'like', '%'.$query.'%') 
            ->paginate(9);
        return view('home')->with('search', $query)->withDetails($realty)->withQuery($query);
    }
}
