<?php get_header(); ?>
<main id="main" class="site-main">

    <!--  -->
    <section class="hero">
        <video autoplay loop muted playsinline class="hero-video">
            <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/hero_video.mp4'); 
                            ?>" type="video/mp4">
            Your browser does not support the video tag.
        </video>
    </section>

    <!--  -->
    <section class="philosophy">
        <div>
            <p>株式会社ACMEEの「日々果たすべき<span class="acmee-blue">使命</span>」と「実現したい<span class="acmee-blue">未来[頂]</span>」とは</p>
        </div>

        <a class="btn" href="/philosophy/">ACMEEの企業理念</a>
    </section>

    <!--  -->
    <section class="businessContent">
        <div class="businessContent__wrapper">
            <h2 class="ct-header">事業内容</h2>
            <p class="ct-disc">時代、企業様、求職者様からのニーズにしっかりお応えし、<br>常にフレッシュな情報を的確なマーケットに提供し続けます。</p>
        </div>

        <div class="listWrapper">
            <ul class="listWrapper__list">
                <li class="acmee-blue">求人<span>広告事業</span></li>
                <li class="acmee-blue">出版<span>事業</span></li>
                <li class="acmee-blue">営業<span>請負・代行事業</span></li>
                <li class="acmee-blue">EC<span>企業</span></li>
                <li class="acmee-blue">害獣<span>害虫駆除事業</span></li>
                <li class="acmee-blue">DX<span>推進事業</span></li>
            </ul>
        </div>
        <a class="btn" href="#">ACMEEの事業内容</a>
    </section>

    <!--  -->
    <section class="news">
        <div class="news__wrapper">
            <h2 class="news__title">お知らせ</h2>
            <div class="newsLinks">
                <div class="newsLinks__item">求人広告事業</div>
                <div class="newsLinks__item">メディア事業</div>
                <div class="newsLinks__item">営業請負・代行事業</div>
                <div class="newsLinks__item">EC事業</div>
                <div class="newsLinks__item">害獣・害虫駆除事業</div>
                <div class="newsLinks__item">DX事業</div>
            </div>
        </div>
        <div class="newsPosts">
            <?php
            get_template_part('components/newLoopPosts');
            ?>

            <a class="btn" href="#">お知らせ一覧</a>
        </div>
    </section>

    <!--  -->
    <section class="greeting">
        <div class="greeting__wrapper">
            <div class="greeting__textArea">
                <h2 class="greeting__title">代表挨拶</h2>
                <p class="greeting__desc">未来への挑戦と信頼の絆</p>
            </div>

            <div class="greeting__imgArea">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/greeting.jpg'); ?>" alt="ACMEEの代表者">
            </div>
        </div>
        <a class="btn greeting" href="#">代表挨拶</a>
    </section>

    <!--  -->
    <section class="office">
        <div class="office__wrapper">
            <div class="office__textArea">
                <h2 class="office__title">各事業所</h2>
                <p class="office__desc">ACMEE株式会社は、全国に拠点を展開し、各地域のニーズに応じた多様なサービスを提供しています。各事業所では地域密着型のサービスを展開し、迅速かつ効果的な対応を行ないます。
                    社員一同、お客様に満足いただけるよう最善を尽くし、常に進化し続けることを目指しています。</p>
            </div>

            <!-- Slick Slider -->
            <div class="office__imgArea">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/office.jpg'); ?>" alt="事務所">
            </div>
        </div>
        <a class="btn greeting" href="#">代表挨拶</a>
    </section>

    <!--  -->
    <section class="testimonial">
        <div class="testimonial__wrapper">
            <div class="testimonial__textArea">
                <h2 class="testimonial__title">お客様の声</h2>
                <p class="testimonial__desc">ACMEE株式会社は、お客様からの声を大切にし、サービス向上に努めています。<br />実際の利用者の満足度や具体的な改善点、成功事例などを詳しく掲載しています。これにより、新たな顧客にも信頼と安心を提供しています。</p>
            </div>
            <div class="testimonial__imgArea">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/testimonial_img.jpeg'); ?>" alt="お客様の声">
            </div>
        </div>
        <a class="btn " href="#">お客様の声</a>
    </section>

    <!--  -->
    <section class="recruit">
        <div class="recruit__wrapper">
            <div class="recruit__textArea">
                <h2 class="recruit__title">採用情報</h2>
                <p class="recruit__desc">ACMEE株式会社では、多岐にわたる事業領域での採用情報を掲載しています。<br />
                    様々な分野でのキャリアチャンスを提供しています。働きやすい環境と成長機会を重視し、応募者が自分に最適な職種を見つけられるようサポートしています。</p>
            </div>
            <div class="recruit__imgArea">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/images/recruit_img.jpeg'); ?>" alt="採用情報">
            </div>
        </div>
        <a class="btn" href="#">採用情報</a>
    </section>

    <!-- Contact Forms  -->
    <?php
    get_template_part('components/contactForms');
    ?>
</main>

<?php get_footer(); ?>