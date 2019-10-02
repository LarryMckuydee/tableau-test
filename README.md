### Requirements
- php 7.2 
- nodejs 8.11.* 

### Installation
```
cd tableau/
composer install
cd tableau-test-front-end/
npm install
```

### Edit
Before start, change the Access-Control-Allow-Origin to the address that you going to serve vue application in tableau/index.php.
```
...
header('Access-Control-Allow-Origin: <vue-application-address>');
...
```

Change the url and axios.defaults.baseURL in tableau/tableau-test-front-end/src/components/TableauEmbeddedDivTrusted.vue
```
...
url =
     "http://<tableau-server-address>/trusted/"+ trustedKey +"/views/Test/Dashboard1"
...
axios.defaults.baseURL = "<php-built-in-webserver-address>"
...
```

### Serve
Serve php webserver
```
cd tableau/
php -S <php-built-in-webserver-address>
```

Serve Vue Applicaton
```
cd tableau/tableau-test-front-end/
npm run serve -- --host <vue-application-address> --port <port>
```


