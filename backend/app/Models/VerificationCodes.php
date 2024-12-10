<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VerificationCodes extends Model
{
    use HasFactory;
    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'id',
        'user_id',
        'created_at',
        'updated_at',
        'deleted_at',
        'code',
        'method',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
