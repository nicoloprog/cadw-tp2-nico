<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fait extends Model
{
    use HasFactory;

    public function getFait()
    {
        return $this->fact;
    }

    public function getLengthFait()
    {
        return $this->length;
    }
}
