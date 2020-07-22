<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Location;
use Illuminate\Http\Request;

class OneToOneController extends Controller
{
    public function oneToOne(Country $country)
    {
        // $country = Country::find(2);
        echo $country->name;

        echo '<br/>';
        $location = $country->location;
        echo "Latitude:  {$location->latitude}";
        echo ' / ';
        echo "Longitude:  {$location->longitude}";
    }

    public function oneToOneInverse(Location $location)
    {
        echo "Latitude:  {$location->latitude}";
        echo ' / ';
        echo "Longitude:  {$location->longitude}";
        echo '<hr />';

        $country = $location->country;

        echo "Pais: {$country->name}";
    }
    public function oneToOneInsert()
    {
      $dataForm = [
          'name'        => 'Irlanda',
          'latitude'    => 999,
          'longitude'   => 9992
      ];

      $country = Country::create($dataForm);
      $country->location()->create($dataForm);

    //   $location = new Location();
    //   $location->latitude = $dataForm['latitude'];
    //   $location->longitude = $dataForm['longitude'];
    //   $location->country_id = $country->id;
    //   $location->save();

      echo 'Success';

    }
}
