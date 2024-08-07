## Laravel Passport SSO Implementation | Identity Server
Welcome to the repository for implementing Single Sign-On (SSO) using Laravel Passport. This project demonstrates how to set up and integrate SSO in a Laravel application, providing a seamless and secure authentication experience across multiple applications.

Here is an example of an application that integrates SSO: https://github.com/nhattay/sso_application

## Features
* SSO with OAuth2: Leverage Laravel Passport to implement OAuth2 server capabilities, allowing for robust and secure SSO functionality.
* User Authentication: Easily authenticate users across different applications without requiring them to log in multiple times.
* Token Management: Securely manage access tokens, refresh tokens, and personal access tokens.
* API Integration: Simplify API authentication with token-based security.
* Scalable and Extensible: Designed to be scalable and easy to extend for various authentication requirements.

## Prerequisites
- PHP ^8.2
- Nodejs ^18
- Composer 2
- MySQL or other compatible database

## Installation
```
composer install
```
```
php artisan migrate
```

## Configuration

#### Laravel Passport
- Generate keys
```
php artisan passport:keys
```
- Create Client
```
php artisan passport:client --public
```

## Localhost development
```
yarn
```
```
yarn dev
```

## Production build
```
yarn
```
```
yarn build
```


