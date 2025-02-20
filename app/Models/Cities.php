<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cities extends Model
{
    use HasFactory;
    protected $guarded = ['id'];

    /**
     * Get all of the eksportirs for the Cities
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function eksportirs(): HasMany
    {
        return $this->hasMany(Eksportir::class, 'city_id', 'id');
    }
}
