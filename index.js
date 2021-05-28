$(document).ready(function(){

    //banner owl carousel
    $('#banner-area .owl-carousel').owlCarousel({
        dots: true,
        items: 1

    })

    //banner owl carousel
    $('#top-sale .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            },
        }

    });

    //banner owl carousel
    var $grid = $('.grid').isotope({
        itemSelector: '.grid-item',
        layoutMode: 'fitRows'
    });

    //filter items and button click
    $('.button-group').on('click', 'button', function(){
        var filterValue = $(this).attr('data-filter');
        $grid.isotope({filter: filterValue});
    });

    //New phones owl carousel
    $('#newphones .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 5
            },
        }

    });

    //latest blog owl carousel
    $('#latestblogs .owl-carousel').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            }
        }

    });

    //qty up
    $(".qty-up").on('click', function(){
        var dataid = $(this).attr("data-id");
        var $input = $('.qty-input[data-id=' + dataid +']');
        var $price = $('.product_price[data-id=' + dataid +']');
        var $value = $('.qty-input[data-id=' + dataid +']').val();
        var $dealprice = $('#deal-price');
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            var resultstr = JSON.parse(result);
            var itemPrice = resultstr[0]['item_price'];
            if ($value < 10) {
                $input.val( function(i, oldval) {
                    return ++oldval;
                });
                $price.text(parseInt(itemPrice * $input.val() ).toFixed(2));
                $price.text(parseInt(itemPrice * $input.val() ).toFixed(2));
                let subTotal = parseInt($dealprice.text()) + parseInt(itemPrice);
                $dealprice.text(subTotal.toFixed(2));

            }

          }});


      })
      //qty up
      $(".qty-down").on('click', function(){
        var dataid = $(this).attr("data-id");
        var $input = $('.qty-input[data-id=' + dataid +']');
        var $price = $('.product_price[data-id=' + dataid +']');
        var $dealprice = $('#deal-price');
        var $value = $('.qty-input[data-id=' + dataid +']').val();
        $.ajax({url: "template/ajax.php", type : 'post', data : { itemid : $(this).data("id")}, success: function(result){
            var resultstr = JSON.parse(result);
            var itemPrice = resultstr[0]['item_price'];
            if ($value >= 2) {
                $input.val( function(i, oldval) {
                    return --oldval;
                });
                $price.text(parseInt(itemPrice * $input.val() ).toFixed(2));
                let subTotal = parseInt($dealprice.text()) - parseInt(itemPrice);
                $dealprice.text(subTotal.toFixed(2));

            }

          }});
      });


});