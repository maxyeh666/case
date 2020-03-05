  <section class="page-section clearfix">
    <div class="container">
  
      <div class="row justify-content-center">
  
        <div class="col-lg-12">
          <{if $mainSlides}>
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <{foreach $mainSlides as $index => $mainSlide}>
                  <li data-target="#carouselExampleIndicators" data-slide-to="<{$index}>" <{if $index == '0'}>class="active"<{/if}>></li>
                <{/foreach}>
              </ol>
              <div class="carousel-inner" role="listbox">
                <{foreach $mainSlides as $index => $mainSlide}>
                  <div class="carousel-item <{if $index == '0'}>active<{/if}>">
                    <img class="d-block img-fluid w-100" src="<{$mainSlide.pic}>" alt="<{$mainSlide.title}>">
                  </div> <!-- 900x350 -->
                <{/foreach}>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
          <{/if}>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="<{$xoImgUrl}>img/intro.jpg" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-lower">資材多，超好逛</span>
          </h2>
          <p class="mb-3 text-left">眾多資材供您選購，讓喜愛園藝的您不缺工具和材料。</p>
          <div class="intro-button mx-auto">
            <!-- <a class="btn btn-primary btn-xl" href="#">Visit Us Today!</a> -->
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="font-weight-bold">公司宗旨</span>
            </h2>
            <p class="mb-0 text-left">我們秉持服務熱誠，為客戶朋友們提供園藝所需的各種資材，親手為自己的居住環境設計出個人風格，在挑選園藝資材及種植的過程中，也增加生活樂趣。</p>
          </div>
        </div>
      </div>
    </div>
  </section>