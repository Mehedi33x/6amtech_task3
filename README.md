## Installation
After cloning the project successfully ,install composer and node (node version: '^20.19.0)

for composer-----
```bash
composer install 
```
for node
```bash
npm install 
```
generate .env and declare the db configaration in .env
```bash
cp .env.example .env
```
generate app key
```bash
php artisan key:generate 
```
link the storage
```bash
php artisan storage:link 
```
run seeder to seed the user data (admin@test.com--123456,developer@test.com--123456)
```bash
php artisan migrate:fresh
```
now if all those set , run this command to start the app and hit http://127.0.0.1:8000/
```bash
npm run dev
```

## Contributing

This is a simple Inventory and Accounting Management System built using Laravel (REST API) and Vue.js (frontend). The system manages product inventory, sales with discounts and VAT, and generates financial reports automatically.

