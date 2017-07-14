# noveo_test

Запуск сервера:
```
cd ./server
sudo docker-compose up -d nginx percona
sudo docker-compose exec workspace bash (Осторожно, пробрасывает порты 80, 443, 9000, 3306. Могут быть конфликты)
su laradock
composer install
```
Зайти на http:/localhost/groups и проверить, что все работает  
Далее можно тестировать любым подручным средством
