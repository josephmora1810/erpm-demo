<?php

namespace App\Enum;

enum Status : string
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Canceled = 'canceled';

    public function label(){
        return match($this){
            self::Pending => 'Pendiente',
            self::Paid => 'Pagado',
            self::Canceled => 'Cancelado'
        };
    }

    public function color(){
        return match($this){
            self::Pending => 'info',
            self::Paid => 'success',
            self::Canceled => 'danger'
        };
    }
}
