<h2>Серверні змінні</h2>
<div>
    <?php 
        foreach ($_SERVER as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>

<h1>GET змінні</h1>
<div>
    <?php 
        foreach ($_GET as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>

<h1>POST змінні</h1>
<div>
    <?php 
        foreach ($_POST as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>