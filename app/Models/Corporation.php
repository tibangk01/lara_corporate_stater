<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

/**
 * Class Corporation
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
class Corporation extends Model
{
	protected $table = 'corporations';

	protected $fillable = [
		'name',
		'description',
		'slogan'
	];

	public function contacts()
	{
		return $this->hasMany(Contact::class, 'contactable_id');
	}

    public function medias()
	{
		return $this->hasMany(Media::class, 'mediaable_id');
	}
}
