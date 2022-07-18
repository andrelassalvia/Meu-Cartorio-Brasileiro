<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'country_id'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'cities';

    // ======= RELATIONSHIPS ========= //
    public function clients()
    {
        return $this->hasMany(Client::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

}
