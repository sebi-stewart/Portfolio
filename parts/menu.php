<?php
$curr_page = $_SERVER['PHP_SELF'];

$allow = array('/index.php', '/sites/projects.php', '/sites/about.php');
if (!in_array($curr_page, $allow)){
  $pg = 'default';
}

?>
<nav class="nav-bar">
    <ul>
        <li><a class="<?php if($curr_page == '/index.php'){echo 'nav-current';} ?>" href="http://localhost:8888/index">home.html</a></li>
        <li><a class="<?php if($curr_page == '/projects.php'){echo 'nav-current';} ?>" href="http://localhost:8888/projects">projects.js</a></li>
        <li><a class="<?php if($curr_page == '/about.php'){echo 'nav-current';} ?>" href="http://localhost:8888/about">about_me.css</a></li>
    </ul>
</nav>

<br>
