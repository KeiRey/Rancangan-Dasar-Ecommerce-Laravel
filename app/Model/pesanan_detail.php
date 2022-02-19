<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class pesanan_detail extends Model
{
    protected $table='pesanan_details';
	protected $fillable=['barang_id','pesanan_id','jumlah','jumlah_harga'];
	protected $primaryKey='id';

	
    public function pesanan()
    {
    	return $this->belongsTo(App\Model\pesanan);
    }
    public function barang()
    {
        return $this->belongsTo('App\Model\barang');
    }
    
}
