<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Pegawai;


class ReportController extends Controller
{
    public function index()
    {
        //
        $dtPegawai = Pegawai::with('jabatan')->latest()->paginate();
        return view('pegawai.report-pegawai',compact('dtPegawai'));
    }
}
