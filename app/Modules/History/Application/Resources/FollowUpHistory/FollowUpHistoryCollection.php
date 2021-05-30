<?php

namespace App\Modules\History\Application\Resources\FollowUpHistory;

use App\Modules\Customer\Application\Resources\Customer\FollowUpHistoryResource;
use Illuminate\Http\Resources\Json\ResourceCollection;

class FollowUpHistoryCollection extends ResourceCollection
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
            'data' => $this->collection->toArray(),
        ];
    }
}
