<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Appointment extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'phone_num', 'point_date', 'slot_id', 'service_id', 'hairstyle_id'];

    public function slot(): BelongsTo
    {
        return $this->belongsTo(Slot::class, 'slot_id', 'id');
    }
    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class, 'service_id', 'id');
    }
    public function hairstyle(): BelongsTo
    {
        return $this->belongsTo(Hairstyle::class, 'hairstyle_id', 'id');
    }
}
