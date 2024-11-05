<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Manager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Navbar Link Hover Animation */
.navbar-brand {
    font-size: 24px;
    font-weight: bold;
    transition: color 0.3s ease;
}

.navbar-brand:hover {
    color: #007bff;
    text-shadow: 2px 2px 4px rgba(0, 123, 255, 0.5);
}

/* Navbar Background Animation on Scroll */
.navbar {
    transition: background-color 0.4s ease, box-shadow 0.4s ease;
}

.navbar.scrolled {
    background-color: #007bff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}

.navbar.scrolled .navbar-brand {
    color: #fff;
    text-shadow: none;
}

/* Keyframe Animation for Navbar Appearance */
@keyframes fadeInDown {
    from {
        opacity: 0;
        transform: translateY(-20px);
    }
    to {
        opacity: 1;
        transform: translateY(0);
    }
}

.navbar {
    animation: fadeInDown 0.6s ease-in-out;
}

    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{route('pages/index')}}">Task Manager</a>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

        <script>
    window.onscroll = function() {
        var navbar = document.querySelector('.navbar');
        if (window.scrollY > 50) {
            navbar.classList.add('scrolled');
        } else {
            navbar.classList.remove('scrolled');
        }
    };
</script>

</body>
</html>
