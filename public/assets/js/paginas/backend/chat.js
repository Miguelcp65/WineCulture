var activechat;
$(".media-left").css("display", "none");
$(".media-right").css("display", "none");
$(document).ready(function () {
    $(".media-message").click(function (event) {
        activechat = (event.target.id);

        $("#idmediachat").val(activechat);
        $(".simplebar-content").attr("id", "simple" + activechat);

        $(".media-left").css("display", "none");
        $(".media-right").css("display", "none");
        $('.' + activechat).css("display", "flex");


        $("#chat-right-content").animate({
            scrollTop: $('#chat-right-content').prop("scrollHeight")
        }, 1000);
    });
});
$('#chatbox a').click(function (e) {
    e.preventDefault();
    return false;
});
