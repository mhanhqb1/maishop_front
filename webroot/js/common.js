function getURLVar(a) {
    var b = [],
        c = String(document.location).split("?");
    if (c[1]) {
        var d = c[1].split("&");
        for (i = 0; i < d.length; i++) {
            var e = d[i].split("=");
            e[0] && e[1] && (b[e[0]] = e[1])
        }
        return b[a] ? b[a] : ""
    }
}
$(document).ready(function() {
    cols1 = $("#column-right, #column-left").length, 2 == cols1 ? $("#content .product-layout:nth-child(2n+2)").after('<div class="clearfix visible-md visible-sm"></div>') : 1 == cols1 ? $("#content .product-layout:nth-child(3n+3)").after('<div class="clearfix visible-lg"></div>') : $("#content .product-layout:nth-child(4n+4)").after('<div class="clearfix visible-lg"></div>'), $(".text-danger").each(function() {
        var a = $(this).parent().parent();
        a.hasClass("form-group") && a.addClass("has-error")
    }), $("#currency .currency-select").on("click", function(a) {
        a.preventDefault(), $("#currency input[name='code']").attr("value", $(this).attr("name")), $("#currency").submit()
    }), $("#language a").on("click", function(a) {
        a.preventDefault(), $("#language input[name='code']").attr("value", $(this).data("code")), $("#language").submit()
    }), $("#search input[name='search']").parent().find("button").on("click", function() {
        url = $("base").attr("href") + "/products/search";
        var a = $("header input[name='search']").val();
        a && (url += "?keyword=" + encodeURIComponent(a)), location = url
    }), $("#search input[name='search']").on("keydown", function(a) {
        13 == a.keyCode && $("header input[name='search']").parent().find("button").trigger("click")
    }), $("#menu .dropdown-menu").each(function() {
        var a = $("#menu").offset(),
            b = $(this).parent().offset(),
            c = b.left + $(this).outerWidth() - (a.left + $("#menu").outerWidth());
        c > 0 && $(this).css("margin-left", "-" + (c + 5) + "px")
    }), $("#list-view").click(function() {
        $("#content .product-layout > .clearfix").remove(), $("#content .row > .product-layout").attr("class", "product-layout product-list col-xs-12"), localStorage.setItem("display", "list")
    }), $("#grid-view").click(function() {
        $("#content .product-layout > .clearfix").remove(), cols = $("#column-right, #column-left").length, 2 == cols ? $("#content .product-layout").attr("class", "product-layout product-grid col-lg-6 col-md-6 col-sm-12 col-xs-12") : 1 == cols ? $("#content .product-layout").attr("class", "product-layout product-grid col-lg-4 col-md-4 col-sm-4 col-xs-6") : $("#content .product-layout").attr("class", "product-layout product-grid col-lg-3 col-md-3 col-sm-6 col-xs-12"), localStorage.setItem("display", "grid")
    }), "list" == localStorage.getItem("display") ? $("#list-view").trigger("click") : $("#grid-view").trigger("click"), $("[data-toggle='tooltip']").tooltip({
        container: "body"
    }), $(document).ajaxStop(function() {
        $("[data-toggle='tooltip']").tooltip({
            container: "body"
        })
    })
});
var cart = {
        add: function(a, b) {
            $.ajax({
                url: 'index.php',
                type: "post",
                data: "product_id=" + a + "&quantity=" + ("undefined" != typeof b ? b : 1),
                dataType: "json",
                beforeSend: function() {
                    $("#cart > button").button("loading")
                },
                complete: function() {
                    $("#cart > button").button("reset")
                },
                success: function(a) {
                    $(".alert, .text-danger").remove(), a.redirect && (location = a.redirect), a.success && ($("#content").parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + a.success + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'), setTimeout(function() {
                        $("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + a.total + "</span>")
                    }, 100), $("html, body").animate({
                        scrollTop: 0
                    }, "slow"), $("#cart > ul ").load("index.php?route=common/cart/info ul li"))
                },
                error: function() {
                    alert(1);
                }
            })
        },
        update: function(a, b) {
            $.ajax({
                url: "index.php?route=checkout/cart/edit",
                type: "post",
                data: "key=" + a + "&quantity=" + ("undefined" != typeof b ? b : 1),
                dataType: "json",
                beforeSend: function() {
                    $("#cart > button").button("loading")
                },
                complete: function() {
                    $("#cart > button").button("reset")
                },
                success: function(a) {
                    setTimeout(function() {
                        $("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + a.total + "</span>")
                    }, 100), "checkout/cart" == getURLVar("route") || "checkout/checkout" == getURLVar("route") ? location = "index.php?route=checkout/cart" : $("#cart > ul .container").load("index.php?route=common/cart/info ul li")
                },
                error: function() {
                    alert(2);
                }
            })
        },
        remove: function(a) {
            $.ajax({
                url: "index.php?route=checkout/cart/remove",
                type: "post",
                data: "key=" + a,
                dataType: "json",
                beforeSend: function() {
                    $("#cart > button").button("loading")
                },
                complete: function() {
                    $("#cart > button").button("reset")
                },
                success: function(a) {
                    setTimeout(function() {
                        $("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + a.total + "</span>")
                    }, 100), "checkout/cart" == getURLVar("route") || "checkout/checkout" == getURLVar("route") ? location = "index.php?route=checkout/cart" : $("#cart > ul").load("index.php?route=common/cart/info ul li")
                }
            })
        }
    },
    voucher = {
        add: function() {},
        remove: function(a) {
            $.ajax({
                url: "index.php?route=checkout/cart/remove",
                type: "post",
                data: "key=" + a,
                dataType: "json",
                beforeSend: function() {
                    $("#cart > button").button("loading")
                },
                complete: function() {
                    $("#cart > button").button("reset")
                },
                success: function(a) {
                    setTimeout(function() {
                        $("#cart > button").html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + a.total + "</span>")
                    }, 100), "checkout/cart" == getURLVar("route") || "checkout/checkout" == getURLVar("route") ? location = "index.php?route=checkout/cart" : $("#cart > ul").load("index.php?route=common/cart/info ul li")
                }
            })
        }
    },
    wishlist = {
        add: function(a) {
            $.ajax({
                url: "index.php?route=account/wishlist/add",
                type: "post",
                data: "product_id=" + a,
                dataType: "json",
                success: function(a) {
                    $(".alert").remove(), a.success && $("#content").parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + a.success + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'), a.info && $("#content").parent().before('<div class="alert alert-info"><i class="fa fa-info-circle"></i> ' + a.info + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'), $("#wishlist-total span").html(a.total), $("#wishlist-total").attr("title", a.total), $("html, body").animate({
                        scrollTop: 0
                    }, "slow")
                }
            })
        },
        remove: function() {}
    },
    compare = {
        add: function(a) {
            $.ajax({
                url: "index.php?route=product/compare/add",
                type: "post",
                data: "product_id=" + a,
                dataType: "json",
                success: function(a) {
                    $(".alert").remove(), a.success && ($("#content").parent().before('<div class="alert alert-success"><i class="fa fa-check-circle"></i> ' + a.success + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>'), $("#compare-total").html(a.total), $("html, body").animate({
                        scrollTop: 0
                    }, "slow"))
                }
            })
        },
        remove: function() {}
    };
