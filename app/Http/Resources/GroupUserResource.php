<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class GroupUserResource extends JsonResource
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
            'email' => $this->email,
            'status' => $this->pivot->status,
            'current_cycle' => $this->pivot->cycle,
            'contributions' =>  $this->contributions->sum('amount') ?? 0,
        ];
        return parent::toArray($request);
    }
}
