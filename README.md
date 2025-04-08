# Pharmacy Management System 
## DBMS Project

This project is a Database Management System (DBMS) application developed as part of an academic project by Angshuman, Zeeshan, and Rayyan. The system is designed to manage various aspects of a pharmacy’s operations—including inventory management, sales processing, prescription handling, and supplier administration.

## Table of Contents

- [Overview](#overview)
- [Features](#features)
- [Project Structure](#project-structure)
- [Technologies Used](#technologies-used)
- [Installation](#installation)
- [Usage](#usage)
- [Customization & Configuration](#customization--configuration)
- [Contributing](#contributing)
- [Acknowledgements](#acknowledgements)

## Overview

The Pharmacy Management System enables pharmacy staff and administrators to efficiently handle day-to-day tasks. Its main goals include:

- **Inventory Management:** Easily add, update, and check stock levels for medicines.
- **Sales & Prescription Processing:** Process sales quickly, manage prescriptions, and keep track of sales records.
- **Supplier & Expiration Management:** Maintain supplier information and monitor medicine expiration dates.
- **Reporting & Statistics:** Generate inventory reports, view top-selling items, and access other statistical data.

This system serves as a practical demonstration of applying DBMS concepts in a web-based environment.

## Features

- **User Authentication:** Login functionality to restrict access to registered staff and administrators.
- **Medicine Management:** 
  - *Add Medicine:* Interface to add new medicines to the system.
  - *Update Stock:* Ability to update and manage stock levels.
  - *Check Stock:* Quick view of current inventory status.
- **Sales & Prescription Processing:**
  - *Sell Medicine:* Process sales transactions.
  - *Sales Records:* Maintain a log of all sales.
  - *Prescription Management:* Handle prescriptions associated with medicine sales.
- **Reporting & Statistics:**
  - *Inventory Report:* Detailed report of the medicine inventory.
  - *Top Selling Medicines:* View report on best-selling items.
  - *Statistics:* Aggregate data for performance analysis.
- **Supplier Management:** Manage supplier details and associated inventory updates.
- **Expiration Management:** Keep track of medicine expiration dates to ensure timely disposal and ordering.

## Project Structure

The repository is organized into several key directories and files:

```
PHARMACY_MANAGEMENT_SYSTEM/
│
├── public/
│   ├── add/
│   │   └── add-medicine.php
│   ├── api/
│   │   └── get_statistics.php
│   ├── check/
│   │   └── check-stock.php
│   ├── config/
│   │   ├── alter_medicines_table.sql
│   │   ├── create_tables.sql
│   │   ├── database.php
│   │   ├── database.sql
│   │   ├── setup_database.php
│   │   └── update_medicines_table.php
│   ├── dashboard/
│   │   ├── dashboard.php
│   │   └── staff_dashboard.html
│   ├── expiration/
│   │   └── expiration-management.php
│   ├── inventory/
│   │   ├── check_stock.php
│   │   ├── inventory_report.php
│   │   └── update_stock.php
│   ├── models/
│   │   ├── inventory.php
│   │   ├── Medicine.php
│   │   ├── Prescription.php
│   │   ├── Sale.php
│   │   ├── Supplier.php
│   │   └── User.php
│   ├── prescription/
│   │   └── prescription-management.php
│   ├── sales/
│   │   ├── sales_records.php
│   │   └── sell_medicine.php
│   ├── statistics/
│   │   └── statistics.php
│   ├── supplier/
│   │   └── supplier-management.php
│   ├── top_sales/
│   │   └── top-selling.php
│   ├── update/
│   │   └── update-stock.php
│   ├── database.php
│   ├── index.php
│   ├── register.php
│   ├── styles.css
│   ├── test_api.php
│   └── user.php
│
└── README.md
```

The project is primarily built with HTML, CSS, and PHP, and it uses MySQL as the backend database.

## Technologies Used

- **Frontend:** HTML, CSS
- **Backend:** PHP
- **Database:** MySQL
- **Web Server:** Apache (or any other PHP-compatible server)

## Installation

Follow these steps to set up the project locally:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Ganglet/DBMS-Project.git
   ```
2. **Set Up the Database:**
   - Create a new database (e.g., using phpMyAdmin or MySQL command line).
   - Import the provided database schema and sample data (if available). If no SQL file is provided in the repository, create the necessary tables as per the project requirements.
   - Update the database configuration (usually found in one of the PHP configuration files) with your database credentials.
3. **Configure the Server:**
   - Ensure you have a PHP-enabled server (e.g., XAMPP, WAMP, LAMP) installed.
   - Place the project folder in your web server’s root directory (e.g., `htdocs` for XAMPP).
4. **Access the Application:**
   - Open your web browser and navigate to `http://localhost/DBMS-Project/Pharma/` (or adjust the path as necessary).
   - Log in using the credentials set up in your database (consult your project documentation or instructors for default user details).

## Usage

- **Login:** Start by accessing the login page (`login.html`), where registered users can authenticate.
- **Dashboard:** Once logged in, staff can access the dashboard (`staff_index.html`) to manage daily operations.
- **Medicine and Inventory:** 
  - Use the “Add Medicine” page to input new medicines.
  - “Check Stock” and “Update Stock” pages allow monitoring and managing inventory.
- **Sales & Prescriptions:**
  - The “Sell Medicine” and “Sales Records” pages enable processing transactions and reviewing past sales.
  - Manage prescriptions with the dedicated “Prescription Management” interface.
- **Reporting:** Generate inventory and sales reports, view top-selling medicines, and analyze statistics to optimize operations.
- **Supplier & Expiration Management:** Use the respective pages to manage supplier information and monitor medicine expiry dates.

## Customization & Configuration

- **Styling:** Modify `styles.css` to change the appearance of the user interface.
- **PHP Code:** Update PHP files (if present) to extend functionalities, integrate with additional modules, or secure the authentication process.
- **Database:** Extend the database schema as needed for new functionalities or custom reports.

## Contributing

Contributions are welcome. If you wish to enhance the project by adding new features or fixing bugs, please follow these steps:

1. Fork the repository.
2. Create a branch for your feature or bug fix.
3. Commit your changes and push to your branch.
4. Open a pull request with a detailed description of your changes.

## Acknowledgements

- **Project Contributors:** Angshuman, Zeeshan, Rayyan.
- **Inspiration:** This project demonstrates how DBMS concepts can be applied in a real-world setting, combining web technologies with database management.
