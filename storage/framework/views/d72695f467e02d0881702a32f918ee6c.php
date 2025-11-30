<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'Admin Panel'); ?></title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f5f5f5;
        }

        .admin-container {
            display: flex;
            min-height: 100vh;
        }

        .sidebar {
            width: 250px;
            background: #2C1810;
            color: white;
            padding: 2rem 0;
            position: fixed;
            height: 100vh;
            overflow-y: auto;
        }

        .sidebar h2 {
            padding: 0 1.5rem;
            margin-bottom: 2rem;
            color: #E8B4B8;
        }

        .sidebar ul {
            list-style: none;
        }

        .sidebar ul li a {
            display: block;
            padding: 1rem 1.5rem;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover,
        .sidebar ul li a.active {
            background: #8B4049;
        }

        .main-content {
            flex: 1;
            margin-left: 250px;
            padding: 2rem;
        }

        .btn {
            display: inline-block;
            padding: 0.7rem 1.5rem;
            border-radius: 8px;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 1rem;
        }

        .btn-primary {
            background: #E8B4B8;
            color: #2C1810;
        }

        .btn-primary:hover {
            background: #C89BA0;
        }

        .btn-success {
            background: #4CAF50;
            color: white;
        }

        .btn-danger {
            background: #f44336;
            color: white;
        }

        .btn-warning {
            background: #ff9800;
            color: white;
        }

        .btn-secondary {
            background: #6c757d;
            color: white;
        }

        .btn-info {
            background: #17a2b8;
            color: white;
        }

        .btn-sm {
            padding: 0.4rem 0.8rem;
            font-size: 0.875rem;
        }

        .btn-group {
            display: inline-flex;
            gap: 0.25rem;
        }

        .alert {
            padding: 1rem;
            border-radius: 8px;
            margin-bottom: 1rem;
        }

        .alert-success {
            background: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
        }

        .alert-dismissible {
            position: relative;
            padding-right: 3rem;
        }

        .btn-close {
            position: absolute;
            right: 1rem;
            top: 50%;
            transform: translateY(-50%);
            background: transparent;
            border: none;
            font-size: 1.5rem;
            cursor: pointer;
            opacity: 0.5;
        }

        table {
            width: 100%;
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-collapse: collapse;
        }

        table thead {
            background: #2C1810;
            color: white;
        }

        table th,
        table td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #e0e0e0;
        }

        table tbody tr:hover {
            background: #f9f9f9;
        }

        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            color: #2C1810;
            font-weight: 500;
        }

        .form-control,
        .form-select {
            width: 100%;
            padding: 0.8rem;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            font-family: 'Poppins', sans-serif;
            font-size: 1rem;
            transition: border-color 0.3s;
        }

        .form-control:focus,
        .form-select:focus {
            outline: none;
            border-color: #E8B4B8;
        }

        .form-control.is-invalid {
            border-color: #f44336;
        }

        .invalid-feedback {
            color: #f44336;
            font-size: 0.875rem;
            margin-top: 0.25rem;
            display: block;
        }

        textarea.form-control {
            resize: vertical;
            min-height: 100px;
        }

        small.text-muted {
            display: block;
            margin-top: 0.3rem;
            font-size: 0.85rem;
            color: #666;
        }

        .card {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 2rem;
        }

        .card-body {
            padding: 0;
        }

        .card-title {
            margin-bottom: 1rem;
            font-size: 1.25rem;
            font-weight: 600;
        }

        .badge {
            display: inline-block;
            padding: 0.35rem 0.65rem;
            font-size: 0.875rem;
            font-weight: 500;
            line-height: 1;
            border-radius: 6px;
        }

        .badge.bg-info {
            background: #17a2b8;
            color: white;
        }

        .badge.bg-secondary {
            background: #6c757d;
            color: white;
        }

        .badge.bg-primary {
            background: #007bff;
            color: white;
        }

        .d-flex {
            display: flex;
        }

        .justify-content-between {
            justify-content: space-between;
        }

        .align-items-center {
            align-items: center;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .my-4 {
            margin-top: 1.5rem;
            margin-bottom: 1.5rem;
        }

        .mb-0 {
            margin-bottom: 0;
        }

        .mb-1 {
            margin-bottom: 0.25rem;
        }

        .mb-3 {
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .text-muted {
            color: #6c757d;
        }

        .text-end {
            text-align: right;
        }

        .py-4 {
            padding-top: 1.5rem;
            padding-bottom: 1.5rem;
        }

        .shadow-sm {
            box-shadow: 0 0.125rem 0.25rem rgba(0,0,0,0.075);
        }

        .table-responsive {
            overflow-x: auto;
        }

        .breadcrumb {
            display: flex;
            list-style: none;
            padding: 0;
            margin: 0.5rem 0 0 0;
            font-size: 0.9rem;
        }

        .breadcrumb-item {
            color: #6c757d;
        }

        .breadcrumb-item + .breadcrumb-item::before {
            content: "/";
            padding: 0 0.5rem;
            color: #6c757d;
        }

        .breadcrumb-item a {
            color: #E8B4B8;
            text-decoration: none;
        }

        .breadcrumb-item.active {
            color: #2C1810;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            margin: -0.5rem;
        }

        .col-md-8 {
            flex: 0 0 66.666667%;
            max-width: 66.666667%;
            padding: 0.5rem;
        }

        .col-md-4 {
            flex: 0 0 33.333333%;
            max-width: 33.333333%;
            padding: 0.5rem;
        }

        .font-monospace {
            font-family: monospace;
        }

        .fs-4 {
            font-size: 1.5rem;
        }
    </style>
</head>
<body>
    <div class="admin-container">
        <aside class="sidebar">
            <h2>✦ Admin Panel</h2>
            <ul>
                <li><a href="<?php echo e(route('admin.dashboard')); ?>" class="<?php echo e(request()->routeIs('admin.dashboard') ? 'active' : ''); ?>">Dashboard</a></li>
                <li><a href="<?php echo e(route('admin.skills.index')); ?>" class="<?php echo e(request()->routeIs('admin.skills.*') ? 'active' : ''); ?>">Skills</a></li>
                <li><a href="<?php echo e(route('admin.projects.index')); ?>" class="<?php echo e(request()->routeIs('admin.projects.*') ? 'active' : ''); ?>">Projects</a></li>
                <li><a href="<?php echo e(route('admin.certificates.index')); ?>" class="<?php echo e(request()->routeIs('admin.certificates.*') ? 'active' : ''); ?>">Certificates</a></li>
                <li><a href="<?php echo e(route('admin.hobbies.index')); ?>" class="<?php echo e(request()->routeIs('admin.hobbies.*') || request()->routeIs('admin.hobby-items.*') ? 'active' : ''); ?>">Hobbies</a></li>
                <li><a href="/" target="_blank">Lihat Website</a></li>
            </ul>
        </aside>

        <main class="main-content">
            <?php echo $__env->yieldContent('content'); ?>
        </main>
    </div>
</body>
</html><?php /**PATH C:\laragon\www\portofolio\resources\views/layouts/admin.blade.php ENDPATH**/ ?>