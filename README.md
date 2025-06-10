# Barbershop Management System

Sistem manajemen barbershop berbasis Laravel yang mencakup fitur booking online, manajemen tukang cukur, dan galeri.

## Fitur

- Sistem Booking Online
- Manajemen Tukang Cukur
- Galeri Hasil Cukur
- Manajemen Layanan dan Harga
- Dashboard Admin
- API REST

## Teknologi

- PHP 8.2
- Laravel 10
- MySQL
- Backpack for Laravel
- Laravel Sanctum

## Instalasi

1. Clone repository
```bash
git clone https://github.com/YOUR_USERNAME/barbershop.git
cd barbershop
```

2. Install dependencies
```bash
composer install
npm install
```

3. Salin file .env
```bash
cp .env.example .env
```

4. Generate key aplikasi
```bash
php artisan key:generate
```

5. Konfigurasi database di file .env

6. Jalankan migrasi
```bash
php artisan migrate
```

7. Jalankan seeder (optional)
```bash
php artisan db:seed
```

8. Jalankan storage link
```bash
php artisan storage:link
```

## API Documentation

### Public Endpoints
- GET /api/collections - Daftar koleksi
- GET /api/services - Daftar layanan
- GET /api/pricings - Daftar harga
- GET /api/barbers - Daftar tukang cukur

### Protected Endpoints (Admin)
- CRUD /api/admin/collections
- CRUD /api/admin/services
- CRUD /api/admin/pricings
- CRUD /api/admin/barbers
- CRUD /api/admin/bookings
- CRUD /api/admin/users

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
