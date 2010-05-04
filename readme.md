# SYR CDN
[![License](https://img.shields.io/github/license/amirsayonara/SYR-CDN)](LICENSE)
[![Twitter Follow](https://img.shields.io/twitter/follow/amir_sayonara)](https://twitter.com/amir_sayonara)

[Copyright (c) 2010 Amir Sayonara](LICENSE)

Server CDN (content delivery network) untuk keperluan sistem menengah ke atas

## Penjelasan
- Folder index adalah server root directory
- Folder files adalah tempat untuk menyimpan file

## Perangkat Lunak
- Apache Web Server dengan PHP dan Rewrite Engine

## Cara Mengakses File
- Misal file yang disimpan adalah test.jpg berlokasi di folder files/, maka cukup mengakses link root/test.jpg
- Misal file yang disimpan berlokasi di files/test/test.jpg, maka diakses dengan link root/test/test.jpg

## Pengamanan
- Menahan pengguna untuk mengakses file secara langsung, karena file yang disimpan berada dalam folder terpisah dengan root server
- Penolakan list directory

## Sceenshot
### Halaman utama
![alt text](ss1.png 'Halaman utama')
### Mengakses file
![alt text](ss2.png 'Contoh 1')
![alt text](ss3.png 'Contoh 2')
### File tidak tersedia/salah link/mencoba list directory
![alt text](ss4.png 'Contoh jika file tidak tersedia/salah link/mencoba list directory')