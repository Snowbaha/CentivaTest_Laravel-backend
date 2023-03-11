<?php

namespace App\Models;

use App\Observers\TeamSlugObserver;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
    ];

    protected $hidden = ['created_at', 'deleted_at'];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    // delete all user in the team
    public static function boot() {
        parent::boot();
        self::deleting(function($team) { // before delete() method call this
            $team->users()->each(function($user) {
                $user->delete(); // <-- direct deletion
            });
        });

        static::observe(TeamSlugObserver::class);
    }
}
