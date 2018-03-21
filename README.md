
# Metron

A Human Powered Democratic Driven Platform to Discover, Rate and Promote Exceptional Content. Managed by the people for the people. [read more](https://steemit.com/open-source/@digitalplayer/introducing-metron-project-a-platform-to-discover-rate-and-promote) 

## Getting Started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes. 

### Prerequisites


```
    - LAMP env. and GIT
    - PHP >= 7.1.3
    - Composer for PHP
    - OpenSSL PHP Extension
    - PDO PHP Extension
    - Mbstring PHP Extension
    - Tokenizer PHP Extension
    - XML PHP Extension
    - Ctype PHP Extension
    - JSON PHP Extension
    - CURL PHP Extension
```

### Installation

A step by step series of instructions that tell you how to get a development copy running

Clone the repository and access the folder

```
git clone https://github.com/digitalplayer-steemit/metron.git
cd metron
```

Create Mysql Database 

```
mysql -u yourmysqlusername -p
*follow instruction on screen, as logged in proceed with:*
CREATE DATABASE metrondb;
exit
```
*yourmysqlusername in most cases is root and the password not existent.


CMS local configuration starter (it might take a couple of minutes)

```
php artisan october:install
```

For the first question type "yes" to proceed with installation and follow the instructions on screen proceeding with default values until database.
On database question complete with metrondb name, 
proceed with default values except application url which should correspond to the machine paths,
as you can see on screen "Seeded Backend" the database is fully populated and you can pass to the next step.



Configure permission for storage folder

```
sudo chown -R root:www-data storage
sudo chown -R root:www-data themes

sudo chmod -R 775 storage
sudo chmod -R 775 themes
```



That's it, you are done. 
You can now access the application on your chosen folder.
Backend is avaialble using /backend route.


## Built With

* [Laravel](https://laravel.com/) - The web framework used
* [Bootstrap](https://maven.apache.org/) - Front-end component library (development only)
* [October](https://octobercms.com/) - for the Content Management


## Authors

* **Michael Asumcinei** - please follow the [blog](https://steemit.com/@digitalplayer) for updates.


## License

This project is licensed under the MIT License - see the [LICENSE.md](LICENSE.md) file for details

