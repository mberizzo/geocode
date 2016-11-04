<?php

namespace Nkootstra\Geocode;

use Illuminate\Http\Request;

use App\Http\Requests;

class GeoCode
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public static function getInformation($address)
    {
        $response = file_get_contents('http://maps.googleapis.com/maps/api/geocode/json?address='  . urlencode($address));
        $response = json_decode($response, true);

        // formatted_address
        $output = array();

        if (isset($response['results'][0])) {
            // set latitude and longitude
            $output = $response['results'][0]['geometry']['location'];
            // set formatted addres
            $output['formatted_address'] = $response['results'][0]['formatted_address'];
            // set country
            foreach($response['results'][0]['address_components'] as $component) {
                if(in_array('country',$component['types'])) {
                    $output['country'] = $component['long_name'];
                    continue;
                }
            }

        }

        return $output;
    }

}
