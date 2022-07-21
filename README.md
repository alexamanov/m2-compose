## RUN
docker-compose up --build

## INSTALL
docker exec -it php bash

php bin/magento setup:install --base-url=http://localhost/ --db-host=mysql --db-name=m2 --db-user=docker --db-password=docker --admin-firstname=Magento --admin-lastname=User --admin-email=user@example.com --admin-user=admin --admin-password=a111111 --language=en_US  --currency=USD --timezone=America/Chicago --use-rewrites=1 --search-engine=elasticsearch7 --elasticsearch-host=es7.9 --elasticsearch-port=9200