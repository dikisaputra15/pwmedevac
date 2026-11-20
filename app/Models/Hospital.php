<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hospital extends Model
{
    use HasFactory;

    public const FACILITY_LEVELS = ['Hospital', 'Clinic / Health Centre'];

    protected $guarded = [];

    public function getMapLevelsAttribute(): array
    {
        $levels = array_map('trim', explode(',', strtolower((string) $this->facility_level)));
        if (in_array('belau national hospital', $levels, true)) {
            $levels[] = 'hospital';
        }

        return array_values(array_filter(self::FACILITY_LEVELS, function ($level) use ($levels) {
            return in_array(strtolower($level), $levels, true);
        }));
    }
}
