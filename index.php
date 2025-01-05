<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss/dist/tailwind.min.css" rel="stylesheet">
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center">
<div class="max-w-md w-full bg-white rounded shadow p-6">
    <h1 class="text-2xl font-semibold mb-4">Halo, <?= htmlspecialchars($_SESSION['username']) ?></h1>
    <p>Anda berhasil login.</p>
    <a href="logout.php" class="text-blue-600 hover:underline">Logout</a>
</div>
</body>
</html>
