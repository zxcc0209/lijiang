<?php $site = basename(__FILE__); ?>
<?php include("common/meta.php"); ?>
<?php include("common/loading.php"); ?>
<?php include("common/navbar.php"); ?>
<header style="height: 400px;">
    <div class="banner">
        <div class="title">
            聯絡我們
        </div>
    </div>
</header>
<aside>
    <div class="address-container animate__animated animate__backInLeft ">
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14635.857381707992!2d120.4149286!3d23.4977937!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x346e97e0089b60e7%3A0x3603753a7be28346!2z5qau5a646ZC15bel5bug!5e0!3m2!1szh-TW!2stw!4v1703823383225!5m2!1szh-TW!2stw" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</aside>
<main>
    <section class="contact">
        <div class="card" data-aos="fade-up" data-aos-delay="100">
            <a href="">
                <img src="images/contact/phone.svg" alt="" loading="lazy">
                <div class="text">電話:</div>
                <div class="text">0919516901</div>
            </a>
        </div>

        <div class="card" data-aos="fade-up" data-aos-delay="200">
            <a href="">
                <img src="images/contact/adr.svg" alt="" loading="lazy">
                <div class="text">地址:</div>
                <div class="text">嘉義縣水上鄉內溪村溪仔底7-17號的1</div>
            </a>
        </div>
        <div class="card" data-aos="fade-up" data-aos-delay="300">
            <a href="">
                <img src="images/QR.png" alt="" loading="lazy">
                <div class="text">LINE:</div>
                <div class="text">600892563</div>
            </a>
        </div>
    </section>
</main>

<div class="fix_button" id="back">
    <a href="#"><img src="images/back.svg" alt=""></a>
</div>

<script>
    var backButton = document.getElementById('back');

    window.addEventListener('scroll', function() {
        if (window.scrollY > 100) {
            backButton.style.display = 'block';
        } else {
            backButton.style.display = 'none';
        }
    });
</script>



<script src="../../../js/main.js"></script>
<?php include("common/footer.php"); ?>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init({
        offset: 100,
        duration: 1000,
        easing: 'ease-in-out',
        delay: 200,
    });
</script>

</body>

</html>