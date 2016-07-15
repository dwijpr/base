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
        var origText = $(e.trigger).text();
        $(e.trigger).text('copied!');
        setTimeout(function () {
            $(e.trigger).text(origText);
        }, 500);
    });
}
