<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Asset extends Model
{
    use HasFactory;

    protected $fillable = [
        'asset_name',
        'product_type',
        'service_id',
        'account_name',
        'status',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
