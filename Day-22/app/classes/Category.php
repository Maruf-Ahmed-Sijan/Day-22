<?php


namespace App\classes;


class Category
{
    public function category()
    {
        return[
            0=>[
                'id' => 1,
                'name'=> 'WoW Collection'
            ],

            1=>[
                'id' => 2,
                'name'=> 'Shirt Collection'
            ],

            2=>[
                'id' => 3,
                'name'=> 'Saree Collection'
            ],
        ];
    }
}