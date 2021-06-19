<!DOCTYPE html>
<html lang="en">
<head>
    <title>AGS</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <main>
    <header>
        <img src="assets/image/amin1.jpg" alt="IMG" id="gam">
        <h1 class="jumbotron">  </h1>
    </header>
    <nav>
        <ul>
            <li>
                <a href="index_admin.php"class="active">Home</a> 
            </li>
            
            <li>
                <a href="index_admin.php?page=album">Album</a> 
            </li>
            <li>
                <a href="index_admin.php?page=kategori">Kategori</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=photos">Photos</a>
            </li>
            
            <li>
                <a href="index_admin.php?page=logout">Log out</a>
            </li>
            <li>
                <a href="index_admin.php?page=edit.php"></a>
            </li>     
        </ul>
    </nav>
    <section>
    <?php  
    if (isset($_GET['page'])) {
            include $_GET['page'] . ".php";
        } else {
            include "main.php ";
        }
        ?>
    </section>
    <footer>
        Copyright &copy; Agung setiawan hasibuan 2021
    </footer>
    </main>
</body>
</html>