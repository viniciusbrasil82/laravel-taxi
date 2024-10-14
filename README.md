# laravel-taxi
Laravel Taxi Exercise

É necessário possuír o Composer e o PHP disponíveis no ambiente.

Após checkout.:


. Para testes, usar o POSTMAN - Importar o arquivo TesteTaxi.postman_collection.json
<br/>
. Criar um usuário usando o endpoint Register
<br/>
http://localhost:8000/api/register
<br/>
. Criar um usuário usando o endpoint Login
<br/>
http://localhost:8000/api/login
<br/>
. Cancelar corrida usando o endpoint Criar
<br/>
http://localhost:8000/api/corrida/criar
<br/>
. Cancelar corrida usando o endpoint Cancelar
<br/>
http://localhost:8000/api/corrida/cancelar/{1}


<br/><br/>
Para rodar a aplicação em teste.:
<br/>
git clone https://github.com/viniciusbrasil82/laravel-taxi.git
<br/>
composer install
<br/>
php artisan make migration
<br/>
php artisan migrate
<br/>
php artisan serve