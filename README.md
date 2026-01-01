# 🏠 Rahal – Student Housing Platform

**Rahal** is a web-based platform designed to help students find suitable housing easily and efficiently.  
The platform connects **students**, **housing providers**, and **administrators** through a modern and user-friendly system.

---

## 🎯 Project Purpose
Finding student accommodation is often difficult and time-consuming.  
**Rahal** aims to simplify this process by providing a centralized platform for:
- Browsing available housing options
- Comparing prices and locations
- Managing listings and bookings

---

## 🚀 Features

### 👨‍🎓 Students
- Browse student housing listings
- Filter by location, price, and type
- View housing details
- Contact housing providers

### 🏢 Housing Providers
- Add and manage housing listings
- Update availability and prices
- Manage their own properties

### 🛠️ Admin
- Manage users and listings
- Approve or reject housing posts
- Control platform content

---

## 🛠️ Technologies Used

### Backend
- PHP (Laravel)
- MySQL
- RESTful APIs

### Frontend
- Angular
- TypeScript
- HTML5 / CSS3
- Bootstrap / Tailwind

### Tools
- Composer
- Git & GitHub

---

## 🧠 Software Concepts
- MVC Architecture (Laravel)
- Separation of Concerns
- REST API Integration
- Authentication & Authorization
- Clean Code Practices

---

## 📂 Project Structure (Simplified)

```text
backend/
 ├── app/
 ├── routes/
 ├── database/
 └── resources/

frontend/
 ├── src/
 ├── components/
 └── services/
⚙️ Installation & Setup
Backend (Laravel)
bash
Copy code
git clone https://github.com/USERNAME/rahal.git
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate
php artisan serve
Frontend (Angular)
bash
Copy code
cd frontend
npm install
ng serve
🔐 Environment Variables
Make sure to configure your .env file with:

Database credentials

Application URL

Mail settings (if used)

📌 Project Status
🚧 In Development
This project is actively being developed as part of a learning and graduation project.

👨‍💻 Author
Rahal Team
Full Stack Developer (PHP & Angular)

⭐ Future Improvements
Online booking system

Reviews and ratings

Payment integration

Advanced search & recommendations

📄 License
This project is for educational purposes ITI.
