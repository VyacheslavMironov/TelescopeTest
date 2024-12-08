<h3>Настройка окружения.</h3>
<ul>
    <li>
        <p>
            <span>Создать/настроить конфиг, как минимум надо настроить подключение к БД:</span><br>
            <b style="color: #222;">(sudo) cp .example.env .env</b><br>
        </p>
    </li>
    <br />
    <li>
        <p>
            <span>Поднять docker:</span><br>
            <b style="color: #222;">(sudo) docker-compose up --build -d</b>
        </p>
    </li>
    <br />
    <li>
        <p>
            <span>Создать/настроить конфиг, для работы Laravel:</span><br>
            <b style="color: #222;">(sudo) cp sources/.env.example sources/.env</b><br>
        </p>
    </li>
    <br />
    <li>
        <p>
            <span>Установить зависимости:</span><br>
            <b style="color: #222;">(sudo) docker-compose run php-fpm composer install</b><br>
            <b style="color: #222;">(sudo) docker-compose run node install</b><br>
        </p>
    </li>
    <br />
    <li>
        <span>Запустить сборку фронтенда:</span><br>
        <b style="color: #222;">(sudo) docker-compose run node run build</b><br>
    </li>
    <br />
    <li>
        <span>Сгенерировать CSRF токен:</span><br>
        <b style="color: #222;">(sudo) docker-compose run php-fpm php artisan key:generate</b><br>
    </li>
    <br />
    <li>
        <span>Установить права и группу на директорию с проектом:</span><br>
        <b style="color: #222;">sudo chmod -R 777 $PWD</b><br>
        <b style="color: #222;">sudo chown -R <MY GROUP>:<MY GROUP> $PWD</b><br>
    </li>
</ul>