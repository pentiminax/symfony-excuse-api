<?php

namespace App\DTO;

class Excuse implements \JsonSerializable
{
    public function __construct(
        public ?string $excuse = null
    ) {
    }

    public function jsonSerialize(): array
    {
        return [
            'excuse' => $this->excuse,
        ];
    }
}