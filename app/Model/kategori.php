<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    protected $table ='kategoris';
    protected $fillable = ['kategori'];
    protected $primaryKey = 'id';
	
	public function barang()
	{
        return $this->hasMany('App\Model\barang');
    
	}
}

