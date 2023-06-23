<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Opiekun;
use App\Models\Zlecenia;
use Illuminate\Support\Facades\Auth;

class OpiekunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myOpiekun = Opiekun::all();
        return view('opiekunimodule.list', ['opiekun' => $myOpiekun],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('opiekunimodule.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'imie' => 'required|min:3|max:25|',
            'nazwisko' => 'required|min:3|max:25|',
            'wiek' => 'required|min:1|max:2|',
            'ileLatWzawodzie' => 'required|min:1|max:2| required',
        ]);

        if ($validated) {
            //create new ShipModules
            $dodOpiekuna = new Opiekun();
            //prepare data from request
            $dodOpiekuna->imie = $request->imie;
            $dodOpiekuna->nazwisko = $request->nazwisko;
            $dodOpiekuna->wiek = $request->wiek;
            $dodOpiekuna->ileLatWzawodzie = $request->ileLatWzawodzie;
            //save to database
            $dodOpiekuna->save();
            //if OK then return to Ship Modules List
            return redirect('/opiekunimodule/list');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $myOpiekunEdit = Opiekun::find($id);
        if($myOpiekunEdit==null)
        {
            $error_message="Opiekun id=$id not find";
            return view('opiekunimodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myOpiekunEdit->count() >0)
        return view('opiekunimodule.show',['opiekunimodule'=>$myOpiekunEdit,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myOpiekunEdit = Opiekun::find($id);
        //check counter
        if($myOpiekunEdit == null){
            $error_message = "Opiekun id= ".$id." not find";
            return view('opiekunimodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myOpiekunEdit->count() > 0)
        return view('opiekunimodule.edit', ['myOpiekunEdit' => $myOpiekunEdit,]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'imie' => 'required|min:3|max:25|',
            'nazwisko' => 'required|min:3|max:25|',
            'wiek' => 'required|min:1|max:2|',
            'ileLatWzawodzie' => 'required|min:1|max:2| required',
        ]);

        if($validated){
            //create new ShipModules
            $myOpiekun = Opiekun::find($id);
            
            //prepare data from request
            if ($myOpiekun != null){
                $myOpiekun->imie = $request->imie;
                $myOpiekun->nazwisko = $request->nazwisko;
                $myOpiekun->wiek = $request->wiek;
                $myOpiekun->ileLatWzawodzie = $request->ileLatWzawodzie;
                //save to database
                $myOpiekun->save();
                //if OK then return to Ship Modules List
                return redirect('opiekunimodule/list');
            }
            else {
                $error_message = "Opiekun id= $id not find";
                return view('opiekunimodule.message',['message'=>$error_message,'type_of-message'=>'Error']);
            }
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $myOpiekun = Opiekun::find($id);
        if($myOpiekun!=null){
         $myOpiekun->delete();
         return redirect('/opiekunimodule/list');
        }
        else{
         $error_message = "Opiekun id= $id not find";
         return view('opiekunimodule.message',['message'=>$error_message,'type_of_message'=>'Errpr']);
        }
    }
    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('opiekunimodule.wylogowano');
        }
        else{
        return redirect('/register');
    }
}
}
