<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rodzic;
use App\Models\Dziecko;
use Illuminate\Support\Facades\Auth;
class RodzicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $myRodzice = Rodzic::all();
        return view('rodzicemodule.list', ['rodzic' => $myRodzice],);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('rodzicemodule.add');
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
            'ileDzieci' => 'required|min:1|',
        ]);

        if ($validated) {
            //create new ShipModules
            $dodRodz = new Rodzic();
            //prepare data from request
            $dodRodz->imie = $request->imie;
            $dodRodz->nazwisko = $request->nazwisko;
            $dodRodz->ileDzieci = $request->ileDzieci;
            //save to database
            $dodRodz->save();
            //if OK then return to Ship Modules List
            return redirect('/rodzicemodule/list');
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
        $myRodziceEdit = Rodzic::find($id);
        if($myRodziceEdit==null)
        {
            $error_message="Rodzic id=$id not find";
            return view('rodzicemodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if($myRodziceEdit->count() >0)
        return view('rodzicemodule.show',['rodzicemodule'=>$myRodziceEdit,]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $myRodziceEdit = Rodzic::find($id);
        //check counter
        if($myRodziceEdit == null){
            $error_message = "Rodzic id= ".$id." not find";
            return view('rodzicemodule.message',['message'=>$error_message,'type_of_message'=>'Error']);
        }
        if ($myRodziceEdit->count() > 0)
        return view('rodzicemodule.edit', ['myRodziceEdit' => $myRodziceEdit,]);
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
            'ileDzieci' => 'required',
        ]);

        if($validated){
            //create new ShipModules
            $myRodzic = Rodzic::find($id);
            //prepare data from request
            if ($myRodzic != null){
                $myRodzic->imie = $request->imie;
                $myRodzic->nazwisko= $request->nazwisko;
                $myRodzic->ileDzieci = $request->ileDzieci;
                //save to database
                $myRodzic->save();
                //if OK then return to Ship Modules List
                return redirect('rodzicemodule/list');
            }
            else {
                $error_message = "rodzic id= $id not find";
                return view('modulecrew.message',['message'=>$error_message,'type_of-message'=>'Error']);
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
        $myRodzic = Rodzic::find($id);
        if($myRodzic!=null){
         $myRodzic->delete();
         return redirect('/rodzicemodule/list');
        }
        else{
         $error_message = "Rodzic id= $id not find";
         return view('rodzicemodule.message',['message'=>$error_message,'type_of_message'=>'Errpr']);
        }
    }
    public function Dzieci($id){
        $dzieci = Dziecko::all()->where('idRodzica',$id);
        $rodzic = Rodzic::find($id);

        if($dzieci != null)
            return view('rodzicemodule.dzieci',['dzieci'=>$dzieci, 'rodzic'=>$rodzic]);
        else{
            $msg = "Rodzic id = $id not find";
            return view('rodzicemodule.message',['message'=>$msg, 'type_of_message'=>'Error']);
        }
    }
    public function zmienStanUwierzytelnienia()
    {
        if(auth()->check()){
        $user = auth()->user();
        Auth::logout();
        return view('/rodzicemodule/wylogowano');
        }
        else{
        return redirect('/register');
    }
}
}
