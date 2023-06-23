<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Zlecenia;
use App\Models\Rozliczenia;
use Illuminate\Support\Facades\Auth;

class ZlecenieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myZlecenie = Zlecenia::all();
        return view('zleceniemodule.list', ['zlecenia' => $myZlecenie],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zleceniemodule.add');
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
            'idDziecka' => 'required',
            'idOpiekuna' => 'required',
            'czasWminutach' => 'required',
        ]);

        if ($validated) {
            //create new ShipModules
            $dodZelenia = new Zlecenia();
            //prepare data from request
            $dodZelenia->idDziecka = $request->idDziecka;
            $dodZelenia->idOpiekuna = $request->idOpiekuna;
            $dodZelenia->czasWminutach = $request->czasWminutach;
            //save to database
            $dodZelenia->save();
            //if OK then return to Ship Modules List
            return redirect('/zleceniemodule/list');
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
        $myZlecenieEdit = Zlecenia::find($id);
        if($myZlecenieEdit==null)
        {
            $error_message="Zlecenie id=$id not find";
            return view('zleceniemodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myZlecenieEdit->count() >0)
        return view('zleceniemodule.show',['zleceniemodule'=>$myZlecenieEdit,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myZlecenieEdit = Zlecenia::find($id);
        if($myZlecenieEdit==null)
        {
            $error_message="Zlecenie id=$id not find";
            return view('zleceniemodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myZlecenieEdit->count() >0)
        return view('zleceniemodule.edit',['myZlecenieEdit'=>$myZlecenieEdit,]);
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
            'idDziecka' => 'required',
            'idOpiekuna' => 'required',
            'czasWminutach' => 'required',
        ]);
    
        if($validated){
            //create new ShipModules
            $myZlecenie = Zlecenia::find($id);
            //prepare data from request
            if ($myZlecenie != null){
                $myZlecenie->idDziecka = $request->idDziecka;
            $myZlecenie->idOpiekuna = $request->idOpiekuna;
            $myZlecenie->czasWminutach = $request->czasWminutach;
                //save to database
                $myZlecenie->save();
                //if OK then return to Ship Modules List
                return redirect('zleceniemodule/list');
            }
            else {
                $error_message = "Zlecenie id= $id not find";
                return view('zleceniemodule.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $myZlecenie = Zlecenia::find($id);
        $rozl = Rozliczenia::find($id)->where('idZlecenia', $id);
        if($myZlecenie!=null){
         $rozl-> delete();
         $myZlecenie->delete();
         return redirect('/zleceniemodule/list');
        }
        else{
         $error_message = "Zlecenie id= $id not find";
         return view('zleceniemodule.message',['message'=>$error_message,'type_of_message'=>'Errpr']);
        }
    }
    
    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('zleceniemodule.wylogowano');
        }
        else{
        return redirect('/register');
    }
}

}
