<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Client extends Model
{
    use HasFactory;

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'tel',
        'email',
        'birth_date',
        'firma_aberta',
        'cnh',
        'cpf',
        'digital_certification',
        'rg',
        'passport',
        'brazil_state_id',
        'brazil_city_id',
        'country_id',
        'city_id',
        'client_status_id',
        'marital_status_id',
        'occupation_id',
        'rg_file',
        'passport_file',
        'cnh_file',
        'address_file'
    ];

    /**
     * table associated with the model
     */
    protected $table = 'clients';

    // ======= RELATIONSHIPS ========= //

    public function clientStatus()
    {
        return $this->belongsTo(ClientStatus::class);
    }

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

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function occupation()
    {
        return $this->belongsTo(Occupation::class);
    }

    public function maritalStatus()
    {
        return $this->belongsTo(MaritalStatus::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    // ====== METHODS ===== //

    public function getUpdatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-y');
    }

    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->format('d-m-y');
    }

    public function setNameAttribute($value)
    {
        return filter_var($value, FILTER_SANITIZE_SPECIAL_CHARS);
    }
}
