# Laravel 11 API alkalmazás készítésének lépései - alapok

<a href="https://www.youtube.com/watch?v=LmMJB3STuU4&list=PL38wFHH4qYZUXLba1gx1l5r_qqMoVZmKM">Ezen videó alapján</a>

1. laravel projekt létrehozása : composer create-project laravel/laravel laravel-api
2. .env fájl configurálása (adatbázis)

```DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravelapi
DB_USERNAME=root
DB_PASSWORD=`

5. API kiszolgáló készítése: ```php artisan install:api```
    Közben fogadjuk el a felajánlot acces token table migrálását!
6. Modell, Controller, Seeder és a migrációs fájlok legenerálása: `php artisan make:model Books -a –api`
7. Modell létrehozása 

```
    class Books extends Model
    {
    /** @use HasFactory<\Database\Factories\BooksFactory> */</code>
        use HasFactory;
        protected $fillable=[
            'title',
            'author',
            'price',
        ];
    }
```

## Autentikációs végpontok

https://www.youtube.com/watch?v=7pCDK321ckE&list=PL38wFHH4qYZUXLba1gx1l5r_qqMoVZmKM&index=2

## Frontend react SPA
https://www.youtube.com/watch?v=Qfe7QlFFArA&list=PL38wFHH4qYZUXLba1gx1l5r_qqMoVZmKM&index=3

