# Todo App

## Overview
The **Todo App** is a powerful yet simple task management application that enables users to efficiently create, view, edit, and delete tasks. It offers a user-friendly interface with visually appealing designs and responsive layouts, ensuring a seamless experience across all devices.

## Features
- **User Authentication**: Secure sign-up and login system to protect user data.
- **Task Management**: Add, view, edit, and delete tasks effortlessly.
- **Responsive Design**: Fully optimized for different screen sizes with a responsive navigation menu.
- **Session Management**: Automatically logs out inactive users and displays a 'session expired' message.
- **User Dashboard**: A well-organized dashboard to manage tasks efficiently.
- **Modern Styling**: Clean and professional UI/UX with smooth transitions, hover effects, and a visually appealing layout.

## Technologies Used
### Frontend
- **HTML5** - For structuring the web pages.
- **CSS3** - Includes a `reset.css` file for consistency across browsers.
- **JavaScript** - Handles navigation toggle functionality for an improved user experience.

### Backend
- **PHP** - Server-side scripting for handling task operations and authentication.
- **MySQL** - Database management for storing user and task information.

### Other Tools
- **Git & GitHub** - Version control and project management.

## Installation & Setup
1. **Clone the Repository:**
   ```sh
   git clone https://github.com/yourusername/todo-app.git
   ```
2. **Set Up the Database:**
   - Import the provided SQL file into MySQL.
   - Configure database credentials in the PHP configuration file.
3. **Run the Application:**
   - Place the project in a local server directory (e.g., `htdocs` for XAMPP).
   - Start your server and navigate to:
     ```
     http://localhost/todo-app/
     ```

## Project Structure
```
Todo-App/
│── index.php        # Main entry point
│── dashboard.php    # User dashboard
│── auth/            # Contains login and signup pages
│── includes/        # Styles, database connection, and helpers
│── js/script.js     # JavaScript for navigation and interactivity
│── css/style.css    # Main stylesheet
│── reset.css        # CSS reset file
│── README.md        # Project documentation
```

## Screenshots
(Add screenshots of the UI here if available)

## License
This project is licensed under the [MIT License](LICENSE).



