<!-- 自動整形機能を停止する。 -->
<?php
if(is_page('contact')) {
  remove_filter('the_content', 'wpautop' );
}
?>
  <?php get_header(); ?>

  <!--main-->
    <main class="top">

      <div class="shutter"></div>
      <section class="container">
        <div class="content">
          <div class="kv-wrap">
            <div class="kv-copy">
              <div class="parapara-top"></div>
              <h1 class="kv-name js-kv-spn">KANA TAKAHASHI</h1>
              <p class="kv-sub js-kv-spn2">
                Hi!I am a front-end engineer.<br>
                Thanks for the access!<br>
              </p>
            </div>
            <div class="cir-sd"><span class="circle-arrow"></span>
              <svg id="circle" width="120" height="120" viewBox="0 0 120 120" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M45.0843 101.178C45.4616 101.326 45.7702 101.496 46.0101 101.687C46.2471 101.872 46.4383 102.041 46.5839 102.196C46.7246 102.349 46.847 102.445 46.9513 102.486C47.0556 102.527 47.1606 102.537 47.2664 102.515C47.3673 102.492 47.4686 102.46 47.5704 102.42C47.6721 102.379 47.7734 102.348 47.8743 102.324C47.9751 102.301 48.0777 102.309 48.182 102.35C48.3061 102.399 48.3948 102.48 48.448 102.592C48.5032 102.7 48.5115 102.846 48.4731 103.032L47.9604 105.718C47.9266 105.848 47.8648 105.947 47.7751 106.015C47.6854 106.083 47.5673 106.114 47.4207 106.108C47.2572 106.101 47.1341 106.05 47.0512 105.954C46.9615 105.862 46.9071 105.723 46.8881 105.538C46.8181 104.84 46.6936 104.267 46.5143 103.819C46.3332 103.375 46.1085 103.021 45.8403 102.755C45.5702 102.494 45.2664 102.298 44.9288 102.165C44.4671 101.984 44.0573 101.955 43.6996 102.078C43.3369 102.199 43.0767 102.461 42.9189 102.863C42.8156 103.126 42.7861 103.384 42.8304 103.636C42.8726 103.894 43.0395 104.191 43.3309 104.529C43.6173 104.865 44.0727 105.281 44.6969 105.778C45.368 106.317 45.872 106.835 46.209 107.334C46.5441 107.838 46.7292 108.352 46.7643 108.875C46.7975 109.404 46.6962 109.969 46.4605 110.57C46.2169 111.19 45.8527 111.68 45.3678 112.04C44.8759 112.403 44.3044 112.611 43.653 112.665C42.9967 112.717 42.2987 112.597 41.559 112.307C41.132 112.14 40.7901 111.96 40.5333 111.767C40.2766 111.575 40.0679 111.398 39.9074 111.238C39.7419 111.076 39.5922 110.968 39.4581 110.915C39.339 110.869 39.2231 110.872 39.1106 110.925C38.9961 110.983 38.8776 111.037 38.7551 111.086C38.6257 111.139 38.4865 111.136 38.3376 111.077C38.2035 111.025 38.1084 110.939 38.0521 110.819C37.9959 110.7 37.9803 110.513 38.0054 110.259L38.2772 107.53C38.2979 107.361 38.3599 107.225 38.4632 107.122C38.5646 107.024 38.6911 106.979 38.8427 106.987C39.0042 106.999 39.1288 107.054 39.2166 107.151C39.2994 107.247 39.3493 107.375 39.3662 107.536C39.4385 108.287 39.5832 108.911 39.8004 109.408C40.0106 109.909 40.2717 110.309 40.5837 110.61C40.8907 110.908 41.2254 111.128 41.5878 111.27C42.0396 111.447 42.4453 111.457 42.8047 111.301C43.1623 111.149 43.4209 110.869 43.5807 110.462C43.68 110.209 43.712 109.952 43.6767 109.692C43.6363 109.43 43.4808 109.125 43.2101 108.778C42.9345 108.43 42.5004 107.996 41.9077 107.477C41.2453 106.902 40.7506 106.367 40.4235 105.872C40.0914 105.375 39.9044 104.88 39.8626 104.388C39.8208 103.896 39.9095 103.378 40.1288 102.834C40.3548 102.258 40.7092 101.793 41.1922 101.438C41.6702 101.081 42.2428 100.87 42.9099 100.806C43.575 100.746 44.2998 100.87 45.0843 101.178Z" fill="#653430"></path>
                <path d="M30.2524 96.3408C30.4829 96.0139 30.8006 95.7485 31.2055 95.5446C31.6104 95.3407 32.0753 95.2183 32.6002 95.1773C33.1177 95.1376 33.6664 95.2016 34.2465 95.3693C34.8253 95.5295 35.4067 95.8156 35.9907 96.2275C36.9496 96.9037 37.6369 97.692 38.0527 98.5922C38.4611 99.4937 38.6013 100.438 38.4732 101.424C38.3452 102.411 37.9523 103.371 37.2945 104.303C36.7996 105.005 36.2298 105.572 35.5851 106.005C34.9404 106.438 34.2617 106.729 33.5489 106.879C32.8288 107.031 32.1118 107.034 31.3979 106.889C30.681 106.749 30.0022 106.453 29.3615 106.001C28.9431 105.706 28.6308 105.427 28.4246 105.164C28.211 104.903 28.0572 104.677 27.963 104.486C27.8615 104.297 27.7627 104.169 27.6669 104.101C27.5492 104.018 27.4309 103.987 27.312 104.008C27.19 104.033 27.0673 104.054 26.9441 104.071C26.8208 104.089 26.7003 104.056 26.5826 103.973C26.4868 103.905 26.4298 103.819 26.4118 103.715C26.3908 103.616 26.4098 103.482 26.469 103.315L27.4075 100.541C27.4526 100.403 27.5379 100.31 27.6634 100.261C27.789 100.213 27.9214 100.215 28.0606 100.267C28.2011 100.327 28.3045 100.417 28.3709 100.535C28.4374 100.654 28.4543 100.796 28.4219 100.963C28.284 101.649 28.2485 102.24 28.3153 102.738C28.3778 103.232 28.5191 103.652 28.7394 103.996C28.9597 104.341 29.242 104.635 29.5864 104.878C29.9394 105.127 30.3181 105.27 30.7226 105.307C31.127 105.344 31.5408 105.28 31.9639 105.115C32.3839 104.955 32.8021 104.695 33.2185 104.336C33.6318 103.981 34.029 103.534 34.4102 102.993C35.0157 102.135 35.4024 101.327 35.5703 100.571C35.7307 99.8163 35.6997 99.1386 35.4772 98.5379C35.2504 97.9341 34.8559 97.4339 34.2937 97.0374C33.775 96.6716 33.2245 96.4759 32.6422 96.4502C32.0555 96.4215 31.4711 96.5608 30.8889 96.868C30.7418 96.947 30.6211 96.9794 30.5267 96.9651C30.425 96.952 30.3367 96.906 30.2618 96.8271C30.1882 96.7557 30.154 96.6793 30.1591 96.598C30.1567 96.5181 30.1878 96.4323 30.2524 96.3408Z" fill="#653430"></path>
                <path d="M18.4541 89.4447C18.8417 89.1267 19.2669 88.926 19.7298 88.8428C20.1928 88.7595 20.6688 88.7931 21.158 88.9436C21.6397 89.0934 22.1095 89.3632 22.5676 89.7532C22.7603 89.9124 22.9433 90.0555 23.1164 90.1824C23.2896 90.3094 23.4566 90.4414 23.6174 90.5785C23.7782 90.7156 23.9432 90.8872 24.1124 91.0933C24.3222 91.3489 24.5019 91.6016 24.6517 91.8513C24.7973 92.1044 24.9132 92.3507 24.9995 92.5904C25.0824 92.8259 25.1377 93.0531 25.1655 93.2718L24.4835 93.7901C24.4712 93.607 24.4381 93.4237 24.3841 93.2403C24.3227 93.0562 24.2387 92.8698 24.1323 92.6812C24.0216 92.496 23.8851 92.3044 23.7227 92.1065C23.2795 91.5665 22.7843 91.2657 22.2371 91.2042C21.6899 91.1428 21.1153 91.359 20.5134 91.853C20.0516 92.2319 19.7196 92.6597 19.5173 93.1362C19.3075 93.6119 19.2353 94.0956 19.3006 94.587C19.3583 95.0778 19.5632 95.5375 19.915 95.9663L20.2348 96.3559L27.0187 90.7884C27.1176 90.7072 27.1811 90.6206 27.2091 90.5286C27.233 90.44 27.2246 90.3331 27.1838 90.2078L27.0206 89.845C26.9754 89.689 26.9664 89.5687 26.9936 89.4842C27.0175 89.3956 27.0748 89.3141 27.1655 89.2397C27.3964 89.0502 27.6336 89.1039 27.8772 89.4007L30.5417 92.6474C30.6669 92.7999 30.729 92.9386 30.7281 93.0636C30.7196 93.1878 30.6639 93.2922 30.5608 93.3768C30.3753 93.5291 30.1697 93.5391 29.9439 93.407L29.6199 93.1762C29.4949 93.0994 29.3832 93.06 29.2848 93.0579C29.179 93.055 29.0766 93.0942 28.9777 93.1754L22.7009 98.3268C22.6061 98.4046 22.5518 98.494 22.5381 98.5949C22.5168 98.6952 22.5316 98.8141 22.5825 98.9517L22.7457 99.3145C22.8313 99.5617 22.7813 99.7614 22.5958 99.9137C22.4886 100.002 22.3753 100.036 22.2559 100.017C22.1332 99.9932 22.0092 99.9052 21.884 99.7526L19.1587 96.4318C18.3602 95.4588 17.813 94.5315 17.5171 93.6497C17.2212 92.7679 17.1579 91.9678 17.3271 91.2493C17.4889 90.5301 17.8646 89.9286 18.4541 89.4447ZM23.9486 91.4865L21.7806 89.3744L23.0188 85.8641C23.0815 85.6884 23.1172 85.5385 23.1256 85.4142C23.134 85.29 23.1115 85.1533 23.058 85.004C23.0086 84.8514 22.9942 84.7287 23.0147 84.636C23.0352 84.5432 23.0908 84.4597 23.1815 84.3852C23.2845 84.3006 23.3995 84.2684 23.5264 84.2884C23.6457 84.3078 23.7697 84.3958 23.8983 84.5524L26.243 87.4095C26.4765 87.6939 26.4778 87.9309 26.2469 88.1204C26.1892 88.1677 26.1275 88.1977 26.0618 88.2102C25.9928 88.2185 25.9127 88.2049 25.8214 88.1694L25.6654 88.0802C25.5516 88.0424 25.4629 88.0394 25.3991 88.071C25.3313 88.106 25.2695 88.1946 25.2138 88.337L23.9486 91.4865Z" fill="#653430"></path>
                <path d="M10.2737 82.9492C9.91643 82.1217 9.72727 81.3204 9.70625 80.5452C9.67822 79.7672 9.80755 79.0375 10.0942 78.3561C10.376 77.6767 10.7984 77.0673 11.3613 76.528C11.9194 75.9907 12.6073 75.5456 13.425 75.1925C14.184 74.8648 14.9429 74.6852 15.702 74.6537C16.4589 74.6173 17.1802 74.7271 17.8658 74.9829C18.5514 75.2388 19.1705 75.6366 19.7231 76.1764C20.2757 76.7163 20.7285 77.395 21.0816 78.2127C21.4368 79.0353 21.6273 79.8331 21.6532 80.6062C21.6743 81.3814 21.5439 82.1087 21.2621 82.788C20.9754 83.4695 20.5541 84.0813 19.9981 84.6235C19.4352 85.1628 18.7448 85.609 17.9271 85.9621C17.1682 86.2898 16.4092 86.4694 15.6502 86.5009C14.8911 86.5324 14.1699 86.4226 13.4864 86.1717C12.8008 85.9158 12.1817 85.518 11.6291 84.9782C11.0765 84.4383 10.6247 83.762 10.2737 82.9492ZM16.3513 77.3884C15.6951 77.6717 15.0854 78.0018 14.5219 78.3787C13.9536 78.7577 13.4509 79.1607 13.0136 79.5877C12.5694 80.0118 12.2074 80.4383 11.9278 80.8669C11.6432 81.2977 11.4553 81.71 11.3639 82.1038C11.2655 82.4948 11.2829 82.8446 11.4161 83.153C11.5768 83.5252 11.8255 83.7983 12.1621 83.9725C12.4938 84.1487 12.8984 84.218 13.3759 84.1803C13.8485 84.1447 14.386 83.9969 14.9882 83.7368C15.6443 83.4535 16.2565 83.1224 16.8249 82.7434C17.3883 82.3665 17.8921 81.9659 18.3363 81.5417C18.7757 81.1197 19.1376 80.6932 19.4222 80.2625C19.7067 79.8317 19.8982 79.4208 19.9966 79.0298C20.088 78.636 20.067 78.2848 19.9339 77.9763C19.7689 77.5944 19.5217 77.3178 19.1921 77.1464C18.8555 76.9722 18.4484 76.904 17.9709 76.9417C17.4934 76.9794 16.9535 77.1283 16.3513 77.3884Z" fill="#653430"></path>
                <path d="M7.35426 68.5617L7.51315 68.9265C7.5793 69.0461 7.657 69.1344 7.74626 69.1913C7.83024 69.249 7.93291 69.2689 8.05426 69.251L16.0875 68.0669C16.2985 68.0358 16.4407 67.9582 16.5141 67.8342C16.5822 67.7109 16.6007 67.5438 16.5696 67.3327L16.4272 66.3672C16.3844 66.077 16.3083 65.8348 16.1988 65.6407C16.0886 65.4413 15.9147 65.2675 15.6772 65.1192C15.4397 64.9709 15.1069 64.834 14.6786 64.7084L13.4948 64.3573C13.3256 64.3068 13.2065 64.23 13.1374 64.127C13.0675 64.0187 13.0428 63.8875 13.0632 63.7336C13.0836 63.5796 13.142 63.4632 13.2381 63.3843C13.3291 63.3062 13.4651 63.2781 13.6462 63.2999L16.5667 63.6376C16.8203 63.6757 17.0102 63.7394 17.1366 63.8286C17.2682 63.917 17.3492 64.0641 17.3796 64.2699C17.3974 64.3912 17.3916 64.5161 17.362 64.6444C17.3324 64.7728 17.3051 64.917 17.2802 65.077C17.2545 65.2317 17.2576 65.4172 17.2895 65.6336L18.1504 71.4745C18.1792 71.6697 18.161 71.8206 18.0959 71.9273C18.0247 72.0294 17.9231 72.0902 17.7912 72.1096C17.5538 72.1446 17.3723 72.0474 17.2469 71.8179L17.088 71.4532C17.0203 71.323 16.9448 71.2317 16.8616 71.1793C16.7724 71.1223 16.667 71.1028 16.5457 71.1207L8.50458 72.306C8.38323 72.3239 8.29067 72.3726 8.22691 72.4521C8.1571 72.527 8.10856 72.6366 8.0813 72.7808L8.03441 73.1759C7.98049 73.4318 7.83481 73.5773 7.59737 73.6123C7.46019 73.6325 7.34541 73.6036 7.25305 73.5255C7.1599 73.4422 7.09894 73.303 7.07017 73.1077L6.45068 68.9052C6.42113 68.7047 6.43931 68.5537 6.50524 68.4524C6.57038 68.3457 6.67155 68.2823 6.80873 68.2621C7.04617 68.2271 7.22801 68.327 7.35426 68.5617Z" fill="#653430"></path>
                <path d="M6.97822 55.3192L7.04478 55.7114C7.08024 55.8435 7.13444 55.9478 7.2074 56.0246C7.27505 56.1007 7.36992 56.1448 7.49201 56.1566L15.5743 56.9381C15.7867 56.9586 15.9433 56.9175 16.0444 56.8148C16.1401 56.7115 16.1982 56.5537 16.2187 56.3414L16.3127 55.3699C16.3409 55.0779 16.3252 54.8246 16.2656 54.6098C16.2065 54.3898 16.0795 54.1793 15.8846 53.9782C15.6898 53.7772 15.3996 53.5643 15.0141 53.3395L13.9493 52.7141C13.7973 52.6244 13.7001 52.5212 13.6578 52.4046C13.616 52.2827 13.6235 52.1494 13.6803 52.0049C13.7372 51.8604 13.8218 51.7614 13.9341 51.708C14.0411 51.654 14.1799 51.6594 14.3505 51.7241L17.1041 52.7539C17.3412 52.8519 17.5103 52.9593 17.6115 53.0762C17.718 53.1937 17.7612 53.356 17.7412 53.563C17.7294 53.6851 17.6937 53.8049 17.6341 53.9224C17.5746 54.0398 17.5134 54.1732 17.4508 54.3226C17.3886 54.4666 17.347 54.6474 17.326 54.8651L16.7577 60.7417C16.7387 60.9381 16.6848 61.0802 16.5959 61.1681C16.5023 61.2501 16.3891 61.2847 16.2564 61.2719C16.0175 61.2488 15.8647 61.1108 15.7981 60.8578L15.7315 60.4656C15.6971 60.323 15.6458 60.2162 15.5776 60.1453C15.5047 60.0686 15.4072 60.0243 15.2851 60.0125L7.1948 59.2302C7.0727 59.2184 6.97115 59.2434 6.89016 59.3052C6.80437 59.3613 6.73092 59.456 6.66979 59.5894L6.52932 59.9616C6.41546 60.197 6.23908 60.3032 6.0002 60.2801C5.86218 60.2668 5.75771 60.2111 5.68681 60.1132C5.61642 60.0099 5.59072 59.8601 5.60972 59.6637L6.01859 55.4354C6.03809 55.2337 6.09202 55.0915 6.18038 55.009C6.26925 54.9211 6.38269 54.8839 6.52071 54.8972C6.7596 54.9203 6.9121 55.061 6.97822 55.3192Z" fill="#653430"></path>
                <path d="M17.1274 50.8306C16.9024 50.7471 16.7909 50.5721 16.7931 50.3056L16.8292 49.9094C16.8305 49.7677 16.8073 49.6538 16.7596 49.5679C16.7087 49.475 16.6257 49.4073 16.5107 49.3646L8.89015 46.5378C8.77514 46.4951 8.67058 46.4933 8.57646 46.5323C8.47919 46.5645 8.38487 46.6348 8.2935 46.7431L8.06244 47.0669C7.89025 47.2704 7.69165 47.3304 7.46663 47.247C7.33662 47.1987 7.25081 47.1157 7.20919 46.9979C7.16757 46.8801 7.18015 46.7311 7.24693 46.5511L8.84955 42.2308C9.1927 41.3057 9.64183 40.5167 10.1969 39.8636C10.747 39.2087 11.3732 38.7015 12.0754 38.3419C12.7777 37.9824 13.5251 37.7847 14.3177 37.7488C15.1122 37.7079 15.922 37.8404 16.747 38.1465C17.6921 38.4971 18.4496 39.0312 19.0196 39.7489C19.5914 40.4616 19.9387 41.3043 20.0614 42.277C20.1791 43.2479 20.0292 44.2959 19.6119 45.421L17.7477 50.4464C17.681 50.6264 17.5934 50.7475 17.485 50.8097C17.3716 50.87 17.2524 50.877 17.1274 50.8306ZM18.5894 45.4171C18.7934 44.8671 18.8309 44.3292 18.7016 43.8034C18.5724 43.2777 18.2548 42.7844 17.7488 42.3237C17.2428 41.8629 16.5248 41.46 15.5947 41.115C14.8696 40.8461 14.1899 40.6849 13.5555 40.6316C12.9161 40.5765 12.3398 40.6272 11.8266 40.7839C11.3084 40.9386 10.8637 41.1946 10.4923 41.5517C10.1177 41.902 9.8303 42.3471 9.62998 42.8872L9.42408 43.4422L17.3747 46.3915C17.6347 46.4879 17.8507 46.4884 18.0226 46.3929C18.1964 46.2924 18.3334 46.1072 18.4336 45.8372L18.5894 45.4171Z" fill="#653430"></path>
                <path d="M15.912 28.0297C16.4475 27.3047 17.045 26.7382 17.7044 26.3302C18.3627 25.9147 19.0585 25.6594 19.7917 25.5645C20.5206 25.4664 21.2597 25.525 22.009 25.7403C22.7541 25.9525 23.4848 26.3231 24.2012 26.8523C24.8662 27.3435 25.4031 27.9092 25.8121 28.5494C26.2242 29.1853 26.4921 29.8639 26.6157 30.5852C26.7394 31.3064 26.7069 32.0416 26.5183 32.7907C26.3296 33.5399 25.9707 34.2726 25.4415 34.9891C24.9091 35.7098 24.3154 36.2757 23.6602 36.6869C23.0008 37.095 22.3066 37.348 21.5777 37.4462C20.8445 37.5411 20.1038 37.4847 19.3556 37.2768C18.6063 37.0615 17.8734 36.6892 17.157 36.16C16.4921 35.6689 15.9551 35.1032 15.5462 34.4629C15.1372 33.8227 14.8693 33.1441 14.7425 32.4272C14.6188 31.7059 14.6513 30.9707 14.84 30.2216C15.0286 29.4725 15.386 28.7418 15.912 28.0297ZM23.7749 30.4859C23.2001 30.0613 22.6081 29.7003 21.999 29.4029C21.3856 29.1023 20.7844 28.8704 20.1955 28.7072C19.6054 28.5366 19.0548 28.4382 18.5437 28.4121C18.0282 28.3828 17.5773 28.4277 17.191 28.5468C16.8035 28.6584 16.51 28.8494 16.3104 29.1196C16.0695 29.4457 15.9585 29.7979 15.9773 30.1765C15.9918 30.5518 16.1354 30.9364 16.4081 31.3302C16.6766 31.7207 17.0746 32.1109 17.6023 32.5007C18.1771 32.9253 18.7713 33.2879 19.3847 33.5885C19.9938 33.8859 20.5934 34.1199 21.1835 34.2906C21.7692 34.458 22.3198 34.5564 22.8353 34.5857C23.3507 34.615 23.8021 34.5738 24.1896 34.4622C24.5759 34.3431 24.8689 34.1484 25.0686 33.8782C25.3157 33.5435 25.4305 33.1907 25.4128 32.8196C25.3941 32.4411 25.2483 32.0549 24.9756 31.6612C24.7028 31.2674 24.3026 30.8757 23.7749 30.4859Z" fill="#653430"></path>
                <path d="M29.8463 17.7069L30.8166 17.2669L33.0164 24.3199C33.0543 24.4494 33.0989 24.5743 33.15 24.6947C33.198 24.8106 33.2708 24.9387 33.3681 25.0789L33.5461 25.3352C33.6312 25.4578 33.6616 25.5763 33.6371 25.6907C33.614 25.7977 33.5499 25.8877 33.4447 25.9607L31.5391 27.2839C31.4296 27.36 31.3185 27.3917 31.2058 27.379C31.0945 27.3589 30.9962 27.2876 30.911 27.1649L30.7331 26.9086C30.6753 26.8254 30.6185 26.7577 30.5628 26.7055C30.504 26.6489 30.4056 26.5679 30.2675 26.4625L23.5508 21.124C23.4066 21.0099 23.2826 20.9434 23.1787 20.9247C23.0761 20.8985 22.9592 20.8985 22.828 20.9247L22.5013 21.0152C22.385 21.044 22.2843 21.0393 22.1992 21.0009C22.1142 20.9626 22.0427 20.9018 21.9849 20.8186C21.9058 20.7047 21.8822 20.5912 21.9141 20.4782C21.9473 20.3577 22.045 20.2412 22.2071 20.1287L25.5649 17.797C25.727 17.6844 25.8681 17.6351 25.9882 17.6491C26.1127 17.6601 26.2129 17.7203 26.289 17.8298C26.4107 18.0051 26.4037 18.182 26.268 18.3606L25.9962 18.6565C25.908 18.7632 25.8894 18.8767 25.9405 18.9971C25.9886 19.113 26.105 19.2433 26.2897 19.3877L32.7369 24.5627L32.3171 25.7113L29.8463 17.7069ZM33.2392 13.0133C33.1601 12.8994 33.1372 12.7822 33.1704 12.6618C33.2036 12.5413 33.2991 12.4263 33.4568 12.3168L35.4281 10.9479C35.5946 10.8323 35.7378 10.7815 35.8579 10.7955C35.9781 10.8095 36.0776 10.8734 36.1567 10.9873C36.2145 11.0706 36.2398 11.1537 36.2325 11.2367C36.2296 11.3166 36.1872 11.424 36.1054 11.5587L35.959 11.7967C35.8574 11.9776 35.7997 12.1703 35.7858 12.3747C35.7763 12.5761 35.8286 12.8385 35.9428 13.1618L38.5032 20.5098C38.572 20.7023 38.628 20.8485 38.6713 20.9483C38.7146 21.048 38.7759 21.1549 38.8549 21.2688L39.0329 21.5251C39.1181 21.6477 39.1484 21.7662 39.124 21.8806C39.1009 21.9876 39.0367 22.0776 38.9316 22.1506L36.9668 23.5149C36.8617 23.5879 36.7528 23.6181 36.6401 23.6054C36.5244 23.5884 36.4239 23.5185 36.3388 23.3959L36.1608 23.1396C36.1091 23.0651 36.0538 22.9996 35.9951 22.943C35.9376 22.879 35.8368 22.7899 35.6926 22.6758L29.0705 17.2911C28.8872 17.1392 28.7538 17.05 28.6704 17.0235C28.5884 16.9895 28.501 16.9853 28.4083 17.0107L28.0836 17.0901C27.9629 17.122 27.8646 17.1253 27.7886 17.1001C27.7127 17.0749 27.6459 17.0207 27.5881 16.9375C27.509 16.8236 27.486 16.7064 27.5192 16.5859C27.5525 16.4655 27.6479 16.3505 27.8056 16.241L31.0583 13.9823C31.2204 13.8697 31.3615 13.8205 31.4816 13.8345C31.6061 13.8454 31.7079 13.9078 31.787 14.0217C31.8478 14.1094 31.8754 14.2006 31.8698 14.2954C31.8612 14.3858 31.8187 14.4835 31.7422 14.5885L31.4967 14.8661C31.4173 14.9667 31.3933 15.0678 31.4248 15.1693C31.4607 15.2677 31.5817 15.4045 31.7877 15.5796L38.1561 20.8093L37.8034 21.8724L34.9827 13.6727C34.8949 13.4154 34.7798 13.2356 34.6373 13.1333C34.4948 13.0309 34.2933 13.0118 34.0326 13.0759L33.7327 13.1771C33.6208 13.2029 33.5246 13.2047 33.4443 13.1825C33.3654 13.153 33.297 13.0966 33.2392 13.0133Z" fill="#653430"></path>
                <path d="M46.1519 18.396C46.1883 18.5243 46.1712 18.64 46.1006 18.7432C46.0352 18.8448 45.9082 18.9251 45.7198 18.984L43.2336 19.6882C43.0423 19.7369 42.8896 19.7358 42.7754 19.685C42.6612 19.6342 42.586 19.5446 42.5497 19.4163C42.4872 19.1957 42.5715 18.9944 42.8027 18.8125L43.0382 18.646C43.2467 18.4817 43.3796 18.3248 43.4371 18.1755C43.4946 18.0262 43.4848 17.8156 43.4078 17.5436L41.6419 11.3089C41.591 11.1293 41.5305 10.994 41.4604 10.903C41.3954 10.8105 41.2682 10.6941 41.0788 10.5537L40.2264 9.92213C40.0911 9.81632 39.9953 9.73259 39.939 9.67092C39.8813 9.60412 39.8408 9.52967 39.8176 9.44757C39.7812 9.31928 39.7972 9.20943 39.8656 9.11801C39.9325 9.02146 40.0377 8.95284 40.1814 8.91215L42.3751 8.2908C42.5496 8.24138 42.702 8.23148 42.8323 8.26108C42.9678 8.28923 43.1178 8.36869 43.2823 8.49947L50.8763 14.4388L50.7845 15.6704L48.7744 8.57358C48.7003 8.31187 48.6047 8.13107 48.4877 8.03117C48.3693 7.92614 48.1698 7.85792 47.8893 7.82651L47.6014 7.80826C47.3063 7.76437 47.1289 7.63722 47.0694 7.42683C47.0316 7.29341 47.0479 7.17514 47.1185 7.072C47.1891 6.96887 47.3167 6.89114 47.5015 6.83882L49.9877 6.13463C50.1775 6.08085 50.3295 6.07936 50.4437 6.13017C50.5579 6.18099 50.6339 6.2731 50.6716 6.40652C50.7327 6.62204 50.6483 6.82331 50.4186 7.01033L50.1831 7.17682C49.9732 7.33604 49.8402 7.49288 49.7842 7.64733C49.7267 7.79665 49.7365 8.00729 49.8135 8.27926L51.6078 14.6141C51.6601 14.7988 51.7213 14.9561 51.7913 15.0859C51.8599 15.2106 51.9512 15.3178 52.0653 15.4074L52.7257 15.9188C52.8858 16.0342 52.9871 16.1274 53.0294 16.1986C53.0769 16.2683 53.1122 16.3442 53.1355 16.4263C53.1718 16.5546 53.1573 16.6696 53.0918 16.7713C53.0264 16.873 52.9167 16.9456 52.7628 16.9892L50.2304 17.7065C49.943 17.7879 49.7667 17.7131 49.7012 17.4822C49.6765 17.3949 49.6346 17.3154 49.5754 17.2434C49.5162 17.1715 49.3766 17.0503 49.1565 16.8798L41.7095 11.0486L42.4521 10.2063L44.4491 17.257C44.5203 17.5084 44.6151 17.6867 44.7336 17.7917C44.8557 17.8901 45.0552 17.9584 45.332 17.9963L45.6199 18.0146C45.9135 18.0534 46.0909 18.1805 46.1519 18.396Z" fill="#653430"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M50.833 108.144C50.5516 108.435 50.2678 108.72 49.9814 108.996C53.2181 109.654 56.5683 110 59.9993 110C87.6136 110 109.999 87.6142 109.999 60C109.999 32.3858 87.6136 10 59.9993 10C59.3701 10 58.7436 10.0116 58.1201 10.0347C58.2963 10.359 58.4706 10.6869 58.6429 11.0184C59.0936 11.0062 59.5457 11 59.9993 11C87.0613 11 108.999 32.938 108.999 60C108.999 87.062 87.0613 109 59.9993 109C56.8665 109 53.8024 108.706 50.833 108.144Z" fill="#653430"></path>
              </svg>
            </div>
          </div>
        </div>
      </section>



      <!-- WORKS-->
      <?php if( have_posts() ): ?>
        <div class="section-wrap js-trigger" id="works">
          <h2 class="js-span">WORKS</h2>
          <div class="section-item">
            <div class="swiper slider-works js-slider-works">
              <div class="swiper-wrapper">
                <!-- worksループ記事記述 -->
                <?php while (have_posts() ): the_post(); ?>
                    <div id="post-<?php the_ID(); ?>" <?php post_class('swiper-slide'); ?>>
                      <a href="<?php the_permalink(); ?>">
                          <?php 
                          $image = get_field('img');
                          if( !empty( $image ) ): ?>
                              <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                          <?php endif; ?>
                      </a>
                    </div>
                <?php endwhile; ?>
                <div class="swiper-slide">
                  <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/COMINGSOON.png" alt="COMINGSOON">
                  </a>
                </div>
              </div>
                  <div class="swiper-pagination"></div>
            </div>
              <!--背景-->
              <div class="bg-br"></div>
          </div>
        </div>
      <?php endif; ?>
    



      <!-- ABOUT-->
      <div class="section-wrap js-trigger" id="about">
        <h2 class="text-center js-span">ABOUT</h2>
        <div class="section-item">
          <div class="swiper slider-about js-slider-about">
            <div class="swiper-wrapper">
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me1.png" alt="">
                <p>I like…<br>fashion!</p>
              </div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me2.png" alt="">
                <p>I drink coffee every day.</p>
              </div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me3.png" alt="">
                <p>My hometown,<br>Yokohama!</p>
              </div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me4.png" alt="">
                <p>I love Music fes!<br>photo@Aug 2016</p>
              </div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me5.png" alt="">
                <p>Attack on Titan!<br>I won it in a raffle.</p>
              </div>
              <div class="swiper-slide"><img src="<?php echo get_template_directory_uri(); ?>/img/me8.png" alt="">
                <p>This's my favorite idol's merchandise.</p>
              </div>
            </div>
            <div class="swiper-pagination"></div>
            <div class="swiper-scrollbar"></div>
          </div>
          <!-- btn-->
          <div class="btn"><a href="<?php echo home_url('/aboutme'); ?>"><span class="btn-text">MORE</span></a></div>
        </div>
      </div>



      
      <!--CONTACT-->
      <div class="section-wrap js-trigger" id="contact">
        <h2 class="js-span">CONTACT</h2>
        <div class="last-mg">
          <p>
            <If>you are interested, please contact me!</If>
          </p>
        </div>

        <div class="parapara-jmp"></div>
        
        <!-- ↓問い合わせ入力画面 -->
        <?php echo do_shortcode('[mwform_formkey key="56"]'); ?>
      </div>

    <!-- </div> -->
    </main>


  <!--footer-->
  <?php get_footer(); ?>