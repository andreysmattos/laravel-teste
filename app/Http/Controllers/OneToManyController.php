<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\State;
use Illuminate\Http\Request;

class OneToManyController extends Controller
{
    public function oneToMany(Country $country)
    {

        $paises = Country::where('name', 'LIKE', '%a%')->with('states')->get();

        foreach ($paises as $pais) {
            echo '<h1>' . $pais->name . '</h1>';
            echo '<ul>';

            foreach ($pais->states as $state) {
                echo "<li> {$state->name} </li>";
            }

            echo '</ul>';
        }

        // $paises = Country::where('name', 'LIKE', '%a%')->get();

        // foreach ($paises as $key => $pais) {
        //     echo '<h1> ' . $pais->name . ' </h1>';
        //     $states = $pais->states;
        //     if ($states) {
        //         // echo '<h3> Estados: </h3>';

        //         echo '<ul>';
        //          foreach ($states as $state) {
        //             echo '<li>' . $state->name . '</li>';
        //         }
        //         echo '</ul>';
        //     }
        // }
    }

    public function manyToOne()
    {
        $state = State::find(1);



        dd($state->country);
    }

    public function oneToManyTwo(Country $country)
    {

        $paises = Country::where('name', 'LIKE', '%a%')->with('states')->get();

        foreach ($paises as $pais) {
            echo '<h1>' . $pais->name . '</h1>';
            echo '<ul>';

            foreach ($pais->states as $state) {
                echo "<li> {$state->name}:";
                    foreach ($state->cities as $city) {
                       echo ' - ' . $city->name;
                    }

                echo " </li>";
            }

            echo '</ul>';
        }
    }

    public function oneToManyInsert()
    {
        $country = Country::find(1);
        $dataForm = [
            'name' => 'xd',
            'initials' => 'xd',
        ];

        $insert = $country->states()->create($dataForm);

        dd($insert);
    }

    public function oneToManyInsertTwo()
    {
        $country = Country::find(1);
        $dataForm = [
            'name' => 'Bahia',
            'initials' => 'BA',
            'country_id' => '1'
        ];

        $insert = State::create($dataForm);

        dd($insert);
    }


    public function oneToManyThrough()
    {
        $country = Country::find(1);
        $cities = $country->cities;
        dd($cities);
    }
}
