<?php

namespace Modules\Zemk\Transformers;

use Illuminate\Http\Resources\Json\JsonResource;

class ZemkNewsFullResource extends JsonResource
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
        // return $request; 
        // return parent::toArray(
        //     [1 => 2]
        // );
        // return $request;
        $r = [
            'id' => $this->id,
            'head' => $this->head,
            'date' => $this->date,
            // 'opis_small' => $this->opis_small,
            'opis' => $this->opis,
            'author_name' => $this->author->name,
            'author_website' => $this->author->website_for_news,
            //         // 'email' => $this->email,
            // 'created_at' => $this->created_at,
            // 'updated_at' => $this->updated_at,
        ];
        // $dd = strtotime($this->date);
        // $r['date'] = (date('Y', $dd) == date('Y')) ? date('d M', $dd) : date('d M Y', $dd);

        return $r;
    }
}
