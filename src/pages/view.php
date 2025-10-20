<h2>Server variables</h2>
<div>
    <?php 
        foreach ($_SERVER as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>

<h1>GET variables</h1>
<div>
    <?php 
        foreach ($_GET as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>

<h1>POST variables</h1>
<div>
    <?php 
        foreach ($_POST as $key => $value) 
        { 
            echo "$key => $value<br>"; 
        } 
    ?>
</div>