<?php

namespace App\Models;

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
    }
}
