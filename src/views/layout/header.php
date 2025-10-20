<!DOCTYPE html>
<html>
<head>
    <title><?php echo $page; ?></title>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="utf-8">
    <?php
    echo "<style>body { background-color: $bgcolor; }</style>";
    ?>
</head>
<body>
    <header>
        <div class="header-container">
            <div class="logo">
                <a href="index.php?page=index">PHP MVC Project</a>
            </div>
            <nav class="top-nav">
                <ul>
                    <li><a href="index.php?page=index">Home</a></li>
                    <li><a href="index.php?page=form">Form</a></li>
                    <li><a href="index.php?page=settings">Settings</a></li>
                    <li><a href="index.php?page=view">System</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropbtn">Manage ▼</a>
                        <div class="dropdown-content">
                            <a href="index.php?page=users">Users</a>
                            <a href="index.php?page=brands">Brands</a>
                            <a href="index.php?page=products">Products</a>
                            <a href="index.php?page=news">News</a>
                            <a href="index.php?page=pages">Pages</a>
                        </div>
                    </li>
                    <?php if (Utils::getCookie('auth_token')): ?>
                        <li>
                            <form action="index.php?page=auth" method="post" class="logout-form">
                                <input type="hidden" name="action" value="logout">
                                <button type="submit" class="link-button">Logout</button>
                            </form>
                        </li>
                    <?php endif; ?>
                </ul>
            </nav>
        </div>
    </header>
    <main>
    <?php
        $name = Utils::getCookie('name', 'Guest');

        if ($name !== 'Guest') {
            $greeting = "Hello, " . htmlspecialchars($name) . "!";
            echo "<h2 class='greeting'>$greeting</h2>";
        }
    ?>