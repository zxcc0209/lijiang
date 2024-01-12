<nav>
    <?php if ($site == 'index.php') { ?>
        <div class="mobile-header">
            <a href="#"><img src="images/logo.png" alt="立匠工程行" title="立匠工程行" class="logo"></a>
            <div class="menu-icon" onclick="toggleMenu()"><img src="images/menu.svg" style="width: 24px!important;" alt=""></div>
        </div>
    <?php } ?>

    <?php if ($site == 'about.php') { ?>
        <div class="mobile-header">
            <a href="#"><img src="images/logo.png" alt="立匠工程行" title="立匠工程行" class="logo"></a>
            <div class="menu-icon" onclick="toggleMenu()"><img src="images/menu.svg" style="width: 24px!important;" alt=""></div>
        </div>
    <?php } ?>

    <?php if ($site == 'page1.php' || $site == '1.php') { ?>
        <div class="mobile-header">
            <a href="#"><img src="../../images/logo.png" alt="立匠工程行" title="立匠工程行" class="logo"></a>
            <div class="menu-icon" onclick="toggleMenu()"><img src="../../images/menu.svg" style="width: 24px!important;" alt=""></div>
        </div>
    <?php } ?>


    <?php if ($site == 'all.php') { ?>
        <div class="mobile-header">
            <a href="#"><img src="../images/logo.png" alt="立匠工程行" title="立匠工程行" class="logo"></a>
            <div class="menu-icon" onclick="toggleMenu()"><img src="../images/menu.svg" style="width: 24px!important;" alt=""></div>
        </div>
    <?php } ?>



    <?php if ($site == 'contact.php') { ?>
        <div class="mobile-header">
            <a href="#"><img src="images/logo.png" alt="立匠工程行" title="立匠工程行" class="logo"></a>
            <div class="menu-icon" onclick="toggleMenu()"><img src="images/menu.svg" style="width: 24px!important;" alt=""></div>
        </div>
    <?php } ?>

    <ul class="nav-link">
        <?php if ($site == 'index.php') { ?>
            <li><a href="index.php" class="active">首頁</a></li>
            <li><a href="about.php">公司簡介</a></li>
            <li><a href="events/Steel_structure_design/page1.php">實績案例</a></li>
            <li><a href="factory/all.php">廠設圖文</a></li>
            <li><a href="contact.php">聯絡我們</a></li>
        <?php } ?>

        <?php if ($site == 'about.php') { ?>
            <li><a href="index.php">首頁</a></li>
            <li><a href="about.php" class="active">公司簡介</a></li>
            <li><a href="events/Steel_structure_design/page1.php">實績案例</a></li>
            <li><a href="factory/all.php">廠設圖文</a></li>
            <li><a href="contact.php">聯絡我們</a></li>
        <?php } ?>

        <?php if ($site == 'page1.php' || $site == '1.php') { ?>
            <li><a href="../../index.php">首頁</a></li>
            <li><a href="../../about.php">公司簡介</a></li>
            <li><a href="page1.php" class="active">實績案例</a></li>
            <li><a href="../../factory/all.php">廠設圖文</a></li>
            <li><a href="../../contact.php">聯絡我們</a></li>
        <?php } ?>


        <?php if ($site == 'all.php') { ?>
            <li><a href="../index.php">首頁</a></li>
            <li><a href="../about.php">公司簡介</a></li>
            <li><a href="../events/Steel_structure_design/page1.php">實績案例</a></li>
            <li><a href="all.php" class="active">廠設圖文</a></li>
            <li><a href="../contact.php">聯絡我們</a></li>
        <?php } ?>



        <?php if ($site == 'contact.php') { ?>
            <li><a href="index.php">首頁</a></li>
            <li><a href="about.php">公司簡介</a></li>
            <li><a href="events/Steel_structure_design/page1.php">實績案例</a></li>
            <li><a href="factory/all.php">廠設圖文</a></li>
            <li><a href="contact.php" class="active">聯絡我們</a></li>
        <?php } ?>
    </ul>
</nav>