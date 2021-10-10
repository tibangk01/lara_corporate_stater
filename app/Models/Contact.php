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
 * @property string $value
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

    //TODO: refactore contacts
    
	protected $table = 'contacts';

	protected $casts = [
		'contact_type_id' => 'int',
		'contactable_id' => 'int'
	];

	protected $fillable = [
		'contact_type_id',
		'contactable_id',
		'contactable_type',
		'value'
	];

	public function contactType()
	{
		return $this->belongsTo(ContactType::class);
	}

    public function contactable()
    {
        return $this->morphTo();
    }
}
