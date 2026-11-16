
function copyTextToClipboard(text, e = null) {
    navigator.clipboard.writeText(text);

    if (e && typeof e === 'object' && e.tagName === 'IMG') {
        e = $(e);
        e.fadeOut(500, function() {
            e.attr("src","/media/copied.png").fadeIn(400, function () {
                e.fadeOut(500, function() {
                    e.attr("src", "/media/copy.png").fadeIn(500);
                })
            });
        });
    }
}
