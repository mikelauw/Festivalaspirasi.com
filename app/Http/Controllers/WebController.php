<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use DateTime;
use App\Survey;
use App\Questioner;


class WebController extends Controller
{
    public function showTema($ctg){
		$query = Survey::selectRaw('kode, title')
                   	 ->where('ctg', $ctg)
                     ->where('status', 'publish')
                     ->get();
        return $query;      
    }
    
    public function showQuestioner($tema){
		$query = Questioner::selectRaw('id, kode, title, a, b, c, d')
                   	 ->where('tema', $tema)
                     ->where('status', 'publish')
                     ->get();
        return $query;      
    }
}
