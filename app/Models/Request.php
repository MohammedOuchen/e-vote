<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Request extends Model
{
    use HasFactory;
    use InteractsWithMedia;

    public function user() {
        $this->belongsTo(User::class);
    }
}
