<?php

declare(strict_types=1);

namespace App\Enums;

enum ProductStatusEnum: string
{
    case Pending = 'pending';
    case Active = 'active';
    case Inactive = 'inactive';
}