<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Activity extends Model
{
    use HasFactory;

    protected $table = "activities";
    protected $guarded = false;

    protected $primaryKey = 'code';
    protected $keyType = 'string';
    public $incrementing = false;

    public $timestamps = false;

    public function timetable(): HasMany
    {
        return $this->hasMany(Timetable::class, 'activity_code', 'code')->orderBy('datetime', 'asc');
    }

}
