<?php $site = basename(__FILE__); ?>
<?php include("common/meta.php"); ?>
<?php include("common/loading.php"); ?>
<?php include("common/navbar.php"); ?>
    <header style="height: 400px;">
        <div class="banner">
            <div class="title">
                關於我們
            </div>
        </div>

    </header>

    <main style="margin-top: 20px;">
        <section class="container_index">
            <div class="content">
                <img src="" alt="">
                <h2>關於立匠工程行</h2>
                <hr style="width: 100%;margin-top: 20px;">
                <h1 style="font-size: 1rem;line-height: 2rem;font-weight: 500;padding: 40px;" data-aos="fade-up">
                    <span
                        style="font-size: 36px;font-weight: 700;color: #702800;">匠人精神：</span>立匠工程行的金屬加工藝術之旅立匠工程行，悠遊於金屬加工的綻放風華中，主宰建築裝潢營造領域的精髓。我們的工作內容廣泛而細緻，包含了桌椅、家具、裝潢鐵件、大門、樓梯、欄杆、扶手、隔柵、捲門、鋼構廠房、浪板、以及施工大型藝術品等多個領域。<br><br>透過精湛的設計和卓越的工藝，我們以匠心獨具的姿態，締造安全、美觀、符合建築需求的金屬製品。設計之美
                    風格與安全並重我們的工作開始於建築物的需求。透過精心的設計，我們不僅滿足功能性要求，更注重安全性和美觀性的完美平衡。從桌椅到大門，每一項產品都經過精密計算和藝術設計，旨在為建築物注入獨特風格。工藝之巧
                    金屬裁切與焊接的精髓金屬製品的製作過程中，裁切和焊接是至關重要的環節。我們運用剪床、雷射、乙決切割、鉅片切割、彎管加工等先進技術進行精準裁切，為產品形成基礎。而手工電焊、半自動焊接、氬焊等焊接技術則確保產品結構的牢固和完整。磨礪之美
                    產品表面的細緻呈現接合完成後，進入研磨階段。<br><br>透過細心的研磨，我們追求每一個產品表面的平滑和細緻。這是對製品品質的極致追求，也是我們對工藝的高度重視。塗裝之藝
                    美學與環境的完美結合塗裝是賦予金屬製品生命和風采的藝術過程。我們提供多種塗裝方式，包括噴漆、粉體烤漆、電鍍和鍍鋅，以滿足產品在各種環境下的外觀需求。這是為了使每一件產品更好地融入周遭環境，同時綻放獨特美感。完美收尾
                    安裝的講究最終階段是產品的安裝。每一顆螺絲、每一個鑽孔都是我們匠心的見證。我們確保產品完美地融入建築結構，為客戶提供堅固而美觀的金屬裝飾。這是立匠工程行的匠心之旅，每一步都是對金屬工藝的極致追求。我們將不斷進取，精進技術，為建築裝潢營造領域注入更多創意和美感。與您共同見證金屬工藝的奇蹟，打造建築的新風華。
                </h1>
            </div>
        </section>
    </main>
    <div class="fix_button" id="back">
        <a href="#"><img src="images/back.svg" alt=""></a>
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
<?php include("common/footer.php"); ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/kute.js/2.2.4/kute.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui@5.0/dist/fancybox/fancybox.umd.js"></script>
    <script src="js/main.js"></script>
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