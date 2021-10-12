<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Item
 *
 * @property int $id
 * @property int $item_type_id
 * @property int $section_id
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property Section $section
 * @property ItemType $item_type
 * @property Collection|Icon[] $icons
 *
 * @package App\Models
 */
class Item extends Model
{
	protected $table = 'items';

	protected $casts = [
		'item_type_id' => 'int',
		'section_id' => 'int'
	];

	protected $fillable = [
		'item_type_id',
		'section_id'
	];

	public function section()
	{
		return $this->belongsTo(Section::class);
	}

	public function itemType()
	{
		return $this->belongsTo(ItemType::class);
	}

    public function iconableItem()
	{
		return $this->hasOne(IconableItem::class);
	}

	public function icons()
	{
		return $this->belongsToMany(Icon::class, 'iconable_items')
					->withPivot('id', 'title', 'value')
					->withTimestamps();
	}
}
