<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Users Table</title>

  <style>
    body{
      font-family: Arial;
      background: #f4f7fc;
      padding: 40px;
    }

    .container{
      max-width: 900px;
      margin: auto;
      background: #fff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    }

    h2{
      text-align: center;
      margin-bottom: 20px;
    }

    table{
      width: 100%;
      border-collapse: collapse;
    }

    th, td{
      padding: 12px;
      border-bottom: 1px solid #ddd;
      text-align: left;
    }

    thead{
      background: #4a90e2;
      color: white;
    }
  </style>
</head>

<body>

<div class="container">
  <h2>Users List (Live)</h2>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
      </tr>
    </thead>

    <tbody id="usersTable">
      @foreach($user as $u)
      <tr>
        <td>{{ $u->id }}</td>
        <td>{{ $u->name }}</td>
        <td>{{ $u->email }}</td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<!-- 🔥 REVERB CDN -->
@vite(['resources/js/app.js'])

<script>
document.addEventListener("DOMContentLoaded", function () {

    if (!window.Echo) {
        console.error("❌ Echo not loaded");
        return;
    }

    window.Echo.channel('users-channel')
    .listen('.user.created', (e) => {

        console.log("🔥 NEW USER:", e);

        document.getElementById('usersTable').innerHTML += `
            <tr>
                <td>${e.id}</td>
                <td>${e.name}</td>
                <td>${e.email}</td>
            </tr>
        `;
    });

});
</script>
</body>
</html>