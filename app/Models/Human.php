<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Human
 *
 * @property int $id
 * @property int $human_type_id
 * @property int $work_id
 * @property int $corporation_id
 * @property string $first_name
 * @property string $last_name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property HumanType $human_type
 * @property Corporation $corporation
 * @property Work $work
 * @property Collection|Buyer[] $buyers
 *
 * @package App\Models
 */
class Human extends Model
{
	protected $table = 'humans';

	protected $casts = [
		'human_type_id' => 'int',
		'work_id' => 'int',
		'corporation_id' => 'int'
	];

	protected $fillable = [
		'human_type_id',
		'work_id',
		'corporation_id',
		'first_name',
		'last_name'
	];

    public function setFullNameAttribute()
    {
        return ucfirst($this->first_name).' '.ucfirst($this->last_name);
    }

	public function humanType()
	{
		return $this->belongsTo(HumanType::class);
	}

	public function corporation()
	{
		return $this->belongsTo(Corporation::class);
	}

	public function work()
	{
		return $this->belongsTo(Work::class);
	}

	public function buyers()
	{
		return $this->hasMany(Buyer::class);
	}
}
