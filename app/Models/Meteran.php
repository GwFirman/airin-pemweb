<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Meteran
 * 
 * @property int $id
 * @property int $id_pelanggan
 * @property int $id_layanan
 * @property string $lokasi_pemasangan
 * @property Carbon $tanggal_pemasangan
 * @property bool $status
 * @property string $chip_kartu
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Layanan $layanan
 * @property Pelanggan $pelanggan
 * @property Collection|Pemakaian[] $pemakaians
 *
 * @package App\Models
 */
class Meteran extends Model
{
	protected $table = 'meteran';

	protected $casts = [
		'id_pelanggan' => 'int',
		'id_layanan' => 'int',
		'tanggal_pemasangan' => 'datetime',
		'status' => 'bool'
	];

	protected $fillable = [
		'id_pelanggan',
		'id_layanan',
		'lokasi_pemasangan',
		'tanggal_pemasangan',
		'status',
		'chip_kartu'
	];

	public function layanan()
	{
		return $this->belongsTo(Layanan::class, 'id_layanan');
	}

	public function pelanggan()
	{
		return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
	}

	public function pemakaians()
	{
		return $this->hasMany(Pemakaian::class, 'id_meteran');
	}
}
