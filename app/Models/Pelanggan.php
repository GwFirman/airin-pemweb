<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Pelanggan
 *
 * @property $id
 * @property $nama_pelanggan
 * @property $no_ktp
 * @property $alamat
 * @property $status
 * @property $created_at
 * @property $updated_at
 *
 * @property Meteran[] $meterans
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $perPage = 20;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['nama_pelanggan', 'no_ktp', 'alamat', 'status'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function meterans()
    {
        return $this->hasMany(\App\Models\Meteran::class, 'id', 'id_pelanggan');
    }
}
