<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class SocialIcon
 *
 * @property int $id
 * @property string $class
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Collection|ContactType[] $contact_types
 *
 * @package App\Models
 */
class SocialIcon extends Model
{
	protected $table = 'social_icons';

	protected $fillable = [
		'class'
	];

	public function contactType()
	{
		return $this->hasOne(ContactType::class);
	}
}
