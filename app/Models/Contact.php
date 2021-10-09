<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Contact
 * 
 * @property int $id
 * @property int $contact_type_id
 * @property int $contactable_id
 * @property string $contactable_type
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property ContactType $contact_type
 * @property SiteSetting $site_setting
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contacts';

	protected $casts = [
		'contact_type_id' => 'int',
		'contactable_id' => 'int'
	];

	protected $fillable = [
		'contact_type_id',
		'contactable_id',
		'contactable_type'
	];

	public function contact_type()
	{
		return $this->belongsTo(ContactType::class);
	}

	public function site_setting()
	{
		return $this->belongsTo(SiteSetting::class, 'contactable_id');
	}
}