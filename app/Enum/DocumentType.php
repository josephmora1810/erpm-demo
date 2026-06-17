<?php

namespace App\Enum;

enum DocumentType : string
{
    case Venezuelan = 'V';
    case Foreign = 'E';
    case Passport = "P";
    case Governmental = "G";
    case Legal = "J";

    public function label() : string
    {
        return match($this){
            self::Venezuelan => 'Venezolano',
            self::Foreign => 'Extranjero',
            self::Passport => 'Pasaporte',
            self::Legal => 'Juridico',
            self::Governmental => 'Gubernamental'
        };
    }
}
