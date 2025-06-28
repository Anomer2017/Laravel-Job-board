<?php

namespace App\Models;



class Job 
{
    public static function all(): array
    {
        return [
            ['title' => 'Saftwere Engineer' , 'Salary' => '$1000'],
            ['title'=> 'Graphic Deisgner' , 'Salary' => '$2000' ]
        ];
    }
}
