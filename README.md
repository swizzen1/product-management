# Product Management API – Laravel

A Laravel-based REST API for product management with authentication, CRUD operations, and advanced filtering.

---

## 🚀 Usage & Setup

### 1️⃣ Clone the repository
```bash
git clone https://github.com/swizzen1/product-management
cd product-management
```

### 2️⃣ Install dependencies
```bash
composer install
```

### 3️⃣ Run database migrations
```bash
php artisan migrate
```

### 4️⃣ Seed the database
```bash
php artisan db:seed
```

---

## 🔐 Authentication

All authentication requests must include the following header:

```
Accept: application/json
```

### Example Login Credentials

```
email: admin@example.com
password: 12345678
```

---

### 🔑 Auth Routes

#### Login
- **Method:** `POST`
- **URL:**
```
http://127.0.0.1:8000/api/login
```

#### Register
- **Method:** `POST`
- **URL:**
```
http://127.0.0.1:8000/api/register
```

✅ Both routes return a **Bearer Token**.

---

## 📦 Product Endpoints  
> **Authorization required:** `Bearer {token}`

### Get all products
- **Method:** `GET`
```
http://127.0.0.1:8000/api/products
```

---

### Create a product
- **Method:** `POST`
```
http://127.0.0.1:8000/api/products
```

---

### Update a product
- **Method:** `PUT`
```
http://127.0.0.1:8000/api/products/{id}
```

---

### Delete a product
- **Method:** `DELETE`
```
http://127.0.0.1:8000/api/products/{id}
```

---

## 🔎 Product Filtering

Products can be filtered using query parameters.

### Example:
```
http://127.0.0.1:8000/api/products?category=test&name=product1&min_price=300
```

You may filter by **any available database column**.

---

## 📌 Notes

- All protected routes require a valid **Bearer token**
- Default API response format is JSON
- Built using Laravel REST conventions

---

## 👨‍💻 Author

Built with ❤️ using **Laravel**
