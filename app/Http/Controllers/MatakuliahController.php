<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Matakuliah;
use DB;

class MatakuliahController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
    }

    public function informasiMatkul()
    {
        $matakuliahs = DB::table('mata_kuliahs')->groupby('kode_matakuliah')->get();
        return view ('mahasiswa.informasiMatkul', ['matakuliahs' => $matakuliahs]);
    }

    public function jadwalMatkulMah()
    {
        $matakuliahs = DB::table('mata_kuliahs')->join('ruangans','mata_kuliahs.ruangan_id','=','ruangans.id')->join('jadwals','mata_kuliahs.jadwal_id','=','jadwals.id')->select('jadwals.hari as hari','jadwals.jam_mulai as jam_mulai','jadwals.jam_selesai as jam_selesai','mata_kuliahs.kode_matakuliah as kode_matakuliah','mata_kuliahs.nama as nama_matakuliah','kp as kp','kapasitas as kapasitas','ruangans.nama as nama_ruangan')->get();
        // $dosenajars = DB::table('mata_kuliahs')->join('dosens_ajar_mata_kuliahs','mata_kuliahs','=','')
        return view ('mahasiswa.jadwalMatkul', ['matakuliahs' => $matakuliahs]);
    }

    public function inputMatkulBaru()
    {
        $jadwals = DB::table('jadwals')->get();
        $ruangans = DB::table('ruangans')->get();
        $jurusans = DB::table('jurusans')->get();
        $arrayData = array($jadwals, $ruangans, $jurusans);
        return view('karyawan.InputMatkul',['arrayData'=>$arrayData]);
    }

    public function transkrip()
    {
        $id = Auth::user()->id;
        DB::table('mahasiswas')->where('mahasiswas.user_id',$id)->get();
        show($id);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $matakuliahs = new Matakuliah(
            array(
                'kode_matakuliah' => $request->get('kode'),
                'nama' => $request->get('nama'),'sks'=>$request->get('sks'),'kp'=>$request->get('kp'),'jurusan_id'=>$request->get('jurusan'),'jadwal_id'=>$request->get('jadwal1'),'ruangan_id'=>$request->get('ruangan1')
                )
            );
        $matakuliahs->save();
        return redirect('/inputMatkulBaru')
        ->with('status', 'Matkul dengan nama '
            .' sudah berhasil disimpan');
        
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
        $matakuliahs = DB::table('mahasiswas_ambil_mata_kuliahs')->join('mata_kuliahs','mahasiswas_ambil_mata_kuliahs.mata_kuliah_id','=','mata_kuliahs.id')->where([
            ['mahasiswas_ambil_mata_kuliahs.mahasiswa_id',$id],['mahasiswas_ambil_mata_kuliahs.status','Selesai']])->get();
        return view ('mahasiswa.transkrip', ['matakuliahs' => $matakuliahs]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
