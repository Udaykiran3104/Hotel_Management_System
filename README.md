# Lavish Inn – Hotel Management System 🏨

Lavish Inn is a dynamic **Hotel Room Booking System** built with PHP and MySQL. It provides a responsive web interface for users to book hotel rooms and for administrators to manage bookings. Designed for ease of use, the system includes login/signup functionality with Google reCAPTCHA, booking requests, room galleries, admin approval, and mock payment confirmation.

---

## 🧰 Features

### 👤 User Panel
- **Signup/Login** using phone and password
- **Google reCAPTCHA** to prevent bot logins
- **Room Booking** with customizable options (AC, meals, swimming, etc.)
- **Booking Request Management**
- **View/Cancel Bookings**
- **Extend Checkout Date**
- **Mock Payment** (Simulated button click to confirm payment)
- **Booking History**

### 🔐 Admin Panel
- **Admin Authentication**
- **Google reCAPTCHA** to prevent bot logins
- **View All Booking Requests**
- **Approve or Reject Requests**
- **Manage Room Inventory**
- **Access Booking History Records**

### 🖼️ UI Modules
- **Home Page with Navigation**
- **Room Image Gallery**
- **Room Rate Card (Brochure)**
- **User Dashboard**
- **Admin Dashboard**

---

## 🛠️ Tech Stack

| Layer       | Technology          |
|-------------|---------------------|
| Frontend    | HTML, CSS, JavaScript |
| Backend     | PHP                  |
| Database    | MySQL                |
| Tools       | XAMPP, phpMyAdmin    |
| Security    | Google reCAPTCHA     |

---

## 🚀 Installation Guide

### Prerequisites
- [XAMPP](https://www.apachefriends.org/)
- Web browser (Chrome, Firefox, etc.)
- Basic PHP/MySQL knowledge
- Google reCAPTCHA site & secret keys

### Setup Steps

1. **Clone the Repository**
   ```bash
   git clone https://github.com/Udaykiran3104/Lavish-Inn.git

2. **Move to XAMPP Directory**  
   Place the project folder in:
   ```bash
   C:/xampp/htdocs/Lavish-Inn/

3. **Start Services**
   - Open **XAMPP Control Panel**
   - Start **Apache** and **MySQL**

4. **Configure the Database**
   - Go to [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a new database: `lavish_inn`
   - Import the provided SQL file (`lavish_inn.sql`) from the `database/` folder

5. **Configure reCAPTCHA**
   - Register at [Google reCAPTCHA](https://www.google.com/recaptcha/admin/)
   - Replace your site key and secret key in the login/signup PHP files:
     ```php
     $secretKey = "YOUR_SECRET_KEY";
     ```

6. **Launch the App**
   Open a browser and navigate to:
   ```bash
   http://localhost/Lavish-Inn/


## 📸 Screenshots

### Home Page  
![Home Page](Screenshots/Home%20page.jpg)

### Room Gallery  
![Room Gallery](Screenshots/Room%20Gallery.jpg)

### Image Gallery  
![Image Gallery](Screenshots/Image%20Gallery.jpg)

### Admin Login  
![Admin Login](Screenshots/Admin%20Login%20Page.jpg)

### Admin Dashboard  
![Admin Dashboard](Screenshots/Admin%20Dashboard.jpg)

### User Login  
![User Login](Screenshots/User%20Login%20Page.jpg)

### Booking Page  
![Booking Page 1](Screenshots/Room%20Booking%20Page1.jpg)  
![Booking Page 2](Screenshots/Room%20Booking%20Page2.jpg)

### Booking History View  
![Booking History](Screenshots/User_Booking%20history%20Page.jpg)

## ⚠️ Known Limitations

- No real payment integration – The system simulates payment success via a dummy button
- Basic session and input handling – Could be enhanced for better security and scalability
- No mobile optimization – The design is best viewed on desktop

---

## 🌟 Future Enhancements

- Integrate real payment gateways like Razorpay, Stripe, or PayPal
- Add email/SMS notifications for booking status
- Enable PDF invoice generation
- Build mobile-responsive UI
- Add analytics dashboard for admin insights
- Implement multi-admin support and role-based access

---

## 📄 License

This project is open-source and available under the **MIT License**. Free to use and modify with proper attribution.
