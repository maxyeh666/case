/* 購物車Jquery */

  $(function (){
    $('.addCart').on('click',function(){  //點下加入購物車(class=addCart)時,複製一張圖片
      var shopCart=$('.shopCart');    //宣告shopCart抓取class shopCart
      var addImg=$(this).parent().parent().parent('.product').find('img').eq(0);  //往所在標籤的父元素找class=product(.parent(product))尋找圖片(.find('img'))
      var cloneImg=addImg.clone();   //宣告複製一張addImg
      cloneImg.css({   //複製圖片的css設定
        'width' : '30%',
        'height' : '30%',
        'position' : 'absolute',
        'top' : addImg.offset().top, //複製圖片的top往原始圖片的top偏移
        'left' : addImg.offset().left, //複製圖片的left往原始圖片的left偏移
        'z-index' : '1000', //z-index是將圖片推往上層的屬性
        'opacity' : '.5'
      });
      cloneImg.appendTo($('body')).animate({  //設定複製圖片的動畫,複製的圖片會出現在body標籤後面,這邊為動畫的頭
        'width' : 50,
        'height' : 50,
        'top' : shopCart.offset().top,  //圖片的top往shopCart(=購物車)的top偏移
        'left' : shopCart.offset().left  //圖片的left往shopCart(=購物車)的left偏移
      },
      1000,  //圖片從頭到尾所需經過的時間(毫秒)
      function(){
        cloneImg.animate({  //結尾時圖片縮小至0(還存在網頁中,只是沒有顯示),這邊為動畫的尾
          'width' : 0,
          'height' : 0
        },
        function(){ //刪除複製的圖片
          $(this).detach();
        });
      });
    });
  });