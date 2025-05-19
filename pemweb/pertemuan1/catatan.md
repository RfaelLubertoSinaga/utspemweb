docker.compose.yml

version: '3' // Ini kita menggunakan format Docker Compose versi 3.

services:  // ini mendeklarasikan layanan yang akan berjalan di dalam container.

 web:  //nama layanan/container yang sedang kita definisikan.

  image: nginx:latest // Container akan dibuat menggunakan image nginx dengan versi terbaru (latest).

  ports: // digunakan untuk menghubungkan port pada komputer kita dengan port di dalam container.

    - "80:80" // saat kita mengakses port 80 di komputer lokal, permintaan tersebut akan diarahkan ke port 80 dalam container.

  volumes: // Volume digunakan untuk menghubungkan file atau folder dari komputer lokal ke dalam container.

    - ./nginx/nginx.conf:/etc/nginx/conf.d/default.conf // direktori nginx di komputer lokal akan digunakan sebagai konfigurasi Nginx di dalam container.

    - ./src:/usr/share/nginx/html // lokal akan digunakan sebagai direktori utama untuk file HTML yang dilayani oleh Nginx.

    
html (hypertext markup language)

dalam env kita mamsukim untuk naro compose project name, repostry name dan image tag
compose project name (untuk mengasih nama project )
reporty nama untuk pembahasaan (pemweb)
image tag digunakan untuk menandai versi dari sebuah image

ada beberapa porgram yang di buat 
di dalama pertemuan 1 aada coding yang berisi nginx dan src 

di dalam nginx memiliki 1 file yaitu nginx.conf
nginx sebuah server yang menyajikan halaman web. server nginx berhubungan dengan localhost

div html itu yang berhungan langsung dari ubuntu, docker, dan vscode 
kita bisa memebuat kata - kata melalui vscode

index html struktur dasar halaman web 
yang berisi informasi dan mendukung berbagai karakter 
yang menentukan judul halaman di tab browser dan bisa menampilakan teks "hallo"

docker compose mengonfigurasi layanan nginx 

div.html HTML adalah kotak kosong yang digunakan untuk mengelompokkan bagian-bagian halaman web. Kotak ini bisa diberi warna, ukuran, atau gaya lain dengan CSS.
index.html
