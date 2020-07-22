<?php

namespace App\Http\Controllers;

use App\Models\City;
use App\Models\Company;
use Illuminate\Http\Request;

class PolymorphicController extends Controller
{
    public function polymorphic()
    {
        $company = Company::find(1);

        dd($company->comments);
    }

    public function polymorphicInsert()
    {
        $company = Company::find(1);
        $company->comments()->create([
            'description' => 'sdljfsdjfsd fsdkjfsd fsdjsd'
        ]);
    }
}
