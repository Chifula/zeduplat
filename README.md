# 📚 Course Counseling Web Application

<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
</p>

<p align="center">
  <a href="https://github.com/zeduplat/course-counseling/actions"><img src="https://github.com/zeduplat/course-counseling/workflows/tests/badge.svg" alt="Build Status"></a>
  <a href="https://packagist.org/packages/zeduplat/course-counseling"><img src="https://img.shields.io/packagist/dt/zeduplat/course-counseling" alt="Total Downloads"></a>
  <a href="https://packagist.org/packages/zeduplat/course-counseling"><img src="https://img.shields.io/packagist/v/zeduplat/course-counseling" alt="Latest Stable Version"></a>
  <a href="https://packagist.org/packages/zeduplat/course-counseling"><img src="https://img.shields.io/packagist/l/zeduplat/course-counseling" alt="License"></a>
</p>

## 🎯 About the Project

The **Course Counseling Web Application**, developed under **ZeduPlat**, is designed to help students at **Zambian universities** select courses that align with their skills, interests, and career aspirations. The system leverages **artificial intelligence** to provide tailored recommendations, ensuring students make informed decisions to reduce dropout rates and improve career alignment.

## 🚀 Features

- **AI-powered course recommendations** 🎓
- **Skill-based analysis for students** 🔍
- **University program details and career prospects** 🏫
- **Interactive dashboard for students and counselors** 📊
- **User authentication and role management** 🔐
- **Integration with university databases** 📂
- **Admin panel for managing course data** ⚙️

## 🛠️ Tech Stack

- **Laravel** - Backend framework
- **Vue.js** - Frontend framework
- **MySQL** - Database
- **XAMPP** - Local development environment
- **Bootstrap** - UI components
- **AI Recommendation Engine** - Custom-built logic

## 🏗️ Setup & Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/zeduplat/course-counseling.git
   cd course-counseling
   ```
2. **Install dependencies:**
   ```sh
   composer install
   npm install
   ```
3. **Setup `.env` file and configure database:**
   ```sh
   cp .env.example .env
   php artisan key:generate
   ```
4. **Run migrations and seed data:**
   ```sh
   php artisan migrate --seed
   ```
5. **Start the development server (Ensure XAMPP is running):**
   ```sh
   php artisan serve
   ```

## 📖 Learning Resources

For further understanding of Laravel and Vue.js, check out these resources:

- [Laravel Documentation](https://laravel.com/docs)
- [Vue.js Guide](https://vuejs.org/guide/introduction.html)
- [MySQL Documentation](https://dev.mysql.com/doc/)
- [XAMPP Setup Guide](https://www.apachefriends.org/index.html)

## 🤝 Contributing

We welcome contributions to improve this project! Please follow the standard [Laravel contribution guidelines](https://laravel.com/docs/contributions) and submit pull requests.

## 🔐 Security & Bug Reports

If you discover any security vulnerabilities or bugs, please contact us at **support@zeduplat.com**.

## 📜 License

This project is open-sourced under the [MIT license](https://opensource.org/licenses/MIT).
