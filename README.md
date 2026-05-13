# 🚀 Laravel Real-time CSV Import System

A real-time Laravel application that processes uploaded CSV files in the background and updates the UI instantly using WebSockets — without page refresh.

---

## 📌 What this project does

- User uploads a CSV file
- File is processed in background using Laravel Queue
- Users are inserted into database one by one
- Each new user triggers a real-time event
- Frontend updates instantly without page reload

---

## ⚙️ Tech Stack

- Laravel (Backend Framework)
- MySQL (Database)
- Laravel Queue (Background Processing)
- Laravel Reverb (WebSocket Server)
- Laravel Echo (Frontend Real-time Listener)
- Vite (Frontend Asset Bundler)

---

## 🔥 Key Features

- 📂 CSV file upload system
- ⚡ Background processing using Queue
- 👥 Bulk user creation from CSV
- 📡 Real-time updates using WebSockets
- 🔄 No page refresh required
- 📊 Live user table update
- 🧩 Event-driven architecture

---

## 🏗️ System Architecture
CSV Upload
↓
Controller
↓
Queue Job (Process CSV)
↓
Database (User Insert)
↓
Event Fired (UserCreated)
↓
Laravel Reverb (Broadcast)
↓
Laravel Echo (Frontend Listener)
↓
UI Updates Instantly



---

## 📡 Real-time Flow

- Each user created from CSV triggers an event
- Event is broadcast through Reverb channel
- Frontend listens via Laravel Echo
- Table updates instantly in browser

---

## 🚀 Installation Steps

```bash
git clone <repo-url>
cd project

composer install
npm install

cp .env.example .env
php artisan key:generate

php artisan migrate


Run Project
php artisan serve
php artisan queue:work
php artisan reverb:start
npm run dev


Folder Highlights
app/Events → Broadcasting events
app/Listeners → CSV processing logic
resources/js → Echo real-time setup
resources/views → UI with live updates


Why this project is useful

This project demonstrates:

Real-time system design
Event-driven architecture
Queue-based background processing
WebSocket integration in Laravel
Production-level Laravel concepts


Demo

(Upload screenshots or GIF here)

CSV Upload screen
Live table update without refresh


Learning Outcome

After exploring this project, you will understand:

How Laravel Queues work
How WebSockets enable real-time updates
How broadcasting events work
How frontend listens to backend events