<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;

use App\Concerns\HasTenantable;
use BezhanSalleh\FilamentShield\Traits\HasPanelShield;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Str;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
    use HasUuids;
    use HasRoles;
    use HasPanelShield;
    use SoftDeletes;
    use HasTenantable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'username',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'default_avatar',
    ];

    /**
     * Get the posts relationship.
     *
     * @return HasMany
     */
    public function posts(): HasMany
    {
        return $this->hasMany(Post::class);
    }

    /**
     * Get the tags relationship.
     *
     * @return HasMany
     */
    public function tags(): HasMany
    {
        return $this->hasMany(Tag::class);
    }

    /**
     * Get the topics relationship.
     *
     * @return HasMany
     */
    public function topics(): HasMany
    {
        return $this->hasMany(Topic::class);
    }

    /**
     * Return a default user avatar.
     *
     * @return string
     */
    public function getDefaultAvatarAttribute(): string
    {
        return $this->gravatar($this->email ?? '');
    }

    /**
     * Generate a Gravatar for a given email.
     *
     * @param  string  $email
     * @param  int  $size
     * @param  string  $default
     * @param  string  $rating
     * @return string
     */
    public static function gravatar(
        string $email,
        int $size = 200,
        string $default = 'retro',
        string $rating = 'g'
    ): string {
        $hash = md5(trim(Str::lower($email)));

        return "https://secure.gravatar.com/avatar/{$hash}?s={$size}&d={$default}&r={$rating}";
    }
}
