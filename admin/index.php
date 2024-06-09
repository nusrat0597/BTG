
<?php include "admin_hader.php" ?>
<?php include "../database/data-save.php" ?>
<body class="sb-nav-fixed">
   <?php include "nav.php" ?>
    <div id="layoutSidenav">
        <?php include "layout_sidebar.php" ?>
        <div id="layoutSidenav_content">
            <main>
                <?php 
                $page = isset($_GET['page']) ? $_GET['page'] : 'index';
                $allowedPages = ['index', 'add', 'each_add', 'blog'];
                if($page=='index'){
                    include "main_content/main.php";
                }
                elseif (in_array($page, $allowedPages)) {
                    include "spotlight_destination/{$page}.php";

                }
                ?>
            </main>

        </div>

    </div>
    <?php include "footer.php" ?>
</body>

</html>