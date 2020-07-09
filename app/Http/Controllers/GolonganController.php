<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Golongan;

use App\Http\Requests;

use Session;

class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      return view('golongan.index')->with('golongans',Golongan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('golongan.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $this->validate($request, [
                 'nama' => 'required'
          ]);

          $golongan = new Golongan;
          $golongan->gol_nm = $request->nama;
          
          $golongan->save();
          
          return redirect('golongan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $golongan = Golongan::find($id);  
        return view('golongan.edit')->with('golongan', $golongan);

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
        $golongan = Golongan::find($id);  
        $golongan->gol_nm = $request->nama;  
        
        $golongan->save();  
        return redirect()->route('golongan');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $golongan = Golongan::find($id);
        
        $golongan->delete();
        
        return redirect('golongan');

    }
}
