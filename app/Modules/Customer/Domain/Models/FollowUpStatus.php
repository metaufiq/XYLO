<?php

namespace App\Modules\Customer\Domain\Models;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FollowUpStatus extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['status', 'id'];
}
