<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Subcategory;
use App\Category;

class SubcategoryResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
     public static $wrap='subcategory'; //name pay /id
    public function toArray($request)
    {
        // return parent::toArray($request);

         return[
           'subcategory_name' => $this->name,
           'subcategory_id' =>$this->id,
           
           'category'=>Category::find($this->category_id),
           'created_at' => $this->created_at,
           'updated_at' => $this->updated_at,
        ];
    }
}
