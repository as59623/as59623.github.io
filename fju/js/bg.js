/*
2019/05/24 22:39:24
bg 1.58 KB -> 1.27 KB 19.45%
*/
/*@
 * http://cdn.asilu.com/jquery.backstretch.js
 */
$(function () {
    if (!$.backstretch) return;
    $.ajax({
        url: 'https://api.asilu.com/bg/?callback=?',
        dataType: "jsonp",
        cache: true,
        jsonpCallback: "jsonpBgCallback",
        success: function (s) {
            if (!s || !s.images) return;
            var bgImages = [];
            for (var i = 0; i < s.images.length; i++)
                bgImages.push(s.images[i].url);
            $.backstretch(bgImages.slice(0, 3), {
                fade: 750,
                duration: 20000
            });
            if ($('.bg-btn').length) {
                return;
            }
            $('body').append('<style>.bg-btn{position:fixed;right:5px;bottom:5px}.bg-btn i{display:inline-block;background-color:rgba(255,255,255,.6);width:25px !important;height:25px !important;padding:0 !important;line-height:25px !important;text-align:center;border-radius:5px;cursor:pointer;margin:2px}</style>' +
                '<div class="bg-btn"><i class="fa- dom-prev" title="Prev">&#8636;</i><i class="fa fa--pause dom-play" title="Pause/Play">&#10084;</i><i class="fa- dom-next" title="Next">&#8640;</i></div>');
            $('.bg-btn').on('click', '.dom-next', function () {
                $('body').backstretch('next')
            }).on('click', '.dom-prev', function () {
                $('body').backstretch('prev')
            }).on('click', '.dom-play', function () {
                if ($(this).hasClass('fa--pause')) {
                    $('body').backstretch('pause');
                    $(this).html('&#10085;');
                } else {
                    $('body').backstretch('resume');
                    $(this).html('&#10084;');
                }
                $(this).toggleClass('fa--pause fa--play');
            });
        }
    });
});
