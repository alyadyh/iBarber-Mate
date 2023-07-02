<?php

namespace App\Enums;

enum SlotStatus: string
{
    case Pending = 'Pending';
    case Available = 'Available';
    case Unavailable = 'Unavailable';
}