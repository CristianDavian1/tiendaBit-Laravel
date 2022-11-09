<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\users;

class searchController extends Controller
{
    
    public function buscar($text){

        return $text;
        
}
}