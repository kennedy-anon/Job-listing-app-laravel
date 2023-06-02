<?php

namespace App\Models;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1,
                'title' => 'Book',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac lectus id lectus dignissim tristique. Aliquam porttitor nibh id lorem ultrices cursus. Pellentesque in semper dolor. Maecenas id neque nisi. Fusce lacinia pharetra consequat. Sed eleifend lacus nec condimentum interdum. Nam hendrerit nunc et nunc rutrum, id vestibulum sem ultrices. Cras non interdum nulla. Mauris quis placerat neque. Proin ac fringilla ligula, a posuere erat. Donec maximus mauris eu elit congue, at interdum mi tincidunt. Sed in odio a urna volutpat malesuada. Fusce pellentesque orci in lacus feugiat, ut dapibus urna tempus.'
            ],
            [
                'id' => 2,
                'title' => 'Novel',
                'desc' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac lectus id lectus dignissim tristique. Aliquam porttitor nibh id lorem ultrices cursus. Pellentesque in semper dolor. Maecenas id neque nisi. Fusce lacinia pharetra consequat. Sed eleifend lacus nec condimentum interdum. Nam hendrerit nunc et nunc rutrum, id vestibulum sem ultrices. Cras non interdum nulla. Mauris quis placerat neque. Proin ac fringilla ligula, a posuere erat. Donec maximus mauris eu elit congue, at interdum mi tincidunt. Sed in odio a urna volutpat malesuada. Fusce pellentesque orci in lacus feugiat, ut dapibus urna tempus.'
            ]
            ];
    }

    public static function find($id) {
        $listings = self::all();

        foreach($listings as $listing) {
            if ($listing['id'] == $id) {
                return $listing;
            }
        }
    }
}