### REQUIREMENTS
docker-compose https://docs.docker.com/desktop/install/windows-install/

### STOP LOCAL SERVERS (XAMPP, OPENSERVER, DENWER, APACHE2, NGINX, MYSQL, etc)

### CLONE THIS REPO VIA GIT
https://git-scm.com/download/win
<br>
git clone git@github.com:alexamanov/m2-compose.git

### OR DOWNLOAD ZIP
![ZIP](guide/zip.png?raw=true "ZIP")

### OPEN PROJECT IN CONSOLE (CMD, POWERSHELL, BASH)
cd m2-compose

### BUILD AND RUN APP
docker-compose up --build -d

### IMPORT DATABASE
Go to mysql container:
<br>
docker exec -it mysql bash
<br>
<br>
mysql -u docker -p m2;
<br>
Enter password: docker
<br>
<br>
source /home/m2.sql;

### FRONT
http://localhost/
<br><br>
![FRONT](guide/home.png?raw=true "HOME")

### ADMIN
http://localhost/admin
<br>
Username: admin
<br>
Password: a111111
<br><br>
![ADMIN](guide/admin.png?raw=true "ADMIN")

### GO TO PHP CONTAINER
docker exec -it php bash
<br>
or via docker desktop

### PHPMYADMIN
http://localhost:8088/
<br>
docker | docker
<br><br>
![PMA](guide/pma.png?raw=true "PMA")

### MAILHOG
http://localhost:8025/
<br><br>
![MAIL-1](guide/mail-1.png?raw=true "mail-1")
![MAIL-2](guide/mail-2.png?raw=true "mail-2")

### PHPSTORM & XDEBUG
Open m2-compose/ce244 directory in PHPSTORM
<br><br>
Go to File > Settings > PHP > Servers
<br><br>
![PHPSTORM-XDEBUG-1](guide/phpstorm-xdebug-1.png?raw=true "PHPSTORM-XDEBUG-1")
<br><br>
Name: PhpServerBase
<br>
Host: 127.0.0.1
<br>
Use path mapping: true
<br>
Absolute path on the server: /var/www/html
<br><br>
![PHPSTORM-XDEBUG-2](guide/phpstorm-xdebug-2.png?raw=true "PHPSTORM-XDEBUG-2")
<br><br>
Go to File > Settings > PHP
<br>
Change CLi Interpreter
<br>
![PHPSTORM-XDEBUG-4](guide/phpstorm-xdebug-4.png?raw=true "PHPSTORM-XDEBUG-4")
![PHPSTORM-XDEBUG-5](guide/phpstorm-xdebug-5.png?raw=true "PHPSTORM-XDEBUG-5")
![PHPSTORM-XDEBUG-6](guide/phpstorm-xdebug-6.png?raw=true "PHPSTORM-XDEBUG-6")
<br><br>
Result:
![PHPSTORM-XDEBUG-3](guide/phpstorm-xdebug-3.png?raw=true "PHPSTORM-XDEBUG-3")

### AFTER INSTALLATION TO RUN USE
docker-compose up -d

#### DOWN APP (!!STOP)
docker-compose down