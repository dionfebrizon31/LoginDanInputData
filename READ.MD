# DION FEBRIZON

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
