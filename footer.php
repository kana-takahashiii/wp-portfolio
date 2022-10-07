    <footer>
        <p>&copy; 2022 KANA TAKAHASHI</p>
        <div class="parapara-jmp"></div>
    </footer>


    <!-- js,swiper,gsap -->
    <?php
    wp_enqueue_script('swiper-bundle-js', 'https://unpkg.com/swiper@7/swiper-bundle.min.js');
    wp_enqueue_script('gsap-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/gsap.min.js');
    wp_enqueue_script('stg-js', 'https://cdn.jsdelivr.net/npm/gsap@3.7.0/dist/ScrollTrigger.min.js');
    wp_enqueue_script('customease-js', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/3.10.4/CustomEase.min.js');

    wp_head();
    ?>

    <?php
    wp_enqueue_script('main-js', get_template_directory_uri() . '/main.js');
    wp_footer(); 
    ?>
</body>
</html>

