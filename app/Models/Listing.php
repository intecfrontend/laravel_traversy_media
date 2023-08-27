<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing {
    public static function all() {
        return [
            [
                'id' => 1, 
                'title' => 'Listing1',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ut!',
            ],    
            [
                'id' => 2, 
                'title' => 'Listing2',
                'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore, ut!',
            ],
        ];
    }
    public static function find($id){
        $listings = self::all();
        foreach($listings as $listing){
            if($listing['id'] == $id){
                return $listing;
            }
    }
}}