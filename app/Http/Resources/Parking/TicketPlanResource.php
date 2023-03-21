<?php

namespace App\Http\Resources\Parking;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\ResourceCollection;

class TicketPlanResource extends ResourceCollection
{
     /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        return $request->all();
    }
}
