<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class ContactType
 *
 * @property int $id
 * @property int $social_icon_id
 * @property string $name
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property SocialIcon $social_icon
 * @property Collection|Contact[] $contacts
 *
 * @package App\Models
 */
class ContactType extends Model
{
	protected $table = 'contact_types';

	protected $casts = [
		'social_icon_id' => 'int'
	];

	protected $fillable = [
		'social_icon_id',
		'name'
	];

	public function icon()
	{
		return $this->belongsTo(Icon::class);
	}

	public function contacts()
	{
		return $this->hasMany(Contact::class);
	}
}
