# Kurteyki App

LMS (Learning Management System) & Blog.

![alt Site](https://i.ibb.co/mtbfvhh/screencapture-localhost-kurteyki-2020-04-15-19-59-34.png)
![alt App](https://i.ibb.co/GVsBVMY/screencapture-localhost-kurteyki-app-2020-04-15-19-52-52.png)

## Fitur Aplikasi

* LMS (Learning Management System)
* Blog

## Langkah Awal Memulai

Intruksi dibawah ini akan mengarahkan anda untuk menjalankan project pada komputer anda (local) dan ditujukan hanya untuk melakukan development dan testing saja.

### Menjalankan Aplikasi Menggunakan XAMPP

```
Pastikan anda sudah menjalankan module xampp yaitu apache server dan mysql.
Pastikan os anda sudah terinstall composer https://getcomposer.org/
Download Project ini dan extract di folder htdocs yang ada pada xampp.
```

Buat Database dengan nama kurteyki di phpmyadmin, silahkan akses url dibawah ini untuk membuka phpmyadmin :

```
http://localhost/phpmyadmin
```

Langkah kedua akses url dibawah ini, disamakan dengan nama folder pada saat extract project ini pada htdocs xampp :

```
http://localhost/kurteyki
```

Kemudian Masukan data yang dibutuhkan untuk menginstall table

```
host : localhost
username : root
password : kosong (default xampp)
database : kurteyki
database port : 3306 (default xampp)
```

![alt Install table](https://i.ibb.co/fvwfX67/screencapture-localhost-kurteyki-2020-04-15-19-53-19.png)

Setelah itu Install Library yang dibutuhkan menggunakan composer dengan mengetikan perintah command:

```
composer install
```

Informasi App

```
Halaman App : http://localhost/kurteyki/app

Default login
username : kurteyki
password: kurteyki
```

## Dibuat dengan

* [CodeIgniter 3.11](https://codeigniter.com/)

## Pembuat

* **Riedayme** - [Riedayme](https://facebook.com/riedayme)

## Work List

* payment method, manual payment choice.
* Coupon Code (Not Perfect)
* Multiple user > instructor for lms
* Review lms
* user register vertivication...
* dashboard lms data..
* cookie setting

## Bug

* when delete
* when multiple user process on app.
* currency format 
* language english

## License

This project is licensed under the MIT License.
