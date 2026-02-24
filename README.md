# Inventory Management System (Laravel)

A simplified **Inventory Management System** built with **Laravel** that includes:
- Product management
- Sales recording with discounts, VAT, and payments
- Accounting journal entries (double-entry style)
- Date-wise financial reporting (total sales, total expenses)

---

## 🚀 Tech Stack
- **Backend:** Laravel 10 (PHP 8.1)
- **Frontend:** Blade templates + Tailwind CSS
- **Database:** MySQL
- **ORM:** Eloquent
- **Build Tool:** Vite

---

## 📦 Installation

1. **Clone the repository**
   ```bash
   git clone https://github.com/avilashsaha035/inventory-management-system.git
   cd inventory-system
   ```
2. **Install dependencies**
   ```bash
   composer install
   npm install && npm run build
   ```
3. **Environment setup**
   - Copy .env.example to .env
   - Configure database connection:
   ```bash
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=inventory_management_system
   DB_USERNAME=root
   DB_PASSWORD=yourpassword
   ```
4. **Generate app key**
   ```bash
   php artisan key:generate
   ```
5. **Run migrations**
   ```bash
   php artisan migrate
   ```
6. **Start the server**
   ```bash
   php artisan serve
   ```
7. **Visit the app at:**
   http://127.0.0.1:8000
      
   
