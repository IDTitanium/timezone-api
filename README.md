# Time Zone API

This is a simple api for fetching the timezone of any country.

## USAGE

Using this API is quite easy.

It follows the format `baseurl/timezones?country_code=NG`. 

The country code uses the standard iso2 code for countries. This is quite useful when you need to fetch timezone for based on a country selection or other similar use cases.

### Samples

*URL*:  [https://time-zones-api.herokuapp.com/timezones?country_code=NG](https://time-zones-api.herokuapp.com/timezones?country_code=NG)

*Response Format:*
```
{
    "message": "Timezones fetched successfully",
    "data": [
        {
            "zone_id": 274,
            "country_code": "NG",
            "zone_name": "Africa/Lagos",
            "abbreviation": "LMT",
            "time_start": "-2035584816",
            "gmt_offset": 815,
            "dst": "0",
            "gmt_offset_abrv": "+0"
        },
        {
            "zone_id": 274,
            "country_code": "NG",
            "zone_name": "Africa/Lagos",
            "abbreviation": "GMT",
            "time_start": "-2035584815",
            "gmt_offset": 0,
            "dst": "0",
            "gmt_offset_abrv": "+0"
        },
        {
            "zone_id": 274,
            "country_code": "NG",
            "zone_name": "Africa/Lagos",
            "abbreviation": "LMT",
            "time_start": "-1940889600",
            "gmt_offset": 815,
            "dst": "0",
            "gmt_offset_abrv": "+0"
        },
        {
            "zone_id": 274,
            "country_code": "NG",
            "zone_name": "Africa/Lagos",
            "abbreviation": "WAT",
            "time_start": "-1767226415",
            "gmt_offset": 1800,
            "dst": "0",
            "gmt_offset_abrv": "+0"
        },
        {
            "zone_id": 274,
            "country_code": "NG",
            "zone_name": "Africa/Lagos",
            "abbreviation": "WAT",
            "time_start": "-1588465800",
            "gmt_offset": 3600,
            "dst": "0",
            "gmt_offset_abrv": "+1"
        }
    ],
    "errors": null
}
```

You also can decide to simply download the database dump and query it the way you like. You can find the MySQL db dump under `database/dumps`.

## Attribution

The CSV used to initially populate the database (hence, the dump), was gotten from timezonedb.com
