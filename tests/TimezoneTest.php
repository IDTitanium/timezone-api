<?php

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Artisan;
use Laravel\Lumen\Testing\DatabaseMigrations;
use Laravel\Lumen\Testing\DatabaseTransactions;

class TimezoneTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCanFetchTimezonesByCountry()
    {
        $response = $this->get('/timezones?country_code=NG');

        $response->seeStatusCode(Response::HTTP_OK);
    }

    public function testCannotFetchTimezonesByCountryCodeMoreThanTwoLetters()
    {
        $response = $this->get('/timezones?country_code=NGA');

        $response->seeStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
    }

    public function testMustProvideCountryCode()
    {
        $response = $this->get('/timezones');

        $response->seeStatusCode(Response::HTTP_UNPROCESSABLE_ENTITY);
    }
}
