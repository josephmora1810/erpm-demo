<?php

namespace App\Enum;

enum InvoiceType: string
{
    case Sale = 'sale';
    case Purchase = 'purchase';

    public function label() : string {
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
