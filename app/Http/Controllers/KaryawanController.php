<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;
use App\Golongan;
use App\Pendidikan;
use App\UnitKerja;
use App\Status;

use Session;

class KaryawanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('karyawan.index')->with('karyawans',Karyawan::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('karyawan.create')
        ->with('golongans', Golongan::all())
        ->with('pendidikans', Pendidikan::all())
        ->with('unitkerjas', UnitKerja::all())
        ->with('statuses', Status::all());
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
            'nip'       =>'required',
            'nama'      =>'required',
            'jabatan'   =>'required',        
            'tgl_lahir' =>'required',        
            'tmt_cpns'  =>'required',        
            'tmt_pns'   =>'required',        
            'golongan'  =>'required',        
            'pendidikan'=>'required',        
            'unitkerja' =>'required'      
        ]);
            
        $karyawan=Karyawan::create([
            'nip'       =>$request->nip,
            'nip_lama'  =>$request->nip_lama,
            'nama'      =>$request->nama,
            'jabatan'   =>$request->jabatan,
            'tgl_lahir' =>$request->tgl_lahir,
            'tmt_cpns'  =>$request->tmt_cpns,
            'tmt_pns'   =>$request->tmt_pns,
            'gol_id'    =>$request->golongan,
            'pendidikan'=>$request->pendidikan,
            'unit_id'   =>$request->unitkerja,
            'status'    =>$request->status,
            'aktif'     =>$request->aktif
        ]);

        $karyawan->save();

        return redirect('karyawan');
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
        $karyawan = Karyawan::find($id);
        return view('karyawan.edit')
        ->with('karyawan', $karyawan)
        ->with('golongans', Golongan::all())
        ->with('pendidikans', Pendidikan::all())
        ->with('unitkerjas', UnitKerja::all())
        ->with('statuses', Status::all());
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
        $karyawan = Karyawan::find($id);
        
        $karyawan->nip          = $request->nip;
        $karyawan->nip_lama     = $request->nip_lama;
        $karyawan->nama         = $request->nama;
        $karyawan->jabatan      = $request->jabatan;
        $karyawan->tgl_lahir    = $request->tgl_lahir;
        $karyawan->tmt_cpns     = $request->tmt_cpns;
        $karyawan->tmt_pns      = $request->tmt_pns;
        $karyawan->gol_id       = $request->golongan;
        $karyawan->pendidikan   = $request->pendidikan;
        $karyawan->unit_id      = $request->unitkerja;
        $karyawan->status       = $request->status;
        $karyawan->aktif        = $request->aktif;

        $karyawan->save();
        return redirect()->route('karyawan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $karyawan = Karyawan::find($id);

        $karyawan->delete();

        return redirect('karyawan');
    }
}
