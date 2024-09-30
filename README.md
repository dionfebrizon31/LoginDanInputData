<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

-   [Simple, fast routing engine](https://laravel.com/docs/routing).
-   [Powerful dependency injection container](https://laravel.com/docs/container).
-   Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
-   Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
-   Database agnostic [schema migrations](https://laravel.com/docs/migrations).
-   [Robust background job processing](https://laravel.com/docs/queues).
-   [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

-   **[Vehikl](https://vehikl.com/)**
-   **[Tighten Co.](https://tighten.co)**
-   **[WebReinvent](https://webreinvent.com/)**
-   **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
-   **[64 Robots](https://64robots.com)**
-   **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
-   **[Cyber-Duck](https://cyber-duck.co.uk)**
-   **[DevSquad](https://devsquad.com/hire-laravel-developers)**
-   **[Jump24](https://jump24.co.uk)**
-   **[Redberry](https://redberry.international/laravel/)**
-   **[Active Logic](https://activelogic.com)**
-   **[byte5](https://byte5.de)**
-   **[OP.GG](https://op.gg)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# Make Script Login And Input Data DION FEBRIZON

Ini adalah sebuah sistem simpel login dan input data sudah di berikan beberapa komentar untuk memahami alur sistem login menggunakan guard auth pada laravel 11

langkah basic yang di perlukan

1. pastikan sudah terinstal laravel 11 yang baru agar bisa membandingkan sistem saya dengan anda.
2. membuat sebuah database/migration database
   terminal _ php artisan make:migration create_Admin_Tabel _ contoh bisa di cek folder database -> migration
3. membuat isi database bisa cek di database -> migration
4. membuat model dengan terminal _ php artisan make:model Admin _ Contoh model cek di app-> models
5. ikutlah/contoh data di file ini
6. buat lah sebuah controller dengan terminal _ php artisan make:Controller AdminAuthController _
   note: disini saya memisahkan sebuah sistem login dengan sistem show data di laravel nya agar terlihat rapi saja bisa memisahkan antara sistem pemanggil dengan sistem eksekusi
7. copylah data yang ada di controller saya
8. lakukan penyettingan pada auth yang ada folder config -> auth.php silahkan cek auth anda dan auth pada dengan saya yang di perlu di settingan adalah provider dan guard.
9. setelah melakukan buat controller,model,dan database selanjutnya adalah membuat view atau tampilan website
10. silahkan ambil/coppy folder admin yang ada public-> admin pastikan juga mengopy folder assetnya
11. silahkan coppy data resources-> views coppy folder admin dan layout
    note:sedikit informasi disini saya menggunakan sebuah sistem yang simpel nya saya sebut sistem hook atau sistem include kita memanggil codingan yang sudah ada untuk codingan yang baru silahkan cek codingan extend di admin dan @yfield di layout
12. selanjutnya membuat sebuah route
    note: routes/route adalah sebuah sistem yang mengontrol arah data tersebut exampel pada saat membuka baru menjalankan website maka default yang di buka itu adalah / , bisa dicek pada folder routes web.php
    silahkan liat di bagian atas wajib harus masukan diatas sesuaikan dengan controller anda..
13. coppy saja semua nya karna mengikuti sistem login saya,,
14. jalankan database dan websitenya dengan terminal
15. - php artisan migrate \*
16. - php artisan serve \*

# kesimpulan

1. make view data (tampilanan)
2. make database
3. make models
4. make controller
5. setting controler
6. setting models
7. setting route

# Hubungi selanjutnya untuk tutorial

[dionfebrizon42@gmail.com](mailto:dionfebrizon42@gmail.com)
