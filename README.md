# Robot Control Panel

## Project Description
This project is a simple web-based robot control panel. It allows the user to control the robot by pressing one of five buttons:

- Forward
- Backward
- Left
- Right
- Stop

When a button is pressed, the selected command is sent to the server using PHP and stored in a MySQL database.

---

## Technologies Used

- HTML
- CSS
- JavaScript (Fetch API)
- PHP
- MySQL
- InfinityFree Hosting

---

## Project Files

- `index.html` → User interface.
- `db.php` → Database connection.
- `update_command.php` → Updates the robot command in the database.
- `get_state.php` → Retrieves the latest robot command.
- `setup.sql` → Creates the database table.

---

## Database

Database Table:

`robot_state`

Columns:

- id
- command
- updated_at

---

## How to Run

1. Create a MySQL database on InfinityFree.
2. Import the `setup.sql` file using phpMyAdmin.
3. Edit `db.php` with your database credentials.
4. Upload all project files to the `htdocs` folder.
5. Open the website in a browser.
6. Press any control button to update the robot command.

---

## Result

The control panel successfully updates the robot command in the MySQL database without refreshing the page using JavaScript Fetch API.

## Live Demo

Website:
https://rawanweb.wuaze.com

## GitHub Repository

Project files are available in this repository.
