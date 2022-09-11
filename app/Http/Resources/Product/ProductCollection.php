<?php

namespace App\Http\Resources\Product;

use Illuminate\Http\Resources\Json\ResourceCollection;

class ProductCollection extends ResourceCollection
{
    /**
     * Transform the resource collection into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return $this->collection->map(function ($item) {
            return [
                "name" => $item->name,
                "totalPrice" => round((1 - $item->discount / 100) * $item->price, 2),
                "rating" => $item->reviews->count() > 0 ? (round($item->reviews->sum("star") / $item->reviews->count(), 2)) : 0,
                "href" => [
                    "link" => route("products.show", $item->id),
                ],
            ];
        });
    }
}
