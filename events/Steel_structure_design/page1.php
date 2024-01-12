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
    <main style="margin-top: 40px;float: right;width: 60%;display:block;">
        <section class="events"  data-aos="fade-left" data-aos-delay="100">
            <div class="card">
                <a href="1.php">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="card">
                <a href="items/1.html">
                    <img src="../../images/carousel/01.jpg" alt="鋼構設計">
                    <div class="name">鋼構設計</div>
                </a>
            </div>
            <div class="pages">
                <ul>
                    <a href="" class="active"><li>1</li></a>
                    <!--<a href=""><li>2</li></a>
                    <a href=""><li>3</li></a>-->
                </ul>
    
            </div>
        </section>
        
    </main>
    <div style="clear: both;"></div>
    <div class="fix_button" id="back">
        <a href="#"><img src="../../images/back.svg" alt=""></a>
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
    <?php include("../../common/footer.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/kute.js/2.2.4/kute.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="../../js/main.js"></script>
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