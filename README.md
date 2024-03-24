# bitango-test

#### Установка
```bash
./vendor/bin/sail up -d

# У меня почему-то была ошибка "80ый порт недоступен" и докер-сервис laravel_test не поднимался
# поэтому после sail up -d мне пришлось поднять его вручную
docker compose up laravel_test -d

./vendor/bin/sail composer install

./vendor/bin/sail npm install
```

#### Как запускать
```bash
# Поднять все контейнеры
./vendor/bin/sail up -d
# либо
docker compose up -d
```