$(document).delegate(".agree", "click", function(a) {
        a.preventDefault(), $("#modal-agree").remove();
        var b = this;
        $.ajax({
            url: $(b).attr("href"),
            type: "get",
            dataType: "html",
            success: function(a) {
                html = '<div id="modal-agree" class="modal">', html += '  <div class="modal-dialog">', html += '    <div class="modal-content">', html += '      <div class="modal-header">', html += '        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>', html += '        <h4 class="modal-title">' + $(b).text() + "</h4>", html += "      </div>", html += '      <div class="modal-body">' + a + "</div>", html += "    </div", html += "  </div>", html += "</div>", $("body").append(html), $("#modal-agree").modal("show")
            }
        })
    }),
    function(a) {
        a.fn.autocomplete = function(b) {
            return this.each(function() {
                this.timer = null, this.items = new Array, a.extend(this, b), a(this).attr("autocomplete", "off"), a(this).on("focus", function() {
                    this.request()
                }), a(this).on("blur", function() {
                    setTimeout(function(a) {
                        a.hide()
                    }, 200, this)
                }), a(this).on("keydown", function(a) {
                    switch (a.keyCode) {
                        case 27:
                            this.hide();
                            break;
                        default:
                            this.request()
                    }
                }), this.click = function(b) {
                    b.preventDefault(), value = a(b.target).parent().attr("data-value"), value && this.items[value] && this.select(this.items[value])
                }, this.show = function() {
                    var b = a(this).position();
                    a(this).siblings("ul.dropdown-menu").css({
                        top: b.top + a(this).outerHeight(),
                        left: b.left
                    }), a(this).siblings("ul.dropdown-menu").show()
                }, this.hide = function() {
                    a(this).siblings("ul.dropdown-menu").hide()
                }, this.request = function() {
                    clearTimeout(this.timer), this.timer = setTimeout(function(b) {
                        b.source(a(b).val(), a.proxy(b.response, b))
                    }, 200, this)
                }, this.response = function(b) {
                    if (html = "", b.length) {
                        for (i = 0; i < b.length; i++) this.items[b[i].value] = b[i];
                        for (i = 0; i < b.length; i++) b[i].category || (html += '<li data-value="' + b[i].value + '"><a href="#">' + b[i].label + "</a></li>");
                        var c = new Array;
                        for (i = 0; i < b.length; i++) b[i].category && (c[b[i].category] || (c[b[i].category] = new Array, c[b[i].category].name = b[i].category, c[b[i].category].item = new Array), c[b[i].category].item.push(b[i]));
                        for (i in c)
                            for (html += '<li class="dropdown-header">' + c[i].name + "</li>", j = 0; j < c[i].item.length; j++) html += '<li data-value="' + c[i].item[j].value + '"><a href="#">&nbsp;&nbsp;&nbsp;' + c[i].item[j].label + "</a></li>"
                    }
                    html ? this.show() : this.hide(), a(this).siblings("ul.dropdown-menu").html(html)
                }, a(this).after('<ul class="dropdown-menu"></ul>'), a(this).siblings("ul.dropdown-menu").delegate("a", "click", a.proxy(this.click, this))
            })
        }
    }(window.jQuery);