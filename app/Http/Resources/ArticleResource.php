<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ArticleResource extends JsonResource
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
            'type' => 'articles',
            'id' => (string) $this->resource->getRouteKey(),
            'attirbutes' => [
                'amount' => $this->resource->amount,
                'cell' => $this->resource->cell,
            ],
            'links' => [
                'self' => route('api.v1.articles.show', $this->resource)
            ]
        ];
    }
}
