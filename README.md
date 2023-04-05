## Nama
Aqil Jawadal Furqon

## Asal Perguruan Tingi
Institut Teknologi Telkom Purwokerto

## Tech Stack yang dipakai
Pada pengembangan website ini saya menggunakan [TailwindCSS](https://tailwindcss.com/) sebagai framework CSS dalam pembuatan UI.
Sedangkan untuk authentication saya hanya menggunakan fitur dari [Laravel](https://laravel.com/)

## Cara menjalankan Aplikasi
- Setelah Clone repo ini, Anda bisa buka CMD di directory project laravel yang sudah diclone atau bisa langsung membuka project di VS Code
- Jalankan 
```java
composer install
```

- Selanjutnya copy & paste file .env.example, kemudian ubah nama file menjadi .env

- Setelah ada file .env, jalankan perintah
```java
php artisan key:generate
```

- Jika semua langkah telah dilakukan, sekarang Anda dapat menjalankan project laravel clone-nya dengan perintah
```java
php artisan serve
```

## Agar dapat menjalankan seluruh fungsi
- Buka dan jalankan `xampp` 
- Kemudian jalankan perintah
```java
php artisan migrate
```
- Jika sudah maka Anda sudah dapat menggunakan seluruh fungsi `CRUD` yang ada di project