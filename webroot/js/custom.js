function subscribe()
{
    var emailpattern = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
    var email = $('#txtemail').val();
    if (email != "")
    {
        if (!emailpattern.test(email))
        {
            alert("Lỗi email");
            return false;
        } else
        {
            $.ajax({
                url: 'index.php?route=module/newsletters/news',
                type: 'post',
                data: 'email=' + $('#txtemail').val(),
                dataType: 'json',
                success: function (json) {
                    if (json.message[0] == 1)
                        $('.warning-new').html("<div><span class='alert alert-success'>" + json.message[1] + "</span></div>");
                    else
                        $('.warning-new').html("<div><span class='alert alert-danger'>" + json.message[1] + "</div></div>");
                    $('.warning-new').fadeIn('slow').delay(2000).fadeOut('slow');
                },
                error: function () {
                    $('.warning-new').html("<div><span class='alert alert-danger'>" + 'asdadasda' + "</div></div>");
                    $('.warning-new').fadeIn('slow').delay(2000).fadeOut('slow');
                }

            });
            return false;
        }
    } else
    {
        alert("Hãy tham gia đăng ký thành viên để nhận được những thông tin mới nhất từ chúng tôi");
        $(email).focus();
        return false;
    }
}

//Fix the product layout responsiveness
$(document).ready(function () {
    //we only want this code to execute one time even if the are several showintabs mods in the pages
    if (typeof showtabFLAG == 'undefined') {
        //Set flag
        showtabFLAG = true;
        //Columns number
        colsTab = $('#column-right, #column-left').length;
        //default values for carousel
        xsItems = 1;
        smItems = 2;
        mdItems = 3;
        lgItems = 4;
        //Check columns conditions
        if (colsTab == 2) {
            smItems = 3;
            mdItems = 3;
            lgItems = 4;
            $('#content .product-layout-tab').attr('class', 'product-layout-tab product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12');
            $('#content .product-layout-tab:nth-child(2n+2)').after('<div class="clearfix visible-md visible-sm"></div>');
        } else if (colsTab == 1) {
            mdItems = 3;
            lgItems = 3;
            $('#content .product-layout-tab').attr('class', 'product-layout-tab product-grid col-lg-4 col-md-4 col-sm-6 col-xs-12');
            $('#content .product-layout-tab:nth-child(3n+3)').after('<div class="clearfix visible-lg"></div>');
        } else {
            $('#content .product-layout-tab:nth-child(4n+4)').after('<div class="clearfix"></div>');
        }
    }
});

$(document).ready(function () {
    $('.owl-carc1f410, .featured-item, .thubm-caro').owlCarousel({
        itemsCustom: [[1, xsItems], [481, smItems], [768, mdItems], [1025, lgItems]],
        pagination: false,
        navigation: true,
        slideSpeed: 500,
        scrollPerPage: false,
        navigationText: [
            "<i class='fa fa-angle-left'></i>",
            "<i class='fa fa-angle-right'></i>"
        ]
    });
});

$('select[name=\'recurring_id\'], input[name="quantity"]').change(function () {
    $.ajax({
        url: 'index.php?route=product/product/getRecurringDescription',
        type: 'post',
        data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),
        dataType: 'json',
        beforeSend: function () {
            $('#recurring-description').html('');
        },
        success: function (json) {
            $('.alert, .text-danger').remove();
            if (json['success']) {
                $('#recurring-description').html(json['success']);
            }
        }
    });
});

$('#button-cart').on('click', function () {
    $.ajax({
        url: 'index.php?route=checkout/cart/add',
        type: 'post',
        data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),
        dataType: 'json',
        beforeSend: function () {
            $('#button-cart').button('loading');
        },
        complete: function () {
            $('#button-cart').button('reset');
        },
        success: function (json) {
            $('.alert, .text-danger').remove();
            $('.form-group').removeClass('has-error');
            if (json['error']) {
                if (json['error']['option']) {
                    for (i in json['error']['option']) {
                        var element = $('#input-option' + i.replace('_', '-'));
                        if (element.parent().hasClass('input-group')) {
                            element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                        } else {
                            element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');
                        }
                    }
                }
                if (json['error']['recurring']) {
                    $('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');
                }
                // Highlight any found errors
                $('.text-danger').parent().addClass('has-error');
            }

            if (json['success']) {
                $('.breadcrumb').after('<div class="alert alert-success">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');
                $('#cart > button').html('<i class="fa fa-shopping-cart"></i> ' + json['total']);
                $('html, body').animate({scrollTop: 0}, 'slow');
                $('#cart > ul').load('index.php?route=common/cart/info ul li');
            }
        },
        error: function (xhr, ajaxOptions, thrownError) {
            alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
        }
    });
});

