<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
    //colleghiamo i progetti
    public function projects() {
        return $this->hasMany(Project::class);
    }
}
