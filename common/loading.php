<div class="loading-overlay" id="loadingOverlay">
    <div class="load">
        <?php if ($site == 'index.php') { ?>
            <img src="images/logo.png" alt="">
        <?php } ?>
        <?php if ($site == 'about.php') { ?>
            <img src="images/logo.png" alt="">
        <?php } ?>
        <?php if ($site == 'page1.php' || $site == '1.php') { ?>
            <img src="../../images/logo.png" alt="">
        <?php } ?>
        <?php if ($site == 'all.php') { ?>
            <img src="../images/logo.png" alt="">
        <?php } ?>
        <?php if ($site == 'contact.php') { ?>
            <img src="images/logo.png" alt="">
        <?php } ?>
        
        <div class="loading-spinner"></div>
    </div>

</div>
<!-- 在頁面底部添加腳本 -->
<script>
    // 當整個頁面完全加載後顯示動畫
    document.addEventListener("DOMContentLoaded", function() {
        // 顯示動畫
        document.getElementById("loadingOverlay").style.display = "flex";


        setTimeout(function() {
            loadingOverlay.classList.add("hidden");
        }, 800);
        setTimeout(function() {
            document.getElementById("loadingOverlay").style.display = "none";
        }, 1000);
    });
</script>