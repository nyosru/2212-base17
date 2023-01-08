<?php

namespace Modules\Zemk\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ZemkUslugiResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        $r =[
        'id' => $this->id,
        'head' => $this->head,
        'img' => $this->img,
        'opis' => $this->opis,
        'sort' => $this->sort,
        ];
        return $r;
    }
}
