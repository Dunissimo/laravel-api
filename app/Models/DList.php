<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DList extends Model
{
    use HasFactory;

    public function cards()
    {
        return $this->hasMany(Card::class);
    }
}
