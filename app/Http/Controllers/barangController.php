<?php

namespace App\Http\Controllers;
use App\Model\barang;
use App\Model\pesanan;
use App\Model\pesanan_detail;
use App\User;
use App\Model\kategori;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;

class barangController extends Controller
{
    public function index()
    {
        $barang=barang::paginate(4);
        return view('barang.index',compact('barang'));
    }

    public function show($id)
    {
        $detail=barang::find($id);
        return view('barang.detail',compact('detail'));
    }
    public function shop(Request $request)
    {
        if($request->has('cari')){
           $data=barang::where('nama_barang','LIKE','%'.$request->cari.'%')->Orwhere('kode','LIKE','%'.$request->cari.'%')->get();    
       }else{

        $data=barang::all();
    }
    return view('barang.shop',compact('data'));
}
public function gambar($id)
{
    $data=barang::find($id);
}
public function pesan($id)
{
    $pesan=barang::find($id);
    return view('barang.pesan',compact('pesan'));
}
public function peesan(Request $request, $id)
{
    $barang=barang::where('id', $id)->first();
        // $barang->stok -= $request->jumlah_pesan;

        // $barang->save();
    $tanggal= Carbon::now();
    
        //supaya tidak lebih jumlah
    if($request->jumlah_pesan > $barang->stok)
    {
        return redirect('pesan/'.$id);
    }

        //cek pesanan
    $cek_pesanan=pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
        //simpan -> db pesanan
    if(empty($cek_pesanan))
    {
        $pesanan = new pesanan;
        $pesanan->user_id= Auth::user()->id;
        $pesanan->tanggal=$tanggal;
        $pesanan->status=0;
        $pesanan->kode= mt_rand(1000, 9999);
        $pesanan->jumlah_harga=0;
        $pesanan->save();
    }

        //simpan ke db pesanan detail
    $pesanan_baru = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();

        //cek ulang pesanan detail supaya ga numpuk
    $cek_pesanan_detail = pesanan_detail::where('barang_id',$barang->id)->where('pesanan_id',$pesanan_baru->id)->first();
    if(empty($cek_pesanan_detail))
    {

        $pesanan_detail = new pesanan_detail;
        $pesanan_detail->barang_id = $barang->id;
        $pesanan_detail->pesanan_id = $pesanan_baru->id;
        $pesanan_detail->jumlah = $request->jumlah_pesan;
        $pesanan_detail->jumlah_harga= $barang->harga*$request->jumlah_pesan;
        $pesanan_detail->save();

    }else{
        $pesanan_detail = pesanan_detail::where('barang_id',$barang->id)->where('pesanan_id',$pesanan_baru->id)->first();
        $pesanan_detail->jumlah =$pesanan_detail->jumlah+$request->jumlah_pesan;

        //harga baru
        $harga_pesanan_detail_baru=$barang->harga*$request->jumlah_pesan;
        $pesanan_detail->jumlah_harga =   $pesanan_detail->jumlah_harga+ $harga_pesanan_detail_baru;
        $pesanan_detail->update();
    }

    //total
    $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    $pesanan->jumlah_harga = $pesanan->jumlah_harga+$barang->harga*$request->jumlah_pesan;
    $pesanan->update();

    return redirect('/shop')->with('succes','Berhasil Menambah Barang Ke Keranjang');
}

public function check_out()
{
   $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
   $pesanan_details = [];
   if(!empty($pesanan))
   {   
     $pesanan_details= pesanan_detail::where('pesanan_id', $pesanan->id)->get();
 }
 return view('barang.check_out', compact('pesanan', 'pesanan_details'));

}
public function delete($id)
{
    $pesanan_detail = pesanan_detail::where('id', $id)->first();

    $pesanan = pesanan::where('id',$pesanan_detail->pesanan_id)->first();
    $pesanan->jumlah_harga = $pesanan->jumlah_harga-$pesanan_detail->jumlah_harga;
    $pesanan->update();

    $pesanan_detail->delete();
    return redirect('check-out')->with('succes','Berhasil Menghapus Data');
}
public function konfirmasi()
{

    $user = User::where('id', Auth::user()->id)->first();

    if (empty($user->alamat)) {
        return redirect('profile')->with('gagal','Profile Belum Lengkap');
    }

    if (empty($user->notelp)) {
        return redirect('profile')->with('gagal','Profile Belum Lengkap');
    }


    $pesanan = pesanan::where('user_id', Auth::user()->id)->where('status',0)->first();
    $pesanan_id = $pesanan->id;
    $pesanan->status = 1;
    $pesanan->update();

    $pesanan_details = pesanan_detail::where('pesanan_id', $pesanan_id)->get();
    foreach ($pesanan_details as $pesanan_detail) {
       $barang = barang::where('id', $pesanan_detail->barang_id)->first();
       $barang->stok = $barang->stok-$pesanan_detail->jumlah;
       $barang->update();
   }

   return redirect('/history/'.$pesanan_id);
}
}