## BUILD AND RUN APP
docker-compose up --build --detach

## MAGENTO FRONT
http://localhost

## MAGENTO ADMIN
http://localhost/admin
Username: admin
Password: a111111

## GO TO PHP CONTAINER
docker exec -it php bash

### GO TO MYSQL CONSOLE
mysql -u docker -pdocker m2 --protocol=tcp

### MAGENTO SETUP
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
--cleanup-database \
--session-save=db \
--use-rewrites=1 \
--search-engine=elasticsearch7 \
--elasticsearch-host=es79 \
--elasticsearch-port=9200

## PHPMYADMIN
http://localhost:8088/
docker | docker

## MAILHOG
http://localhost:8025/

## DOWN APP (!!STOP)
docker-compose down
