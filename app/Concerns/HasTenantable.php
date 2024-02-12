<?php

namespace App\Concerns;

use App\Models\Organization;
use Exception;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

trait HasTenantable
{
    /**
     * Boot the trait
     */
    protected static function bootMultitenantable(): void
    {
        if (auth()->user() && !(auth()->user()->hasRole(['super_admin', 'admin']))) {

            static::addGlobalScope('organization', function (Builder $query) {
                if (auth()->check()) {
                    $query->where('organization_id', auth()->user()->organization_id);
                    // or with a `organization` relationship defined:
                    $query->whereBelongsTo(auth()->user()->organization);
                }
            });
        }


        static::creating(function (Model $model) {
            if (auth()->check() && !(auth()->user()->hasRole(['super_admin', 'admin']))) {
                if (empty($model->organization_id)) {

                    $organizationId = auth()->user()?->organization_id;

                    if (is_null($organizationId)) {
                        throw new Exception($model);
                    }

                    // or with a `organization` relationship defined:
                    $model->organization()->associate($organizationId);
                }
            }
        });
    }

    /**
     * Relationship
     */
    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }
}
