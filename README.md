## BUILD AND RUN APP
docker-compose up --build -d

## FRONT
http://localhost/
![FRONT](guide/home.png?raw=true "HOME")

## ADMIN
http://localhost/admin
<br>
Username: admin
<br>
Password: a111111
![ADMIN](guide/admin.png?raw=true "ADMIN")

## GO TO PHP CONTAINER
docker exec -it php bash

## PHPMYADMIN
http://localhost:8088/
<br>
docker | docker
![PMA](guide/pma.png?raw=true "PMA")

## MAILHOG
http://localhost:8025/

## PHPSTORM & XDEBUG
Go to File > Settings > PHP > Server

## DOWN APP (!!STOP)
docker-compose down
