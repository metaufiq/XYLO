<?php

namespace App\Modules\Customer\Application\Resources\FollowUpStatus;



use Illuminate\Http\Resources\Json\ResourceCollection;

class FollowUpStatusCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'data' => $this->collection,
        ];
    }
}
