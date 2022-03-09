<?php

namespace App\Models;

use App\Models\Report;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Incident extends Model
{
    use HasFactory;

    protected $fillable = [
        'subject',
        'description',
        'category',
        'product',
    ];

    public function reports()
    {
        return $this->hasMany(Report::class);
    }
}
