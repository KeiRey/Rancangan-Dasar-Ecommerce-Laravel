<?php

namespace App\Http\Controllers;
use App\Model\barang;
use App\Model\pesanan;
use App\Model\pesanan_detail;
use App\User;
use Auth;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function __construct()
    {
    	$this->middleware('auth');
    }

    public function index()
    {
    	$pesanans = pesanan::where('user_id', Auth::user()->id)->where('status', '!=',0)->get();

    	return view('barang.history.index',compact('pesanans'));
    }

    public function detail($id)
    {
    	$pesanan = pesanan::where('id', $id)->first();
       	$pesanan_details = pesanan_detail::where('pesanan_id', $pesanan->id)->get();

       	return view('barang.history.detail',compact('pesanan','pesanan_details'));
    }
}
