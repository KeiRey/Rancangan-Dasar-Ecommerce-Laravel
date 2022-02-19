<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\barang;
use App\Model\pesanan;
use App\Model\admin;
use App\Model\kategori;
use App\User;
use PDF;
use DB;
class adminController extends Controller
{
    public function dabar()
    {
        $kategoris = kategori::all();
        $data=barang::paginate(6);
        return view('barang.admin.index',compact('data','kategoris'));
    }
    public function debar($id)
    {
    	$detail=barang::find($id);
    	return view('barang.admin.debar',compact('detail'));
    }
    public function create(Request $request)
    {
        // barang::create($request->all());

        $nm = $request->gambar;
        $item = time().rand(100,999).".".$nm->getClientOriginalName();

        $data = new barang;
        $data->nama_barang = $request->nama_barang;
        $data->kategori_id = $request->kategori_id;
        $data->kode = $request->kode;
        $data->gambar = $item;
        $data->harga = $request->harga;
        $data->stok = $request->stok;
        $data->keterangan = $request->keterangan;

        $nm->move(public_path().'/images',$item);

        $data->save();
        return redirect('/dabar')->with('sukses','Berhasil Menambah Barang');
    }
    public function edit($id)
    {
        $kategoris = kategori::all();
        $data=barang::find($id);
        return view('barang/admin/edit',compact('data','kategoris'));
    }
    public function update(Request $request,$id)
    {
        $data=barang::find($id);
        $data->update($request->all());
        if ($request->hasFile('gambar')){
            $request->file('gambar')->move('images/',$request->file('gambar')->getClientOriginalName());
            $data->gambar=$request->file('gambar')->getClientOriginalName();
            $data->save();
        }
        return redirect('/dabar')->with('hore','Berhasil Mengedit Data Barang');;
    }
    public function destroy($id)
    {
        barang::find($id)->delete();
        return redirect('/dabar')->with('succes','Berhasil Menghapus Barang');
    }
    public function profile()
    {
        $profile=User::find($id);
        return view('barang.admin.profile',compact('profile'));
    }
    public function daser()
    {
        $daser=User::all();
        return view('barang.admin.daser',compact('daser'));
    }
    public function dasan()
    {
        $dasan = pesanan::all();
        return view('barang.admin.dasan',compact('dasan'));
    }
    public function exportPdf()
    {
        $pesanan = pesanan::all();
        $pdf = PDF::loadView('barang.admin.dasanpdf',compact('pesanan'));
        set_time_limit (6000);
        return $pdf->download('data_pesanan.pdf');
    }
    public function status(Request $request, $id)
    {
        $status = ['status' => $request->status,
    ];
    pesanan::where('id',$id)->update($status);
    return redirect('/dasan');
}
}
