<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Gaji;
use App\Karyawan;
use App\Bulan;
use App\Tahun;

use session;
use DB;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('gajis')
        ->join('karyawans','gajis.nip','=','karyawans.nip')
        ->select('karyawans.nama','gajis.bulan','gajis.tahun','gajis.nip','gajis.id')
        ->get();

        return view('gaji.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('gaji.create')
        ->with('karyawans', Karyawan::all());
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
            'bulan'     =>'required',
            'tahun'     =>'required',
            'nama'      =>'required',
            'gaji_pokok'=>'required'    
        ]);

        $gaji=Gaji::create([
            'bulan'         =>$request->bulan,
            'tahun'         =>$request->tahun,
            'nip'           =>$request->nama,
            'gaji_pokok'    =>$request->gaji_pokok,
            'tj_istri'      =>$request->tunj_istri,
            'tj_anak'       =>$request->tunj_anak,
            'tj_upns'       =>$request->tunj_upns,
            'tj_struk'      =>$request->tunj_struk,
            'tj_fung'       =>$request->tunj_fung,
            'tj_beras'      =>$request->tunj_beras,
            'tj_pph'        =>$request->tunj_pph,
            'pot_pfk'       =>$request->pot_pfk,
            'pot_pph'       =>$request->pot_pph,
            'pot_tabrum'    =>$request->pot_tabrum,
            'bersih'        =>$request->bersih
        ]);

        // dd($gaji);

        $gaji->save();

        return redirect('gaji');
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
        $gaji = Gaji::find($id);
        return view('gaji.edit')
        ->with('gaji', $gaji)
        ->with('gajis',Gaji::all())
        ->with('bulans',Bulan::all())
        ->with('tahuns',Tahun::all())
        ->with('karyawans',Karyawan::all());
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
        $gaji = Gaji::find($id);
        
        $gaji->bulan        = $request->bulan;
        $gaji->tahun        = $request->tahun;
        $gaji->nip          = $request->nama;
        $gaji->gaji_pokok   = $request->gaji_pokok;
        $gaji->tj_istri     = $request->tunj_istri;
        $gaji->tj_anak      = $request->tunj_anak;
        $gaji->tj_upns      = $request->tunj_upns;
        $gaji->tj_struk     = $request->tunj_struk;
        $gaji->tj_fung      = $request->tunj_fung;
        $gaji->tj_beras     = $request->tunj_beras;
        $gaji->tj_pph       = $request->tunj_pph;
        $gaji->pot_pfk      = $request->pot_pfk;
        $gaji->pot_pph      = $request->pot_pph;
        $gaji->pot_tabrum   = $request->pot_tabrum;
        $gaji->bersih       = $request->bersih;

        $gaji->save();
        return redirect()->route('gaji');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $gaji = Karyawan::find($id);

        $gaji->delete();

        return redirect('gaji');
    }
}
