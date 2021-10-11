<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Section
 *
 * @property int $id
 * @property int $site_page_id
 * @property string $name
 * @property string $title
 * @property Carbon $created_at
 * @property Carbon $updated_at
 *
 * @property SitePage $site_page
 * @property Collection|Item[] $items
 *
 * @package App\Models
 */
class Section extends Model
{
	protected $table = 'sections';

	protected $casts = [
		'site_page_id' => 'int'
	];

	protected $fillable = [
		'site_page_id',
		'name',
		'title',
        'description'
	];

    //TODO: comment db tables

    //Change iconable_item.value -> description + refactore code

	public function sitePage()
	{
		return $this->belongsTo(SitePage::class);
	}

    public function media()
	{
		return $this->hasOne(Media::class, 'mediaable_id');
	}

	public function items()
	{
		return $this->hasMany(Item::class);
	}

    public function description()
	{
		return $this->hasOne(Description::class, 'descriptionable_id');
	}
}
