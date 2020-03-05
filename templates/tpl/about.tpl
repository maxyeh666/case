<section class="page-section cta">
  <div class="container">
    <div class="row">
      <div class="col-xl-9 mx-auto">
        <div class="cta-inner text-center rounded">
          <h2 class="section-heading mb-5">
            <span class="h4">園藝之門</span><br />
            <span class="h1">為您敞開</span>
          </h2>
          <ul class="list-unstyled list-hours mb-5 text-left mx-auto">
            <li class="list-unstyled-item list-hours-item d-flex">
              星期日
              <span class="ml-auto">上午 10:30 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期一
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期二
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期三
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期四
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期五
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
            <li class="list-unstyled-item list-hours-item d-flex">
              星期六
              <span class="ml-auto">上午 9:00 至 下午 6:00</span>
            </li>
          </ul>
          <p class="address mb-5">
            <em>
              <strong>台南市北區和緯路 3 段 220 號</strong>
            </em>
          </p>
          <p class="mb-0">
            <small>
              <em class="h5">隨時來電</em>
            </small>
            <br>
            (06) 2583177
          </p>
        </div>
      </div>
    </div>
  </div>
</section>
  <section class="page-section about-heading">
    <div class="container">
      <{foreach $mainShows as $mainShow}>
        <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="<{$mainShow.pic}>" alt="">
      <{/foreach}>
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">應有盡有, 選你所需</span>
                <span class="section-heading-lower">關於中南</span>
              </h2>
              <p>中南園藝資材位於台南市，成立於西元2020年。秉持服務熱誠，為客戶朋友們提供園藝所需的各種資材，親手為自己的居住環境設計出個人風格，在挑選園藝資材及種植的過程中，也增加生活樂趣。</p>
              <p class="mb-0">園藝所需的材料應有盡有，歡迎有興趣的朋友蒞臨指教，參觀選購。經銷各式花盆、園藝資材等繁多種類可供選購，歡迎建築師、建築商、景觀設計師、營造商、機關學校單位、飯店，來電洽詢。</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

<!-- Bootstrap core JavaScript -->
<script src="<{$xoImgUrl}>vendor/jquery/jquery.min.js"></script>
<script src="<{$xoImgUrl}>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Script to highlight the active date in the hours list -->
<script>
  $('.list-hours li').eq(new Date().getDay()).addClass('today');
</script>