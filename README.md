# Test Epic
Testna naloga za podjetje Epic.

## Zahteve 
 
* Docker (najnovejšo različico lahko prenesete s https://www.docker.com/)

## Namestitev 
Za namestitev projekta uporabite ukazno vrstico.

1. Preidite v mapo, v katero želite namestiti projekt.
```
cd /pot/do/vase/mape/
```
2. Klonirajte projekt iz repozitorija:
``` 
git clone https://github.com/zoker68/test_epic.git
```
3. Preidite v mapo projekta:
```
cd test_epic/urnik/
```
4. Ustvarite datoteko .env iz predloge .env.example:
```
cp .env.example .env
```
5. Uredite datoteko .env Za standardno nastavitev sail vnesite podatke:
```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=urnik
DB_USERNAME=sail
DB_PASSWORD=password
```
6. Če so vaša vrata 80 zasedena, jih lahko ročno spremenite v datoteki .env Na primer spremenite na vrata 14000
```
APP_PORT=14000
```
7. Namesto ponovnega tipkanja .vendor/bin/sail za izvajanje ukazov Sail lahko nastavite vzdevek lupine, ki vam bo omogočil lažje izvajanje ukazov Sail:
```
alias sail='[ -f sail ] && sh sail || sh vendor/bin/sail'
```
8. Namestite odvisnosti s pomočjo Composer:
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v "$(pwd):/var/www/html" \
    -w /var/www/html \
    laravelsail/php82-composer:latest \
    composer install --ignore-platform-reqs
```
9. Zaženite Docker kontejnerje z orodjem Sail:
```
sail up -d
```
10. Zaženi naslednji ukaz, da se prijavite v Docker kontejner Sail:
```
sail shell
```
11. Za nastavitev ključa za šifriranje izvedite naslednji ukaz:
```
php artisan key:generate
```
12. Zaženite migracije:
```
php artisan migrate
```
13. Vaš projekt je zdaj dosegljiv na naslovu http://localhost. Ali http://localhost:14000 v če ste spremenili vrata na 14000 

## Dodatne ukaze 

* Če želite ustaviti kontejnerje:
```
sail down
``` 
* Čiščenje baze v začetno stanje:
``` 
php artisan migrate:fresh
```
---

# Korake za razvoj aplikacije:
1. Načrtovanje aplikacije in določitev zahtev.
2. Inicializacija Github.
3. Namestitev okolja z uporabo Laravel Sail.
4. Razvoj modelov in migracij za podatkovno bazo.
5. Pisanje funkcij CRUD za upravljanje s podatki.
6. Uporaba Laravel Blade za prikazovanje podatkov na spletni strani.
7. Implementacija uvoza podatkov iz datoteke CSV.
8. Napisanje dokumentacije za aplikacijo.