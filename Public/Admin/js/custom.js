/* 左侧导航 */
$(document).ready(function(){
    $('#nav>li>a').bind('click', function() {
        $(':animated').stop(true, true);
        $('#nav>li>a.subdrop').not(this).each(function() {
            // 删除.subdrop类, ul 隐藏
            $(this).removeClass('subdrop').next('ul').slideUp(500);
        });
        // 判断a链接身上是否拥有 subdrop 类
        if($(this).hasClass('subdrop')) {
            // 控制当前点击的a链接的下一个元素ul的显示和隐藏
            $(this).removeClass('subdrop').next('ul').slideUp(500);
        } else {
            $(this).addClass('subdrop').next('ul').slideDown(500); 
        }
    });
});
