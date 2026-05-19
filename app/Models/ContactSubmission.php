<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['naam', 'email', 'telefoon', 'behandeling', 'bericht', 'is_read'])]
class ContactSubmission extends Model
{
    public function scopeUnread(Builder $query): Builder
    {
        return $query->where('is_read', false);
    }
}
