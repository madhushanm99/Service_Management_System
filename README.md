## SMS — Service Management System

SMS is a Laravel-based service and inventory management system for workshops. It streamlines purchasing, stock, invoicing, appointments, and notifications, with a customer portal for vehicles, appointments, and invoices.

### Features

- Suppliers and Products management
- Purchase Orders (PO), Goods Received Notes (GRN), Purchase Returns
- Sales and Service Invoices, Invoice Returns
- Inventory/Stock tracking
- Appointments scheduling and status updates
- Notifications (in-app and queued email)
- Customer portal (vehicles, appointments, invoices)

### Tech Stack

- Laravel (PHP 8.2+)
- MySQL 8+ (or MariaDB 10.6+)
- Redis for queues/cache (recommended) 
- Vite with Node.js 18+ for frontend assets

---

## Quick Start (Summary)

1) Install dependencies
```powershell
composer install
npm install
```

2) Environment and key
```powershell
copy .env.example .env
php artisan key:generate
```

3) Configure database/queues in `.env`, then either migrate+seed or import the sample SQL.

4) Run app and assets
```powershell
npm run dev
php artisan serve
```

5) Background workers (recommended)
```powershell
php artisan queue:work
```
Realtime (optional): `php artisan reverb:start` after configuring broadcast settings.

---

## Documentation

- Installation Guide: [INSTALLATION_GUIDE.md](INSTALLATION_GUIDE.md)
- User Guide: [USER_GUIDE.md](USER_GUIDE.md)

---

## Default Logins (for seeded data)

- admin → `admin@gmail.com` / `admin#12345`
- manager1 → `manager1@gmail.com` / `mang#12345`
- staff1 → `staff1@gmail.com` / `staff#12345`

---

## Contributing

Contributions are welcome. Please follow the existing code style and include tests where applicable.

## License

MIT


