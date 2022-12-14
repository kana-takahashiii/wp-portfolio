<?php get_header(); ?>

<div class="contact-thanks">
    <div class="section-wrap js-trigger" id="confirm">
        <h2 class="js-span-form">THANKS!</h2>
    </div>
    <?php the_content(); ?>
</div>


<!-- HOMEに戻るボタン -->
<div class="footer-inner">
    <div class="btn btn-left">
        <a href="<?php echo esc_url( home_url('/') ); ?>"><span class="btn-text">HOME</span>
            <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M20.3536 4.29105C20.5488 4.09579 20.5488 3.77921 20.3536 3.58395L17.1716 0.401966C16.9763 0.206704 16.6597 0.206704 16.4645 0.401966C16.2692 0.597228 16.2692 0.913811 16.4645 1.10907L19.2929 3.9375L16.4645 6.76593C16.2692 6.96119 16.2692 7.27777 16.4645 7.47303C16.6597 7.6683 16.9763 7.6683 17.1716 7.47303L20.3536 4.29105ZM0 4.4375L20 4.4375V3.4375L0 3.4375L0 4.4375Z" fill="#E5E5E5"></path>
            </svg>
        </a>
    </div>
</div>


<?php get_footer(); ?>
