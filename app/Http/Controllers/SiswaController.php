<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Siswa;
use Illuminate\Support\Facades\View;

class SiswaController extends Controller
{
    public function index(Request $request)
    {
        if($request->has('cari')){
            $data_siswa = Siswa::where('nama_depan','LIKE', '%'. $request->cari. '%')->get();
        }else{
            $data_siswa = Siswa::paginate(5);
        }
        return view('siswa.index', compact('data_siswa'));
    }

    public function create(Request$request)
    {
        Siswa::create($request->all());
        return redirect('/siswa')->with('sukses', 'Data Berhasil Diinput');
    }

    public function edit($id)
    {
        $data_siswa = Siswa::find($id);
        return view('siswa.edit', compact('data_siswa'));
    }

    public function update(Request $request, $id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->update($request->all());
        return redirect('/siswa')->with('sukses', 'Data Telah Diubah');
    }

    public function delete($id)
    {
        $data_siswa = Siswa::find($id);
        $data_siswa->delete($id);
        return redirect('/siswa')->with('sukses', 'Data Telah Didelete');
    }
}
