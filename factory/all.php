<?php $site = basename(__FILE__); ?>
<?php include("../common/meta.php"); ?>
<?php include("../common/loading.php"); ?>
<?php include("../common/navbar.php"); ?>
    <header style="height: 400px;">
        <div class="banner">
            <div class="title">
                廠設圖文
            </div>
        </div>

    </header>
    <aside>
        <div class="tab-container">
            <div class="tab-item active" onclick="filterSelection('all')">全部分類</div>
            <div class="tab-item" onclick="filterSelection('category1')">廠房設備</div>
            <div class="tab-item" onclick="filterSelection('category2')">廠房外觀</div>
        </div>
    </aside>
    <main>
        <section>
            <div class="gallery" data-aos="zoom-in" data-aos-delay="100">
                <div class="filter-item category1"><a data-fancybox="gallery gallery1" href="images/image1.jpg"><img
                            src="images/image1.jpg" alt="Category 1">
                        <div class="name">廠房外觀</div>
                    </a></div>
                <div class="filter-item category1"><a data-fancybox="gallery gallery1" href="images/image2.jpg"><img
                            src="images/image2.jpg" alt="Category 1">
                        <div class="name">廠房外觀</div>
                    </a></div>
                <div class="filter-item category1"><a data-fancybox="gallery gallery1" href="images/image3.jpg"><img
                            src="images/image3.jpg" alt="Category 1">
                        <div class="name">廠房外觀</div>
                    </a></div>
                <div class="filter-item category2"><a data-fancybox="gallery gallery2" href="images/image4.jpg"><img
                            src="images/image4.jpg" alt="Category 1">
                        <div class="name">廠房內部</div>
                    </a></div>
                <div class="filter-item category2"><a data-fancybox="gallery gallery2" href="images/image5.jpg"><img
                            src="images/image5.jpg" alt="Category 1">
                        <div class="name">廠房內部</div>
                    </a></div>
                <div class="filter-item category2"><a data-fancybox="gallery gallery2" href="images/image6.jpg"><img
                            src="images/image6.jpg" alt="Category 1">
                        <div class="name">廠房內部</div>
                    </a></div>
                <!-- Add more items as needed -->
            </div>
            <script>
                function filterSelection(category) {
                    var items = document.getElementsByClassName("filter-item");

                    // Show all items if category is "all"
                    if (category === "all") {
                        for (var i = 0; i < items.length; i++) {
                            items[i].style.display = "block";
                        }
                    } else {
                        // Hide all items
                        for (var i = 0; i < items.length; i++) {
                            items[i].style.display = "none";
                        }

                        // Show items with the selected category
                        var selectedItems = document.getElementsByClassName(category);
                        for (var i = 0; i < selectedItems.length; i++) {
                            selectedItems[i].style.display = "block";
                        }
                    }

                    // Update active tab button
                    var buttons = document.getElementsByClassName("tab-item");
                    for (var i = 0; i < buttons.length; i++) {
                        buttons[i].classList.remove("active");
                    }

                    event.currentTarget.classList.add("active");
                }

            </script>
            <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>

            <script>Fancybox.bind('[data-fancybox="gallery"]', {
                });
                Fancybox.bind('[data-fancybox="gallery gallery1"]', {
                });
                Fancybox.bind('[data-fancybox="gallery gallery2"]', {
                });  </script>
        </section>
    </main>

    <div class="fix_button" id="back">
        <a href="#"><img src="../images/back.svg" alt=""></a>
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





    <script src="../../../js/main.js"></script>
    <?php include("../common/footer.php"); ?>
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