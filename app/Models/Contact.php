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
 * @property int $iconable_item_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property ContactType $contact_type
 * @property IconableItem $iconable_item
 *
 * @package App\Models
 */
class Contact extends Model
{
	protected $table = 'contacts';

	protected $casts = [
		'contact_type_id' => 'int',
		'iconable_item_id' => 'int'
	];

	protected $fillable = [
		'contact_type_id',
		'iconable_item_id'
	];

	public function contactType()
	{
		return $this->belongsTo(ContactType::class);
	}

	public function iconableItem()
	{
		return $this->belongsTo(IconableItem::class);
	}
}
