<!DOCTYPE html>
<html>
    <body>
        <form role="search" action="" method="GET">
            <input type="text" name="search" placeholder="Search what you want"/>
            <button type="submit">Search</button>
        </form>
        <?php
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = $_GET['search'];
                echo "<h3>The search result is:" . $search . "</h3>";
            }
        ?>
    </body>
</html>
