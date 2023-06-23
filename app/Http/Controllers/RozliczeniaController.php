<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rozliczenia;
use Illuminate\Support\Facades\Auth;
class RozliczeniaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $myRozliczenia = Rozliczenia::all();
        return view('rozliczeniamodule.list', ['rozliczenia' => $myRozliczenia],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rozliczeniamodule.add');
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
            'idZlecenia' => 'required',
            'idOpiekuna' => 'required',
            'rozliczenieFinansowe' => 'required',
        ]);

        if ($validated) {
            //create new ShipModules
            $dodRoz = new Rozliczenia();
            //prepare data from request
            $dodRoz->idZlecenia = $request->idZlecenia;
            $dodRoz->idOpiekuna = $request->idOpiekuna;
            $dodRoz->rozliczenieFinansowe = $request->rozliczenieFinansowe;
            //save to database
            $dodRoz->save();
            //if OK then return to Ship Modules List
            return redirect('/rozliczeniamodule/list');
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
        
        $myRozEdit = Rozliczenia::find($id);
        if($myRozEdit==null)
        {
            $error_message="Rozliczenie id=$id not find";
            return view('rozliczeniamodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myRozEdit->count() >0)
        return view('rozliczeniamodule.show',['rozliczeniamodule'=>$myRozEdit,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myRozEdit = Rozliczenia::find($id);
        if($myRozEdit==null)
        {
            $error_message="Rozliczenie id=$id not find";
            return view('rozliczeniamodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myRozEdit->count() >0)
        return view('rozliczeniamodule.edit',['myRozEdit'=>$myRozEdit,]);
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
            'idZlecenia' => 'required',
            'idOpiekuna' => 'required',
            'rozliczenieFinansowe' => 'required',
        ]);
    
        if($validated){
            //create new ShipModules
            $myRozEdit = Rozliczenia::find($id);
            //prepare data from request
            if ($myRozEdit != null){
                $myRozEdit->idZlecenia = $request->idZlecenia;
            $myRozEdit->idOpiekuna = $request->idOpiekuna;
            $myRozEdit->rozliczenieFinansowe = $request->rozliczenieFinansowe;
                //save to database
                $myRozEdit->save();
                //if OK then return to Ship Modules List
                return redirect('rozliczeniamodule/list');
            }
            else {
                $error_message = "Zlecenie id= $id not find";
                return view('rozliczeniamodule.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $myRozliczenia = Rozliczenia::find($id);
        if($myRozliczenia!=null){
         $myRozliczenia->delete();
         return redirect('/rozliczeniamodule/list');
        }
        else{
         $error_message = "Rozliczenia id= $id not find";
         return view('rozliczeniamodule.message',['message'=>$error_message,'type_of_message'=>'Errpr']);
        }
    }
        public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('rozliczeniamodule.wylogowano');
        }
        else{
        return redirect('/register');
    }
}
}
