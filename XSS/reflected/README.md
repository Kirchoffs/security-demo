## XSS
#### Reflected XSS
1. Run the command `docker run -d -p 8080:80 --name apache-php-app -v "$PWD":/var/www/html php:7.2-apache`
2. Go to the page: `localhost:8080/index.php`
3. Input: `</h3><script>alert('xss');</script><h3>`
