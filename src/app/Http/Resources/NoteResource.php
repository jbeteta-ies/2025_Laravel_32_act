<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'titulo' => $this->title,
            'descripcion' => $this->description,
            'fecha' => $this->date,
            'estado' => $this->done ? 'Completada' : 'Pendiente'
        ];
    }
}
