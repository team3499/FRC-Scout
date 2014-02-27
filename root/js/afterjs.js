// Shows and hides text when clicked
$("[id^=longText]").click(function(){
    if ($(this).data('open')){
        $(this).css({height:'20px', overflow:'hidden', 'white-space':'nowrap'});
        $(this).data('open',0);
    } else {
        $(this).css({height:'100%', overflow:'auto', 'white-space':'normal'});
        $(this).data('open',1);
    }
});
