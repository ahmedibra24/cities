<?php

class WorldCityModel{
// this class is needed: to have a data structure to hold the data from the database
    public function __construct(
        public int $id,
        public string $city,
        public string $cityAscii,
        public float $lat,
        public float $lng,
        public string $country,
        public string $iso2,
        public string $iso3,
        public string $adminName,
        public string $capital,
        public int $population
    ) {}

    // you can add methods here if needed in the future (helpers, formatters, etc)

    public function getCityWithCountry():string {
        return "{$this->city} ({$this->getFlag()} {$this->country})";
    }

    public function getFlag():string {
        return get_flag_for_country($this->iso2);
    }
}