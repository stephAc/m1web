<?php

namespace App\API\Entity;

class Country implements \JsonSerializable{

    private $id;
    private $name;
    private $city_id;

    public function jsonSerialize():array
    {
        return [
            'id' => $this->getId(),
            'name' => $this->getName(),
            'city_id' => $this->getCityId(),
        ];
    }

    /**
     * @return mixed
     */
    public function getId():?int{ return $this->id; }

    /**
     * @param mixed $id
     */
    public function setId(?int $id): void{ $this->id = $id; }

    /**
     * @return mixed
     */
    public function getName():string{ return $this->name; }

    /**
     * @param mixed $name
     */
    public function setName(string $name): void{ $this->name = $name; }

    /**
     * @return mixed
     */
    public function getCityId():?int{ return $this->city_id; }

    /**
     * @param mixed $city_id
     */
    public function setCityId(?int $city_id): void{ $this->city_id = $city_id; }
}