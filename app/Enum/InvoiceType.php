<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum InvoiceType: string implements HasLabel
{
    case Sale = 'sale';
    case Purchase = 'purchase';

    public function getLabel() : ?string {
        return match($this){
            self::Sale => 'Venta', //(CxC)
            self::Purchase => 'Compra' //(CxP)
        };
    }

    public function color() : string 
    {
        return match($this){
            self::Sale => 'gray',
            self::Purchase => 'danger'
        };
    }
}
