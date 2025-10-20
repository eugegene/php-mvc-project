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
        <table class="top-nav">
            <td><a href="index.php?page=index">Home</a></td>
            <td><a href="index.php?page=form">Form</a></td>
            <td><a href="index.php?page=settings">Settings</a></td>
            <td><a href="index.php?page=view">System variables</a></td>
            <td><a href="index.php?page=users">Users</a></td>
            <td><a href="index.php?page=brands">Brands</a></td>
            <td><a href="index.php?page=products">Products</a></td>
            <td><a href="index.php?page=news">News</a></td>
            <td><a href="index.php?page=pages">Pages</a></td>
            <?php if (Utils::getCookie('auth_token')): ?>
                <form style="display:inline;" action="index.php?page=auth" method="post">
                    <input type="hidden" name="action" value="logout">
                    <button class="link-button" type="submit">Logout</button>
                </form>
            <?php endif; ?>
        </table>
    </header>
<main>

<?php
$name = Utils::getCookie('name', 'Guest');
$gender = Utils::getCookie('gender');

if ($name !== 'Guest' && $name !== 'Guest') {
    $greeting = "Hello, " . htmlspecialchars($name) . "!";
    echo "<h2>$greeting</h2>";
}
?>