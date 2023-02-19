
<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://www.eureciclo.com.br/img/selo-horizontal.ea6b8657.png" width="400"></a></p>
</p>

## Project Description
API FOR SALES REGISTRATION

## How to start the project
- Clone the project on github
https://github.com/luispaulo/save_sales.git

## Check mysql settings in .env file, use your mysql password

```DB_CONNECTION=mysql
    DB_HOST=mysql
    DB_PORT=3306
    DB_DATABASE=save_sales
    DB_USERNAME=root
    DB_PASSWORD=
```

## Install composer
```
    composer install
```

## Now you can upload the container
```
   php artisan serve
```

## Run mysql in terminal
```
   mysql -u root -p 
```
## Create database in mysql
```
   CREATE DATABASE save_sales;
```

## Load the migrates to the database
```
   php artisan migrate
```

## Populate the database with the SEED run in SEQUENCE
```
    php artisan db:seed --class=PaymentMethodsTableSeeder

    php artisan db:seed --class=EmployeesTableSeeder   

    php artisan db:seed --class=ProductSalesTableSeeder 
```

## ENDPOINTS THE PROJECT
```
    GET: http://localhost:8000/api/list_sales/

    GET: http://localhost:8000/api/list_sales/3

    POST: http://localhost:8000/api/save_sales/

    json:    {
        "description": "Product E",
        "price": "100.00",
        "employee_id": 3,
        "payment_method_id": 4
    }
```


## QUESTIONS AND CONTACTS
- **[Whatsapp - Luis Paulo ](https://api.whatsapp.com/send?phone=5561982481004)**
