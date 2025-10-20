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
            <td><a href="index.php?page=index">Головна</a></td>
            <td><a href="index.php?page=form">Форма</a></td>
            <td><a href="index.php?page=settings">Налаштування</a></td>
            <td><a href="index.php?page=view">Системні змінні</a></td>
            <td><a href="index.php?page=users">Користувачі</a></td>
            <td><a href="index.php?page=products">Товари</a></td>
            <td><a href="index.php?page=brands">Бренди</a></td>
            <td><a href="index.php?page=news">Новини</a></td>
            <td><a href="index.php?page=pages">Сторінки</a></td>
            <?php if (Utils::getCookie('auth_token')): ?>
                <form style="display:inline;" action="index.php?page=auth" method="post">
                    <input type="hidden" name="action" value="logout">
                    <button class="link-button" type="submit">Вийти</button>
                </form>
            <?php endif; ?>
        </table>
    </header>
<main>