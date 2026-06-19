<?php

namespace App\Enum;

use Filament\Support\Contracts\HasLabel;

enum TravelStatus : string implements HasLabel
{
    case Pending = 'pending';
    case Approved = 'approved';
    case Rejected = 'rejected';

    public function getLabel(): ?string {
        return match($this){
            self::Pending => 'Pendiente',
            self::Approved => 'Aprovado',
            self::Rejected => 'Rechazado'
        };
    }

    public function color(){
        return match($this){
            self::Pending => 'info',
            self::Approved => 'success',
            self::Rejected => 'danger'
        };
    }
}
