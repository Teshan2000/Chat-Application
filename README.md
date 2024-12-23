# ChitChat - Web Chat Application

![App Logo](link_to_your_logo)

## Overview

ChitChat is a versatile and feature-rich web chat application developed using CodeIgnitor framework for both front-end and back-end. Whether you're connecting with friends, family, or colleagues, ChitChat provides a seamless and secure platform for real-time messaging, file sharing, and group chats.

## Features

- **Real-time Messaging:** Instantly chat with friends and contacts with real-time message delivery.
- **Group Chats:** Create or join groups for discussions, collaboration, and shared interests.
- **Multimedia Support:** Share photos, videos, audio messages, and documents with ease.
- **Push Notifications:** Stay updated with notifications for new messages, mentions, and group activities.
- **Message Reactions:** React to messages with emojis for quick responses and fun interactions.
- **Search Conversations:** Easily find and retrieve past conversations and shared media.
- **User Profiles:** Customize your profile with avatars, statuses, and personal details.
- **Security and Privacy:** End-to-end encryption ensures secure and private conversations.

## Technologies Used

- **Front-end:** CodeIgnitor
- **Back-end:** CodeIgnitor
- **Database:** MySQL
- **Authentication:** JWT (JSON Web Tokens) for secure user authentication
- **Push Notifications:** [Your Push Notification Service]
- **File Storage:** Localhost

## Getting Started

To get started with ChitChat, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/your-username/chitchat-app.git
   ```

2. **Set up Flutter App:**
   ```bash
   # Navigate to the Flutter app directory
   cd chitchat-app/flutter_app
   flutter pub get
   ```

3. **Set up Laravel API:**
   ```bash
   # Navigate to the Laravel app directory
   cd ../laravel_app
   composer install
   cp .env.example .env
   php artisan key:generate
   # Configure your database and other settings in the .env file
   ```

4. **Run the App:**
   - Launch the Flutter app:
     ```bash
     flutter run
     ```
   - Start the Laravel development server:
     ```bash
     php artisan serve
     ```

5. **Explore ChitChat:**
   - Open ChitChat on your emulator or physical device to start chatting and connecting with others.

## Contribution Guidelines

Contributions to ChitChat are welcome! If you'd like to contribute, please follow our [contribution guidelines](link_to_contributing_guidelines).

## License

ChitChat is open-source and available under the [MIT License](link_to_license).
