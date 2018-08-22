## Запуск
``` cd ~/www/mooraway.com ```

``` docker-compose up -d ```

## Подключиться к консоле для выполнения миграций и обновления композера
``` docker ps | grep fpm ```

Ищем ID (что-то вроде этого 68ff3d6b83c6)

``` docker exec -it ID bash ```

``` cd /site ``` - заходим в директорию

``` php artisan migrate ``` - выполнить миграции

``` composer install ``` - обновить композер

``` exit``` - выход из консоли

## Завершение работы
``` docker-compose down  ```

``` docker rm -f $(docker ps -a -q) ```

``` exit ```