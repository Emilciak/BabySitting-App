<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dziecko;
use App\Models\Zlecenia;
use App\Models\Rozliczenia;
use Illuminate\Support\Facades\Auth;
class DzieckoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myDziecko = Dziecko::all();
        return view('dziecimodule.list', ['dziecko' => $myDziecko],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dziecimodule.add');
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
            'idRodzica' => 'required',
        ]);

        if ($validated) {
            //create new ShipModules
            $dodDziecka = new Dziecko();
            //prepare data from request
            $dodDziecka->imie = $request->imie;
            $dodDziecka->idRodzica = $request->idRodzica;
            //save to database
            $dodDziecka->save();
            //if OK then return to Ship Modules List
            return redirect('/dziecimodule/list');
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
        $myDzieckoEdit = Dziecko::find($id);
        if($myDzieckoEdit==null)
        {
            $error_message="Dziecko id=$id not find";
            return view('dziecimodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myDzieckoEdit->count() >0)
        return view('dziecimodule.show',['dziecimodule'=>$myDzieckoEdit,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myDzieckoEdit = Dziecko::find($id);
        //check counter
        if($myDzieckoEdit == null){
            $error_message = "Dziecko id= ".$id." not find";
            return view('dziecimodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myDzieckoEdit->count() > 0)
        return view('dziecimodule.edit', ['myDzieckoEdit' => $myDzieckoEdit,]);
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
            'idRodzica' => 'required',
        ]);

        if($validated){
            //create new ShipModules
            $myDziecko = Dziecko::find($id);
            //prepare data from request
            if ($myDziecko != null){
                $myDziecko->imie = $request->imie;
                $myDziecko->idRodzica= $request->nick;
                //save to database
                $myDziecko->save();
                //if OK then return to Ship Modules List
                return redirect('dziecimodule/list');
            }
            else {
                $error_message = "Dziecko id= $id not find";
                return view('dziecimodule.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $myDziecko= Dziecko::find($id);
        if($myDziecko!=null){
         $myDziecko->delete();
         return redirect('/dziecimodule/list');
        }
        else{
         $error_message = "Dziecko id= $id not find";
         return view('dziecimodule.message',['message'=>$error_message,'type_of_message'=>'Errpr']);
        }
    }
    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('/dziecimodule/wylogowano');
        }
        else{
        return redirect('/register');
    }
}
}
