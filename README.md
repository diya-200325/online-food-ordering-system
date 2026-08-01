
🍽️ Foodio — Online Food Ordering System
A full-stack web application built using PHP and MySQL that handles user registration, interactive menu browsing, server-side order calculation, and payment selection.
✨ Features
 * 🏠 Interactive Home Page: Clean landing page with intuitive navigation.
 * 👤 Secure User Registration: Collects customer details and saves them directly into MySQL using prepared statements to prevent SQL injection.
 * 🍕 Dynamic Menu & Ordering: Displays items (Biriyani, Mandhi, Fried Chicken) with server-side price calculation and quantity validation.
 * 🛒 Relational Order Handling: Stores order details linked to customer records using relational foreign keys.
 * 💳 Payment Selection: Supports multiple payment options (Cash on Delivery, UPI, Card) and updates order statuses in real-time.
 * ✅ Order Confirmation: Clear final confirmation screen linking back to the home page.
🛠️ Tech Stack & Concepts
 * Frontend: HTML5, CSS3, JavaScript (DOM Manipulation & URL Parameters)
 * Backend: PHP (Server-Side Logic & Form Processing)
 * Database: MySQL (Relational Schema Design & Foreign Keys)
 * Server Environment: Apache / XAMPP
📂 Project Structure
Food-Ordering-Website/
│── database/
│   └── schema.sql             # Database script (Tables & seed data)
│── images/                     # UI graphics & food images
│── style.css                   # Global styling
│── Firstpage.html              # Landing page
│── Food.html                   # Secondary homepage / navigation
│── Signup.html                 # Registration UI
│── Signup.php                  # Registration backend (Prepared Statements)
│── Dishes.html                 # Food selection & quantity input
│── act.php                     # Order processing & price calculation
│── Payment.html                # Payment method choice UI
│── Payment.php                 # Payment status updater backend
│── orderconfirment.html        # Order confirmation page
└── README.md                   # Project documentation

🗄️ Database Setup (MySQL)
This project uses a relational database named foodorder with three main tables:
 * users: Stores customer profiles (customer_id, first_name, phone, address).
 * food_details: Stores available dishes and prices (food_id, food_name, price).
 * orders: Tracks order history linked via foreign keys (customer_id, food_id, total_price, payment_method).
🚀 How to Run the Project
 * Install XAMPP (or WAMP) on your system.
 * Clone or copy this repository into your XAMPP htdocs folder:
   C:/xampp/htdocs/Food-Ordering-Website/

 * Start Apache and MySQL from the XAMPP Control Panel.
 * Import Database:
   * Open your browser and go to http://localhost/phpmyadmin/.
   * Create a new database named foodorder.
   * Click Import, select database/schema.sql from the project folder, and click Go.
 * Launch Application:
   * Open your browser and visit:
   http://localhost/Food-Ordering-Website/Firstpage.html

🔒 Backend & Security Highlights
 * SQL Injection Protection: Uses MySQLi $stmt->bind_param() prepared statements during registration.
 * Data Integrity: Employs MySQL Foreign Key constraints (ON DELETE CASCADE) to preserve relationships between users, items, and orders.
 * Dynamic Price Validation: Calculates $total_price = quantity * price on the server side instead of trusting frontend values.
🎯 Key Learning Outcomes
 * Designing relational database schemas in MySQL.
 * Connecting PHP to MySQL using mysqli_connect and executing CRUD queries.
 * Handling parameterized inputs for secure database transactions.
 * Passing state across web pages using HTTP POST requests and URL search parameters.
 * Integrating frontend layouts with backend data pipelines.
🔮 Future Enhancements
 * 🔑 User Login & Session Authentication (PHP $_SESSION & password hashing)
 * 🛒 Persistent Shopping Cart using LocalStorage
 * 💳 Live Third-Party Payment Gateway Integration (Razorpay / Stripe API)
 * 👨‍🍳 Admin Dashboard for updating menu prices and viewing live orders
 * 📱 Fully Responsive Mobile Design
