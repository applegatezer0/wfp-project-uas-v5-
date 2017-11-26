<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }
    public function student()
    {
        return view('mahasiswa.student');
    }
    public function profilMah()
    {
        return view('profil');
    }
    public function daftarKelasMah()
    {
        return view('mahasiswa.daftarKelas');
    }
    public function jadwalKelasMah()
    {
        return view('mahasiswa.jadwalMatkul');
    }
    public function historyPerwalianMah()
    {
        return view('mahasiswa.historyPerwalian');
    } 
    public function inputMatkulBaru()
    {
        return view('karyawan.InputMatkul');
    }
    public function transkripMah()
    {
        return view('mahasiswa.transkrip');
    }
    public function informasiMatkul()
    {
        return view('mahasiswa.informasiMatkul');
    }
    public function admin()
    {
        return view('admin');
    }
    public function dosen()
    {
        return view('dosen');
    }

    public function karyawan()
    {
        return view('karyawan.karyawan');
    }
}
