<?php

namespace Modules\Zemk\Transformers;

use Illuminate\Http\Resources\Json\ResourceCollection;
use Modules\Zemk\Transformers\ZemkNewsResource;


class ZemkNewsCollection extends ResourceCollection
{

    /**
     * Ресурс, используемый при формировании коллекции.
     *
     * @var string
     */
    public $collects = ZemkNewsResource::class;


    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
