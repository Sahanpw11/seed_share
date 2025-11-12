# SeedShare - Local Seed Inventory System

A web-based platform that connects farmers and gardeners to share seeds and promote sustainable agriculture.

## 🌱 Project Overview

SeedShare is a full-stack web application designed to facilitate seed sharing within farming and gardening communities. The platform allows users to add their available seeds to a shared inventory and view seeds offered by others.

## 🚀 Features

- **Add Seeds**: Users can add seeds to the inventory with details like name, quantity, and contact information
- **View Seeds**: Browse all available seeds in an organized table format
- **Responsive Design**: Works perfectly on desktop and mobile devices
- **Database Integration**: Secure MySQL database storage for all seed information
- **Clean Interface**: User-friendly design with intuitive navigation

## 🛠️ Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP
- **Database**: MySQL
- **Styling**: Custom CSS with responsive design
- **Font**: Poppins (Google Fonts)

## 📁 Project Structure

```
seed_share/
├── index.html          # Homepage with welcome message
├── add_seed.php        # Form to add new seeds
├── view_seed.php       # Display all seeds in table
├── dataBase.php        # Database connection configuration
├── style.css           # Main stylesheet
├── script.js           # Client-side validation
├── logo.png            # SeedShare logo
├── imagebg.png         # Background image
└── README.md           # Project documentation
```

## 🌐 Live Demo

Website: [http://SeedShare.ct.ws](http://SeedShare.ct.ws)

## 💾 Database Schema

### Seeds Table
```sql
CREATE TABLE seeds (
    id INT AUTO_INCREMENT PRIMARY KEY,
    seed_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    quantity INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
```

## 🎯 Purpose & Impact

### Environmental Benefits
- Promotes biodiversity by preserving different seed varieties
- Reduces waste by preventing unused seeds from being discarded
- Supports sustainable agriculture practices
- Encourages community gardening initiatives

### Social Benefits
- Connects farmers and gardeners in local communities
- Facilitates knowledge sharing about different plant varieties
- Provides cost-effective access to seeds
- Builds networks of environmentally conscious individuals

## 🔧 Installation & Setup

### Local Development (XAMPP)
1. Install XAMPP
2. Copy project files to `htdocs/seedshare/`
3. Start Apache and MySQL services
4. Create database `seedshare_db`
5. Import database schema
6. Access via `http://localhost/seedshare/`

### Online Deployment
1. Upload files to web hosting service
2. Create MySQL database
3. Update database connection in `dataBase.php`
4. Execute database schema SQL
5. Test all functionality

## 👨‍💻 Developer

**Isuru882**
- GitHub: [@isuru882](https://github.com/isuru882)
- Repository: [seed_share](https://github.com/isuru882/seed_share)

## 📚 Academic Context

This project was developed as a coursework assignment demonstrating:
- Full-stack web development skills
- Database design and management
- User interface design principles
- Real-world problem solving
- Professional deployment practices

## 🔮 Future Enhancements

- User authentication system
- Location-based seed matching
- Seed exchange tracking
- Plant care guides and tips
- Rating and review system
- Mobile app development
- Advanced search and filtering

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

---

**Built with 💚 for sustainable agriculture and community building**