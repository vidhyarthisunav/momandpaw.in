# 🐾 Mom and Paw
**A pet care and wellness website**  

Mom and Paw is a simple, elegant web application designed to help pet owners connect with services, products, and information related to pet care. Built with **HTML, CSS, JavaScript, and PHP**, it includes lightweight backend scripts to handle user interactions such as form submissions, newsletter subscriptions, and email notifications.

---

## 🌐 Overview
This project powers the **Mom and Paw** website — a platform aimed at promoting responsible pet care and providing a smooth digital experience for pet lovers.  

It features:
- A clean, responsive user interface.  
- Contact and subscription forms.  
- Email-based interaction through PHP mail handlers.  
- Simple backend processing scripts.  

---

## 🧩 Tech Stack
**Frontend:**  
- HTML5  
- CSS3  
- JavaScript  

**Backend:**  
- PHP (mail handling, form processing)  

**Other Tools:**  
- SMTP integration for automated email sending  
- Basic deployment configuration via `Web.config`

---

## 📂 Project Structure
```
momandpaw.in/
│
├── index.html                   # Main landing page
├── mail.php                     # Handles contact form submissions
├── subsmail.php                 # Handles newsletter subscriptions
├── main.php                     # Core backend logic
├── PHP Script Background Processer.php  # Background email/script processor
├── emailcontent.html             # Email template content
├── css/                          # Stylesheets
├── scripts/                      # JavaScript files
├── vendor/                       # External libraries or assets
├── favicon.ico                   # Site favicon
├── Web.config                    # Server configuration (for IIS)
└── momandpaw-smtp.js.zip         # Contains SMTP script setup (review before use)
```

---

## ⚙️ Setup Instructions
1. Clone the repository:
   ```bash
   git clone https://github.com/vidhyarthisunav/momandpaw.in.git
   ```
2. Move the project files to your web server root (e.g., `htdocs/` for XAMPP or `/var/www/html/` for Apache).
3. Make sure **PHP** and **SMTP** configurations are properly set in your environment.
4. Update email credentials in the PHP files (use environment variables for security).
5. Run the site locally:
   ```
   http://localhost/momandpaw.in/
   ```

---

## 🔒 Security Notes
- **Never commit email credentials or passwords** in your code or `.zip` files.  
- Always validate and sanitize form inputs.  
- Consider moving sensitive configs to `.env` or server-side environment variables.  
- Disable error display in production.

---

## 👩‍💻 Author
**Sunav Vidhyarthi**  
[GitHub Profile](https://github.com/vidhyarthisunav)
