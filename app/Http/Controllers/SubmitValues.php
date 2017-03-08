<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class SubmitValues extends Controller
{
    //

    public function upload(){
        //run faker
//            $faker = Faker::create();
//            foreach (range(1,10) as $index) {
//                DB::table('users')->insert([
//                    'name' => $faker->name,
//                    'email' => $faker->email,
//                    'password' => bcrypt('secret'),
//                ]);
//            }


        //render view
        return view('faker');
    }
}
