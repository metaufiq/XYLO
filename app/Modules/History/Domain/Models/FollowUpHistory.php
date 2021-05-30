<?php

namespace App\Modules\History\Domain\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FollowUpHistory extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['customer_id', 'agent_id', 'status_id'];
}
