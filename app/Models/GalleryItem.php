<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

#[Fillable(['title', 'description', 'before_image', 'after_image', 'treatment_type', 'is_published', 'sort_order'])]
class GalleryItem extends Model
{
    protected function casts(): array
    {
        return [
            'is_published' => 'boolean',
            'sort_order' => 'integer',
        ];
    }

    public function scopePublished(Builder $query): Builder
    {
        return $query->where('is_published', true);
    }

    public function scopeOrdered(Builder $query): Builder
    {
        return $query->orderBy('sort_order')->orderByDesc('created_at');
    }

    public function getBeforeImageUrlAttribute(): string
    {
        return Storage::url($this->before_image);
    }

    public function getAfterImageUrlAttribute(): string
    {
        return Storage::url($this->after_image);
    }
}
