!function (t)  {
    "use strict";
    (t("#polyglot-language-options").length && t("#polyglotLanguageSwitcher").polyglotLanguageSwitcher( {
        effect: "slide", animSpeed: 500, testMode: !0, onChange: function (t)  {
            alert("The selected language is: " + t.selectedItem)
        }
    }),
    t(".dial").length && t(".dial").appear((function ()  {
        var e = t(this), a = (e.attr("data-fgColor"), e.attr("value"));
        e.knob( {
            value: 0, min: 0, max: 100, skin: "tron", readOnly: !0, thickness: .15, dynamicDraw: !0, displayInput: !1
        }),
        t( {
            value: 0
        })
        .animate( {
            value: a
        },
        {
            duration: 2e3, easing: "swing", progress: function ()  {
                e.val(Math.ceil(this.value)).trigger("change")
            }
        }),
        t(this).append((function ()  {
        }))
    }),
    {
        accY: 20
    }),
    t(".pricing-tabs").length && t(".pricing-tabs .tab-btns .tab-btn").on("click", (function (e)  {
        e.preventDefault();
        var a = t(t(this).attr("data-tab"));
        if (t(a).hasClass("actve-tab")) return !1;
        t(".pricing-tabs .tab-btns .tab-btn").removeClass("active-btn"), t(this).addClass("active-btn"), t(".pricing-tabs .pr-content .pr-tab").removeClass("active-tab"), t(a).addClass("active-tab")
    })),
    t(".typed-effect").length && t(".typed-effect").each((function ()  {
        var e = t(this).data("strings"), a = t(this).attr("id");
        new Typed("#" + a,  {
            typeSpeed: 100, backSpeed: 100, fadeOut: !0, loop: !0, strings: e.split(",")
        })
    })),
    t(".count-bar").length && t(".count-bar").appear((function ()  {
        var e = t(this), a = e.data("percent");
        t(e).css("width", a).addClass("counted")
    }),
    {
        accY: -50
    }),
    t(".count-box").length && t(".count-box").appear((function ()  {
        var e = t(this), a = e.find(".count-text").attr("data-stop"), n = parseInt(e.find(".count-text").attr("data-speed"), 10);
        e.hasClass("counted") || (e.addClass("counted"), t( {
            countNum: e.find(".count-text").text()
        })
        .animate( {
            countNum: a
        },
        {
            duration: n, easing: "linear", step: function ()  {
                e.find(".count-text").text(Math.floor(this.countNum))
            },
            complete: function ()  {
                e.find(".count-text").text(this.countNum)
            }
        }))
    }),
    {
        accY: 0
    }),
 t(".accrodion-grp").length && t(".accrodion-grp").each((function () {
   var e = t(this).data("grp-name"), a = t(this), n = a.find(".accrodion");
   a.addClass(e), a.find(".accrodion .accrodion-content").hide(), a.find(".accrodion.active").find(".accrodion-content").show(), n.each((function () {
       t(this).find(".accrodion-title").on("click", (function () {
           if (t(this).parent().hasClass("active")) {
               // Se o item já está ativo, remova a classe "active" e esconda o conteúdo
               t(this).parent().removeClass("active");
               t(this).parent().find(".accrodion-content").slideUp();
           } else {
               // Se o item não está ativo, remova a classe "active" de todos os outros itens e adicione-a ao item clicado
               t(".accrodion-grp." + e).find(".accrodion").removeClass("active");
               t(".accrodion-grp." + e).find(".accrodion").find(".accrodion-content").slideUp();
               t(this).parent().addClass("active");
               t(this).parent().find(".accrodion-content").slideDown();
           }
       }))
   }))
})));
    if (t(".testimonials-two__carousel").length && t(".testimonials-two__carousel").owlCarousel( {
        loop: !1, margin: 30, nav: !1, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !1, autoplayTimeout: 1e4, navText: ['<span class="icon-right-arrow left"></span>', '<span class="icon-right-arrow"></span>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 1
            },
            800:  {
                items: 1
            },
            1024:  {
                items: 1
            },
            1200:  {
                items: 1
            }
        }
    }),
    t(".testimonials-one__carousel").length && t(".testimonials-one__carousel").owlCarousel( {
        loop: !1, margin: 30, nav: !1, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !0, autoplayTimeout: 1e4, navText: ['<span class="icon-right-arrow left"></span>', '<span class="icon-right-arrow"></span>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 1
            },
            800:  {
                items: 2
            },
            1024:  {
                items: 2
            },
            1200:  {
                items: 3
            }
        }
    }),
    t(".testimonial-two__carousel").length && t(".testimonial-two__carousel").owlCarousel( {
        loop: !1, margin: 30, nav: !1, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !0, autoplayTimeout: 1e4, navText: ['<span class="icon-right-arrow left"></span>', '<span class="icon-right-arrow"></span>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 1
            },
            800:  {
                items: 1
            },
            1024:  {
                items: 1
            },
            1200:  {
                items: 1
            }
        }
    }),
    t(".testimonial-one__carousel").length && t(".testimonial-one__carousel").owlCarousel( {
        loop: !1, margin: 30, nav: !0, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !0, autoplayTimeout: 1e4, navText: ['<i class="fa fa-angle-double-left" aria-hidden="true"></i>', '<i class="fa fa-angle-double-right" aria-hidden="true"></i>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 1
            },
            800:  {
                items: 1
            },
            1024:  {
                items: 1
            },
            1200:  {
                items: 2
            }
        }
    }),
    t(".partner-one__carousel").length && t(".partner-one__carousel").owlCarousel( {
        loop: !0, margin: 0, nav: !1, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !1, autoplayTimeout: 1e4, navText: ['<span class="icon-right-arrow left"></span>', '<span class="icon-right-arrow"></span>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 2
            },
            800:  {
                items: 3
            },
            1024:  {
                items: 4
            },
            1200:  {
                items: 4
            }
        }
    }),
    t(".main-slider-three__left-carousel").length && t(".main-slider-three__left-carousel").owlCarousel( {
        loop: !0, animateOut: "fadeOut", animateIn: "fadeIn", margin: 0, nav: !1, smartSpeed: 500, autoHeight: !1, autoplay: !0, dots: !1, autoplayTimeout: 1e4, navText: ['<span class="icon-right-arrow left"></span>', '<span class="icon-right-arrow"></span>'], responsive:  {
            0:  {
                items: 1
            },
            600:  {
                items: 1
            },
            800:  {
                items: 1
            },
            1024:  {
                items: 1
            },
            1200:  {
                items: 1
            }
        }
    }),
    t(".scroll-to-target").length && t(".scroll-to-target").on("click", (function ()  {
        var e = t(this).attr("data-target");
        return t("html, body").animate( {
            scrollTop: t(e).offset().top
        },
        1e3), !1
    })),
    t(".contact-form-validated").length && t(".contact-form-validated").validate( {
        rules:  {
            name:  {
                required: !0
            },
            email:  {
                required: !0, email: !0
            },
            message:  {
                required: !0
            },
            subject:  {
                required: !0
            }
        },
        submitHandler: function (e)  {
            return t.post(t(e).attr("action"), t(e).serialize(), (function (a)  {
                t(e).parent().find(".result").append(a), t(e).find('input[type="text"]').val(""), t(e).find('input[type="email"]').val(""), t(e).find("textarea").val("")
            })),
            !1
        }
    }),
    t(".mc-form").length && t(".mc-form").each((function ()  {
        var e = t(this), a = e.data("url"), n = e.parent().find(".mc-form__response");
        e.ajaxChimp( {
            url: a, callback: function (t)  {
                n.append((function ()  {
                    return '<p class="mc-message">' + t.msg + "</p>"
                })),
                "success" === t.result && (e.removeClass("errored").addClass("successed"), n.removeClass("errored").addClass("successed"), e.find("input").val(""), n.find("p").fadeOut(1e4)), "error" === t.result && (e.removeClass("successed").addClass("errored"), n.removeClass("successed").addClass("errored"), e.find("input").val(""), n.find("p").fadeOut(1e4))
            }
        })
    })),
    t(".video-popup").length && t(".video-popup").magnificPopup( {
        type: "iframe", mainClass: "mfp-fade", removalDelay: 160, preloader: !0, fixedContentPos: !1
    }),
    t(".img-popup").length)  {
        var e =  {
        };
        t(".img-popup").each((function ()  {
            var a = parseInt(t(this).attr("data-group"), 10);
            e[a] || (e[a] = []), e[a].push(this)
        })),
        t.each(e, (function ()  {
            t(this).magnificPopup( {
                type: "image", closeOnContentClick: !0, closeBtnInside: !1, gallery:  {
                    enabled: !0
                }
            })
        }))
    }
    if (t(".main-menu__list").length)  {
        !function (e)  {
            let a = window.location.href.split("/").reverse()[0];
            e.find("li").each((function ()  {
                let e = t(this).find("a");
                t(e).attr("href") == a && t(this).addClass("current")
            })),
            e.children("li").each((function ()  {
                t(this).find(".current").length && t(this).addClass("current")
            })),
            "" == a && e.find("li").eq(0).addClass("current")
        }
        (t(".main-menu__list"))
    }
    if (t(".main-menu__list").length && t(".mobile-nav__container").length)  {
        let t = document.querySelector(".main-menu__list").outerHTML;
        document.querySelector(".mobile-nav__container").innerHTML = t
    }
    if (t(".sticky-header__content").length)  {
        let t = document.querySelector(".main-menu").innerHTML;
        document.querySelector(".sticky-header__content").innerHTML = t
    }
    if (t(".mobile-nav__container .main-menu__list").length)  {
        t(".mobile-nav__container .main-menu__list .dropdown > a").each((function ()  {
            let e = t(this), a = document.createElement("BUTTON");
            a.setAttribute("aria-label", "dropdown toggler"), a.innerHTML = "<i class='fa fa-angle-down'></i>", e.append((function ()  {
                return a
            })),
            e.find("button").on("click", (function (e)  {
                e.preventDefault();
                let a = t(this);
                a.toggleClass("expanded"), a.parent().toggleClass("expanded"), a.parent().parent().children("ul").slideToggle()
            }))
        }))
    }
    (t(".mobile-nav__toggler").length && t(".mobile-nav__toggler").on("click", (function (e)  {
        e.preventDefault(), t(".mobile-nav__wrapper").toggleClass("expanded"), t("body").toggleClass("locked")
    })),
    t(".search-toggler").length && t(".search-toggler").on("click", (function (e)  {
        e.preventDefault(), t(".search-popup").toggleClass("active"), t(".mobile-nav__wrapper").removeClass("expanded"), t("body").toggleClass("locked")
    })),
    t(".mini-cart__toggler").length && t(".mini-cart__toggler").on("click", (function (e)  {
        e.preventDefault(), t(".mini-cart").toggleClass("expanded"), t(".mobile-nav__wrapper").removeClass("expanded"), t("body").toggleClass("locked")
    })),
    t(".odometer").length) && t(".odometer").each((function ()  {
        t(this).appear((function ()  {
            var e = t(this).attr("data-count");
            t(this).html(e)
        }))
    }));
    if (t(".dynamic-year").length)  {
        let e = new Date;
        t(".dynamic-year").html(e.getFullYear())
    }
    t(".wow").length && new WOW( {
        boxClass: "wow", animateClass: "animated", mobile: !0, live: !0
    })
    .init();
    if (t("#donate-amount__predefined").length)  {
        let e = t("#donate-amount");
        t("#donate-amount__predefined").find("li").on("click", (function (a)  {
            a.preventDefault();
            let n = t(this).find("a").text();
            e.val(n), t("#donate-amount__predefined").find("li").removeClass("active"), t(this).addClass("active")
        }))
    }
    if (t(".thm-accordion").length)  {
        t(".thm-accordion").each((function ()  {
            let e = t(this), a = e.attr("id"), n = e.find(".thm-accordion__title");
            e.addClass(a);
            let i = e.find(".thm-accordion__content").hide();
            e.find(".active-item .thm-accordion__content").show(), n.on("click", (function (e)  {
                e.preventDefault();
                t(this);
                let n = t(this).parent();
                !1 === n.hasClass("active-item") && (t("#" + a).find(".thm-accordion__item").removeClass("active-item"), n.addClass("active-item"), i.slideUp(), n.find(".thm-accordion__content").slideDown())
            }))
        }))
    }
    if (t(".add").on("click", (function ()  {
        t(this).prev().val() < 999 && t(this).prev().val(+t(this).prev().val() + 1)
    })),
    t(".sub").on("click", (function ()  {
        t(this).next().val() > 1 && t(this).next().val() > 1 && t(this).next().val(+t(this).next().val() - 1)
    })),
    t(".tabs-box").length && t(".tabs-box .tab-buttons .tab-btn").on("click", (function (e)  {
        e.preventDefault();
        var a = t(t(this).attr("data-tab"));
        if (t(a).is(":visible")) return !1;
        a.parents(".tabs-box").find(".tab-buttons").find(".tab-btn").removeClass("active-btn"), t(this).addClass("active-btn"), a.parents(".tabs-box").find(".tabs-content").find(".tab").fadeOut(0), a.parents(".tabs-box").find(".tabs-content").find(".tab").removeClass("active-tab"), t(a).fadeIn(300), t(a).addClass("active-tab")
    })),
    t(".range-slider-price").length)  {
        var a = document.getElementById("range-slider-price");
        noUiSlider.create(a,  {
            start: [30, 150], limit: 200, behaviour: "drag", connect: !0, range:  {
                min: 10, max: 200
            }
        });
        var n = document.getElementById("min-value-rangeslider"), i = document.getElementById("max-value-rangeslider");
        a.noUiSlider.on("update", (function (e, a)  {
            t(a ? i : n).text(e[a])
        }))
    }
    t(window).on("load", (function ()  {
        if (t(".preloader").length && t(".preloader").fadeOut(), document.querySelectorAll(".thm-swiper__slider").forEach((function (t)  {
            const e = JSON.parse(t.dataset.swiperOptions);
            new Swiper(t, e)
        })),
        document.querySelectorAll(".thm-tiny__slider").forEach((function (t)  {
            const e = JSON.parse(t.dataset.tinyOptions);
            tns(e)
        })),
        function ()  {
            if (t("#testimonials-one__thumb").length)  {
                let t = new Swiper("#testimonials-one__thumb",  {
                    slidesPerView: 3, spaceBetween: 0, speed: 1400, watchSlidesVisibility: !0, watchSlidesProgress: !0, autoplay:  {
                        delay: 5e3
                    }
                });
                new Swiper("#testimonials-one__carousel",  {
                    observer: !0, observeParents: !0, speed: 1400, mousewheel: !0, slidesPerView: 1, autoplay:  {
                        delay: 5e3
                    },
                    thumbs:  {
                        swiper: t
                    }
                })
            }
        }
        (), t(".masonary-layout").length && t(".masonary-layout").isotope( {
            layoutMode: "masonry"
        }),
        t(".post-filter").length && t(".post-filter li").children(".filter-text").on("click", (function ()  {
            var e = t(this), a = e.parent().attr("data-filter");
            return t(".post-filter li").removeClass("active"), e.parent().addClass("active"), t(".filter-layout").isotope( {
                filter: a, animationOptions:  {
                    duration: 500, easing: "linear", queue: !1
                }
            }),
            !1
        })),
        t(".post-filter.has-dynamic-filters-counter").length && t(".post-filter.has-dynamic-filters-counter").find("li").each((function ()  {
            var e = t(this).data("filter"), a = t(".filter-layout").find(e).length;
            t(this).children(".filter-text").append('<span class="count">' + a + "</span>")
        })),
        t(".circle-progress").length && t(".circle-progress").appear((function ()  {
            t(".circle-progress").each((function ()  {
                let e = t(this), a = e.data("options");
                e.circleProgress(a)
            }))
        })),
        t(".post-filter").length)  {
            var e = t(".post-filter li");
            t(".filter-layout").isotope( {
                filter: ".filter-item", animationOptions:  {
                    duration: 500, easing: "linear", queue: !1
                }
            }),
            e.on("click", (function ()  {
                var a = t(this), n = a.attr("data-filter");
                return e.removeClass("active"), a.addClass("active"), t(".filter-layout").isotope( {
                    filter: n, animationOptions:  {
                        duration: 500, easing: "linear", queue: !1
                    }
                }),
                !1
            }))
        }
        t(".post-filter.has-dynamic-filter-counter").length && t(".post-filter.has-dynamic-filter-counter").find("li").each((function ()  {
            var e = t(this).data("filter"), a = t(".filter-layout").find(e).length;
            t(this).append("<sup>[" + a + "]</sup>")
        }))
    })),
    t(window).on("scroll", (function ()  {
        if (t(".stricked-menu").length)  {
            var e = t(".stricked-menu");
            t(window).scrollTop() > 130 ? e.addClass("stricky-fixed") : t(this).scrollTop() <= 130 && e.removeClass("stricky-fixed")
        }
        if (t(".scroll-to-top").length)  {
            t(window).scrollTop() > 100 ? t(".scroll-to-top").fadeIn(500) : t(this).scrollTop() <= 100 && t(".scroll-to-top").fadeOut(500)
        }
    })),
    t(".before-after-twentytwenty").length && t(".before-after-twentytwenty").each((function ()  {
        var e = t(this).attr("id");
        t("#" + e).twentytwenty(), t(document).on("shown.bs.tab", 'a[data-toggle="tab"]', (function (a)  {
            var n = t(a.target).attr("data-target"), i = t(".tab-pane" + n), o = "#" + e;
            0 === i.find(o).height() && i.find(o).trigger("resize")
        }))
    }))
}
(jQuery);