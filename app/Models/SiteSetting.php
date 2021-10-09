<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SiteSetting
 * 
 * @property int $id
 * @property string $name
 * @property string $description
 * @property string $slogan
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Collection|Contact[] $contacts
 *
 * @package App\Models
 */
class SiteSetting extends Model
{
	protected $table = 'site_settings';

	protected $fillable = [
		'name',
		'description',
		'slogan'
	];

	public function contacts()
	{
		return $this->hasMany(Contact::class, 'contactable_id');
	}
}
