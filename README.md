## Simple Restful Map API

A Single restful API endpoint which would return all the stations that fall within a specified radius nearby a given latitude and longitude Location points for a region on a map.

    See file "Example Query (Postman).PNG" in project root

    http://localhost/api/stations/stations/{latitude}/{longitude}/{radius}

    Example
    http://localhost/api/stations/51.47560393/-2.380716715/10

## Running Instructions (In WSL2 or Linux bash )

1. Clone or copy repo

2. Navigate to root folder of project<br>
   cd zap-map

3. Build Image and Run container<br>
   ./vendor/bin/sail up

4. Run migration<br>
   ./vendor/bin/sail artisan migrate --path=/database/migrations/2021_06_11_021909_create_stations_table.php

5. Seed database with csv data<br>
   ./vendor/bin/sail composer install

6. Run command to seed database with csv data<br>
   ./vendor/bin/sail artisan load:csv

7. Test end point<br>
   http://localhost/api/stations/stations/{latitude}/{longitude}/{radius}

    Example<br>
    http://localhost/api/stations/51.47560393/-2.380716715/10

8. To shutdown<br>
   ./vendor/bin/sail down

## Additional Composer Package & Formula reference

Additional package installed for importing excel csv into laravel
https://docs.laravel-excel.com/3.1/getting-started/
https://docs.laravel-excel.com/3.1/getting-started/installation.html

Haversine Formula for calculating distance between latitude and longitude pairs
https://www.geeksforgeeks.org/program-distance-two-points-earth/

## Built Using Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.
