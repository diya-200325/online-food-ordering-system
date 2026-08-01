# 🍽️ Foodio – Online Food Ordering System

A full-stack web application built with **PHP** and **MySQL** that enables users to register, browse a food menu, place orders, and select payment methods. The project demonstrates secure backend development, relational database design, and dynamic server-side order processing.

---

## ✨ Features

* 🏠 **Interactive Home Page** – Simple and user-friendly landing page with easy navigation.
* 👤 **Secure User Registration** – Stores customer information in MySQL using **prepared statements** to prevent SQL injection.
* 🍕 **Dynamic Menu & Ordering** – Browse available dishes, select quantities, and calculate prices securely on the server.
* 🛒 **Relational Order Management** – Maintains customer and order relationships using MySQL foreign keys.
* 💳 **Payment Selection** – Supports multiple payment methods including Cash on Delivery, UPI, and Card.
* 📦 **Order Confirmation** – Displays a confirmation page after successful order placement.

---

## 🛠️ Tech Stack

### Frontend

* HTML5
* CSS3
* JavaScript (DOM Manipulation & URL Parameters)

### Backend

* PHP

### Database

* MySQL

### Server

* Apache (XAMPP/WAMP)

---

## 📂 Project Structure

```text
Food-Ordering-Website/
│
├── database/
│   └── schema.sql
├── images/
├── style.css
├── Firstpage.html
├── Food.html
├── Signup.html
├── Signup.php
├── Dishes.html
├── act.php
├── Payment.html
├── Payment.php
├── orderconfirment.html
└── README.md
```

---

## 🗄️ Database Schema

The project uses a MySQL database named **foodorder** with the following tables:

### **users**

Stores customer information.

| Column      | Description      |
| ----------- | ---------------- |
| customer_id | Primary Key      |
| first_name  | Customer Name    |
| phone       | Phone Number     |
| address     | Customer Address |

### **food_details**

Stores available menu items.

| Column    | Description |
| --------- | ----------- |
| food_id   | Primary Key |
| food_name | Food Name   |
| price     | Food Price  |

### **orders**

Stores order details.

| Column         | Description    |
| -------------- | -------------- |
| order_id       | Primary Key    |
| customer_id    | Foreign Key    |
| food_id        | Foreign Key    |
| total_price    | Order Total    |
| payment_method | Payment Option |

---

## 🚀 Getting Started

### Prerequisites

* XAMPP or WAMP
* PHP
* MySQL

### Installation

1. Clone the repository.

```bash
git clone https://github.com/your-username/Food-Ordering-Website.git
```

2. Move the project into the **htdocs** folder.

```text
C:/xampp/htdocs/Food-Ordering-Website/
```

3. Start **Apache** and **MySQL** using the XAMPP Control Panel.

4. Open **phpMyAdmin**.

5. Create a database named:

```text
foodorder
```

6. Import the SQL file located at:

```text
database/schema.sql
```

7. Open your browser and visit:

```text
http://localhost/Food-Ordering-Website/Firstpage.html
```

---

## 🔒 Security Highlights

* ✅ Prepared Statements (`mysqli` + `bind_param()`) to prevent SQL injection.
* ✅ Server-side price calculation for accurate order totals.
* ✅ Quantity validation before processing orders.
* ✅ Foreign key constraints to maintain database integrity.

---

## 📚 Learning Outcomes

This project demonstrates:

* Relational database schema design in MySQL.
* PHP and MySQL integration using `mysqli`.
* CRUD operations with secure parameterized queries.
* Server-side form processing.
* Data flow using HTTP POST requests and URL parameters.
* Building a complete full-stack web application.

---



## 🔮 Future Enhancements

* 🔑 User Login & Session Authentication
* 🔒 Password Hashing
* 🛒 Persistent Shopping Cart
* 💳 Razorpay / Stripe Payment Gateway Integration
* 👨‍🍳 Admin Dashboard
* 📦 Order Tracking
* ⭐ Ratings & Reviews
* 📱 Fully Responsive Mobile Design

---

## 👩‍💻 Author

**Diya Soyi**

B.Tech in Information Technology

---

## 📄 License

This project is developed for educational and learning purposes.
