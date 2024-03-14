<?php

namespace App\Enums;

use Filament\Support\Contracts\HasColor;
use Filament\Support\Contracts\HasIcon;
use Filament\Support\Contracts\HasLabel;

enum OrderStatus: string implements HasColor, HasIcon, HasLabel
{
    case Processing = 'processing';


    case Delivered = 'delivered';


    public function getLabel(): string
    {
        return match ($this) {
            self::Processing => 'Processing',
            self::Delivered => 'Delivered',
        };
    }

    public function getColor(): string | array | null
    {
        return match ($this) {
            self::Processing => 'warning',
            self::Delivered => 'success',
        };
    }

    public function getIcon(): ?string
    {
        return match ($this) {
            self::Processing => 'heroicon-m-arrow-path',
            self::Delivered => 'heroicon-m-check-badge',
        };
    }
}
