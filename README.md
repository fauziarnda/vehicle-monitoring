# 🚗 VeMon – Aplikasi Pemesanan dan Monitoring Kendaraan Dinas

VeMon adalah sistem berbasis web yang digunakan untuk melakukan pemesanan kendaraan dinas, dengan persetujuan berjenjang oleh pihak terkait (Approver).

---

## 🧾 Akun Default

| Role     | Email                  | Password      |
|----------|------------------------|---------------|
| Admin    | admin@example.com      | admin123      |
| Approver | approver@example.com   | approver123   |
| Approver | approver02@example.com | approver123   |

---

## ⚙️ Versi Teknologi

| Komponen      | Versi              |
|---------------|--------------------|
| PHP           | 8.4.8              |
| Laravel       | 12.19.3            |
| Composer      | 2.8.9              |
| Node.js       | 18.18.2            |
| NPM           | 9.8.1              |
| SQLite        | 3.46.1             |

---

## 📦 Instalasi dan Jalankan

### 1. Clone repositori

```bash
git clone https://github.com/fauziarnda/vehicle-monitoring.git
cd story-app    
```

### 2. Instalasi dependensi

```bash
composer install
npm install
npm run dev
```

### 3. Salin file .env dan konfigurasi

```bash
cp .env.example .env
php artisan key:generate
```

### 4. Jalankan migrasi dan seeder:

```bash
php artisan migrate --seed
```

### 5. Jalankan server:

```bash
php artisan serve
```

### 5. Akses aplikasi melalui:

```bash
http://localhost:8000
```
