
var index = function() {
    var thisObj = this;
    this.ready = function() {
        new Swiper ('.swiper-container-h', {
            loop: true,
            autoplay: 4000,
            effect : 'slide',
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next-h',
            prevButton: '.swiper-button-prev-h',
            paginationClickable: true
        });
        new Swiper ('.swiper-container-v', {
            loop: true,
            nextButton: '.swiper-button-next-v',
            prevButton: '.swiper-button-prev-v',
            autoplay: 5000,
        });
        new Swiper ('.swiper-container-t', {
            loop: true,
            nextButton: '.swiper-button-next-t',
            prevButton: '.swiper-button-prev-t',
            autoplay: 5000,
        });
        window.requestAnimationFrame = window.requestAnimationFrame || window.mozRequestAnimationFrame || window.webkitRequestAnimationFrame || window.msRequestAnimationFrame;
        this.click();
        this.teamVideoBgAnimate();
    };
    this.click = function() {
        $(".shj_index_xgt_fglist_item_img").hover(function() {
            $(this).next().css("color","#75b43e");
        },function() {
            $(this).next().css("color","#000");
        });
        $(".shj_index_3d_item,.shj_index_tuan_item").hover(function() {
            $(this).animate({marginTop: "-5px"},400).css("box-shadow","0 0 10px rgba(0,0,0,0.3)");
        },function() {
            $(this).animate({marginTop: "0px"},400).css("box-shadow","0 0 10px rgba(0,0,0,0)");
        });
        $(".shj_index_team_ag_hover_bg").click(function() {
            var that = $(this).parent().parent();
            if($(that).attr("data-v") == "close") {
                $(that).animate({height: "313px"});
                $(".shj_index_team_ag_hover_icon").addClass("shj_index_team_ag_hover_icon_r");
                $(".shj_index_team_ag_video_box").css("display","block");
                $(that).attr("data-v","open");
            } else {
                $(that).animate({height: "90px"});
                $(".shj_index_team_ag_hover_icon").addClass("shj_index_team_ag_hover_icon_z");
                $(".shj_index_team_ag_video")[0].pause();
                $(".shj_index_team_ag_video_play").fadeIn();
                setTimeout(function(){
                    $(".shj_index_team_ag_video_box").css("display","hide");
                    $(".shj_index_team_ag_hover_icon").removeClass("shj_index_team_ag_hover_icon_r");
                    $(".shj_index_team_ag_hover_icon").removeClass("shj_index_team_ag_hover_icon_z");
                },500);
                $(that).attr("data-v","close");
                $(".shj_index_team_ag_video").attr("data-v","false");
            }
        });
        $(".shj_index_team_ag_video_play").click(function() {
            $(this).fadeOut();
            if($(".shj_index_team_ag_video")[0].paused) {
                $(".shj_index_team_ag_video")[0].play();
                $(".shj_index_team_ag_video").attr("data-v","true");
            } else {
                $(".shj_index_team_ag_video")[0].pause();
            }
        });
    }
    this.teamVideoBgAnimate = function() {
        $(".shj_index_team_ag_bgimg").each(function() {
            if(this.offsetLeft < -407.5) {
                $(this).css("left",407.5);
            }
        });
        $("#shj_team_bgimg1").css("left",$("#shj_team_bgimg1")[0].offsetLeft-1);
        $("#shj_team_bgimg2").css("left",$("#shj_team_bgimg2")[0].offsetLeft-1);
        $("#shj_team_bgimg3").css("left",$("#shj_team_bgimg3")[0].offsetLeft-2);
        $("#shj_team_bgimg4").css("left",$("#shj_team_bgimg4")[0].offsetLeft-2);
        requestAnimationFrame(thisObj.teamVideoBgAnimate);
    }
};
var yindao = function() {
    var thisObj = this;
    this.s =  [
        {'c':'北京','id':'bj','z':'B','s':'北京'},
        {'c':'成都','id':'cd','z':'C','s':'四川'},
        {'c':'南充','id':'nc','z':'N','s':'四川'},
        {'c':'贵阳','id':'gy','z':'G','s':'贵州'},
        {'c':'西安','id':'xa','z':'X','s':'陕西'},
        {'c':'昆明','id':'km','z':'K','s':'云南'},
        {'c':'武汉','id':'wh','z':'W','s':'湖北'},
        {'c':'长沙','id':'cs','z':'C','s':'湖南'},
        {'c':'合肥','id':'hf','z':'H','s':'安徽'},
        {'c':'南京','id':'nj','z':'N','s':'江苏'},
        {'c':'重庆','id':'cq','z':'C','s':'重庆'},
        {'c':'石家庄','id':'sjz','z':'S','s':'河北'},
        {'c':'济宁','id':'jning','z':'J','s':'山东'},
        {'c':'天津','id':'tj','z':'T','s':'天津'},
        {'c':'苏州','id':'sz','z':'S','s':'江苏'},
        {'c':'上海','id':'sh','z':'S','s':'上海'},
        {'c':'济南','id':'jn','z':'J','s':'山东'},
        {'c':'广州','id':'gz','z':'G','s':'广东'},
        {'c':'青岛','id':'qd','z':'Q','s':'山东'},
        {'c':'福州','id':'fz','z':'F','s':'福建'},
        {'c':'沈阳','id':'sy','z':'S','s':'辽宁'},
        {'c':'杭州','id':'hz','z':'H','s':'浙江'},
        {'c':'太原','id':'ty','z':'T','s':'山西'},
        {'c':'大连','id':'dl','z':'D','s':'辽宁'},
        {'c':'成都市','id':'cd5','z':'C','s':'四川'},
    ];
    this.ready = function() {
        var a = $("body").append("<script src=\"http://int.dpool.sina.com.cn/iplookup/iplookup.php?format=js\"></script>");
        //var nowCity = remote_ip_info;
        var sArr = [];
        for(var i=0; i<this.s.length; i++) {
            if($.inArray(this.s[i]['s'],sArr) == -1) {
                sArr.push(this.s[i]['s']);
            }
        }
        for(var i=0; i<sArr.length; i++) {
            $("#select_s").append("<option value=\"\">"+sArr[i]+"</option>");
        }
        $("#select_s").change(function() {
            $("#select_c").html("<option value=\"\">城市</option>");
            var value = $(this).find("option:selected").text();
            if(value != '省份') {
                for(var i=0; i<thisObj.s.length; i++) {
                    if(thisObj.s[i]['s'] == value) {
                        $("#select_c").append("<option value=\"http://"+thisObj.s[i]['id']+".shj.cn\">"+thisObj.s[i]['c']+"</option>");
                    }
                }
            }
        });
        $("#select_c").change(function() {
            var text = $(this).find("option:selected").text();
            var value = $(this).find("option:selected").val();
            if(text != '城市') {
                $(".shj_yindao_citys_search").attr("href",value);
            }
        });
        $(".shj_yindao_baike_cover").each(function() {
            var	a = $(this).find("a"),
                img = $(this).find("a img"),
                data_demo = $(this).next().find("ul li:eq(0) a"),
                url = $(data_demo).attr("href"),
                imgurl = $(data_demo).attr("data-img"),
                imgalt = $(data_demo).attr("title");
            $(a).attr("href",url).attr("title",imgalt);
            $(img).attr("src",imgurl).attr("alt",imgalt);
        });
        this.click();
    }
    this.click = function() {
        $("#city_zm li").click(function() {
            var value = $(this).html();
            $(".shj_yindao_citys_item_zm_city").html("");
            $("#city_zm li").removeClass("shj_yindao_citys_item_zm_click");
            $(this).addClass("shj_yindao_citys_item_zm_click");
            for(var i=0; i<thisObj.s.length; i++) {
                if(thisObj.s[i]['z'] == value) {
                    $(".shj_yindao_citys_item_zm_city").append("<a href=\"http://"+thisObj.s[i]['id']+".shj.cn\" class=\"shj_yindao_city\" >"+thisObj.s[i]['c']+"</a>");
                }
            }
        });
        $(".shj_yindao_baike_lists ul li a").hover(function() {
            $(".shj_yindao_baike_cover a").attr("href",$(this).attr("href")).attr("title",$(this).attr("title"));
        })
    };
};
var zxrj = function() {
    var thisObj = this;
    this.ready = function(page) {
        if(page == 'lzxrj') {
            var sh = $(window).height(),
                sw = $(window).width();
            for(var i=0; i<$(".shj_lrj_item_info").length; i++) {
                var that = $(".shj_lrj_item_info p")[i];
                if($(that).text().length > 100) {
                    $(that).text($(that).text().substr(0,100)+"...");
                }
                $(that).show();
            };
            this.lclick();
        } else {
            $('.shj_srj_item_imgbox').each(function(index,item){
                var mySwiper = new Swiper(item, {
                    slidesPerView : 'auto',
                    slidesPerGroup : 1,
                    nextButton: $(item).find('.swiper-button-next')[0],
                    prevButton: $(item).find('.swiper-button-prev')[0],
                    onDoubleTap: function(swiper){
                        $("#showBigImg").attr("src",$(swiper.clickedSlide).find("img").attr("src"));
                        console.log($(swiper.clickedSlide).find("img").attr("src"));
                        layer.open({
                            type: 1,
                            title: false,
                            closeBtn: 0,
                            skin: 'layui-layer-nobg', //没有背景色
                            shade: 0.8,
                            shadeClose: true,
                            content: $("#showBigImg").parent()
                        });
                    }
                });
            });
        }

    };
    this.lclick = function() {
        $(".shj_lrj_lists_nav").click(function() {
            $(".shj_lrj_lists_nav").removeClass("shj_lrj_lists_nav_now");
            $(this).addClass("shj_lrj_lists_nav_now");
        });
        $(".shj_lrj_item_imgbox_bg").click(function() {
            thisObj.tc_show(this);
        });
        $(".shj_lrj_tc_close").click(function() {
            thisObj.tc_close();
        });
    }
    this.swiper = {};
    this.creatSwiper = function() {
        this.swiper = new Swiper ('.swiper-container', {
            loop: true,
            pagination: '.swiper-pagination',
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            paginationClickable: true,
            height: 720,
        });
    };
    this.tc_close = function() {
        $(".shj_lrj_tc").animate({opacity: 0},500);
        setTimeout(function() {$(".shj_lrj_tc").css("visibility","hidden");},500);
        $("body").attr("onmousewheel","");
        $(".shj_lrj_tc_imgbox").html("");
        this.swiper = {};
    };
    this.tc_show = function(that) {
        var imgURL = "",
            showUrl = $(that).attr("data-url"),
            appendBox = $(".shj_lrj_tc_imgbox"),
            urlBox = $(that).parent().siblings(".shj_lrj_item_allimgurl"),
            urlLen = $(urlBox).find("span").length;
        swiperHtml = $("#swiper_html").html();
        $(appendBox).append(swiperHtml);
        for(var i=0; i<urlLen; i++) {
            imgURL = $(urlBox).find("span:eq("+i+")").attr("data-url");
            imgALT = $(urlBox).find("span:eq("+i+")").attr("data-alt");
            var appendChild = "<div class=\"swiper-slide\"><span><img src=\""+imgURL+"\" alt=\""+imgALT+"\" /></span></div>";
            $(appendBox).find(".swiper-wrapper").prepend(appendChild);
        }
        $(appendBox).find(".swiper-wrapper").append("<div class=\"swiper-slide swiper-no-swiping\"><span><a href=\""+showUrl+"\" style=\"font-size: 16px; color: #fff;\" target=\"_blank\">点击查看详情</a></span></div>");
        this.creatSwiper();
        $("body").attr("onmousewheel","return false;");
        $(".shj_lrj_tc").css("visibility","visible").animate({opacity: 1},500);
    };
};
var jzzs = function() {
    this.ready = function() {
        new Swiper ('.swiper-container', {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 5000,
            pagination: '.swiper-pagination',
            paginationClickable: true
        });
        this.click();
    }
    this.click = function() {
        $(".shj_lrj_lists_nav").click(function() {
            $(".shj_lrj_lists_nav").removeClass("shj_lzs_lists_nav_now");
            $(this).addClass("shj_lzs_lists_nav_now");
        })
    }
};
var xgt = function() {
    var thisObj = this;
    this.needLoadImage = [];
    this.nomore = false;
    this.loadFirst = false;
    this.scrollNum = 0;
    this.prevScrollHeight = 0;
    this.ready = function(page) {
        if(page == 'lxgt') {
            this.lReady();
        } else {
            this.sReady();
        }
    };
    this.lReady = function() {
        fzlbz();
        new Swiper ('.swiper-container', {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            autoplay: 5000,
            pagination: '.swiper-pagination',
            paginationClickable: true
        });
        var getVal = GetRequest();
        if(getVal.indexOf('source') > -1) {
            getVal = '';
        }
        if(getVal == '') {
            window.onload = function() {
                $(".shj_lxgt_loading").hide();
                thisObj.show(1);
                thisObj.ajaxGetXgt();
                gd();
            }
        } else {
            var getValArr = getVal.split("_");
            var demo = $("#"+getValArr[0]).parent();
            for(var i=0; i<9; i++) {
                var that = $(demo).find("li:eq("+i+")");
                if($(that).attr("data-v") == getValArr[1]) {
                    $(that).parent().find("li").removeClass("shj_lxgt_select_focus").css("color","#000");
                    $(that).addClass("shj_lxgt_select_focus").css("color","#fff");
                    $(that).siblings("input").val(getValArr[1]);
                    $("#thisPutData").data("thisData",1);
                    $("#thisPutData").data("thisNone",false);
                    thisObj.prevScrollHeight = 0;
                    $(".shj_lxgt_lists").remove();
                    setTimeout(function() {
                        $(".shj_lxgt_lists_wrap").append('<div class="shj_lxgt_lists"></div>');
                        thisObj.ajaxGetXgt();
                    },300);
                    gd();
                    break;
                }
            }
        }
        function gd() {
            $(window).scroll(function() {
                var wscrollTop = $(window).scrollTop();
                var nowHeight = $(".shj_lxgt_lists").height();
                if(thisObj.scrollNum < 3 && wscrollTop > nowHeight) {
                    thisObj.show(0);
                    thisObj.scrollNum++;
                };
            });
        }
        this.lClick();
    };
    this.show = function(start) {
        if(start == 1) {
            thisObj.minigrid('.shj_lxgt_lists', '.shj_lxgt_item', 20, null,
                function(){
                    $(".shj_lxgt_lists_wrap").css("opacity",1);
                }
            );
        } else {

            var needLoadImage = this.needLoadImage;
            var loadingSuccess = [];
            var imgComplete = function(image,s,n) {
                if(typeof(image) == 'undefined') return false;
                if(image.complete) {
                    loadingSuccess.push(image);
                    if(needLoadImage.length == loadingSuccess.length) {
                        thisObj.minigrid('.shj_lxgt_lists', '.shj_lxgt_item', 20, null,
                            function(){
                                $(".shj_lxgt_item").css("z-index",99);
                                $(".shj_lxgt_lists_wrap").css("opacity",1);
                                setTimeout(function() {
                                    $(".shj_lxgt_loading").hide();
                                    $(".shj_lxgt_item").css("opacity",1);
                                    if(thisObj.nomore == true) {
                                        $(".shj_lxgt_morebtn").hide();
                                        $(".shj_lxgt_nomore").show();
                                    } else {
                                        if(thisObj.scrollNum == 3) {
                                            $(".shj_lxgt_morebtn").show();
                                        }
                                        thisObj.ajaxGetXgt();
                                    }
                                },500);
                            }
                        );
                        $(".shj_lxgt_item").click(function() {
                            var thisImg = $(this).find("img");
                            $("#showBigImg").attr("src",$(thisImg).attr("src"));
                            var b = $(thisImg).height() / $(thisImg).width();
                            var thatWidth = 600 / b;
                            var area = [thatWidth+"px","600px"];
                            layer.open({
                                type: 1,
                                title: false,
                                closeBtn: 0,
                                area: area,
                                skin: 'layui-layer-nobg', //没有背景色
                                shade: 0.8,
                                shadeClose: true,
                                content: $("#showBigImg").parent()
                            });
                        });
                    } else {
                        imgComplete(needLoadImage[s+1],s+1,0);
                    }
                } else {
                    setTimeout(function() {
                        if(n < 5) {
                            imgComplete(needLoadImage[s],s,n+1);
                        } else {
                            imgComplete(needLoadImage[s+1],s+1,0);
                            loadingSuccess.push(image);
                        }
                    },250);
                }
            }
            imgComplete(needLoadImage[0],0,0);
        }
    }
    this.ajaxGetXgt = function() {
        var fg = $("#zxfg").val(),
            hx = $("#zxhx").val(),
            kj = $("#kj").val(),
            page = parseInt($("#p").val());
        if(fg == '' && hx == '' && kj == '') {
            page += 1;
            $("#p").val(page);
            var url = 'http://www.shj.cn/index.php?m=content&c=index&a=getXgtT&p='+page;
            ajaxGetData(url,function(data) {
                if(data == '') {
                    thisObj.nomore = true;
                } else {
                    for(var i=0; i<data.length; i++) {
                        var imageArr = [],
                            loadEndImage = [];
                        var image = new Image();
                        image.src = data[i]['thumb'];
                        imageArr.push(image);
                        var html = '<div class="shj_lxgt_item" data-id="'+data[i]['id']+'" style="opacity: 0; z-index: 9;"><a href="'+data[i]['url']+'" title="'+data[i]['title']+'" target="_blank"><img src="'+data[i]['thumb']+'" alt="'+data[i]['title']+'"><div class="shj_lxgt_info">'+data[i]['title']+'<span>'+data[i]['imgnum']+'张</span></div></a></div>';
                        $(".shj_lxgt_lists").append(html);
                    }
                    thisObj.needLoadImage = imageArr;
                    thisObj.nomore = false;
                }
            });
        } else {
            var thisData = $("#thisPutData").data("thisData");
            var thisNone = $("#thisPutData").data("thisNone");
            var url = 'http://www.shj.cn/index.php?m=content&c=index&a=getXgtZ&fg='+fg+'&hx='+hx+'&kj='+kj+'&p='+page;
            if(thisData == 1) {
                thisObj.loadFirst = true;
                ajaxGetData(url,function(data) {
                    console.log(data);
                    if(data == '') {
                        thisObj.nomore = true;
                        $(".shj_lxgt_loading").hide();
                        $(".shj_lxgt_lists_wrap").css("opacity",1);
                        $(".shj_lxgt_none").show();
                    } else {
                        if(data.length > 12) {
                            var loadData = data.slice(0,12);
                            data.splice(0,12);
                            $("#thisPutData").data("thisData",data);
                            loading(loadData);
                            thisObj.nomore = false;
                        } else {
                            thisNone = true;
                            $("#thisPutData").data("thisData",'');
                            loading(data);
                            thisObj.nomore = true;
                        }
                    }
                });
            } else {
                thisObj.loadFirst = false;
                if(this.thisNone == true) {
                    if(this.thisData.length == 0) {
                        thisObj.nomore = true;
                    }
                    if(this.thisData.length > 12) {
                        this.loading(this.thisData.slice(0,12));
                        $("#thisPutData").data("thisData",this.thisData.splice(0,12));
                        thisObj.nomore = false;
                    } else {
                        this.loading(this.thisData);
                        thisObj.nomore = true;
                    }
                } else {
                    if(thisData.length > 12) {
                        loading(thisData.slice(0,12));
                        $("#thisPutData").data("thisData",thisData.splice(0,12));
                        thisObj.nomore = false;
                    } else {
                        page += 1;
                        $("#p").val(page);
                        var url = 'http://www.shj.cn/index.php?m=content&c=index&a=getXgtZ&fg='+fg+'&hx='+hx+'&kj='+kj+'&p='+page;
                        ajaxGetData(url,function(data) {
                            if(data < 12) {
                                thisNone = true;
                            }
                            thisData = $.merge(thisData,data);
                            if(thisData.length > 12) {
                                loading(thisData.slice(0,12));
                                $("#thisPutData").data("thisData",thisData.splice(0,12));
                                thisObj.nomore = false;
                            } else {
                                loading(thisData);
                                $("#thisPutData").data("thisData",'');
                                thisObj.nomore = true;
                            }
                        });
                    }
                }
            }
        }
        function ajaxGetData(url,callback) {
            $.ajax({
                type: "get",
                async: false,
                url: url,
                dataType: "jsonp",
                jsonp: "callback",
                success: function (data) {
                    callback(data);
                },
                error: function() {
                    layer.msg('请求失败!', {time: 3000, icon:5});
                }
            });
        }
        function loading(data) {
            var imageArr = [];
            for(var i=0; i<data.length; i++) {
                var image = new Image();
                image.src = data[i].url;
                imageArr.push(image);
                var html = '<div class="shj_lxgt_item" data-id='+data[i]['id']+' style="opacity: 0; z-index: 9;"><a href="javascript:;" title="'+data[i]['alt']+'" ><img src="'+data[i]['url']+'" alt="'+data[i]['alt']+'"><div class="shj_lxgt_info">'+data[i]['alt']+'</div></a></div>';
                $(".shj_lxgt_lists").append(html);
            }
            thisObj.needLoadImage = imageArr;
            if(thisObj.loadFirst == true) {
                thisObj.show(0);
            }
            if($(".shj_lxgt_lists_wrap").attr("data-v") > 3) {
                thisObj.show(0);
            }
        }
    }
    this.lClick = function() {
        $(".shj_lxgt_morebtn").click(function() {
            thisObj.show(0);
        });
        // $(".shj_lxgt_select_blur").click(function() {
        //     $(this).parent().find("li").removeClass("shj_lxgt_select_focus").css("color","#000");
        //     $(this).siblings("input").val($(this).attr("data-v"));
        //     $(this).addClass("shj_lxgt_select_focus").css("color","#fff");
        //     $(".shj_lxgt_loading").show();
        //     $(".shj_lxgt_lists_wrap").css("opacity",0).attr("data-v",1);
        //     $(".shj_lxgt_none").hide();
        //     $(".shj_lxgt_morebtn").hide();
        //     $("#thisPutData").data("thisData",1);
        //     $("#thisPutData").data("thisNone",false);
        //     $(".shj_lxgt_nomore").hide();
        //     thisObj.scrollNum = 0;
        //     $("#p").val(0);
        //     $(".shj_lxgt_lists").remove();
        //     setTimeout(function() {
        //         $(".shj_lxgt_lists_wrap").append('<div class="shj_lxgt_lists"></div>');
        //         thisObj.ajaxGetXgt();
        //     },300);
        // });

        $(".shj_lxgt_select_blur").hover(function() {
            if($(this).hasClass("shj_lxgt_select_focus")) return false;
            $(this).css("color","#127a59");
        },function() {
            if($(this).hasClass("shj_lxgt_select_focus")) return false;
            $(this).css("color","#000");
        });
    };
    var sSwiper = {};
    this.sReady = function () {
        var that = this;
        sSwiper = new Swiper('.shj_sxgt_img_smallimg_box', {
            slidesPerView: 'auto',
            centeredSlides: false,
            slideToClickedSlide:true,
            nextButton: '.shj_sxgt_img_controller_next',
            prevButton: '.shj_sxgt_img_controller_prev',
        });
        this.updateSize();
        $(window).resize(function() {that.updateSize();});
        $("#show_bog_img").attr("src",$(".shj_sxgt_img_smallimg_box .swiper-slide:first-child").find("img").attr("src"));
        $(".shj_sxgt_img_smallimg_box .swiper-slide:first-child").addClass("shj_sxgt_img_smallimg_box_now");
        bdshare();
        this.sClick();
    };
    this.sClick = function() {
        $(".shj_sxgt_img_controller_btn").click(function() {
            var data_now = $(".shj_sxgt_img_smallimg_box").attr("data-now");
            var demo = $(".shj_sxgt_img_smallimg_box .swiper-wrapper");
            var now_demo = $(demo).find(".swiper-slide:eq("+data_now+")");
            if($(this).attr("data") == "next") {
                if(data_now == $(demo).find(".swiper-slide").length-1) return;
                $(now_demo).removeClass("shj_sxgt_img_smallimg_box_now");
                $(now_demo).next().addClass("shj_sxgt_img_smallimg_box_now");
                $("#show_bog_img").attr("src",$(now_demo).next().find("img").attr("src"));
                $(".shj_sxgt_img_smallimg_box").attr("data-now",$(now_demo).next().attr("data-v"));
            } else {
                if(data_now == 0) return;
                $(now_demo).removeClass("shj_sxgt_img_smallimg_box_now");
                $(now_demo).prev().addClass("shj_sxgt_img_smallimg_box_now");
                $("#show_bog_img").attr("src",$(now_demo).prev().find("img").attr("src"));
                $(".shj_sxgt_img_smallimg_box").attr("data-now",$(now_demo).prev().attr("data-v"));
            }
        });
        $(".shj_sxgt_img_smallimg_box img").click(function() {
            $(".shj_sxgt_img_smallimg_box .swiper-slide").removeClass("shj_sxgt_img_smallimg_box_now");
            $(this).parent().addClass("shj_sxgt_img_smallimg_box_now");
            $("#show_bog_img").attr("src",$(this).attr("src"));
            $(".shj_sxgt_img_smallimg_box").attr("data-now",$(this).parent().attr("data-v"));
        });
        $(".prev").click(function() {
            $(".shj_sxgt_img_controller_prev").click();
        });
        $(".next").click(function() {
            $(".shj_sxgt_img_controller_next").click();
        });
        $(".shj_srj_tbm_tjbtn").click(function() {
            var name = $("#name").val(),
                city = $("#city option:selected").val(),
                cityname = $("#city option:selected").html(),
                xiaoqu = $("#xiaoqu").val(),
                shi = $("#shi option:selected").val(),
                ting = $("#ting option:selected").val(),
                wei = $("#wei option:selected").val(),
                tx = $("#tx option:selected").val(),
                mianji = $("#mianji").val(),
                tel = $("#tel").val();
            if(name == '') {
                layer.tips('请输入您的姓名', '#name', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(city == '') {
                layer.tips('请选择您所在城市', '#city', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(xiaoqu == '') {
                layer.tips('请输入您的小区名称', '#xiaoqu', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(tx == '') {
                layer.tips('请选择装修套系', '#tx', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(mianji == '') {
                layer.tips('请输入您的室内面积', '#mianji', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(tel == '') {
                layer.tips('请输入您的手机号码', '#tel', {tips: [1, '#75b43f'],time: 2000});
                return false;
            } else if(!/^1[34578]\d{9}$/.test(tel)) {
                layer.tips('您输入的手机号码错误，请重新输入', '#tel', {tips: [1, '#75b43f'],time: 2000});
                $("#tel").val("");
                return false;
            }
            if(getQueryString("source") != null) {
                var free = getQueryString("source");
            } else {
                var free = 'mf';
            }
            var sum = getlbz(parseInt(wei),parseInt(mianji),pcCityList[city]);
            var data = {city: cityname, cityid: city,title: '效果图内容页装修计算器', type: '报价', source: 'PC', fromlink: window.location.href, free: free,name: name, tel: tel, xiaoqu: xiaoqu, area: mianji, beizhu: "户型：" + shi + "室" + ting + "厅" + wei + "卫",sum: sum};
            $.ajax({
                url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
                type: "get",
                async: false,
                dataType: 'jsonp',
                jsonp: "callback",
                jsonpCallback: "ajaxJsonp",
                data : data,
                success: function (rst) {
                    if(rst.flag == 1) {
                        layer.msg(rst.msg, {time: 3000, icon:6});
                        $("input[type='text'],input[type='number']").val('');
                    } else {
                        layer.msg(rst.msg, {time: 3000, icon:5});
                    }
                },
                error:function() {
                    layer.msg('请求失败!', {time: 3000, icon:5});
                }
            });
        });
        $(".shj_sxgt_bjtc_close").click(function() {
            $(".shj_sxgt_bjtc_bg").fadeOut();
        });
    };
    this.updateSize = function() {
        var sw = $(window).width(),
            sh = $(window).height();
        $(".shj_sxgt_wrap").height(sh);
        if(sw < 1800) {
            $(".shj_sxgt_head_nav ul li:first-child").html("菜单");
            $(".shj_sxgt_head_nav").addClass("shj_sxgt_head_nav_small");
        } else {
            $(".shj_sxgt_head_nav").removeClass("shj_sxgt_head_nav_small");
        }
        $(".shj_sxgt_left_block").width(sw-$(".shj_srj_right_block").width()-53).height(sh-91);
        var imboxH = $(".shj_sxgt_left_block").height()-220;
        var imboxW = imboxH*1.25;
        $(".shj_sxgt_imgbox").height(imboxH).width(imboxW);
        $(".shj_sxgt_imgbox>span>img").css("max-height",imboxH).css("max-width",imboxW);
    };
    this.minigrid = function(containerSelector, itemSelector, gutter, animate, done) {
        var forEach = Array.prototype.forEach;
        var containerEle = document.querySelector(containerSelector);
        var itemsNodeList = document.querySelectorAll(itemSelector);
        gutter = gutter || 0;
        containerEle.style.width = '';
        var containerWidth = containerEle.getBoundingClientRect().width;
        var firstChildWidth = itemsNodeList[0].getBoundingClientRect().width + gutter;
        var cols = Math.max(Math.floor((containerWidth - gutter) / firstChildWidth), 1);
        var count = 0;
        containerWidth = (firstChildWidth * cols + gutter) + 'px';
        containerEle.style.width = containerWidth;
        for (var itemsGutter = [], itemsPosX = [], g = 0; g < cols; g++) {
            itemsPosX.push(g * firstChildWidth + gutter);
            itemsGutter.push(gutter);
        }
        forEach.call(itemsNodeList, function(item){
            var itemIndex = itemsGutter.slice(0).sort(function (a, b) {
                return a - b;
            }).shift();
            itemIndex = itemsGutter.indexOf(itemIndex);
            var posX = itemsPosX[itemIndex];
            var posY = itemsGutter[itemIndex];
            var transformProps = [
                'webkitTransform',
                'MozTransform',
                'msTransform',
                'OTransform',
                'transform'
            ];
            if (!animate) {
                forEach.call(transformProps, function(transform){
                    item.style[transform] = 'translate(' + posX + 'px,' + posY + 'px)';
                });
            }
            itemsGutter[itemIndex] += item.getBoundingClientRect().height + gutter;
            count = count + 1;
            if (animate) {
                return animate(item, posX, posY, count);
            }
        });
        var containerHeight = itemsGutter.slice(0).sort(function (a, b) {
            return a - b;
        }).pop();
        containerEle.style.height = containerHeight + 'px';
        if (typeof done === 'function'){
            done();
        }
    }
};
var anli = function() {
    var thisObj = this;
    this.ready = function(page) {
        if(page == "lanli") {
            this.lReady();
        } else {
            this.sReady();
        }
    };
    this.lReady = function() {
        $("#shj_lsjs_search_tx span").html('全部');
        $("#shj_lsjs_search_hx span").html('全部');
        $("#shj_lsjs_search_fg span").html('全部');
        $("#shj_lsjs_search_mj span").html('全部');
        chooseMenu('lanli');
        this.lClick();
    }
    this.sReady = function() {
        bdshare();
        this.sClick();
    }
    this.lClick = function() {
        $("#shj_lanli_searchBtn").click(function() {
            //......
        });
    }
    this.sClick = function() {
        $(".shj_sal_controller_btn").click(function() {
            thisObj.sgd(this);
        });
        $(".shj_sal_smallimg_bg").click(function() {
            thisObj.sht(this);
        });
    };
    this.sgd = function(that) {
        if($(".shj_sal_bogimg ul").is(":animated") || $(".shj_sal_smallimg_ul").is(":animated")) return false;
        var bog_demo = $(".shj_sal_bogimg");
        var small_demo = $(".shj_sal_smallimg_ul");
        var this_data = Number($(small_demo).attr("data-v"));
        var now_demo = $(small_demo).find("li:eq("+this_data+")");
        if($(that).attr("data-v") == "prev") {
            if($(".shj_sal_smallimg_ul li:first-child")[0] == $(now_demo)[0]) return false;
            this_data -= 1;
            $(".shj_sal_smallimg_ul").animate({marginLeft: -(140*this_data)});
            $(".shj_sal_bogimg").animate({marginLeft: -(930*this_data)});
            $(now_demo).removeClass("shj_sal_smallimg_now");
            $(now_demo).prev().addClass("shj_sal_smallimg_now");
        } else {
            if($(".shj_sal_smallimg_ul li:last-child")[0] == $(now_demo)[0]) return false;
            this_data += 1;
            $(".shj_sal_smallimg_ul").animate({marginLeft: -(140*this_data)});
            $(".shj_sal_bogimg").animate({marginLeft: -(930*this_data)});
            $(now_demo).removeClass("shj_sal_smallimg_now");
            $(now_demo).next().addClass("shj_sal_smallimg_now");
        }
        $(small_demo).attr("data-v",this_data);
    };
    this.sht = function(that) {
        var this_data = $(that).parent().attr("data-v");
        $(that).parent().siblings().removeClass("shj_sal_smallimg_now");
        $(that).parent().addClass("shj_sal_smallimg_now");
        $(".shj_sal_bogimg").animate({marginLeft: -(this_data*930)+"px"});
        $(that).parent().parent().attr("data-v",this_data);
    }
};
var sjfgz = function() {
    var thisObj = this;
    this.beforNavOffsetTop = [];
    this.afterNavOffsetTop = [];
    this.now = 'befor';
    this.ready = function() {
        window.onload = function() {
            $(".shj_sjfgz_comparison_content_wrap").height(46+$("#befor_content").height());
            $("#befor,#after").fadeIn();
            thisObj.beforNavOffsetTop = [
                {"id" : "befor_kt_nav", "top" : $("#befor_kt")[0].offsetTop+310},
                {"id" : "befor_ct_nav", "top" : $("#befor_ct")[0].offsetTop+310},
                {"id" : "befor_cf_nav", "top" : $("#befor_cf")[0].offsetTop+310},
                {"id" : "befor_ws_nav", "top" : $("#befor_ws")[0].offsetTop+310},
                {"id" : "befor_wsj_nav", "top" : $("#befor_wsj")[0].offsetTop+310}
            ];
            thisObj.afterNavOffsetTop = [
                {"id" : "after_kt_nav", "top" : $("#after_kt")[0].offsetTop+310},
                {"id" : "after_ct_nav", "top" : $("#after_ct")[0].offsetTop+310},
                {"id" : "after_cf_nav", "top" : $("#after_cf")[0].offsetTop+310},
                {"id" : "after_ws_nav", "top" : $("#after_ws")[0].offsetTop+310},
                {"id" : "after_wsj_nav", "top" : $("#after_wsj")[0].offsetTop+310}
            ];
            $(window).scroll(function() {
                var wscrollTop = $(window).scrollTop();
                if(wscrollTop>=310) {
                    var move_s = $(window).scrollTop()-310;
                    $(".shj_sjfgz_comparison_menu").css("top",move_s+"px");
                } else {
                    $(".shj_sjfgz_comparison_menu").css("top",0);
                }
                if(thisObj.now == "befor") {
                    var offsetTopArr = thisObj.beforNavOffsetTop;
                } else {
                    var offsetTopArr = thisObj.afterNavOffsetTop;
                }
                if(wscrollTop >= offsetTopArr[0].top && wscrollTop < offsetTopArr[1].top) {
                    return thisObj.navGd($("#"+offsetTopArr[0].id));
                } else if(wscrollTop > offsetTopArr[1].top && wscrollTop < offsetTopArr[2].top) {
                    return thisObj.navGd($("#"+offsetTopArr[1].id));
                } else if(wscrollTop > offsetTopArr[2].top && wscrollTop < offsetTopArr[3].top) {
                    return thisObj.navGd($("#"+offsetTopArr[2]['id']));
                } else if(wscrollTop > offsetTopArr[3].top && wscrollTop < offsetTopArr[4].top) {
                    return thisObj.navGd($("#"+offsetTopArr[3].id));
                } else if(wscrollTop > offsetTopArr[4].top){
                    return thisObj.navGd($("#"+offsetTopArr[4].id));
                }
            });
        }
        this.click();
    };
    this.click = function() {
        $(".shj_sjfgz_menu_li").click(function() {
            thisObj.clickMenu(this);
        });
        $(".shj_sjfgz_comparison_a").click(function() {
            thisObj.clickTitle(this);
        });
    };
    this.clickMenu = function(that) {
        var this_data = $(that).attr("data-v"),
            this_offsetTop = $("#"+this_data)[0].offsetTop+350,
            now_scroolTop = $(window).scrollTop();
        $("body").animate({scrollTop: (this_offsetTop)+"px"});
    };
    this.navGd = function(that) {
        $(that).parent().siblings().removeClass("shj_sjfgz_comparison_menu_now");
        $(that).parent().siblings().find("i").removeClass("shj_sjfgz_comparison_menu_icon_now");
        $(that).parent().addClass("shj_sjfgz_comparison_menu_now");
        $(that).siblings("i").addClass("shj_sjfgz_comparison_menu_icon_now");
    };
    this.clickTitle = function(that) {
        var this_data = $(that).attr("data-v");
        var now = $(".shj_sjfgz_comparison_content_wrap").attr("data-v");
        if(this_data == "after" && now != "after") {
            $("#after_content").animate({left: "0px"});
            $("#befor_content").animate({left: "930px"});
            thisObj.now = 'after';
        } else if(this_data == "befor" && now != "befor") {
            $("#after_content").animate({left: "930px"});
            $("#befor_content").animate({left: "0px"});
            thisObj.now = 'befor';
        }
        $(".shj_sjfgz_comparison_content_wrap").height(46+$("#"+this_data+"_content").height());
        $(".shj_sjfgz_comparison_content_wrap").attr("data-v",this_data);
        $(".shj_sjfgz_comparison_a").removeClass("shj_sjfgz_comparison_title_now");
        $(that).addClass("shj_sjfgz_comparison_title_now");
    };
};
var ysjs = function() {
    var thisObj = this;
    var sjsAnliSwiper = {};
    this.ready = function() {
        sjsSwiper = new Swiper('.shj_ys_lists_box', {
            slidesPerView: 'auto',
            centeredSlides: false,
            slideToClickedSlide:true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev'
        });
        sjsAnliSwiper = new Swiper('.shj_ys_info_anli', {
            slidesPerView: '3',
            slidesPerGroup : 3,
            grabCursor: true,
            preventClicks : false,
            onSlideChangeEnd: function(swiper){
                $(".shj_ys_scrollbar_now").css("left",Math.ceil(swiper.activeIndex/3)*$(".shj_ys_scrollbar_now").width());
            }
        });
        $(".shj_ys_lists_box .swiper-slide:first-child").find("img").addClass("shj_ys_list_now").next().show();
        $("#shj_lfyf_btn").attr("data-v",'预约设计师-'+$(".shj_ys_lists_box .swiper-slide:first-child").find("img").attr("data-name"));
        $(".shj_ys_scrollbar_now").width(180/Math.ceil($(".shj_ys_anli").length/3));
        $("#lfyfcity").attr("data-v",get_cookie('cityid')).html(cityNamelist[get_cookie('cityid')]);
        this.click();
    }
    this.click = function() {
        $(".shj_ys_list").click(function() {
            var id = $(this).attr("data-id"),
                cityid = $(this).attr("data-city"),
                title = $(this).attr("data-name"),
                caeer = $(this).attr("data-caeer"),
                thumb = $(this).attr("src"),
                url = $(this).attr("data-url"),
                style = $(this).attr("data-style");
            $(".shj_ys_list").removeClass("shj_ys_list_now");
            $(".shj_ys_list_info").hide();
            $(this).addClass("shj_ys_list_now");
            $(this).next().show();
            $(".shj_ys_sjsinfo>h2").html(title);
            $(".shj_ys_sjsinfo>h6").html(caeer);
            $(".shj_ys_sjsinfo .shj_ys_info_sjsimg").find("img").attr("src",thumb);
            $(".shj_ys_sjsinfo>h5").html(style);
            $(".shj_ys_go").attr("href",url);
            $("#shj_lfyf_btn").attr("data-v",'预约设计师-'+title);
            $.get('http://www.shj.cn/index.php?m=content&c=index&a=ysAnli',{id:id,cityid:cityid},function(rst) {
                if(rst.flag == 0) {alert(rst.msg);}
                if(rst.flag == 1) {
                    $(".shj_ys_info_anli .swiper-wrapper").html("");
                    for(var i=0; i<rst.data.length; i++) {
                        var z = rst.data[i];
                        var html =
                            '<div class="swiper-slide"><a href="'+z.url+'" target="_blank"><img src="'+z.thumb+'" alt="'+z.title+'" class="shj_ys_anli"/><h6 class="shj_ys_anli_info">'+z.sx_build+' '+z.case_style+'</h6></a></div>';
                        $(".shj_ys_info_anli .swiper-wrapper").append(html);
                    }
                    $(".shj_ys_scrollbar_now").css("left",0).width(180/Math.ceil(rst.data.length/3));
                    sjsAnliSwiper.update();
                }
            },'json');
        })
    }
}

var zjgd = function() {
    this.ready = function() {
        $('.shj_sgd_sg_imgbox').each(function(index,item){
            var mySwiper = new Swiper(item, {
                slidesPerView : 'auto',
                slidesPerGroup : 1,
                nextButton: $(item).find('.swiper-button-next')[0],
                prevButton: $(item).find('.swiper-button-prev')[0],
                onDoubleTap: function(swiper){
                    $("#showBigImg").attr("src",$(swiper.clickedSlide).find("img").attr("src"));
                    console.log($(swiper.clickedSlide).find("img").attr("src"));
                    layer.open({
                        type: 1,
                        title: false,
                        closeBtn: 0,
                        skin: 'layui-layer-nobg', //没有背景色
                        shade: 0.8,
                        shadeClose: true,
                        content: $("#showBigImg").parent()
                    });
                }
            });
        });
    }
}

var bdshare = function() {
    window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"1","bdMiniList":["qzone","tsina","weixin"],"bdPic":"","bdStyle":"0","bdSize":"32"},"share":{}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];
};
var showPageBm = function() {
    $(".shj_srj_tbm_tjbtn").click(function() {
        var name = $("#name").val(),
            xiaoqu = $("#xiaoqu").val(),
            mianji = $("#mianji").val(),
            tel = $("#tel").val(),
            city = get_cookie('cityid'),
            cityname = cityNamelist[city];
        if(name == '') {
            layer.tips('请输入您的姓名', '#name', {tips: [1, '#75b43f'],time: 2000});
            return false;
        }
        if(xiaoqu == '') {
            layer.tips('请输入您的小区名称', '#xiaoqu', {tips: [1, '#75b43f'],time: 2000});
            return false;
        }
        if(mianji == '') {
            layer.tips('请输入您的室内面积', '#mianji', {tips: [1, '#75b43f'],time: 2000});
            return false;
        }
        if(tel == '') {
            layer.tips('请输入您的手机号码', '#tel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        }
        if(/^1[34578]\d{9}$/.test(tel) == false) {
            layer.tips('您输入的手机号码错误，请重新输入', '#tel', {tips: [1, '#75b43f'],time: 2000});
            $("#tel").val("");
            return false;
        }
        if(getQueryString("source") != null) {
            var free = getQueryString("source");
        } else {
            var free = 'mf';
        }
        var info = $(".shj_srj_tbm_tjbtn").attr("data-info");
        var data = {city: cityname, cityid: city,title: info, type: '报名', source: 'PC', fromlink: window.location.href, free: free,name: name, tel: tel, xiaoqu: xiaoqu, area: mianji, beizhu: ""};
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonpCallback: "ajaxJsonp",
            data : data,
            success: function (rst) {
                if(rst.flag == 1) {
                    layer.msg(rst.msg, {time: 3000, icon:6});
                    $("input[type='text'],input[type='number']").val('');
                } else {
                    layer.msg(rst.msg, {time: 3000, icon:5});
                }
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    });
}
var common = function() {
    $(".shj_search_select").click(function() {
        var text1 = $(this).html();
        var value1=$(this).attr("data-v");
        var value2=$("#searchValue").val();
        var placeholderText1 = $(this).attr("data-t");
        $(this).attr("data-v",value2);
        var text2 = $(".shj_search_content h5").html();
        var placeholderText2 = $(".shj_search_content h5").attr("data-t");
        $(".shj_search_content h5").html(text1).attr("data-t",placeholderText1);
        $(this).text(text2).attr("data-t",placeholderText2);
        $(".shj_search_input").attr("placeholder",placeholderText1);
        $("#searchKeyword").val(placeholderText1);
        $("#searchValue").val(value1);
    });
    $(".shj_search_text").click(function() {
        if($(".shj_search_input").val() != '') {
            $("#searchKeyword").val($(".shj_search_input").val());
        }
        $("#searchForm").submit();
    });

    $(".shj_xuanfu_menu li").hover(function() {
        $(this).find(".shj_xuanfu_menu_text").fadeIn();
        if($(this).find("div").length > 1) {
            if($(this).find(".shj_xuanfu_menu_ewm")[0] == undefined) {
                $(".shj_xuanfu_menu_qq").fadeIn();
            } else {
                $(".shj_xuanfu_menu_ewm").fadeIn();
            }
        } else {
            $(".shj_xuanfu_menu_qq").fadeOut();
            $(".shj_xuanfu_menu_ewm").fadeOut();
        }
    },function() {
        $(this).find(".shj_xuanfu_menu_text").fadeOut();
        $(".shj_xuanfu_menu_ewm").fadeOut();
        $(".shj_xuanfu_menu_qq").fadeOut();
    });
    $("#leftBackTop").click(function() {
        $("body").animate({scrollTop: 0});
    });
    $(".shj_index_jsq_text").focus(function() {
        $(this).css("border","1px solid #75b43f");
    });
    $(".shj_index_jsq_text").blur(function() {
        $(this).css("border","1px solid #c8c8c8");
    });
    $(".shj_index_jsq_radio_bg").click(function() {
        var that = $(this).parent();
        if($(that).find("span").text() == '悦享家' && $("#bjcity").attr("data-v") != 3400) {
            layer.msg('该城市没有悦享家产品报价', {time: 3000, icon:5});
            return;
        }
        $(that).siblings().find(".shj_index_jsq_ricon").removeClass("shj_index_jsq_ricon_check");
        $(that).find(".shj_index_jsq_ricon").addClass("shj_index_jsq_ricon_check");
        $(that).siblings("input").attr("data-v",$(that).find("span").text());
    });
    $(".shj_index_jsq_select_bg").click(function() {
        close_jsq_select();
        $(this).parent().css("border-color","#75b43f");
        $(this).siblings(".shj_index_jsq_select_list").show();
    });
    $(".shj_index_jsq_select_list li").click(function() {
        if($(this).html() == '悦享家' && $(this).attr("data-v") == undefined && $("#tcbjcity").attr("data-v") != 3400) {
            layer.msg('该城市没有悦享家产品报价', {time: 3000, icon:5});
            return;
        }
        $(this).parent().siblings(".shj_jsq_rst").html($(this).html()).attr("data-v",$(this).attr("data-v"));
        close_jsq_select();
    });
    $("body").click(function(e) {
        if(e.target.className != 'shj_index_jsq_select_bg') {
            close_jsq_select();
        }
    })
    function close_jsq_select() {
        $(".shj_index_jsq_select").css("border-color","#c8c8c8");
        $(".shj_index_jsq_select").find(".shj_index_jsq_select_list").hide();
    };
    $(".shj_bjtc_close").click(function() {
        $(".shj_bjtc_wrap").fadeOut();
        $(".shj_bjtc_info_box").show();
        $(".shj_bjtc_rst_box").hide();
    });
}
var hasLeftBj = function() {
    $(window).scroll(function() {
        if($(window).scrollTop()>=500){
            $(".shi_index_fixed_bj_btn").fadeIn();
        }else{
            $(".shi_index_fixed_bj_btn").fadeOut();
        }
    });
    $(".shi_index_fixed_bj_btn").click(function() {
        $(this).animate({left: "-170px"});
        setTimeout(function() {$(".shi_index_fixed_bj_show_box").show().animate({left: "0"});},500);
    });
    $(".shi_index_fixed_bj_close_btn").click(function() {
        $(".shi_index_fixed_bj_show_box").animate({left: "-100%"});
        setTimeout(function() {$(".shi_index_fixed_bj_btn").animate({left: "0px"});},500);
        setTimeout(function() {$(".shi_index_fixed_bj_show_box").hide();},1000);
    });
    $(".shi_index_fixed_bjbtn").click(function() {
        $(".shi_index_fixed_bj_close_btn").click();
        $(".shj_bjtc_wrap").fadeIn();
    });
};
var hasJsq = function() {
    var page = $("#page_flag").val();
    if(page == 'ltuan') {
        $("#lfyfcity").attr("data-v",get_cookie('cityid')).html(cityNamelist[get_cookie('cityid')]);
    }
    $(".shj_index_jsq_menu_bg").click(function() {
        var that = $(this).parent();
        var type = $(that).attr("data-v");
        $(".shj_index_jsq_menu img").each(function(){
            $(this).attr("src",$("#file_path").val()+"images/"+$(this).parent().attr("data-v")+"icon.png");
        });
        if(page == 'yindao') {
            $(".shj_index_jsq_menu").removeClass("shj_yindao_jsq_menu_click");
            $(that).addClass("shj_yindao_jsq_menu_click");
        } else {
            $(".shj_index_jsq_menu").removeClass("shj_index_jsq_menu_click");
            $(that).addClass("shj_index_jsq_menu_click");
        }
        $(that).find("img").attr("src",$("#file_path").val()+"images/"+type+"icon1.png");
        if(type == "lf" || type == "yf") {
            $("#shj_index_jsq_bj").hide();
            $("#shj_index_jsq_bj_right,#shj_index_jsq_lf_right,#shj_index_jsq_yf_right").hide();
            if(type == "lf") {
                $("#shj_lfyf_btn").val("免费量房").attr("data-v","免费量房");
                $("#shj_index_jsq_lf_right").show();
            } else {
                $("#shj_lfyf_btn").val("免费验房").attr("data-v","免费验房");
                $("#shj_index_jsq_yf_right").show();
            }
            $("#shj_index_jsq_lfyf").show();
        } else {
            $("#shj_index_jsq_lfyf,#shj_index_jsq_lf_right,#shj_index_jsq_yf_right").hide();
            $("#shj_index_jsq_bj").show();
            $("#shj_index_jsq_bj_right").show();
        }
    });
    $("#bjbtn").click(function() {
        var city = $("#bjcity").attr("data-v"),
            wei = $("#bjwei").attr("data-v"),
            area = $("#bjmj").val(),
            tel = $("#bjtel").val(),
            code = $("#bjcode").val();
        if(area == '') {
            layer.tips('请输入您的室内面积', '#bjmj', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(tel == '') {
            layer.tips('请输入您的手机号码', '#bjtel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(!/^1[34578]\d{9}$/.test(tel)) {
            layer.tips('请输入您的手机号码，请重新输入', '#bjtel', {tips: [1, '#75b43f'],time: 2000});
            $("#bjtel").val('');
            return false;
        };
        if(code == '') {
            layer.tips('请输入验证码', '#bjcode', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=checkCode",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonp: "callback",
            jsonpCallback: "ajaxJsonp",
            data : {tel: tel, code: code},
            success: function (rst) {
                if(rst.flag == 1) {
                    var sum = 0;
                    sum = getlbz(wei,area,pcCityList[city]);
                    $("#shj_bj_result").html(sum);
                } else {
                    layer.msg(rst.msg, {time: 3000, icon:5});
                }
                $("input[type='text']").val('');
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    });
    $("#shj_code_btn").click(function() {
        var shi = $("#bjshi").attr("data-v"),
            ting = $("#bjting").attr("data-v"),
            wei = $("#bjwei").attr("data-v"),
            area = $("#bjmj").val(),
            city = $("#bjcity").attr("data-v"),
            cityname = $("#bjcity").html(),
            xiaoqu = $("#bjxq").val(),
            fg = $("#bjfg").val(),
            tx = $("#bjtx").val(),
            name = $("#bjname").val(),
            tel = $("#bjtel").val();
        if(area == '') {
            layer.tips('请输入您的室内面积', '#bjmj', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(city == 0) {
            layer.tips('请选择您所在城市', '#bjcity', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(xiaoqu == '') {
            layer.tips('请输入您的小区名称', '#bjxq', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(name == '') {
            layer.tips('请输入您的姓名', '#bjname', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(tel == '') {
            layer.tips('请输入您的手机号码', '#bjtel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(!/^1[34578]\d{9}$/.test(tel)) {
            layer.tips('请输入您的手机号码，请重新输入', '#bjtel', {tips: [1, '#75b43f'],time: 2000});
            $("#bjtel").val('');
            return false;
        };
        if(getQueryString("source") != null) {
            var free = getQueryString("source");
        } else {
            var free = 'mf';
        }
        var data = {city: cityname, cityid: city,title: '首页报价器', type: '报价', source: 'PC', fromlink: window.location.href, free: free,name: name, tel: tel, xiaoqu: xiaoqu, area: area, beizhu: "风格：" + fg + "；户型：" + shi + "室" + ting + "厅" + wei + "卫", sum: getlbz(wei,area,pcCityList[city])};
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonp: "callback",
            jsonpCallback: "ajaxJsonp",
            data : data,
            success: function (rst) {
                if(rst.flag == 1) {
                    layer.msg(rst.msg, {time: 3000, icon:6});
                } else {
                    layer.msg(rst.msg, {time: 3000, icon:5});
                }
                $("input[type='text']").val('');
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    });
    $("#shj_lfyf_btn").click(function() {
        var shi = $("#lfyfshi").attr("data-v"),
            ting = $("#lfyfting").attr("data-v"),
            wei = $("#lfyfwei").attr("data-v"),
            fg = $("#fg").val(),
            area = $("#lfyfmj").val(),
            city = $("#lfyfcity").attr("data-v"),
            cityname = $("#lfyfcity").html(),
            xiaoqu = $("#lfyfxq").val(),
            name = $("#lfyfname").val(),
            tel = $("#lfyftel").val();
        if(area == '') {
            layer.tips('请输入您的室内面积', '#lfyfmj', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(city == 0) {
            layer.tips('请选择您所在城市', '#lfyfcity', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(xiaoqu == '') {
            layer.tips('请输入您的小区名称', '#lfyfxq', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(name == '') {
            layer.tips('请输入您的姓名', '#lfyfname', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(tel == '') {
            layer.tips('请输入您的手机号码', '#lfyftel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(!/^1[34578]\d{9}$/.test(tel)) {
            layer.tips('请输入您的手机号码，请重新输入', '#lfyftel', {tips: [1, '#75b43f'],time: 2000});
            $("#lfyftel").val('');
            return false;
        };
        if(page == 'ys') {
            var beizhu = "户型：" + shi + "室" + ting + "厅" + wei + "卫";
        } else {
            var beizhu =  "风格：" + fg + "；户型：" + shi + "室" + ting + "厅" + wei + "卫";
        }
        if(getQueryString("source") != null) {
            var free = getQueryString("source");
        } else {
            var free = 'mf';
        }
        var data = {city: cityname, cityid: city,title: $(this).attr("data-v"), type: '报名', source: 'PC', fromlink: window.location.href, free: free,name: name, tel: tel, xiaoqu: xiaoqu, area: area, beizhu: beizhu};
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonp: "callback",
            jsonpCallback: "ajaxJsonp",
            data : data,
            success: function (rst) {
                if(rst.flag == 1) {
                    layer.msg(rst.msg, {time: 3000, icon:6});
                    $("input[type='text'],input[type='number']").val('');
                } else {
                    layer.msg(rst.msg, {time: 3000, icon:5});
                }
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    })
};
var hasTcbj = function() {
    $("#tcbjbtn").click(function() {tcbj();});
    $("#topBj").click(function() {
        $(".shj_bjtc_wrap").fadeIn();
    });
    $("#yindaoTitleBj").click(function() {
        $(".shj_bjtc_wrap").fadeIn();
    });
    function tcbj() {
        var shi = $("#tcbjshi").attr("data-v"),
            ting = $("#tcbjting").attr("data-v"),
            wei = $("#tcbjwei").attr("data-v"),
            area = $("#tcbjmj").val(),
            city = $("#tcbjcity").attr("data-v"),
            cityname = $("#tcbjcity").html(),
            xiaoqu = $("#tcbjxq").val(),
            name = $("#tcbjname").val(),
            tel = $("#tcbjtel").val(),
            tx = $("#tcbjtx").html();
        if(name == '') {
            layer.tips('请输入您的姓名', '#tcbjname', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(tel == '') {
            layer.tips('请输入您的手机号码', '#tcbjtel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(!/^1[34578]\d{9}$/.test(tel)) {
            layer.tips('请输入您的手机号码，请重新输入', '#tcbjtel', {tips: [1, '#75b43f'],time: 2000});
            $("#tcbjtel").val('');
            return false;
        };
        if(city == 0) {
            layer.tips('请选择您所在城市', '#tcbjtel', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(xiaoqu == '') {
            layer.tips('请输入您的小区名称', '#tcbjxq', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(area == '') {
            layer.tips('请输入您的室内面积', '#tcbjmj', {tips: [1, '#75b43f'],time: 2000});
            return false;
        };
        if(getQueryString("source") != null) {
            var free = getQueryString("source");
        } else {
            var free = 'mf';
        }
        var data = {city: cityname, cityid: city,title: '弹窗报价', type: '报名', source: 'PC', fromlink: window.location.href, free: free,name: name, tel: tel, xiaoqu: xiaoqu, area: area, beizhu: "户型："+shi+"室"+ting+"厅"+wei+"卫"};
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonp: "callback",
            jsonpCallback: "ajaxJsonp",
            data : data,
            success: function (rst) {
                if(rst.flag == 1) {
                    var sum = 0;
                    sum = getlbz(wei,area,pcCityList[city]);
                    $("#tcbjrst").html(sum);
                    $("input[type='text'],input[type='number']").val('');
                    $(".shj_bjtc_info_box").hide();
                    $(".shj_bjtc_rst_box").show();
                } else {
                    layer.msg(rst.msg, {time: 3000, icon:5});
                }
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    }
}
var chooseMenu = function(page) {
    $(".shj_lrj_select_menu_blur").click(function() {
        if(page == 'ljfgz' || page == 'lzjgd') {
            $(".shj_lrj_select_menu ul li").removeClass("shj_lrj_select_menu_focus");
            if($(this).html() == "全部") {
                $(".shj_lrj_select_menu ul").find("li:eq(1)").addClass("shj_lrj_select_menu_focus");
            } else {
                $(this).addClass("shj_lrj_select_menu_focus");
            }
            $(this).parent().siblings("input").val($(this).attr('data-v'));
            if(page == 'ljfgz'){
                getJiufang();
            }
        }else if(page=='lanli'){
            $(this).siblings("li").removeClass("shj_lrj_select_menu_focus");
            $(this).addClass("shj_lrj_select_menu_focus");
            $(this).siblings("input").val($(this).attr('data-v'));
            getAnli();
            if($(this).siblings("input").attr('id')=="cptx"){
                $("#shj_lsjs_search_tx span").html($(this).html());
            }else if($(this).siblings("input").attr('id')=="fwhx"){
                $("#shj_lsjs_search_hx span").html($(this).html());
            }else if($(this).siblings("input").attr('id')=="zxfg"){
                $("#shj_lsjs_search_fg span").html($(this).html());
            }else if($(this).siblings("input").attr('id')=="mjfw"){
                $("#shj_lsjs_search_mj span").html($(this).html());
            }

        }else {
            $(this).siblings("li").removeClass("shj_lrj_select_menu_focus");
            $(this).addClass("shj_lrj_select_menu_focus");
            $(this).siblings("input").val($(this).attr('data-v'));
        }

    });
};

//案例页面筛选
var getAnli=function(){
    var tx=$("#cptx").val();
    var hx=$("#fwhx").val();
    var fg=$("#zxfg").val();
    var mj=$("#mjfw").val();
    var city=$("#city").val();
    var liCount=$("#liCount").val();
    $("#liCount").val("fg="+fg+"&hx="+hx+"&mj="+mj+"&tx="+tx);
    if(liCount!=$("#liCount").val()){
        $("#page").val(1);
    }
    var page=$("#page").val();
    var url="http://www.shj.cn/index.php?m=content&c=index&a=getAnli&catid=3&fg="+fg+"&hx="+hx+"&mj="+mj+"&tx="+tx+"&page="+page+"&mb=getanli&cityid="+city;


    $.ajax({
        type: "get",
        async: false,
        url: url,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，标识jsonp回调函数名(一般为:callback)
        jsonpCallback: "GetData",//callback的function名称
        success: function (data) {
            $(".shj_lsjs_lists").html(data.list);
            console.log(data.page);
            showPage(data.page,9);

        }
    });
}
//JS分页函数
var showPage=function(num,perpage){

    //var perpage = 9; //设置每页，你准备显示几条
    var curr_page = parseInt($("#page").val()); //设置当前页
    var setpages = 10;
    var multipage = '';

    if (num > perpage) {
        page = setpages + 1;
        offset = Math.ceil(setpages / 2 - 1);
        pages = Math.ceil(num / perpage);
        from = curr_page - offset;
        to = curr_page + offset;
        more = 0;
        if (page >= pages) {
            from = 2;
            to = pages - 1;
        } else {
            if (from <= 1) {
                to = page - 1;
                from = 2;
            }
            else if(to >= pages) {
                from = pages - (page - 2);
                to = pages - 1;
            }
            more = 1;
        }
        multipage+='<a class="a1">' + num + '条</a>';
        if (curr_page > 0) {
            multipage+='<a href="javascript:setPage(1)" class="a1">上一页</a>';
            if (curr_page == 1) {
                multipage+=' <span>1</span>';
            } else if (curr_page > 6 && more) {
                multipage+='<a href="javascript:setPage(1)" class="a1">1</a>..';
            } else {
                multipage+='<a href="javascript:setPage(1)" class="a1">1</a>';
            }
        }
        for (i = from; i <= to; i++) {
            if (i != curr_page) {
                multipage+='<a href="javascript:setPage(' + i + ')" >' + i + '</a>';
            } else {
                multipage+='<span>'+i+'</span>';
            }
        }
        if (curr_page < pages) {
            if (curr_page < pages - 5 && more) {
                multipage+=' ..<a href="javascript:setPage(' + pages + ')" >' + pages + '</a> <a href="javascript:setPage(' + (curr_page + 1) + ')" class="a1">下一页</a>';
            } else {
                multipage+=' <a href="javascript:setPage(' + pages + ')" >' + pages + '</a> <a href="javascript:setPage(' + (curr_page + 1) + ')" class="a1">下一页</a>';
            }
        }
        else if(curr_page == pages) {
            //multipage+=' <span>'+pages+'</span> <a href="javascript:setPage(' + (curr_page + 1) + ')" class="a1">下一页</a>';
            multipage+=' <span>'+pages+'</span> <a href="javascript:setPage(' + curr_page + ')" class="a1">下一页</a>';
        } else {
            multipage+=' <a href="javascript:setPage(' + pages + ')" >' + pages + '</a> <a href="javascript:setPage(' + (curr_page + 1) + ')" class="a1">下一页</a>';
        }
    }
    $(".shj_page").html(multipage);
}
var setPage=function(page){
    $("#page").val(page);
    if(pubpage=="lanli"){
        getAnli();
    }else if(pubpage=="ssjs"){
        getSjsAnli();
    }else if(pubpage=="ljfgz"){
        getJiufang();
    }

}
//设计师案例分页
var getSjsAnli=function(){
    var city=$("#city").val();
    var desid=$("#desid").val();
    var page=$("#page").val();
    var url="http://www.shj.cn/index.php?m=content&c=index&a=getAnli&catid=4&fg=0&hx=0&mj=0&tx=0&page="+page+"&mb=sjsanli&cityid="+city+"&des="+desid;
    $.ajax({
        type: "get",
        async: false,
        url: url,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，标识jsonp回调函数名(一般为:callback)
        jsonpCallback: "GetData",//callback的function名称
        success: function (data) {
            $("#sjsanli").html(data.list);
            showPage(data.page,6);

        }
    });
}
//导航页面案例筛选
var SetAnli=function(){
    var str=GetRequest();//获取案例？后面的参数
    if(str==''){return }
    var strs=str.split("_"); //字符分割
    $("#"+strs[0]).val(strs[1]);
    var list=$("#f"+strs[0]).find("li");
    $("#f"+strs[0]+" li").each(function(){
        if($(this).attr("data-v")==strs[1]){
            $("#f"+strs[0]+" li").removeClass("shj_lrj_select_menu_focus");
            $(this).addClass("shj_lrj_select_menu_focus");
        }
    });
    getAnli();
}

//旧房改造筛选
var getJiufang=function(){
    var city=$("#lzjgd_select_city").val();
    var page=$("#page").val();
    if(city=="0"){
        page=1;
    }
    var url="http://www.shj.cn/index.php?m=content&c=index&a=getJiufang&page="+page+"&cityid="+city;
    $.ajax({
        type: "POST",//请求方式
        url: url,//地址，就是action请求路径
        data: "json",//数据类型text xml json  script  jsonp
        success: function(str){//返回的参数就是 action里面所有的有get和set方法的参数
            var strs=str.split("||"); //字符分割
            if(strs[0]!=" "){
                $(".shj_ljfgz_list_ul").html(strs[0]);
                showPage(strs[1],12);
            }else{
                $(".shj_ljfgz_list_ul").html("<li>未查询到相关数据</li>");
            }
        }
    });

}

var Allpage = ['index','yindao','l3d','404','bm','lanli','sanli','ljfgz','sjfgz','lzxrj','szxrj','lsjs','ssjs','ltuan','stuan','lxgt','sxgt','lzjgd','szjgd','ljzzs','sjzzs','ssp'];
var pubpage='';
$(document).ready(function() {
    var page = $("#page_flag").val();
    pubpage=page;
    var obj = {};
    switch(page) {
        case 'index' :
            obj = new index;
            obj.ready();
            hasLeftBj();
            hasJsq();
            break;
        case 'yindao' :
            obj = new yindao;
            obj.ready();
            hasLeftBj();
            hasJsq();
            break;
        case 'bm' :
            hasJsq();
            break;
        case 'ssjs' :
            //getSjsAnli();
            showPageBm();
            break;
        case 'ys' :
            obj = new ysjs;
            obj.ready();
            hasJsq();
            break;
        case 'lxgt' :
        case 'sxgt' :
            obj = new xgt;
            obj.ready(page);
            break;
        case 'ljfgz' :
        case 'lzjgd' :
            chooseMenu(page);
            break;
        case 'ltuan' :
            hasJsq();
            break;
        case 'l3d' :
        case 'llbzs' :
            break;
        case 'stuan' :
            showPageBm();
            break;
        case 'lanli' :
        case 'sanli' :
            obj = new anli;
            obj.ready(page);
            SetAnli();
            if(page == 'sanli') {
                showPageBm();
            }
            break;
        case 'ljzzs' :
            obj = new jzzs;
            obj.ready();
            showPageBm();
            break;
        case 'sjzzs' :
        case 'lbzs' :
        case 'ssp' :
            bdshare();
            showPageBm();
            break;
        case 'lsp' :
            bdshare();
            break;
        case 'szjgd' :
            obj = new zjgd;
            obj.ready();
            bdshare();
            showPageBm();
            break;
        case 'lzxrj' :
            obj = new zxrj;
            obj.ready(page);
            chooseMenu(page);
            showPageBm();
            break;
        case 'szxrj' :
            obj = new zxrj;
            obj.ready(page);
            bdshare();
            showPageBm();
            break;
        case 'sjfgz' :
            obj = new sjfgz;
            obj.ready();
            bdshare();
            showPageBm();
            break;
        case '404' :
            hasLeftBj();
            break;
    };
    common();
    hasTcbj();
});

//设置静态页面url
var setUrl=function(){
    var oldUrl=decodeURIComponent(get_cookie('toUrl'));
    if(oldUrl==""){ //如果为空代表第一次访问页面，远程获取城市ip地址
        var url="http://www.shj.cn/index.php?m=content&c=index&a=setCity";
        $.ajax({
            type: "get",
            async: false,
            url: url,
            dataType: "jsonp",
            jsonp: "callback",//传递给请求处理程序或页面的，标识jsonp回调函数名(一般为:callback)
            jsonpCallback: "GetData",//callback的function名称
            success: function (data) {
                setCookie('toUrl',data.curl,1);
                setCookie('cityid',data.cid,1);
                $("#cityName").text(cityNamelist[data.cid]);
                oldUrl=data.curl;
                $(".seturl").each(function(index, element) {
                    var url=oldUrl+"/"+$(this).attr("data-url");
                    $(this).attr("href",url);
                });
            }
        });
    }else{
        $(".seturl").each(function(index, element) {
            var url=oldUrl+"/"+$(this).attr("data-url");
            $(this).attr("href",url);
        });
        $("#cityName").text(cityNamelist[get_cookie('cityid')]);
    }
}
//福州效果图拎包装nav设置
function fzlbz() {
    var url="http://www.shj.cn/index.php?m=content&c=index&a=setCity";
    $.ajax({
        type: "get",
        async: false,
        url: url,
        dataType: "jsonp",
        jsonp: "callback",//传递给请求处理程序或页面的，标识jsonp回调函数名(一般为:callback)
        jsonpCallback: "GetData",//callback的function名称
        success: function (data) {
            if(data.cid == '3838') {
                $("#fzlbz").attr("href","http://fz.shj.cn/zt/fzlbz/");
            }
        }
    });
}

function setCookie(c_name,value,expiredays) {
    var exdate=new Date();
    exdate.setDate(exdate.getDate()+expiredays);
    document.cookie=c_name+ "=" +escape(value)+((expiredays==null) ? "" : ";expires="+exdate.toGMTString())+";path=/;domain=shj.cn";
}
function get_cookie(Name) {
    var search = Name + "="
    var returnvalue = "";
    if (document.cookie.length > 0) {
        offset = document.cookie.indexOf(search)
        if (offset != -1) {
            offset += search.length
            end = document.cookie.indexOf(";", offset);
            if (end == -1)
                end = document.cookie.length;
            returnvalue=(document.cookie.substring(offset, end))
        }
    }
    return returnvalue;
}
var nowsUrl=window.location.protocol+'//'+window.location.host;
var oldUrl=decodeURIComponent(get_cookie('toUrl'));
var a = nowsUrl.split(".")[0];a = a.split("//")[1];
var citylist={'bj':'3557','cd':'3399','nc':'3400','gy':'3401','xa':'3403','km':'3471','wh':'3402','cs':'3404','hf':'3594','nj':'3774','cq':'3775','sjz':'3792','jning':'3795','tj':'3798','sz':'3799','sh':'3800','jn':'3801','gz':'3802','dl':'3829','qd':'3833','fz':'3838','sy':'3837','hz':'3844','ty':'3847','cd5':'3875'}
var cityNamelist={'3557':'北京','3399':'成都','3400':'南充','3401':'贵阳','3403':'西安','3471':'昆明','3402':'武汉','3404':'长沙','3594':'合肥','3774':'南京','3775':'重庆','3792':'石家庄','3795':'济宁','3798':'天津','3799':'苏州','3800':'上海','3801':'济南','3802':'广州','3829':'大连','3833':'青岛','3838':'福州','3837':'沈阳','3844':'杭州','3847':'太原','3875':'成都市'}


/*if(nowsUrl!=oldUrl && nowsUrl!='http://www.shj.cn' && nowsUrl!='http://xiaoguotu.shj.cn'){
 setCookie('toUrl',nowsUrl,1);
 setCookie('cityid',citylist[a],1);
 }else{

 }*/

//获取问号后面参数
function GetRequest() {
    var url = location.search; //获取url中"?"符后的字串
    var str='';
    if (url.indexOf("?") != -1) {
        str = url.substr(1);
    }
    return str;
}
//setUrl();

function getSite() {
    layer.prompt({
        title: '请留下您的手机号码',
        maxlength: 11,
    }, function(value, index, elem){
        if(!/^1[34578]\d{9}$/.test(value)) {
            layer.msg('您输入的手机号码错误，请重新输入', {time: 3000, icon:5});
            return false;
        };
        if(getQueryString("source") != null) {
            var free = getQueryString("source");
        } else {
            var free = 'mf';
        }
        var city = get_cookie('cityid'),
            cityname = cityNamelist[city];
        var data = {city: cityname, cityid: city,title: '获取公司地址', type: '', source: 'PC', fromlink: window.location.href, free: free,tel: value};
        $.ajax({
            url: "http://www.shj.cn/index.php?m=allinfo&c=index&a=bm",
            type: "get",
            async: false,
            dataType: 'jsonp',
            jsonp: "callback",
            jsonpCallback: "ajaxJsonp",
            data : data,
            success: function (rst) {
                if(rst.flag == 1) {
                    layer.msg("获取成功", {time: 3000, icon:6});
                } else {
                    layer.msg("获取失败", {time: 3000, icon:5});
                }
                layer.close(index);
            },
            error:function() {
                layer.msg('请求失败!', {time: 3000, icon:5});
            }
        });
    });
}

function getQueryString(name) {
    var reg = new RegExp("(^|&)" + name + "=([^&]*)(&|$)", "i");
    var r = window.location.search.substr(1).match(reg);
    if (r != null) return unescape(r[2]); return null;
}
if(getQueryString("source") != null) {
    $("a").each(function() {
        var href = $(this).attr("href");
        if(href.indexOf("javascript") == -1 && href.indexOf("tel") == -1) {
            if(href.indexOf("?") == -1) {
                $(this).attr("href",href+"?source="+getQueryString("source"));
            } else {
                $(this).attr("href",href+"&source="+getQueryString("source"));
            }
        }
    });
    $("area").each(function() {
        var href = $(this).attr("href");
        if(href.indexOf("javascript") == -1) {
            if(href.indexOf("?") == -1) {
                $(this).attr("href",href+"?source="+getQueryString("source"));
            } else {
                $(this).attr("href",href+"&source="+getQueryString("source"));
            }
        }
    })
}