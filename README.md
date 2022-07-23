## REQUIREMENTS
docker
<br>
docker-compose

## BUILD AND RUN APP (10-40min)
docker-compose up --build -d

## INSTALL MAGENTO (5-25min)
docker exec -it php powershell
<br>
php bin/magento setup:install \
--base-url=http://localhost/ \
--db-host=mysql \
--db-name=m2 \
--db-user=docker \
--db-password=docker \
--admin-firstname=Magento \
--admin-lastname=User \
--admin-email=user@example.com \
--admin-user=admin \
--admin-password=a111111 \
--language=en_US  \
--currency=USD \
--timezone=America/Chicago \
--use-rewrites=1 \
--search-engine=elasticsearch7 \
--elasticsearch-host=es79 \
--elasticsearch-port=9200

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
docker exec -it php powershell
<br>
(For Windows - powershell, for Linux - bash)

## PHPMYADMIN
http://localhost:8088/
<br>
docker | docker
![PMA](guide/pma.png?raw=true "PMA")

## MAILHOG
http://localhost:8025/

## PHPSTORM & XDEBUG
Go to File > Settings > PHP > Server

## AFTER INSTALLATION TO RUN USE
docker-compose up -d

## DOWN APP (!!STOP)
docker-compose down

## !!DON'T USE THIS!! IMPORT DB VIA MYSQL CLI (ADVANCED. 5-10min)
mysql -u docker -p m2 --protocol=tcp < dump/m2.sql
<br>
Enter password: docker
