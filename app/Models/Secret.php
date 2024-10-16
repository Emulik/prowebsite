<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Secret extends Model
{
    use HasFactory;

    public function setSecretAttribute($value)
    {
        $this->attributes['secret'] = Crypt::encryptString($value);
    }

    public function getSecretAttribute($value)
    {
        return Crypt::decryptString($value);
    }
}
