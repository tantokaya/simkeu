<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Unitkerja;

use App\Http\Requests;

use Session;

class UnitkerjaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('unitkerja.index')->with('unitkerjas',Unitkerja::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('unitkerja.create');
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

          $unitkerja = new Unitkerja;
          $unitkerja->unk_nm = $request->nama;

          $unitkerja->save();

          return redirect('unitkerja');
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
      $unitkerja = Unitkerja::find($id);
      return view('unitkerja.edit')->with('unitkerja', $unitkerja);
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
          $unitkerja = Unitkerja::find($id);
          $unitkerja->sta_nm = $request->nama;

          $unitkerja->save();
          return redirect()->route('unitkerja');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $unitkerja = Unitkerja::find($id);

      $unitkerja->delete();

      return redirect('unitkerja');
    }
}
