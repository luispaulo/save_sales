

## API FOR SALES REGISTRATION

Download the project from Github


## Mysql database settings

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=save_sales
DB_USERNAME=root
DB_PASSWORD=

## Run

php artisan migrate

## Populate the database with the SEED run in SEQUENCE

php artisan db:seed --class=PaymentMethodsTableSeeder

php artisan db:seed --class=EmployeesTableSeeder   

php artisan db:seed --class=ProductSalesTableSeeder 


## Contributing

Thank you for considering contributing to the we project
