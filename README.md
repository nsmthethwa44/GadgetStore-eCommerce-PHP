﻿# GadgetStore-eCommerce-PHP
 
A simple PHP & MySQL-based online gadget store. This project includes product listings, featured items, categories, and a functional shopping interface built with PHP, MySQL, HTML, JS, CSS.

## Features

- Home page with featured and popular items
- Product detail pages
- Category-based browsing
- Add to cart functionality (optional)
- Responsive design with custom CSS

## Tech Stack

- **Frontend:** HTML5, CSS3
- **Backend:** PHP
- **Database:** MySQL
- **Server:** XAMPP / Localhost


---

## Installation & Setup (Localhost)

### Requirements

- [XAMPP](https://www.apachefriends.org/index.html) or similar local server environment
- A web browser

### Steps

1. **Clone or Download the Project**

```bash
git clone https://github.com/YOUR_USERNAME/gadgetstore.git

Or download the ZIP and extract it to your htdocs folder (usually C:\xampp\htdocs on Windows).

2. **Start Apache & MySQL

Open XAMPP Control Panel.

Start Apache and MySQL.

3. **Import the Database

Open http://localhost/phpmyadmin

Create a new database named gadgetstore

Import the gadgetstore.sql file from the project root.

4. **Configure Database Connection

Open includes/db.php and update credentials if needed:

php
Copy
Edit
$conn = new mysqli("localhost", "root", "", "gadgetstore");

5. **Run the Project

Visit: http://localhost/gadgetstore


