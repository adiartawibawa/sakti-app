<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Organization extends Model implements HasMedia
{
    use HasUuids;
    use Sluggable;
    use InteractsWithMedia;

    protected $fillable = [
        'name',
        'desc',
    ];

    protected $appends = [
        'organization_logo_url'
    ];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function getOrganizationLogoUrlAttribute()
    {
        return $this->getFirstMediaUrl('organisasi');
    }
}
