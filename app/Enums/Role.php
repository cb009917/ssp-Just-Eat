<?php 

namespace App\Enums;
enum Role: int {
    case admin = 1;
    case customer = 2;
    case suppliyer = 3;
}