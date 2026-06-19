<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum Status : string implements HasLabel
{
    case Pending = 'pending';
    case Paid = 'paid';
    case Canceled = 'canceled';

    public function getLabel() : ?string {
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
