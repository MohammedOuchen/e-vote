<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Candidate extends Model
{
    use HasFactory;

        /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'active',
        'request_id',
        'election_id'
    ];


    public function election() {

        return  $this->belongsTo(Election::class);
    }

    public function request() {

        return  $this->belongsTo(Request::class);
    }
}
