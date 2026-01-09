<nav>
<a href="?page=home">Home</a> |
<a href="?page=about">About</a> |
<a href="?page=contact">Contact</a> |

<?php if(isset($_SESSION['user_id'])): ?>
    <a href="?page=dashboard">Dashboard</a> |
    <a href="?page=logout">Logout</a>
<?php else: ?>
    <a href="?page=login">Login</a>
<?php endif; ?>
</nav>
<hr>
