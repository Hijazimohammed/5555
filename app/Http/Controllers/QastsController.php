<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Qast;

class QastsController extends Controller
{
    //
    public function create()
    {
       
        $qasts = Qast::orderBy('id')->paginate(5);


        $i = 1;
        return view('Q.create', compact('qasts'));
    }

    public function store(Request $request)
    {
        /*       $request->validate([
     'qust' => 'required',
    'ans1' => 'required',
    'ans2' => 'required',
    'ans3' => 'required',
    'ans4' => 'nullable',
    'signal' => 'nullable',
    'corectA' => 'required',

    

]);*/

        if ($request->hasFile('signal') || $request->hasFile('audio')) {
            $file = $request->file('signal');
            $ext = $file->getClientOriginalExtension();
            $filename = 'signal' . '_' . time() . '.' . $ext;
            $file->storeAs('public/signals', $filename);
            //audio file Store
            $file2 = $request->file('sound');
            $ext = $file2->getClientOriginalExtension();
            $filename2 = 'sound' . '_' . time() . '.' . $ext;
            $file2->storeAs('public/sounds', $filename2);
        } else {
            $filename = 'null.png';
        }

        $qastS = Qast::Create([
            'qust' => $request->qust,
            'ans1' => $request->ans1,
            'ans2' => $request->ans2,
            'ans3' => $request->ans3,
            'ans4' => $request->ans4,
            'signal' => $filename,


            'corectA' => $request->corectA,
        ]);
        return redirect()->route('Qasts.create')->with('success', 'Q Add ');
    }
    public function table()
    {
        return view('layout.table');
    }

    public function createw()
    {

        $qasts = Qast::all();

        return view('Q.createW', compact('qasts'));
    }


    public function storew(Request $request)
    {

        if ($request->hasFile('sound')) {

            $file2 = $request->file('sound');
            $ext = $file2->getClientOriginalExtension();
            $filename2 = 'sound' . '_' . time() . '.' . $ext;
            $file2->storeAs('public/sounds', $filename2);
        } else {
            $filename2 = 'S.png';
        }
        //This Function Doesnt upload  audio url to sql
        $qastS = Qast::Create([
            'qust' => $request->qust,
            'ans1' => $request->ans1,
            'ans2' => $request->ans2,
            'ans3' => $request->ans3,
            'ans4' => $request->ans4,
            'audio' => $filename2,
            'corectA' => $request->corectA,
        ]);
        return redirect()->route('Qasts.createW')->with('success', 'Q Add ');
    }
}
