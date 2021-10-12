<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

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
 * @property Collection|Customer[] $customers
 * @property Collection|Human[] $humans
 * @property Collection|SitePage[] $site_pages
 * @property Collection|Team[] $teams
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

	public function customers()
	{
		return $this->hasMany(Customer::class);
	}

	public function humans()
	{
		return $this->hasMany(Human::class);
	}

	public function site_pages()
	{
		return $this->hasMany(SitePage::class);
	}

	public function teams()
	{
		return $this->hasMany(Team::class);
	}

    public function contacts()
	{
		return $this->hasMany(Contact::class, 'contactable_id');
	}

    public function medias()
	{
		return $this->hasMany(Media::class, 'mediaable_id');
	}

    public function links()
    {
        return $this->hasMany(Link::class, 'linkable_id');
    }
}
