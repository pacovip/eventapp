# Laravel Eventapp Api Rest


Simple example of a REST API with Laravel 6.x

## Install with Composer

```
    $ curl -s http://getcomposer.org/installer | php
    $ php composer.phar install or composer install
```

## See or change Database Configuration in file

```
    .env
```

## Migrate datatable schema and seed

```
   $ php artisan migrate:refresh --seed`
```

## update the application key (optional :because none key has already generated)

```
   $ php artisan key:generate
```
## API_BASE_URL=http://127.0.0.1:8000/api/

## set your application run on local rerver 

```
   $ php artisan serve
```

## Getting with Curl 

## eventstype

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/eventstype 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/eventstype/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"name": "eventstype name", "description": "eventstype description"}' http://127.0.0.1:8000/api/eventstype 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"name": "eventstype name", "description": "eventstype description"}' http://127.0.0.1:8000/api/eventstype/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/eventstype/:id
```

## city

```    
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/city 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/city/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"name": "city name", "description": "city description"}' http://127.0.0.1:8000/api/city 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"name": "city name", "description": "city description"}' http://127.0.0.1:8000/api/city/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/city/:id
```

## town

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/town 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/town/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"city_id":"1", "name": "town name", "description": "town description"}' http://127.0.0.1:8000/api/town 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"city_id":"1", "name": "town name", "description": "town description"}' http://127.0.0.1:8000/api/town/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/town/:id
```

## district

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/district 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/district/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"town_id":"1", "name": "district name", "description": "district description"}' http://127.0.0.1:8000/api/district 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"town_id":"1", "name": "district name", "description": "district description"}' http://127.0.0.1:8000/api/district/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/district/:id
```

## event

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/event 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/event/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"type_id": "1", "city_id": "1", "town_id": "1", "district_id": "1", "name": "Event name", "description": "Event description", "image": "image updoaded directory", "video": "video updoaded directory", "website_advertiser": "website.com", "email_advertiser": "email@website.com", "contact_advertiser": "022501022542", "date":"2020-01-06 13:14:45"}' http://127.0.0.1:8000/api/event 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"type_id": "1", "city_id": "1", "town_id": "1", "district_id": "1", "name": "Event name", "description": "Event description", "image": "image updoaded directory", "video": "video updoaded directory", "website_advertiser": "website.com", "email_advertiser": "email@website.com", "contact_advertiser": "022501022542", "date":"2020-01-06 13:14:45"}' http://127.0.0.1:8000/api/event/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/event/:id
```

## favorite

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/favorite 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/favorite/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"event_id":"1", "user_id": "1"}' http://127.0.0.1:8000/api/favorite 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"event_id":"1", "user_id": "1"}' http://127.0.0.1:8000/api/favorite/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/favorite/:id
```

## hobby

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/hobby 
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/hobby/:id
    $ curl -H 'content-type: application/json' -v -X POST -d '{"type_id": "1", "city_id": "1", "town_id": "1", "district_id": "1"}' http://127.0.0.1:8000/api/hobby 
    $ curl -H 'content-type: application/json' -v -X PUT -d '{"type_id": "1", "city_id": "1", "town_id": "1", "district_id": "1"}' http://127.0.0.1:8000/api/hobby/:id
    $ curl -H 'content-type: application/json' -v -X DELETE http://127.0.0.1:8000/api/hobby/:id
```

## Event Pagination with Curl

```
    $ curl -H 'content-type: application/json' -v -X GET http://127.0.0.1:8000/api/event?page=:number_page
```

## User Registration with Curl 

```
    $ curl -H 'content-type: application/json' -v -X POST -d '{"firstname": "user first name", "lastname": "user last name", "email": "user@example", "password": "secret", "password_confirmation": "secret"}' http://127.0.0.1:8000/api/register 
```

## User Authentication with Curl 

```
    $ curl -H 'content-type: application/json' -v -X POST -d '{"email": "user@example", "password": "secret"}' http://127.0.0.1:8000/api/login 
```
