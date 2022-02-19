<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class barang extends Model
{
	protected $table='barangs';
	protected $fillable=['nama_barang','kategori_id','kode','gambar','harga','stok','keterangan'];
	protected $primaryKey='id';

    public function pesanan()
    {
    	return $this->belongsTo(App\Model\pesanan);
    }    
     public function pesanan_detail()
    {
        return $this->hasMany('App\Model\pesanan_detail');
    }
     public function kategori()
    {
        return $this->belongsTo('App\Model\kategori');
    } 
    public function gambar()
    {
    	if(!$this->gambar){
    		return asset('images/default.jpg');
    	}
    	return asset('images/'.$this->gambar);
    }
}
