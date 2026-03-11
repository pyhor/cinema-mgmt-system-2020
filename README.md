## 🎬 Cinema Management System | 2020 Project Archive

> [!NOTE]
>
> Status: Public Archive (Read-Only) > This repository is a historical record of my 2020 Form 5 Sains Komputer Folio. It is preserved to document my early technical foundations in full-stack development and is no longer under active maintenance.

**Year:** 2020 (Form 5 / SPM Level)

**Stack:** PHP, MySQL (WAMP/XAMPP)

<p align="center">
  <img src="https://img.shields.io/badge/Status-Public%20Archive-blue" />
  <img src="https://img.shields.io/badge/Year-2020-green" />
  <img src="https://img.shields.io/badge/Type-School%20Project-orange" />
  <img src="https://img.shields.io/badge/Language-Bahasa%20Melayu-red" />
  <img src="https://img.shields.io/badge/Project-Solo%20Development-blueviolet" />
</p>

<p align="center">
  <img src="https://img.shields.io/badge/PHP-777BB4?style=for-the-badge&logo=php&logoColor=white" />
  <img src="https://img.shields.io/badge/MySQL-4479A1?style=for-the-badge&logo=mysql&logoColor=white" />
  <img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
  <img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
  <img src="https://img.shields.io/badge/JavaScript-F7DF1E?style=for-the-badge&logo=javascript&logoColor=black" />
  <img src="https://img.shields.io/badge/XAMPP-FB7A24?style=for-the-badge&logo=xampp&logoColor=white" />
</p>

This repository contains my **Form 5 Computer Science Portfolio (2020)** project.

The project is a **Cinema Management System** designed to simulate how a cinema manages movie screenings, ticket bookings, and customer interactions.

---

## 🎓 Academic Context

This project was completed as part of the **Computer Science (Sains Komputer)** subject during **Form 5**, which is the final year of Malaysian secondary school before the **SPM examination**.

**Level:** Form 5 (Secondary School / SPM)

**Curriculum:** Sains Komputer (Computer Science)

**Language:** Bahasa Melayu (The system, database labels, and documentation are in Malay as per the national curriculum requirements).

**Contribution:** 100% Solo Project. I was responsible for the full-stack development, including database design (ERD), backend logic (PHP), and frontend UI/UX (HTML/CSS).


### <ins>📝 Language & Localisation</ins>

As this project was developed for the Malaysian SPM Sains Komputer curriculum, the User Interface (UI), system messages, and technical documentation are primarily in **Bahasa Melayu**.


### 👤 My Role: Sole Developer
As this was an individual folio project, I managed the entire Software Development Life Cycle (SDLC), including:

**System Analysis:** Planning the cinema booking workflow.

**Database Architecture:** Designing relational tables in MySQL.

**Backend Development:** Writing PHP scripts for data processing.

**Frontend Design:** Creating the user and admin interfaces.

---

## 📖 Project Overview

This is a **Legacy Archive** of my high school Computer Science Portfolio. It is a full-stack **Cinema Management System** designed to handle movie screenings, seat availability, and customer ticket bookings. 

> [!NOTE]
> This project is preserved as a record of my early technical journey and foundational understanding of **CRUD operations** and **relational database design**.

It allows users to:
- View available movies
- Check movie showtimes
- Book movie tickets
- Manage simple booking information

This project was created to apply the **programming and system design concepts** learned in the **Sains Komputer (Computer Science)** subject during Form 5.


### 🎯 Project Objectives

- Develop a basic cinema management application
- Apply programming and logical thinking skills
- Understand how booking systems work
- Practice designing a user interface
- Demonstrate system planning and development

---

## 🎬 System Features

The system includes the following features:

- 🎥 Movie listing
- 🕒 Showtimes display
- 🎟 Ticket booking
- 👤 Customer information handling
- 📋 Basic data management
  


### 🛠 Technologies Used


<p align="left">
  <a href="https://skillicons.dev">
    <img src="https://skillicons.dev/icons?i=html,css,js,php,mysql,windows" />
  </a>
</p>

