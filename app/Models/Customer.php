<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'service_no',
        'email',
        'address',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
