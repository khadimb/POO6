<?php

class Speedometer
{
    const ONE_MILE = 1.609;
    const ONE_KM = 0.6215; 

    public static function convertKmToMiles(int $nbofkm){
        return $nbofkm * self::ONE_KM;
    } 
    public static function convertMilesToKm(int $nbofmiles){
        return $nbofmiles * self::ONE_MILE;
    }

}
