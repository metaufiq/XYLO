<?php

namespace App\Modules\Customer\Application\Resources\Customer;

use App\Modules\Auth\Domain\Models\User;
use App\Modules\Customer\Domain\Models\Customer;
use App\Modules\Customer\Domain\Models\FollowUpStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowUpHistoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'customer' => Customer::find($this->customer_id),
            'status' => FollowUpStatus::find($this->status_id),
            'agent' => User::find($this->agent_id),
        ];
    }
}
