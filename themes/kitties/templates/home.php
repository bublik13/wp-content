<?php
/**
 * Template Name: Home Page
 */
get_header(); ?>
    <section class="main">
        <div class="main__container">
            <div class="main__accordion">
            <?php
                if( have_rows('filters') ):
                    while( have_rows('filters') ) : the_row();
                    $btn = get_sub_field('button_fiters');
                    $subtitle = get_sub_field('subtitle_fiters');
            ?>
                <button class="main__btn"><?php echo $btn;?></button>
                <div class="main__panel">
                    <p><?php echo $subtitle;?></p>
                </div>
            <?php
                endwhile;
            endif;
            ?>
            <?php $btn_main = get_field('button_main'); ?>
			<a href="<?php echo $btn_main['url'] ?>" target="<?php echo $btn_main['target']; ?>" class="main__button"><?php echo $btn_main['title'];?></a>
            </div>
            <div class="main__wrap">
                <ul class="main__list">
                    <?php
                        if( have_rows('cards') ):
                            while( have_rows('cards') ) : the_row();
                            $title = get_sub_field('title_cards');
                            $img = get_sub_field('cat_img_card');
                    ?>
                        <li class="main__item">
                            <a href="#" class="main__card card">
                                <div class="card__top">
                                    <img src="<?php echo $img['url']; ?>" alt="" class="card__img">
                                </div>
                                <p class="card__title"><?php echo $title;?></p>
                            </a>
                        </li>
                    <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
        </div>
    </section>
    <section class="blog">
        <div class="blog__container">
            <h2 class="blog__title"><?php echo get_field('title_blog'); ?></h2>
            <div class="blog__wrap">
                <ul class="blog__list">
                    <?php
                        if( have_rows('blog') ):
                            while( have_rows('blog') ) : the_row();
                            $img = get_sub_field('cat_img_blog');
                            $desc = get_sub_field('desc_blog');
                        ?>
                            <li class="blog__item">
                                <a href="#" class="blog__link">
                                    <div class="blog__top">
                                        <img src="<?php echo $img['url']; ?>" alt="" class="blog__img">
                                    </div>
                                    <p class="blog__desc"><?php echo $desc;?></p>
                                </a>
                            </li>
                        <?php
                        endwhile;
                    endif;
                    ?>
                </ul>
            </div>
			<?php $btn_blog = get_field('button_blog'); ?>
			<a href="<?php echo $btn_blog['url'] ?>" target="<?php echo $btn_blog['target']; ?>" class="blog__button"><?php echo $btn_blog['title'];?></a>
        </div>
    </section>
<?php get_footer(); ?>