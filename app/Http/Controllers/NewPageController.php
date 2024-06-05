<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // подключаем фасад DB

class NewPageController extends Controller
{
    public function showNewPage()
    {
        return view('newpage',
        
        
     
        ['date' => [
            1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20,21,22,23,24,25,26,27,28,29,30,31
            
        ]],
        ['today' => date('d')],     
    
    );
    }
}