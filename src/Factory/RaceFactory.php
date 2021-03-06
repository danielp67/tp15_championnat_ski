<?php

namespace App\Factory;

use App\Entity\Race;

abstract class RaceFactory
{
    public static function fromDbCollection(array $dataRace): Race
    {
        $race = new Race();
        $race->buildFromDb($dataRace);
        return $race;
    }

    public static function arrayFromDbCollection(array $dataRaces): array
    {
        return array_map('self::fromDbCollection', $dataRaces);
    }

    public static function fromRequestAdd(object $request): Race
    {
        $race = new Race();
        $race->buildFromRequestAdd($request);

        return $race;
    }

    public static function fromRequestUdpate(object $request): Race
    {
        $race = new Race();
        $race->buildFromRequestUpdate($request);

        return $race;
    }
}
