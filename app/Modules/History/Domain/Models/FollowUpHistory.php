<?php

namespace App\Modules\History\Domain\Models;




use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FollowUpHistory extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'agent_id', 'status_id'];
}
