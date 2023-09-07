<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $fillable = [
        'fname',
        'lname',
        'address',
        'tel',
        'proglang',
        'reason',
        'password',
        'user_id'
    ];

    public function user(): BelongsTo
{
    return $this->belongsTo(User::class);
}


}
