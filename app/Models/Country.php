<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
    ];

    /**
     * table associated with the model
     */
    protected $table = 'countries';

    // ======= RELATIONSHIPS ========= //

    public function clients()
    {
        return $this->hasMany(Clients::class);
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }

}
