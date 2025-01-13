# DryoPro

**DryoPro** is an innovative web-based application aimed at supporting agro-industrial processes through the integration of **Internet of Things (IoT)** technology. This project leverages the capabilities of **ESP32** and **DHT22 sensors** to monitor environmental conditions, specifically temperature and humidity, in real-time.

---

## Features

- **Real-Time Monitoring**: Utilize **DHT22 sensors** connected to **ESP32** to monitor temperature and humidity data in real-time.
- **IoT Integration**: Incorporate IoT devices for seamless environmental data collection and transmission.
- **User-Friendly Dashboard**: Web-based dashboard built with **Laravel** for easy data visualization and management.
- **Data Storage**: Securely store environmental data for analysis and reporting.

---

## Technology Stack

- **Backend Framework**: Laravel
- **Frontend Technologies**: HTML, CSS Tailwind, JavaScript
- **IoT Hardware**: ESP32 and DHT22 Sensor
- **Database**: MySQL

---

## Installation and Setup

Follow these steps to set up and run the application locally:

1. **Clone the repository**:
   ```bash
   git clone https://github.com/KevinElvio/DryoPro.git
   cd DryoPro
   ```

2. **Install dependencies**:
   Ensure you have Composer installed, then run:
   ```bash
   composer install
   ```

3. **Set up environment variables**:
   Copy the `.env.example` file to `.env` and configure the following variables:
   ```plaintext
   DB_HOST=your_database_host
   DB_DATABASE=your_database_name
   DB_USERNAME=your_database_user
   DB_PASSWORD=your_database_password
   ```

4. **Run database migrations**:
   ```bash
   php artisan migrate
   ```

5. **Start the development server**:
   ```bash
   php artisan serve
   ```
   The application will be accessible at `http://localhost:8000`.

---

## How It Works

1. **IoT Device Integration**:
   - The **ESP32** device reads temperature and humidity data from the **DHT22 sensor**.
   - Data is sent to the Laravel backend using HTTP protocols.

2. **Data Processing**:
   - The backend processes incoming data and stores it in a MySQL database.

3. **Dashboard Visualization**:
   - The frontend retrieves and displays the data in real-time through graphs and tables.

---

## Future Enhancements

- Expand support for additional IoT sensors.
- Implement mobile application integration.
- Introduce advanced analytics for predictive insights.
- Enhance security with role-based access controls.

---

## Contribution

We welcome contributions to improve DryoPro. If you'd like to contribute:

1. Fork the repository.
2. Create a new branch for your feature or bug fix.
3. Submit a pull request for review.

---

## License

This project is licensed under the [MIT License](LICENSE).

---

Thank you for exploring DryoPro! Feel free to reach out with any feedback or suggestions.

