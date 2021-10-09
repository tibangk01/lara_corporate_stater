<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Collection;

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
        return $this->morphMany(Contact::class, 'contactable');
	}
}
