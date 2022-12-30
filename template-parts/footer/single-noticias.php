<script type="text/javascript">var $ = window.jQuery;</script><script src="<?php echo get_template_directory_uri(); ?>/assets/js/webflow.js?v=1672367323" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script>
function get_text(el) {
ret = "";
var length = el.childNodes.length;
for(var i = 0; i < length; i++) {
var node = el.childNodes[i];
if(node.nodeType != 8) {
ret += node.nodeType != 1 ? node.nodeValue : get_text(node);
}
}
return ret;
}
var words = get_text(document.querySelector('#article'));
var count = words.split(' ').length;
document.getElementById('readTime').innerHTML = Math.round(count / 200).toFixed();
</script>