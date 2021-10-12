<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Employee
 *
 * @property int $id
 * @property int $item_id
 * @property int $human_id
 * @property int $team_id
 * @property string $profile
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Human $human
 * @property Item $item
 * @property Team $team
 *
 * @package App\Models
 */
class Employee extends Model
{
	protected $table = 'employees';

	protected $casts = [
		'item_id' => 'int',
		'human_id' => 'int',
		'team_id' => 'int'
	];

	protected $fillable = [
		'item_id',
		'human_id',
		'team_id',
		'profile'
	];

	public function human()
	{
		return $this->belongsTo(Human::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}

	public function team()
	{
		return $this->belongsTo(Team::class);
	}

    /** Morphs **/
    // public function links()
    // {
    //     return $this->hasMany(Link::class, 'linkable_id');
    // }
}
