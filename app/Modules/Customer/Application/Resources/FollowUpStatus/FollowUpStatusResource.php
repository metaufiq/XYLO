<?php

namespace App\Modules\Customer\Application\Resources\FollowUpStatus;

use App\Modules\Auth\Domain\Models\User;
use App\Modules\Customer\Domain\Models\FollowUpStatus;
use Illuminate\Http\Resources\Json\JsonResource;

class FollowUpStatusResource extends JsonResource
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
            'status' => $this->status,
        ];
    }
}
