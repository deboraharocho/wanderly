# Wanderly 🌟  
**Personal Career Exploration Website**  
Created by: Deborah Arocho  
GitHub Repo: [https://github.com/deboraharocho/wanderly](https://github.com/deboraharocho/wanderly)

---

## 📌 Description
Wanderly is a simple, user-friendly career exploration tool built with HTML, CSS, JavaScript, and PHP. It helps users discover their career personality type through a 20-question quiz and provides curated resources, goal tracking, and a personalized dashboard experience.

---

## 🔐 Features

- 🔐 **Login & Registration System** – New and returning users can register and securely log in.
- 🧠 **20-Question Career Personality Quiz** – Helps categorize users into Creative, Logical, or Helper personality types.
- 📊 **Results Page** – Displays quiz results with a category breakdown in percentages.
- 📚 **Career Resources Page** – Offers curated links to job preparation, learning platforms, and career exploration tools.
- ✅ **Goal Tracker** – Users can add, check off, and delete weekly goals, with completed goals displayed separately.
- ⏲️ **Session Timeout** – Automatically logs users out after 15 minutes of inactivity, with a visible countdown timer and warning alert.
- 🧭 **Personalized Dashboard** – Greets users by name and offers intuitive navigation.
- 🔁 **Quiz History Saved** – Local storage tracks past results for return users.

---

## 💡 Technologies Used

- **HTML5 & CSS3** – UI/UX layout and design
- **JavaScript** – Quiz logic, localStorage, timers, dynamic updates
- **PHP** – User login system, session management
- **MySQL** – User authentication database (via XAMPP)

---

## 📂 Folder Structure

wanderly/
│
├── index.html
├── login.php
├── register.php
├── dashboard.php
├── quiz.html
├── results.html
├── tracker.html
├── resources.html
├── logout.php
├── includes/
│ └── db.php
├── css/
│ └── styles.css


---

## 🧪 Testing and Security

During testing, special attention was given to:
- Validating form inputs and requiring all quiz questions be answered
- Preventing session hijacking by clearing session data on timeout
- Hiding quiz result details unless a user has completed the quiz
- Testing navigation and session behavior across all pages

---

## 📌 Project Summary

Wanderly was created to provide a personalized and uplifting career exploration experience. Inspired by career assessments and modern UI practices, it integrates quiz functionality, resource recommendations, and a goal-setting tool. Its focus is on usability, motivation, and gentle self-discovery. The project demonstrates full-stack capabilities with attention to user experience, session security, and clean design.

---

## 🚀 How to Use

1. Open the project in XAMPP (`http://localhost/wanderly`)
2. Register or log in as a user.
3. Take the career quiz and view your results.
4. Explore the resource page and begin tracking your weekly goals!

---

## 📌 Project Tasks

### Task 1: Set up the environment
- Installed XAMPP and configured the localhost server  
- Initialized GitHub repo and synced project files  

### Task 2: Design the interface
- Created wireframes and mockups  
- Developed a calming UI with soft gradients and inviting layout  

### Task 3: Build functional pages
- Implemented login/registration with secure password hashing  
- Built the dashboard, quiz, goal tracker, and resource pages  

### Task 4: Enhance interactivity and session handling
- Added a 20-question quiz with category tracking and result storage  
- Implemented session timeout alerts and auto-logout after 15 minutes  
- Stored quiz history in localStorage for return users  
- Provided navigation buttons between all core pages  

### Task 5: Improve user experience
- Added a dynamic greeting with the user's name  
- Displayed a visible countdown timer on the dashboard  
- Added ability to check off and delete goals  
- Styled the quiz and resource pages to be more visually engaging  

### Task 6: Test and secure the application
- Validated all form inputs and radio selections  
- Thoroughly tested session timeout, login, and logout handling  
- Conducted manual browser testing for layout, usability, and performance  
- Focused on preventing vulnerabilities during login and data handling  

---

## 💡 Project Skills Learned

- Full-stack development with PHP and MySQL  
- Frontend design using HTML, CSS, and JavaScript DOM manipulation  
- Secure session handling and user authentication  
- Using localStorage to store and retrieve user data  
- Building and debugging interactive web components  
- Writing documentation and practicing version control with Git/GitHub  

---

## 🔧 Languages & Tools Used

- **Languages:** PHP, HTML, CSS, JavaScript  
- **Database:** MySQL  
- **Tools:** VS Code, XAMPP, GitHub, phpMyAdmin  

---

## 🔁 Development Process Used

**Agile Methodology:**  
Each week followed an iterative cycle of planning, development, and reflection. Weekly progress reports guided updates and ensured consistent improvements in usability, security, and design.

---

## 📝 Project Summary

Wanderly is a personalized career guidance platform that helps users discover their professional strengths through an engaging 20-question quiz. Based on the result, users receive a categorized score, tailored resources, and can track their weekly goals. The system features secure login, dynamic dashboard updates, session timeout protection, and a relaxing visual theme to reduce stress during exploration. Wanderly empowers users to better understand themselves and confidently pursue their next career steps.

---