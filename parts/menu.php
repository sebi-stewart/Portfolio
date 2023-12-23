<?php
$curr_page = $_SERVER['PHP_SELF'];

$allow = array('/index.php', '/sites/projects.php', '/sites/about.php');
if (!in_array($curr_page, $allow)){
  $pg = 'default';
}

?>
<nav class="nav-bar">
    <ul>
        <li><a class="<?php if($curr_page == '/index.php'){echo 'nav-current';} ?>" href="http://localhost:8888/index.php">home.html</a></li>
        <li><a class="<?php if($curr_page == '/sites/projects.php'){echo 'nav-current';} ?>" href="http://localhost:8888/sites/projects.php">projects.js</a></li>
        <li><a class="<?php if($curr_page == '/sites/about.php'){echo 'nav-current';} ?>" href="http://localhost:8888/sites/about.php">about_me.css</a></li>
        <li><a class="<?php if($curr_page == 'default'){echo 'nav-current';} ?>" href="http://localhost:8888/sites/about.php"><?php echo $curr_page;?></a></li>
    </ul>
</nav>

<br>
