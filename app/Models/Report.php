<?php

namespace App\Models;

use App\Models\Note;
use App\Models\Asset;
use App\Models\Customer;
use App\Models\Incident;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Report extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'reference_no',
        'incident_id',
        'customer_id',
        'asset_id'
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function incident()
    {
        return $this->belongsTo(Incident::class);
    }

    public function asset()
    {
        return $this->belongsTo(Asset::class);
    }

    public function notes()
    {
        return $this->hasMany(Note::class);
    }
}
