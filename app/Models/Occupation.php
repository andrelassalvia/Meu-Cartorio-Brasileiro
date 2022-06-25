<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
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
    protected $table = 'occupations';

    // ======= RELATIONSHIPS ========= //
    public function clients()
    {
        return $this->belongsTo(Client::class, 'occupation_id', 'id');
    }
}
