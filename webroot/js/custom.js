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
    $('.owl-carc1f410').owlCarousel({
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