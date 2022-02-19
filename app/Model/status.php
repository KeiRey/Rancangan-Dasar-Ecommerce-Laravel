<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
	protected $table='statuses';
	protected $fillable=['status'];
	protected $primaryKey='id';

	public function pesanan()
	{
		return $this->belongsTo('App\Model\pesanan');
	}
}
