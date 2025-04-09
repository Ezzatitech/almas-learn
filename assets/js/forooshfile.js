var bool = true;
$ (document) .ready(function(){
    $(".btn-mobile-pish").click(function(){
        $(".modal-mobaile") .toggleClass ("active")
    });
});
 $(window).scroll(function(){
    var scroll_top = $(this).scrollTop();
    if(scroll_top >= 400){
        $(".scrool-to-top") .addClass ("scrool")
    } else{
        $(".scrool-to-top").removeClass("scrool");
    }
 });

 $ (document) .ready(function(){
    $(".scrool-to-top").click(function(){
        $("html") .animate({scrollTop:0},1000)
    });
});

$ (document) .ready(function(){
    $(".study-mode-btn").click(function(){
        $(".wit-col-x9") .toggleClass ("haletmotale")
    });
});

$ (document) .ready(function(){
    $(".study-mode-btn").click(function(){
        $(".dis-wit-btn") .toggleClass ("hale-disple")
    });
});

$ (document) .ready(function(){
    $(".searsh-btn").click(function(){
        $(".search-box") .addClass ("search-active")
    });
    $(".ot-zabdar").click(function(){
        $(".search-box").removeClass("search-active");
    });
});


$ (document) .ready(function(){
    $(".download-clik-row").click(function(){
        $(".box_content") .toggleClass ("active-clik-teb");
        $(".download-clik-row") .toggleClass ("brd-spanbox");
    });
});

$ (document) .ready(function(){
    $(".close-notification").click(function(){
        $(".notification-bar") .toggleClass ("closs-clik-notification");
    });
});















// حالت شب
// function toggleDarkLight() {
//     var body = document.getElementById("dark");
//     var currentClass = dark.className;
//     dark.className = currentClass == "dark-mode" ? "light-mode" : "dark-mode";
//   }