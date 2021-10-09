<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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

	public function socialIcon()
	{
		return $this->belongsTo(SocialIcon::class);
	}

	public function contacts()
	{
		return $this->hasMany(Contact::class);
	}
}
