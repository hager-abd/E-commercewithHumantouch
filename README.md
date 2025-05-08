# E-commerce Alibaba with a Human Touch Website

## 🔧 Technologies Used
- **HTML5**
- **CSS3**
- **JavaScript (ECMAScript 2015)**

## 📖 Project Description
The **Alibaba leading e-commerce with a human touch** website is a global online shopping platform designed to make international trade (IT) more accessible and inclusive.

It features:
- Interactive product images and descriptions with prices and quantities.
- Voice interaction to support informed decision-making.
- Full shipping support to all countries.
- A friendly interface that allows communication between sellers and buyers for price negotiation.
- Smart, secure, and dynamic user experience.

Additionally, we integrated an **educational site** into the Alibaba platform, designed to teach blind or illiterate users how to use a keyboard. This aims to enhance website accessibility and improve digital interaction for all.

## 💻 How to Run the Project

### Prerequisites:
- **XAMPP** must be installed and running.
- Place your project folder inside `htdocs` (e.g., `C:\xampp\htdocs\alibaba`).
- Start **Apache** and **MySQL** from the XAMPP Control Panel.

### Database Setup:
1. Go to: [http://localhost/phpmyadmin/index.php](http://localhost/phpmyadmin/index.php)
2. Click on the `SQL` tab.
3. Paste the following code to create the database:

```sql
CREATE DATABASE IF NOT EXISTS store;
USE store;

CREATE TABLE users ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    fullname VARCHAR(100) NOT NULL,
    email VARCHAR(100) UNIQUE NOT NULL,
    password VARCHAR(255) NOT NULL,
    role ENUM('user', 'company') DEFAULT 'user'
);

CREATE TABLE products ( 
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10,2) NOT NULL,
    image_path VARCHAR(255),
    FOREIGN KEY (user_id) REFERENCES users(id)
);

CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_name VARCHAR(255) NOT NULL,
    product_price DECIMAL(10,2) NOT NULL,
    product_image VARCHAR(255),
    quantity INT DEFAULT 1,
    FOREIGN KEY (user_id) REFERENCES users(id)
);


```
## 👥 Team Members

- **Hager Abdelkader Ahmed**
- **Tasneem Salem Abdelfatah**
- **Abeer Mostafa Elsayed**

