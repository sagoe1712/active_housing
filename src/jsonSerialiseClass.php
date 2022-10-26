<?php

namespace activeHousing;

class jsonSerialiseClass implements \JsonSerializable
{
    protected $array;

    public function __construct(array $array) {
        $this->array = $array;
    }

    public function jsonSerialize() {
        return $this->array;
    }

}
