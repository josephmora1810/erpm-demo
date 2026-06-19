<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum DocumentType : string implements HasLabel
{
    case Venezuelan = 'V';
    case Foreign = 'E';
    case Passport = "P";
    case Governmental = "G";
    case Legal = "J";

    public function getLabel() : ?string
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
