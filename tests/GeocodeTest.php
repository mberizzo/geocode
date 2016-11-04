<?php
use Nkootstra\Geocode\GeoCode as Geocode;

class GeocodeTest extends \PHPUnit_Framework_TestCase
{

  public function testGetCoordinate()
  {
    $address = 'Enschede, Netherlands';

    $result = Geocode::getInformation($address);

    $expectedLat = '52.2215372';
    $expectedLng = '6.8936619';
    $expectedFormattedAddress = 'Enschede, Netherlands';
    $expectedCountry = 'Netherlands';

    // Test
    $this->assertEquals($result['lat'], $expectedLat);
    $this->assertEquals($result['lng'], $expectedLng);
    $this->assertEquals($result['formatted_address'], $expectedFormattedAddress);
    $this->assertEquals($result['country'], $expectedCountry);
  }
}
