### REQUIREMENTS
docker
<br>
docker-compose

### STOP LOCAL SERVERS (XAMP, OPENSERVER, DENWER, APACHE2, NGINX, MYSQL)

### CLONE THIS REPO (OR DOWNLOAD ZIP)
git clone git@github.com:alexamanov/m2-compose.git
<br>
cd m2-compose

### BUILD AND RUN APP (10-30min)
docker-compose up --build -d

### INSTALL MAGENTO (10-30min)
docker exec -it php powershell
<br>
(For Windows - powershell, for Linux - bash)
<br>
<br>
php bin/magento setup:install \\
--base-url=http://localhost/ \\
--db-host=mysql \\
--db-name=m2 \\
--db-user=docker \\
--db-password=docker \\
--admin-firstname=Magento \\
--admin-lastname=User \\
--admin-email=user@example.com \\
--admin-user=admin \\
--admin-password=a111111 \\
--language=en_US  \\
--currency=USD \\
--timezone=America/Chicago \\
--use-rewrites=1 \\
--search-engine=elasticsearch7 \\
--elasticsearch-host=es79 \\
--elasticsearch-port=9200

### FRONT
http://localhost/
<br>
![FRONT](guide/home.png?raw=true "HOME")

### ADMIN
http://localhost/admin
<br>
Username: admin
<br>
Password: a111111
![ADMIN](guide/admin.png?raw=true "ADMIN")

### GO TO PHP CONTAINER
docker exec -it php powershell
<br>
(For Windows - powershell, for Linux - bash)

### PHPMYADMIN
http://localhost:8088/
<br>
docker | docker
![PMA](guide/pma.png?raw=true "PMA")

### MAILHOG
http://localhost:8025/
<br>
![MAIL-1](guide/mail-1.png?raw=true "mail-1")
![MAIL-2](guide/mail-2.png?raw=true "mail-2")

### PHPSTORM & XDEBUG
Go to File > Settings > PHP > Servers
![PHPSTORM-XDEBUG-1](guide/phpstorm-xdebug-1.png?raw=true "PHPSTORM-XDEBUG-1")
<br>
<br>
Name: PhpServerBase
<br>
Host: 127.0.0.1
<br>
Use path mapping: true
<br>
Absolute path on the server: /var/www/html
<br>
![PHPSTORM-XDEBUG-2](guide/phpstorm-xdebug-2.png?raw=true "PHPSTORM-XDEBUG-2")
<br>
<br>
Go to File > Settings > PHP
<br>
Change CLi Interpreter
![PHPSTORM-XDEBUG-4](guide/phpstorm-xdebug-4.png?raw=true "PHPSTORM-XDEBUG-4")
![PHPSTORM-XDEBUG-5](guide/phpstorm-xdebug-5.png?raw=true "PHPSTORM-XDEBUG-5")
![PHPSTORM-XDEBUG-6](guide/phpstorm-xdebug-6.png?raw=true "PHPSTORM-XDEBUG-6")
<br>
<br>
Result:
![PHPSTORM-XDEBUG-3](guide/phpstorm-xdebug-3.png?raw=true "PHPSTORM-XDEBUG-3")

### AFTER INSTALLATION TO RUN USE
docker-compose up -d

#### DOWN APP (!!STOP)
docker-compose down

#### !!DON'T USE THIS!! IMPORT DB VIA MYSQL CLI (ADVANCED. 5-10min)
mysql -u docker -p m2 --protocol=tcp < dump/m2.sql
<br>
Enter password: docker
