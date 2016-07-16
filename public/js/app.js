function confirmSubmit( element )
{
    if (!confirm('Are You sure?')) {
        return;
    }
    while( element )
    {
        element = element.parentNode
        if (
            element != null
            && element.tagName != undefined
            && element.tagName.toLowerCase() == "form"
        ) {
            element.submit();
            break;
        }
    }
    return 0;
}

function initClipboardJs(selector) {
    if (selector === undefined) {
        selector = '.clipboard';
    }
    var clipboard = new Clipboard(selector);
    clipboard.on('success', function (e) {
        var origHtml = $(e.trigger).html();
        $(e.trigger).text('copied!');
        setTimeout(function () {
            $(e.trigger).html(origHtml);
        }, 500);
    });
}