$('.date').datetimepicker({
    pickTime: false
});
$('.datetime').datetimepicker({
    pickDate: true,
    pickTime: true
});
$('.time').datetimepicker({
    pickDate: false
});
$('button[id^=\'button-upload\']').on('click', function () {
    var node = this;
    $('#form-upload').remove();
    $('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');
    $('#form-upload input[name=\'file\']').trigger('click');
    if (typeof timer != 'undefined') {
        clearInterval(timer);
    }

    timer = setInterval(function () {
        if ($('#form-upload input[name=\'file\']').val() != '') {
            clearInterval(timer);
            $.ajax({
                url: 'index.php?route=tool/upload',
                type: 'post',
                dataType: 'json',
                data: new FormData($('#form-upload')[0]),
                cache: false,
                contentType: false,
                processData: false,
                beforeSend: function () {
                    $(node).button('loading');
                },
                complete: function () {
                    $(node).button('reset');
                },
                success: function (json) {
                    $('.text-danger').remove();
                    if (json['error']) {
                        $(node).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');
                    }

                    if (json['success']) {
                        alert(json['success']);
                        $(node).parent().find('input').attr('value', json['code']);
                    }
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);
                }
            });
        }
    }, 500);
});

$('#review').delegate('.pagination a', 'click', function (e) {
    e.preventDefault();
    $('#review').fadeOut('slow');
    $('#review').load(this.href);
    $('#review').fadeIn('slow');
});
$('#review').load('index.php?route=product/product/review&product_id=80');
$('#button-review').on('click', function () {
    $.ajax({
        url: 'index.php?route=product/product/write&product_id=80',
        type: 'post',
        dataType: 'json',
        data: $("#form-review").serialize(),
        beforeSend: function () {
            $('#button-review').button('loading');
        },
        complete: function () {
            $('#button-review').button('reset');
        },
        success: function (json) {
            $('.alert-success, .alert-danger').remove();
            if (json['error']) {
                $('#review').after('<div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');
            }

            if (json['success']) {

                $('#review').after('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');
                $('input[name=\'name\']').val('');
                $('textarea[name=\'text\']').val('');
                $('input[name=\'rating\']:checked').prop('checked', false);
            }
        }
    });
});

$(document).ready(function () {
    if (window.matchMedia("(max-width: 768px)").matches) {
        $("#optima_zoom").elevateZoom({zoomType: 'inner', gallery: 'optima_gallery', cursor: 'crosshair', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: ""});
    } else {
        // $("#optima_zoom").elevateZoom({gallery: 'optima_gallery', cursor: 'pointer', galleryActiveClass: "active", imageCrossfade: true, loadingIcon: ""});
        $("#optima_zoom").elevateZoom({
            zoomWindowFadeIn: 500,
            zoomLensFadeIn: 500,
            gallery: "optima_gallery",
            imageCrossfade: true,
            zoomWindowWidth: 350,
            zoomWindowHeight: 350,
            zoomWindowOffetx: 10,
            scrollZoom: true,
            cursor: "pointer"
        });
    }

    var $zoomImg = $("#optima_zoom");
    $(window).resize(function () {

        var height = $zoomImg.height();
        $(".zoomWrapper").css("height", height);
        $(".zoomContainer .zoomWindow").css({"height": height});
        $zoomImg.removeData('elevateZoom');
        $('.zoomContainer').remove();
    });
    $("#optima_zoom").bind("click", function (e) {
        var ez = $('#optima_zoom').data('elevateZoom');
        ez.closeAll(); //NEW: This function force hides the lens, tint and window 
        $.fancybox(ez.getGalleryList());
        return false;
    });
    /*----- cart-plus-minus-button -----*/

    $(".numbers-row").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
    $(".qtybutton").on("click", function () {
        var $button = $(this);
        var oldValue = $button.parent().find("#input-quantity").val();
        if ($button.text() == "+") {
            var newVal = parseFloat(oldValue) + 1;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 0) {
                var newVal = parseFloat(oldValue) - 1;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("#input-quantity").val(newVal);
    });
    $(".sto").click(function () {
        $('html, body').animate({
            scrollTop: $(".bg-ms-product").offset().top
        }, 2000);
    });
});