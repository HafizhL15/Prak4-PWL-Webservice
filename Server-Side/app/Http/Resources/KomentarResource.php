<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class KomentarResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id'=> $this->id,
            'nama'=> $this->nama,
            'komentar'=> $this->komentar,
            'project_id' =>$this->project_id,
            'created_at' =>$this->created_at->format('Y-m-d H:i:s')
        ];
    }
}
