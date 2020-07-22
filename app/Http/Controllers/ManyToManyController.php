<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;

class ManyToManyController extends Controller
{
    public function manyToMany()
    {
        $city = City::find(5);
        dd($city->companies);
    }


    public function manyToManyInverse()
    {
        $company = Company::find(2);
        $cities = $company->cities;
        dd($cities);
    }

    public function manyToManyInsert()
    {
        $company = Company::find(2);
        $company->cities()->sync([3,4,5]);
        // $company->cities()->attach([3,4,5]);
    }

}
