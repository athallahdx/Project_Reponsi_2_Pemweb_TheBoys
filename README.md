# The Boys Web

## Deskripsi Umum
Website ini terdiri dari **dua sisi** yang saling berseberangan:
1. **Website Pendukung The Boys**: Bertujuan untuk mendukung tim The Boys yang menentang kelompok The Seven.
2. **Website Pendukung The Seven**: Bertujuan untuk mendukung The Seven dan perusahaan Vought.

Kedua website memiliki **fitur yang sama persis**, perbedaannya terletak pada tema, tampilan, dan pesan yang disampaikan.

---

## Fitur Utama
1. **Landing Page**  
   Halaman ini berisi informasi umum mengenai gerakan dan ideologi dari masing-masing kubu.

2. **Login/Register**  
   Fitur ini memungkinkan pengguna untuk membuat akun dan melakukan login sebagai user.

3. **Dashboard**  
   - Menampilkan dan mengedit profil pengguna.  
   - Menyediakan fitur "Mission" yang berisi daftar misi dari masing-masing kubu yang dapat diikuti oleh user.  
   - Fitur "Member Team" digunakan untuk menampilkan anggota utama dari masing-masing kubu.

4. **Community**  
   - Melihat postingan dari pengguna lain.  
   - Memberikan komentar pada postingan.  
   - Operasi **CRUD (Create, Read, Update, Delete)** pada postingan milik user.

---

## Role dalam Website
- **User**: Memiliki hak akses untuk:  
  - Mengikuti misi.  
  - Mengedit profil.  
  - Membuat, membaca, memperbarui, dan menghapus postingan miliknya.  
  - Memberikan komentar pada postingan.  

- **Admin**: Memiliki hak akses penuh termasuk:  
  - CRUD pada misi.  
  - Mengupdate dan menghapus seluruh postingan user.

---

## Arsitektur Aplikasi

Aplikasi ini menerapkan **arsitektur MVC (Model-View-Controller)**. Arsitektur ini memisahkan kode aplikasi menjadi tiga komponen utama:

### **Penjelasan MVC**
1. **Model**  
   Berfungsi untuk mengelola **data dan logika** aplikasi. Model berhubungan langsung dengan database dan menangani operasi **CRUD** (Create, Read, Update, Delete).

2. **View**  
   Bertanggung jawab untuk **menampilkan data** ke pengguna dalam bentuk tampilan antarmuka (HTML, CSS, JavaScript).

3. **Controller**  
   Mengatur alur kerja aplikasi dengan menjembatani **Model** dan **View**. Controller menangani request dari user, memproses data melalui model, dan mengirimkan output ke view.

---

## Struktur Folder

### **Folder Public**
Merupakan **root directory** aplikasi yang berisi file dan aset yang dapat diakses secara publik:
- **index.php**: File utama untuk memulai aplikasi dan menangani redirect ke halaman lain.
- **img, css, js**: Berisi gambar, stylesheet, dan script JavaScript untuk mengatur tampilan dan interaksi web.  
- **uploads**: Folder yang digunakan untuk menyimpan file hasil upload dari user, seperti gambar untuk postingan dan misi.

### **Folder App**
Berisi logika backend utama aplikasi. Struktur folder sebagai berikut:

1. **Config**  
   Berisi file konfigurasi `config.php` yang mendeklarasikan:  
   - Path direktori  
   - Konfigurasi database (nama database, user, password, host)

2. **Core**  
   Berisi file inti untuk logika utama aplikasi:  
   - **App.php**: Mengatur routing URL agar URL menjadi lebih rapi tanpa perlu menampilkan file PHP secara eksplisit.  
   - **Controller.php**: File ini berisi **parent class** yang akan diwariskan ke setiap controller. Controller memanggil **view** untuk menampilkan data dan **model** untuk mengakses database.  
   - **Database.php**: Berisi konfigurasi untuk menyambungkan aplikasi ke database menggunakan **PDO**. File ini juga menangani eksekusi query CRUD.  
   - **Flasher.php**: Berfungsi untuk memberikan pesan notifikasi (flash message) terkait status eksekusi program.  
   - **Session.php**: Helper class untuk mengatur dan memanage **session** user.

3. **Controllers**  
   Folder ini berisi file controller yang merupakan **turunan** dari `Controller.php`.  
   Setiap controller memiliki method untuk menangani request pada fitur-fitur website.

4. **Models**  
   Berisi file-file yang merepresentasikan **data tabel database**. Setiap model berfungsi untuk menjalankan operasi CRUD pada tabel tertentu.

5. **Views**  
   Berisi tampilan antarmuka dalam bentuk file **PHP** yang digabung dengan HTML. Folder ini digunakan untuk menampilkan hasil dari data yang dikirim oleh controller.

---

## Kesimpulan
Aplikasi The Boys Web berhasil menerapkan arsitektur **MVC sederhana** untuk menjalankan fitur-fitur utama seperti:
- **CRUD** pada misi dan profil pengguna di dashboard.
- **Create** dan **Read** pada postingan komunitas.

Namun, terdapat beberapa fitur yang belum sepenuhnya diimplementasikan:
1. Fitur **Update dan Delete** pada postingan komunitas.  
2. Integrasi penuh pada website pendukung **The Seven** yang saat ini masih berupa redirect.  
3. **Flasher** belum digunakan sepenuhnya.  
4. **Bug session** yang menyebabkan user sering logout.

---

## Saran Implementasi Selanjutnya
1. Menyelesaikan fitur yang belum diimplementasikan pada website The Seven.  
2. Memperbaiki **bug session** yang menyebabkan logout otomatis.  
3. Menambahkan **responsivitas** pada tampilan website agar optimal di berbagai perangkat.  
4. Menambahkan **event interaktif** dan elemen dinamis untuk meningkatkan pengalaman pengguna.  
5. Mengoptimalkan dan merapikan struktur kode untuk meningkatkan performa aplikasi.

---
