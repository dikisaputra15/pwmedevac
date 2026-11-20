<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Police extends Model
{
    use HasFactory;

    public const CATEGORIES = ['National Police HQ', 'Police Sub-Station'];

    protected $guarded = [];

    public function getMapCategoriesAttribute(): array
    {
        $categories = array_map('trim', explode(',', strtolower((string) $this->category)));

        return array_values(array_filter(self::CATEGORIES, function ($category) use ($categories) {
            return in_array(strtolower($category), $categories, true);
        }));
    }
}
