<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Layanan
 * 
 * @property int $id
 * @property string $nama_layanan
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|Meteran[] $meterans
 * @property Collection|Pemakaian[] $pemakaians
 *
 * @package App\Models
 */
class Layanan extends Model
{
	protected $table = 'layanan';

	protected $fillable = [
		'nama_layanan'
	];

	public function meterans()
	{
		return $this->hasMany(Meteran::class, 'id_layanan');
	}

	public function pemakaians()
	{
		return $this->hasMany(Pemakaian::class, 'id_layanan');
	}
}
