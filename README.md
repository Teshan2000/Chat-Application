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
- **File Storage:** Localhost
<!-- - **Push Notifications:** [Your Push Notification Service] -->


## Getting Started

To get started with ChitChat, follow these steps:

1. **Clone the Repository:**
   ```bash
   git clone https://github.com/Teshan2000/Web-Chat-Application.git
   ```

2. **Set up Flutter App:**
   ```bash
   # Navigate to the Flutter app directory
   cd Web-Chat-Application/Chat-Application
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

Thank you for considering contributing to this project! Here’s how you can help:

- **Reporting Issues:** If you find a bug, please create an issue describing the problem and steps to reproduce it.
- **Feature Requests:** Feel free to suggest new features by opening an issue.
- **Submitting Pull Requests:** If you would like to make a change, fork the repository, make your changes, and submit a pull request. Be sure to provide a clear description of what the change does.

## License

ChitChat is open-source and available under the [MIT License](./LICENSE).
