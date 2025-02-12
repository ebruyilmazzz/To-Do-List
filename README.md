
![image](https://github.com/user-attachments/assets/b159ee2a-5b3a-449e-b844-3c980fdd0857)

 # To-Do List App
Bu proje, Laravel 10 kullanılarak geliştirilmiş basit bir Yapılacaklar Listesi (To-Do List) uygulamasıdır. Kullanıcılar görev ekleyebilir, tamamlayabilir ve silebilir.

🚀 Özellikler
✅ Görev ekleme
✅ Görev tamamlama/düzenleme
✅ Görev silme
✅ SQLite veritabanı desteği
✅ Kullanıcı dostu arayüz

🛠️ Kurulum
Projeyi klonla:

1-
git clone https://github.com/kullaniciadiniz/todo-list.git
cd todo-list
Bağımlılıkları yükle:

2-
composer install
.env dosyasını oluştur:

3-
cp .env.example .env
SQLite veritabanı oluştur:

4-
touch database/database.sqlite
Veritabanını yapılandır:

5-
php artisan migrate
Geliştirme sunucusunu başlat:

6-
php artisan serve
📌 Not: Sunucu http://127.0.0.1:8000 adresinde çalışacaktır.

📂 Proje Yapısı

📦 todo-list
 ┣ 📂 app
 ┃ ┗ 📂 Http/Controllers/TaskController.php
 ┣ 📂 database
 ┃ ┗ 📜 database.sqlite
 ┣ 📂 resources/views
 ┃ ┗ 📜 tasks/index.blade.php
 ┣ 📜 .env
 ┣ 📜 README.md
 ┗ 📜 routes/web.php
 
🖥️ Kullanım
Görev ekleme: Ana sayfadaki formu kullanarak yeni görev ekleyebilirsiniz.
Görev tamamlama: "Complete" butonuna tıklayarak görevi tamamlanmış olarak işaretleyebilirsiniz.
Görev silme: "Delete" butonuna tıklayarak görevi kaldırabilirsiniz.

📌 Lisans
Bu proje MIT Lisansı ile sunulmaktadır.

