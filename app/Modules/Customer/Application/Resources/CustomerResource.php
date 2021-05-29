<?php

namespace App\Modules\Customer\Application\Resources;

use App\Modules\Auth\Domain\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;

class CustomerResource extends JsonResource
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
            'name' => $this->name,
            'phone_number' => $this->phone_number,
            'follow_up_by' => User::find($this->follow_up_by)?->email,
            'status' => $this->status,
        ];
    }
}
