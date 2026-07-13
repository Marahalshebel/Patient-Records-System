# Patient Records System
A simple web application for managing patient records using HTML, CSS, JavaScript, PHP, and MySQL.


## Overview
The application allows users to add patient information, store it in a MySQL database, display all records dynamically, and update each patient's status without refreshing the webpage.
The project was developed using front-end and back-end web technologies and deployed using InfinityFree.


## Technologies Used
- HTML5
- CSS3
- JavaScript
- PHP
- MySQL


## Project Files

```
Patient-Records-System/
│
├── index.php
├── style.css
├── script.js
├── config.php
├── insert.php
├── fetch.php
├── toggle.php
└── README.md
```

| File | Description |
|------|-------------|
| [index.php](index.php) | Main webpage containing the patient form and records table |
| [style.css](style.css) | Stylesheet for the user interface |
| [script.js](script.js) | Handles AJAX requests for adding patients and updating status |
| [config.php](config.php) | Database connection configuration |
| [insert.php](insert.php) | Inserts new patient records into the database |
| [fetch.php](fetch.php) | Retrieves and displays all patient records |
| [toggle.php](toggle.php) | Toggles the patient's status between Active and Inactive |


## Features
- Add new patient records.
- Store patient information in a MySQL database.
- Display all records in a dynamic table.
- Toggle patient status between Active and Inactive.
- Update records instantly without refreshing the page.
- Clean and responsive user interface.


## Database Structure
The application uses a MySQL table named **patients** with the following fields:

| Column | Type |
|---------|------|
| id | INT (Auto Increment, Primary Key) |
| name | VARCHAR(250) |
| age | INT |
| status | TINYINT (0 = Inactive, 1 = Active) |


## How to Run
1. Upload all project files to the `htdocs` directory on InfinityFree.
2. Create a MySQL database.
3. Create a table named `patients`.
4. Update the database credentials inside `config.php`.
5. Open `index.php` in your browser.
6. Add patient records and manage their status.


## System Workflow
1. Enter the patient's name and age.
2. Click **Add Patient**.
3. Store the information in the MySQL database.
4. Display all records in the table.
5. Click **Toggle** to change the patient's status.
6. The table updates immediately without refreshing the page.
