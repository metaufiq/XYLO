<?php

namespace App\Modules\Customer\Domain\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpStatus extends Model
{
    use HasFactory;
    protected $fillable = ['status', 'id'];
}
