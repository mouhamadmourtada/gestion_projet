<?php

namespace App\Http\Resources\Recette;

use Illuminate\Http\Resources\Json\JsonResource;

class RecetteResource extends JsonResource
{
    public function toArray($request): array
    {
        return [
            'id' => $this->id,
            'libelle' => $this->libelle,
			'description' => $this->description,
            'created_at' => dateTimeFormat($this->created_at),
            'updated_at' => dateTimeFormat($this->updated_at),
        ];
    }
}
