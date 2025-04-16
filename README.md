# Task Manager User Manual

**Version**: 1.0  
**Date**: April 14, 2025  
**Application URL**: http://localhost:8000 (or your provided server URL)

Welcome to the **Task Manager**, a web application designed to help you organize and manage your tasks efficiently. This user manual guides you through using the application to register, log in, create, edit, delete, and track tasks. The interface is simple and intuitive, with all actions performed through a web browser.


## Table of Contents
1. [System Requirements](#system-requirements)
2. [Getting Started](#getting-started)
   - Accessing the Application
   - Registering an Account
   - Logging In
3. [Managing Tasks](#managing-tasks)
   - Viewing Tasks
   - Creating a Task
   - Editing a Task
   - Deleting a Task
   - Marking Tasks as Completed
   - Starring Tasks
   - Searching and Filtering Tasks
4. [Logging Out](#logging-out)
5. [Troubleshooting](#troubleshooting)
6. [Contact Support](#contact-support)

---

## 1. System Requirements
To use the Task Manager, you need:
- A modern web browser (e.g., Google Chrome, Mozilla Firefox, Microsoft Edge, Safari) with JavaScript enabled.
- An internet connection (if hosted online) or access to the local server (e.g., http://localhost:8000).
- No additional software installation is required.

---

## 2. Getting Started

### Accessing the Application
1. Open your web browser.
2. Navigate to **http://localhost:8000** (or the URL provided by your administrator).
3. You’ll see the Task Manager welcome page with options to **Log In** or **Register**.

### Registering an Account
To create a new account:
1. From the welcome page or navigation bar, click **Register**.
2. Fill in the registration form:
   - **Name**: Your full name (e.g., John Doe).
   - **Email**: A valid email address (e.g., john.doe@example.com).
   - **Password**: A secure password (at least 8 characters).
   - **Confirm Password**: Re-enter the same password.
3. Click the **Register** button.
4. If successful, you’ll be taken to the **Tasks** page, where you can start managing tasks.
5. If there’s an error (e.g., email already in use), an alert will display the issue. Correct the form and try again.

**Note**: Keep your email and password secure, as they’re needed to log in.

### Logging In
To access your account:
1. From the welcome page or navigation bar, click **Login**.
2. Enter your:
   - **Email**: The email used during registration.
   - **Password**: Your account password.
3. Click the **Login** button.
4. If successful, you’ll be taken to the **Tasks** page.
5. If credentials are incorrect, an alert will show “Login failed”. Verify your email/password and try again.

---

## 3. Managing Tasks

The **Tasks** page is your main hub for task management. It displays all your tasks in a table and provides tools to create, edit, delete, and organize them.

### Viewing Tasks
1. After logging in, you’re automatically taken to the **Tasks** page (http://localhost:8000/tasks).
2. Tasks are listed in a table with the following columns:
   - **Title**: The task’s name.
   - **Description**: Additional details (if provided).
   - **Status**: Shows “Completed” or “Pending”.
   - **Starred**: A star icon (★ for starred, ☆ for not starred).
   - **Actions**: Options to **Edit** or **Delete** the task.
3. If you have no tasks, the table shows “No tasks found.”

### Creating a Task
1. On the **Tasks** page, click the **Create Task** button (top-right, blue).
2. Fill in the form:
   - **Title**: A brief name for the task (required, e.g., “Buy groceries”).
   - **Description**: Optional details (e.g., “Milk, eggs, bread”).
3. Click the **Create** button.
4. You’ll be returned to the **Tasks** page, and the new task will appear in the table.
5. If the title is missing, an alert will prompt you to fill it in.

### Editing a Task
1. In the task table, find the task you want to edit.
2. Click **Edit** in the Actions column.
3. Update the form:
   - **Title**: Change the task’s name.
   - **Description**: Modify or add details.
4. Click the **Update** button.
5. You’ll return to the **Tasks** page with the updated task.
6. If the title is empty, an alert will ask you to provide one.

### Deleting a Task
1. In the task table, find the task to delete.
2. Click **Delete** in the Actions column.
3. Confirm the deletion by clicking **OK** in the pop-up.
4. The task will be removed from the table.
5. If you click **Cancel**, the task remains unchanged.

### Marking Tasks as Completed
1. In the task table, find the task.
2. Click the **Status** (shows “Pending” or “Completed”).
3. The status toggles:
   - From “Pending” to “Completed” (task is marked done).
   - From “Completed” to “Pending” (task is marked undone).
4. The table updates instantly.

### Starring Tasks
1. In the task table, find the task.
2. Click the star icon (☆ or ★).
3. The star toggles:
   - ☆ to ★ (task is starred, marked as important).
   - ★ to ☆ (task is unstarred).
4. The table updates instantly.

### Searching and Filtering Tasks
1. Use the **Search** bar (top of the table) to find tasks:
   - Type a keyword (e.g., “groceries”).
   - The table updates to show tasks with matching titles or descriptions.
   - Clear the search to show all tasks.
2. Use the **Filter** dropdown to narrow tasks:
   - **All Tasks**: Shows everything.
   - **Completed**: Shows only completed tasks.
   - **Starred**: Shows only starred tasks.
3. Combine search and filter for precise results (e.g., search “groceries” with “Completed” filter).

---

## 4. Logging Out
1. In the navigation bar (top-right), click **Logout**.
2. You’ll be logged out and taken to the **Login** page.
3. If an error occurs, an alert will display “Logout failed”. Try again or refresh the page.

---

## 5. Troubleshooting

| **Issue** | **Solution** |
|-----------|--------------|
| **Can’t access the application** | Ensure you’re visiting http://localhost:8000 (or the correct URL). Check your internet connection or contact your administrator. |
| **Login fails** | Verify your email and password. If forgotten, contact support (no password reset feature in this version). |
| **Registration fails** | Ensure the email is unique and passwords match. Try a different email if “email already in use” appears. |
| **Tasks don’t load** | Refresh the page. If the issue persists, log out and log in again. Check your internet connection. |
| **Task actions (create, edit, delete) fail** | Ensure all required fields (e.g., title) are filled. Refresh the page and try again. |
| **Alert messages appear** | Read the alert for details (e.g., “Failed to load tasks”). Follow any instructions or try the action again. |
| **Page looks broken** | Clear your browser cache (Ctrl+Shift+R or Cmd+Shift+R). Use a supported browser like Chrome or Firefox. |

If issues persist, see [Contact Support](#contact-support).

---

## 6. Contact Support
For assistance, contact your system administrator or support team (details depend on your setup). Provide:
- A description of the issue.
- Any error messages (e.g., from alerts).
- Steps you took before the issue occurred.

---

## Additional Notes
- **Security**: Do not share your email and password. Log out when using shared devices.
- **Data**: Tasks are tied to your account and only visible to you.
- **Updates**: This manual covers version 1.0. Check with your administrator for updates or new features.

Thank you for using the Task Manager! We hope it helps you stay organized and productive.

---

### Notes for Context
- **Dashboard Issue**: The manual assumes the `dashboard` route error is fixed by removing redirects and using `/tasks` as the main page, as implemented in the script.
- **User Focus**: Written for non-technical users, avoiding jargon like “API” or “Sanctum”. Technical details are in the code setup.
- **Scope**: Covers core features (auth, task CRUD, search/filter). Excludes advanced features (e.g., password reset) not implemented.
- **Troubleshooting**: Addresses common user-facing issues (e.g., login failures, network errors) based on Fetch API and Blade usage.
