<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    use HasFactory;

    protected $table = 'outlets';

    public function merchant()
    {
        return $this->belongsTo(Merchant::class, 'merchant_id');
    }
}
