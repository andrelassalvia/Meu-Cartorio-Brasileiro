<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'contact',
        'tel',
        'email',
        'zap',
        'brazil_state_id',
        'brazil_city_id'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'providers';

    // ======= RELATIONSHIPS ========= //
    public function serviceOrders()
    {
        return $this->hasMany(ServiceOrder::class);
    }

    public function brazilState()
    {
        return $this->belongsTo(BrazilState::class);
    }

    public function brazilCity()
    {
        return $this->belongsTo(BrazilCity::class);
    }
}
