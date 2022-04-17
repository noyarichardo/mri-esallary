<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use Illuminate\Http\Request;
use App\Models\Pegawai;
use DataTables;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function adminPage()
    {
        //
        $dtPegawai = Pegawai::with('jabatan')->latest()->paginate();
        return view('dashboard',compact('dtPegawai'));
    }
    public function userPage()
    {
        //
        $dtPegawai = Pegawai::with('jabatan')->latest()->paginate();
        return view('pegawai.report-pegawai',compact('dtPegawai'));
    }

    public function userReport()
    {
        //
        $dtPegawai = Pegawai::with('jabatan')->latest()->paginate();
        return view('pegawai.report-pegawai',compact('dtPegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $jab =Jabatan::all();
        return view('pegawai.create-pegawai', compact('jab'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        Pegawai::create([
            'name'      => $request->name,
            'email'     => $request->email,
            'no_telp'    => $request->no_telp,
            'alamat'    => $request->alamat,
            'jabatan_id'    => $request->jabatan_id,
        ]);

        return redirect('data-pegawai')->with('toast_success','Data Berhasil Disimpan');
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
        //
        $jab = Jabatan::all();
        $peg= Pegawai::findorfail($id);
        return view('pegawai.edit-pegawai', compact('peg','jab'));
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
        $peg= Pegawai::findorfail($id);
        $peg->update($request->all());
        return redirect('data-pegawai')->with('toast_success','Data Berhasil Update');
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
        $peg= Pegawai::findorfail($id);
        $peg->delete();
        return back()->with('toast_success','Data Berhasil Delete');
    }
}
