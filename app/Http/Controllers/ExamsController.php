<?php

namespace App\Http\Controllers;
use App\Qast;

use Illuminate\Http\Request;

class ExamsController extends Controller
{
    //

public function show(){
    $qasts = Qast::orderBy('id')->paginate(1);
    
return view('Exams.exam', compact('qasts'));


}

}
