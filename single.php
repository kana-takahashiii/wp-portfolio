<?php get_header(); ?>

<!-- works----------
ジェラート詳細ページ -->
<?php if ( have_posts() ): ?>
  <?php while ( have_posts() ) : the_post(); ?>

  <main class="works">
    <div class="js-demo">
      <h3><?php the_title(); ?></h3>
      <!-- <h3>DETAILS OF<br>Fruits Gelateria</h3> -->
    </div>
    <div class="mock-wrap"><img class="js-demo" src="../img/worksimg/gm-mock.png" alt="">
      <div class="mock job js-demo">
        <p>MY JOB</p>
        <p>デザイン（Figma）・コーディング</p>
      </div>
      <div class="mock dt js-demo">
        <p>DETAIL</p>
        <p> 架空のジェラートショップをデザインからコーディングまで行いました。トンマナを意識し、学生〜20代前半の女性層をターゲット層に絞り、全体的に可愛らしい雰囲気で仕上げました。</p>
      </div>
      <div class="mock link js-demo">
        <p>URL</p><a href="https://fruits-gelateria.netlify.app" target="_blank" rel="noopener noreferrer">Fruits Gelateria</a>
      </div>
      <div class="bg-br-mock js-demo"></div>
    </div>
    <div class="mock-img-wrap"><img class="js-demo-img" src="../img/worksimg/gm-mock-1.png" alt=""><img class="js-demo-img" src="../img/worksimg/gm-mock-2.png" alt=""><img class="js-demo-img" src="../img/worksimg/gm-mock-3.png" alt=""></div>
    <div class="btn"><a href="/index.html"><span class="btn-text">BACK</span>
        <svg width="21" height="8" viewBox="0 0 21 8" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M20.3536 4.29105C20.5488 4.09579 20.5488 3.77921 20.3536 3.58395L17.1716 0.401966C16.9763 0.206704 16.6597 0.206704 16.4645 0.401966C16.2692 0.597228 16.2692 0.913811 16.4645 1.10907L19.2929 3.9375L16.4645 6.76593C16.2692 6.96119 16.2692 7.27777 16.4645 7.47303C16.6597 7.6683 16.9763 7.6683 17.1716 7.47303L20.3536 4.29105ZM0 4.4375L20 4.4375V3.4375L0 3.4375L0 4.4375Z" fill="#E5E5E5"></path>
        </svg></a></div>
  </main>


  <?php endwhile; ?>
<?php endif; ?>


<?php get_footer(); ?>
