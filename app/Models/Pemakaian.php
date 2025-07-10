<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pemakaian
 * 
 * @property int $id
 * @property int $id_meteran
 * @property int $id_layanan
 * @property string $deskripsi
 * @property string $tahun
 * @property int $awal
 * @property int $akhir
 * @property int $pakai
 * @property bool $status_pembayaran
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Layanan $layanan
 * @property Meteran $meteran
 *
 * @package App\Models
 */
class Pemakaian extends Model
{
	protected $table = 'pemakaian';

	protected $casts = [
		'id_meteran' => 'int',
		'id_layanan' => 'int',
		'awal' => 'int',
		'akhir' => 'int',
		'pakai' => 'int',
		'status_pembayaran' => 'bool'
	];

	protected $fillable = [
		'id_meteran',
		'id_layanan',
		'deskripsi',
		'tahun',
		'awal',
		'akhir',
		'pakai',
		'status_pembayaran'
	];

	public function layanan()
	{
		return $this->belongsTo(Layanan::class, 'id_layanan');
	}

	public function meteran()
	{
		return $this->belongsTo(Meteran::class, 'id_meteran');
	}
}
