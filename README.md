## RUN
docker-compose up --build

## INSTALL
docker exec -it php bash

### GO TO MYSQL CONSOLE
mysql -u docker -p m2 --protocol=tcp

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
--use-rewrites=1 \
--search-engine=elasticsearch7 \
--elasticsearch-host=es79 \
--elasticsearch-port=9200

## Remove containers
docker rm nginx mysql phpmyadmin php mailhog es79
