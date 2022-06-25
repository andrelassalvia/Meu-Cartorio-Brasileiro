<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'client_id',
        'comment'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'comments';

    // ======= RELATIONSHIPS ========= //
    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id', 'id');
    }
}
