function asButton(element) {
    try {
        while (element) {
            element = element.parentNode;
            if (
                element != null
                && element.tagName != undefined
                && element.tagName.toLowerCase() == 'form'
            ) {
                var buttons = element.getElementsByTagName('button');
                var button;
                if (!buttons.length) {
                    button = document.createElement('button');
                    button.style.display = 'none';
                    element.appendChild(button);
                }
                button = element.getElementsByTagName('button')[0];
                button.click();
                break;
            }
        }
        return false;
    } catch (e) {
        var solution = "http://stackoverflow.com/search?q=[js]+"+e.message;
        window.open(solution, '_blank');
    }
}

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
