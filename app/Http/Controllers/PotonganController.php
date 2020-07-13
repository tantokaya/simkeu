<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Potongan;

use App\Http\Requests;

use Session;

class PotonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('potongan.index')->with('potongans',Potongan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('potongan.create');
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

        $potongan = new Potongan;
        $potongan->pot_nm = $request->nama;

        $potongan->save();

        return redirect('potongan');
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
        $potongan = Potongan::find($id);
        return view('potongan.edit')->with('potongan', $potongan);
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
        $potongan = Potongan::find($id);
        $potongan->pot_nm = $request->nama;

        $potongan->save();
        return redirect()->route('potongan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $potongan = Potongan::find($id);

      $potongan->delete();

      return redirect('potongan');
    }
}
