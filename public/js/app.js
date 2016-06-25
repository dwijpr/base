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
