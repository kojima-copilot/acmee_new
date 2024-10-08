<footer class="footer">

    <div class="footer__wrapper">
        <div class="footer__logo">
            <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/footerLogo.png'); ?>" alt="ACMEE">
        </div>

        <div class="footer__homeLink"><a href="/">ホーム</a></div>

        <nav class="footerMenu">
            <?php wp_nav_menu(array('theme_location' => 'acmee_footer_menu', 'depth' => 2)); ?>
        </nav>
    </div>

    <div class="footerAddress">
        <div class="footerAddress__container">
            <div class="footerAddress__title">東京本社:</div>
            <address class="footerAddress__desc">〒160-0023 東京都新宿区西新宿7-7-28 第二山本ビル202号　TEL:03-5937-1475 FAX:03-5937-1476</address>
            <div class="footerAddress__desc">
                <!-- 営業時間：9:00〜18:00　（土・日・祝日・12月31日〜1月3日を除く） -->
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d354.0205625793748!2d139.69744945347293!3d35.69717642267273!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188d29a23ab093%3A0x347ed34be34ea964!2z44CSMTYwLTAwMjMg5p2x5Lqs6YO95paw5a6_5Yy66KW_5paw5a6_77yX5LiB55uu77yX4oiS77yS77yYIOWxseacrOODk-ODqyDnrKws5LqM!5e0!3m2!1sja!2sjp!4v1728282150740!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>

        <div class="footerAddress__container">
            <div class="footerAddress__title second">大阪支社:</div>
            <address class="footerAddress__desc">〒542-0082 大阪府大阪市中央区島之内1丁目21-19　オリエンタル堺筋ビル901号堺筋ビル901号</address>
            <div class="footerAddress__desc">
                営業時間：9:00〜18:00　（土・日・祝日・12月31日〜1月3日を除く）
            </div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3281.2809542317414!2d135.50386057695718!3d34.67285797292957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6000e74fd959873f%3A0x4fca07da413453a4!2z44Kq44Oq44Ko44Oz44K_44Or5aC6562L44OT44Or!5e0!3m2!1sja!2sjp!4v1728282787519!5m2!1sja!2sjp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>

    <div class="copyright">
        <div class="copyright__desc">
            <span>©</span>
            ACMEE
        </div>
        <a href="" class="copyright__link">プライバシーポリシー</a>
        <a href="" class="copyright__link">サイトマップ</a>
    </div>
</footer>

<!-- トップへ戻るボタン -->
<button class="goTopBtn" aria-label="ページの先頭へ戻る"></button>


<?php wp_footer(); ?>
</body>

</html>