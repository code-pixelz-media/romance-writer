// hiding sitcky header if there are no sticky topics
jQuery(document).ready(function(){
if (jQuery('.sticky_secion').children("ul").length) {
    jQuery('.bbp-topic-sticky').show();
} else {
    jQuery('.bbp-topic-sticky').hide();
}
});