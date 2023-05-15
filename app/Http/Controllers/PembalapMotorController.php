<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PembalapMotor;
use App\Http\Requests\PembalapMotorRequest;

class PembalapMotorController extends Controller
{
    public function index(){
        $PembalapMotor = PembalapMotor::get();
        return view('index', compact('PembalapMotor'));
    }

    public function tambah(){
        return view('tambah');
    }

    public function edit($id){
        $PembalapMotor =PembalapMotor::where('id',$id)->first();
        return view('edit', compact('PembalapMotor'));
    }

    public function lihat($id){
        $PembalapMotor =PembalapMotor::where('id',$id)->first();
        return view('lihat', compact('PembalapMotor'));
    }


    public function store (PembalapMotorRequest $request)
    {
        $PembalapMotor = new PembalapMotor();

        $PembalapMotor->nama_pembalap = $request->nama_pembalap;
        $PembalapMotor->asal_negara = $request->asal_negara;

        $PembalapMotor->save();

        return redirect('/');
    }
    public function update (PembalapMotorRequest $request, $id)
    {
        $PembalapMotor =PembalapMotor::where('id',$id)->first();

        $PembalapMotor->nama_pembalap = $request->nama_pembalap;
        $PembalapMotor->asal_negara = $request->asal_negara;

        $PembalapMotor->update();

        return redirect('/');
    }
    public function hapus ($id)
    {
        $PembalapMotor =PembalapMotor::where('id',$id)->first();

        $PembalapMotor->delete();

        return redirect('/');
    }
}
