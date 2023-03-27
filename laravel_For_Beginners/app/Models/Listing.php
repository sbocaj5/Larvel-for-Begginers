<?php
    namespace App\Models;

    class Listing{
        public static function all(){
            return [
                [
                    "id" => 1,
                    "title" => "Listing one",
                    "description" => "Lorem Ipsum Dolor"
                ],
                [
                    "id" => 2,
                    "title" => "Listing two",
                    "description" => "Lerom Opsem Delor"
                ]
            ];
        }

        public static function find($id){
            $listingsList = self::all();
            foreach($listingsList as $listing){
                if ($listing["id"] == $id){
                    return $listing;
                }
            }

        }
    }