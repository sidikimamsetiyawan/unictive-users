# Laravel CRUD dengan JWT Authentication
# PT Uniktif Media Indonesia

## Deskripsi Proyek

Proyek ini merupakan aplikasi sederhana berbasis Laravel yang mengimplementasikan fitur CRUD (Create, Read, Update, Delete) untuk data User. Setiap User memiliki relasi one-to-many dengan Hobi. Aplikasi ini menggunakan Blade untuk tampilan UI dan menyediakan API endpoints untuk operasi CRUD yang dilindungi oleh JWT Authentication.

## Fitur Utama

* **CRUD User:**
    * Menambahkan User baru beserta daftar hobinya
    * Memperbarui data User (termasuk menambah atau menghapus hobi)
    * Menghapus User beserta hobinya
* **Relasi One-to-Many:** Setiap User dapat memiliki banyak Hobi
* **Autentikasi:** JWT Authentication untuk mengamankan akses ke API endpoints
* **Tampilan:**
    * Form input data User dan daftar hobi
    * Tabel daftar User dan hobinya
    * Tombol aksi Edit dan Delete untuk setiap User
* **API:**
    * Endpoints untuk operasi CRUD User
    * Menggunakan JWT Authentication untuk keamanan

## Cara Penggunaan

### Persyaratan
* PHP (versi sesuai dengan Laravel)
* Composer
* Node.js (untuk asset compilation, jika menggunakan frontend framework)

### Instalasi
1. **Clone repository:**
   ```bash
   git clone [https://github.com/sidikimamsetiyawan/unictive-users.git](https://github.com/sidikimamsetiyawan/unictive-users.git)
   ```
2. **Install dependencies:**
   ```bash
   cd your-project
    npm install
   ```
4. **Generate key:**
   ```bash
   php artisan key:generate
   ```
6. **Database migration:**
   ```bash
   php artisan migrate
   ```
8. **Start development server:**
   ```bash
   npm run dev
   ```
## Testing With Postman
You can access the Postman collection for testing the API endpoints here: [Postman Collection](https://orange-trinity-586014.postman.co/workspace/Laravel-11~da50da20-5de2-4989-8fd3-86387fc66dc0/collection/9072736-d9b051a5-e438-4e24-82c6-4e02b4c5adc6?action=share&creator=9072736).

## API Documentation
The complete API documentation for this project is available online. You can access it at the link below:

[View API Documentation on Postman](https://documenter.getpostman.com/view/9072736/2sAYHxoQAE)

## Screenshots
### Screen Login
![image](https://github.com/user-attachments/assets/7f8123dd-391b-4c11-adfd-15bc11fe8240)

### Dashboard
![image](https://github.com/user-attachments/assets/9d015e83-67e9-499a-9387-a984bb5cf95c)

### User Management
![image](https://github.com/user-attachments/assets/1514a792-ef2f-450e-87aa-e6d1cb0ed1f6)
![image](https://github.com/user-attachments/assets/881e91b7-38d1-4ca2-85ab-ec789637eeec)

### Role Management
![image](https://github.com/user-attachments/assets/009aca4f-ea2b-455f-9aa1-bc6c789d6a87)

### Hobby Management
![image](https://github.com/user-attachments/assets/80b1359b-6d33-47dc-a986-35950724bda1)

