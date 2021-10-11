<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Buyer
 * 
 * @property int $id
 * @property int $human_id
 * @property int $customer_id
 * @property int $item_id
 * @property string $avatar
 * @property string $message
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * 
 * @property Human $human
 * @property Customer $customer
 * @property Item $item
 *
 * @package App\Models
 */
class Buyer extends Model
{
	protected $table = 'buyers';

	protected $casts = [
		'human_id' => 'int',
		'customer_id' => 'int',
		'item_id' => 'int'
	];

	protected $fillable = [
		'human_id',
		'customer_id',
		'item_id',
		'avatar',
		'message'
	];

	public function human()
	{
		return $this->belongsTo(Human::class);
	}

	public function customer()
	{
		return $this->belongsTo(Customer::class);
	}

	public function item()
	{
		return $this->belongsTo(Item::class);
	}
}