- **Frontend:** HTML5, CSS3, JavaScript
- **Backend:** PHP
- **Database:** MySQL
- **Environment:** XAMPP on Windows
- **Project Type:** 100% Solo Development



### 📂 Project Structure


```text
form5-cinema-management-system/
│
├── PHP Coding/               # Folder containing core PHP, HTML, and JS files
├── demo-images/              # Project screenshots for documentation
├── DOKUMENTASI HOR PEI Y...  # Project Documentation (Malay)
├── MANUAL PENGGUNA SIST...   # User Manual (Malay)
├── LICENSE                   # Project License
└── README.md                 # Project Overview & Guide
```

### 📷 Screenshots

Here are some screenshots showing key interfaces from the completed system:

1. **Customer Registration Form** – The standard interface for new users to register their details into the MySQL database.
   
![Customer Registration Form](demo-images/Customer%20Registration%20Form.png)

3. **Customer Login Form** – The secure gateway for existing customers to access their accounts and start booking.
   
![Customer Login Form](demo-images/Customer%20Login%20Form.png)

5. **File Import Program (Admin Feature)** – This screenshot shows the administrative backend component used to import bulk movie or schedule data into the system via a script.
   
![File Import Program](demo-images/File%20Import%20Program-Script.png)

---

## 📚 Learning Outcomes

Through the development of this system, I achieved the following milestones in my technical journey:

* **Full-Stack Foundations:** Gained hands-on experience connecting a **PHP** backend to a **MySQL** database to handle dynamic data.
* **System Architecture:** Learned how to plan a logical user flow, from registration and login to the final ticket booking confirmation.
* **Data Integrity:** Implemented basic form validation and learned how to structure relational database tables for efficient storage.
* **Technical Documentation:** Developed the ability to translate complex code into readable manuals, as seen in the [**DOKUMENTASI HOR PEI YU.pdf**](https://github.com/pyhor/form5-cinema-management-system/blob/main/DOKUMENTASI%20HOR%20PEI%20YU.pdf).
* **Problem Solving:** Debugged real-world scenarios, such as ensuring seat availability updates correctly after a successful booking.
* **User Interface Design:** Created intuitive and responsive interfaces using **HTML, CSS, and JavaScript**, ensuring smooth interactions for customers during movie browsing, login, registration, and ticket booking.
  
---

## 👩‍💻 Author

**Pei Yu Hor**  

GitHub: https://github.com/pyhor  
LinkedIn: https://www.linkedin.com/in/pei-yu-hor-9b3539265/

---

## 🚀 How to Run (Local Setup)

To run this project locally, you will need a local server environment like **XAMPP**.

1. **Move Project Files:** Copy the contents of the `PHP Coding/` folder into the XAMPP `htdocs` directory (e.g., `C:\xampp\htdocs\cinema-system\`).
   
2. **Database Setup:**
   - Start **Apache** and **MySQL** in the XAMPP Control Panel.
   - Go to `localhost/phpmyadmin` and create a new database.
   - Import the provided SQL file (if available) or refer to the documentation for table structures.

3. **Configuration:**
   Update the database connection settings in the PHP files (usually `db_connection.php` or similar) to match the local MySQL credentials.

4. **Access the App:**
   Open the browser and navigate to `http://localhost/cinema-system/index.html`.

> [!TIP]
> 
> For a detailed step-by-step guide, database schema, and system architecture, please refer to the [**DOKUMENTASI HOR PEI YU.pdf**](https://github.com/pyhor/form5-cinema-management-system/blob/main/DOKUMENTASI%20HOR%20PEI%20YU.pdf) file included in this repository.

---

## 📜 Archive & Legacy Disclaimer
> [!IMPORTANT]
> 
> Status: Public Archive (Read-Only) > This repository is a historical record of my 2020 Form 5 Sains Komputer (Computer Science) Folio. It is preserved here to document my early technical journey and foundations in full-stack development.

### ⚖️ License
This project is licensed under the MIT License. It is provided "as-is" for educational and reference purposes only. No further updates or maintenance will be provided.
