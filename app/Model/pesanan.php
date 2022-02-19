<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pesanan extends Model
{
	protected $table='pesanans';
	protected $fillable=['user_id','tanggal','status','kode','jumlah_harga'];
	protected $primaryKey='id';


	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function pesanan_detail()
	{
		return $this->belongsTo(App\Model\pesanan_detail);
	}    
	public function barang()
	{
		return $this->hasMany(App\Model\barang);
	}
	public function status()
	{
		return $this->hasMany('App\Model\status');
	}

}
