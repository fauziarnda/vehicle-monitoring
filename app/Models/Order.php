<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'vehicle_id',
        'driver_id',
        'approver1_id',
        'approver2_id',
        'tanggal_pemakaian',
        'lama_pemakaian',
        'keperluan',
        'status',
    ];

    public function vehicle()
    {
        return $this->belongsTo(vehicles::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }

    public function approver1()
    {
        return $this->belongsTo(User::class, 'approver1_id');
    }

    public function approver2()
    {
        return $this->belongsTo(User::class, 'approver2_id');
    }
}
