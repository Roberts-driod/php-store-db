#  Store Data Management App

##  Par projektu

Šis ir vienkāršs PHP projekts, kas simulē veikala datu pārvaldības sistēmu.
Tas ļauj uzņēmumiem apskatīt un analizēt informāciju par klientiem un viņu pasūtījumiem.

Projekts demonstrē pamata backend funkcionalitāti bez frameworkiem, izmantojot:

* PHP
* MySQL datubāzi

---

##  Funkcionalitāte

Šobrīd aplikācija ļauj:

*  Apskatīt visus klientus
  `/customers`

*  Apskatīt visus pasūtījumus
  `/orders`

*  Apskatīt klientus kopā ar viņu pasūtījumiem
  `/customers?with-orders=full`

---

##  Projekta struktūra

```
PUBLIC/
│
├── index.php              # Galvenais routeris
├── .env                   # Konfigurācijas fails 
├── composer.json
│
├── css/
│   └── style.css  
│
├── db/
│   └── DB.php   # Datubāzes savienojums
|   └── tables.sql # Datubāzes struktūra un dati
|   └── connect.php # Materiāls for copy           
│
├── src/
│   └── controllers/
│       ├── CustomerController.php
│       ├── OrderController.php
│       └── ClientOrderController.php
│   └── views/
|       └──orders.php
|       └──customers.php
|       └──customersWithOrders.php
│
└── vendor/                # Composer atkarības
```

---

##  Konfigurācija (.env)

Izveido `.env` failu projekta root mapē:

```
DB_HOST=your_host
DB_USER=your_user
DB_PASS=your_password
DB_NAME=your_database
```

---

##  Uzstādīšana

1. Klonē projektu:

```
git clone <https://github.com/Roberts-driod/php-store-db>
cd project
```

2. Uzinstalē atkarības:

```
composer install
```

3. Izveido `.env` failu (skat. augstāk-Konfigurācija (.env))

4. Palaid lokālo serveri:

```
php -S localhost:8080
```

5. Atver pārlūkā:

```
http://localhost:8080
```

---

##  Tehniskās detaļas

* Vienkāršs routing ar `$_SERVER['REQUEST_URI']`
* Datu iegūšana ar SQL (`SELECT`, `JOIN`)
* Klienti un pasūtījumi tiek apvienoti PHP masīvā
* `.env` tiek izmantots drošai konfigurācijas glabāšanai

---

##  Nākotnes uzlabojumi

* Labāks routing (piemēram, custom router)
* CRUD funkcionalitāte (create/update/delete)
* UI uzlabojumi (CSS / frontend)
* API izveide (JSON atbildes)

---

