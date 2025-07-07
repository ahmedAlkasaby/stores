<?php

namespace App\Enums;

enum TypeAddressEnum: string
{
    case Home = 'home';
    case Work = 'work';
    case Other = 'other';



    public function label(): string
    {
        return __('api.' . $this->value);
    }

  


}
