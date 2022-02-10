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

    const STATUS_PENDING = 'IN_PROGRESS';

    const STATUS_VALIDATE= 'VALIDATE';

    const STATUS_NOT_VALIDATE= 'NOT_VALIDATE';

    const TYPE_READING = 'reading';

    const TYPE_WRITING = 'writing';

     /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'type',
        'status',
        'year',
    ];

    public function user() {

        return  $this->belongsTo(User::class);
    }
}
