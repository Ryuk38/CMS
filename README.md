# CMS - Course Management System 🎓

## Description  
CMS is a web-based Course Management System developed using PHP and Docker. It helps manage courses, assignments, and user dashboards in an organized and user-friendly way. The project includes Docker support for seamless setup and Selenium for automated testing.

---

## Installation 🚀  
To clone and run this application, you'll need [Git](https://git-scm.com) and [Docker](https://www.docker.com/) installed on your machine. From your terminal:

```bash
# Clone the repository
git clone https://github.com/yourusername/CMS.git

# Navigate into the repository
cd CMS

# Build and start the containers
docker-compose up --build
```

---

## Usage 🖥️  
Once the containers are up and running, open your browser and navigate to:

```
http://localhost:YOUR_PORT
```

Replace `YOUR_PORT` with the port specified in your `.env` or `docker-compose.yml`.

---

## Files 📁  
- `assigned_course.php` – Handles course assignment logic  
- `course.php` – Course listing and management  
- `course_details.php` – View individual course information  
- `dashboard.php` – Main user dashboard  
- `Dockerfile` – Defines the app container  
- `docker-compose.yml` – Docker configuration for app and services  
- `.env` – Environment configuration (not included in repo)  
- `Dockerfile.selenium` – Setup for Selenium test container  

---

## Testing 🧪  
Run automated tests with Selenium using:

```bash
docker-compose -f docker-compose.selenium.yml up --build
```

---

## License 📜  
This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for details.

---

## Contact 📧  
For any questions or feedback, feel free to connect:

- **Email**: c380bineesh@gmail.com  
- **LinkedIn**: www.linkedin.com/in/bineesh38
- **GitHub**: https://github.com/Ryuk38
Thank you for checking out CMS! 📚
