<?php // if (have_posts()) : ?>
    <?php // while (have_posts()) : the_post(); ?>
        <a href="<?php // the_permalink(); ?>" class="newsPosts__item">

            <!-- <img src="?php // echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium')); ?>" alt="<?php // the_title_attribute(); ?>" class="newsPosts__img"> -->

            <img src="/assets/images/office.jpg" alt="<?php // the_title_attribute(); ?>" class="newsPosts__img">
            <div class="newsPosts__texts">
                <time datetime="<?php // echo get_the_date('Y-m-d'); ?>"><?php // echo get_the_date(); ?></time>
                <h3 class="newsPosts__title"><?php // the_title(); ?></h3>
                <p class="newsPosts__desc"><?php // echo get_the_excerpt(); ?></p>
            </div>
        </a>
    <?php // endwhile; ?>
<?php // else : ?>
    <!-- <p class="newsPosts__no-posts">お知らせはありません。</p> -->
<?php // endif; ?>



<a href="" class="newsPosts__item">
    <img src="<?php echo get_template_directory_uri() . '/assets/images/office.jpg'; ?>" alt="test img" class="newsPosts__img">
    <div class="newsPosts__texts">
        <time datetime="">2024年7月1日</time>
        <h3 class="newsPosts__title">テストのタイトルです</h3>
        <p class="newsPosts__desc">テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。テストの説明文です。</p>
    </div>
</a>