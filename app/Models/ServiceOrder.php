<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class ServiceOrder extends Model
{
    use HasFactory;

    protected $table = 'service_orders';

    protected $fillable = [
        'client_id',
        'service_type_id',
        'provider_id',
        'order_status_id',
        'classification_id',
        'finish_date',
        'income',
        'cost',
        'tax_rate',
    ];

    protected $casts = [
        'client_id' => 'integer',
        'service_type_id' => 'integer',
        'provider_id' => 'integer',
        'order_status_id' => 'integer',
        'classification_id' => 'integer',
        'finish_date' => 'date',
        'income' => 'float',
        'cost' => 'float',
        'tax_rate' => 'float',
    ];

    // ===== METHODS ===== //
    public function getUpdatedAtAttribute($value)
    {
        if ($value) {
            
            return Carbon::parse($value)->format('d-m-y');
        }
    }

    // ===== RELATIONSHIPS ===== //

    public function serviceType()
    {
        return $this->belongsTo(ServiceType::class);
    }

    public function orderStatus()
    {
        return $this->belongsTo(OrderStatus::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function classification()
    {
        return $this->belongsTo(Classification::class);
    }
}
