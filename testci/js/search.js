define(['jquery'], function($){
    $(function(){
        var bShow = false;
        $('#search-span').on('click',function(){
            if(bShow){
                $('#search').animate({
                    width:30,
                },function(){
                    $('#search-input').hide();
                });
            }else{
                $('#search').animate({
                    width:400,
                }  );
                $('#search-input').show();
            }
            bShow = !bShow;
        });
    });
});