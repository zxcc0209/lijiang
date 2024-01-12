<?php $site = basename(__FILE__); ?>
<?php include("../../common/meta.php"); ?>
<?php include("../../common/loading.php"); ?>
<?php include("../../common/navbar.php"); ?>
    <header style="height: 400px;">
        <div class="banner">
            <div class="title">
                實績案例
            </div>
        </div>

    </header>
    <?php include("../../common/aside_left.php"); ?>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <main style="margin-top: 40px;float: right;width: 60%;display:block;" data-aos="fade-left" data-aos-delay="100">
        <section class="events" style="display: inline-block!important;">
            <div thumbSlider="" class="swiper myswiper1">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><a data-fancybox="gallery" href="images/01.jpg"><img
                                src="images/01.jpg" alt=""></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery" href="images/02.jpg"><img
                                src="images/02.jpg" alt=""></a></div>
                    <div class="swiper-slide"><a data-fancybox="gallery" href="images/03.jpg"><img
                                src="images/03.jpg" alt=""></a></div>
                    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
                    <script>Fancybox.bind('[data-fancybox="gallery"]', {
                        });    </script>
                </div>


            </div>
            <div thumbSlider="" class="swiper myswiper2">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">
                    <!-- Slides -->
                    <div class="swiper-slide"><img src="images/01.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/02.jpg" alt=""></div>
                    <div class="swiper-slide"><img src="images/03.jpg" alt=""></div>

                </div>

            </div>

        </section>
        <section class="des_container">
            <div class="des">
                <div class="des_title">詳細說明</div>
                <div class="text">
                    <h1>00000000000000</h1>
                </div>
            </div>
        </section>
    </main>
    <div class="fix_button" id="back">
        <a href="#"><img src="../../../images/back.svg" alt=""></a>
    </div>
    <script>
        var backButton = document.getElementById('back');

        window.addEventListener('scroll', function () {
            if (window.scrollY > 100) {
                backButton.style.display = 'block';
            } else {
                backButton.style.display = 'none';
            }
        });
    </script>


    <script>let swiper1 = new Swiper('.myswiper2', {
            // Optional parameters
            spaceBetween: 10,
            slidesPerView: 4,
            initialSlide: 0,
            freeMode: true,
            watchSlidesProgress: true,
        });

        let swiper2 = new Swiper('.myswiper1', {
            spaceBetween: 10,
            initialSlide: 0,
            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },
            // And if we need scrollbar
            thumbs: {
                swiper: swiper1,
            },
        });
    </script>

    <script src="../../js/main.js"></script>
    <div style="clear: both;"></div>


    <?php include("../../common/footer.php"); ?>
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