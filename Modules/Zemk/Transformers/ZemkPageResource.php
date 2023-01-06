<?php

namespace Modules\Zemk\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ZemkPageResource extends JsonResource
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
        return [ 
            'name' => $this->name, 
            'html' => $this->html 
        ];
    }
}
