<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Tagihan
 * 
 * @property int $id
 * @property int $id_pelanggan
 * @property int $id_meteran
 * @property int $tahun
 * @property int $nomor_meteran
 * @property float|null $nominal
 * @property Carbon $waktu_awal
 * @property Carbon $waktu_akhir
 * @property bool $status
 * 
 * @property Meteran $meteran
 * @property Pelanggan $pelanggan
 *
 * @package App\Models
 */
class Tagihan extends Model
{
    protected $table = 'tagihan';
    public $timestamps = false;

    protected $casts = [
        'id_pelanggan' => 'int',
        'id_meteran' => 'int',
        'tahun' => 'int',
        'nomor_meteran' => 'int',
        'nominal' => 'float',
        'waktu_awal' => 'datetime',
        'waktu_akhir' => 'datetime',
        'status' => 'bool'
    ];

    protected $fillable = [
        'id_pelanggan',
        'id_meteran',
        'tahun',
        'nomor_meteran',
        'nominal',
        'awal',
        'akhir',
        'status'
    ];

    public function meteran()
    {
        return $this->belongsTo(Meteran::class, 'id_meteran');
    }

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, 'id_pelanggan');
    }
}
