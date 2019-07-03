$(".id-input").on("click",function(){
    var v = $(this).val();
    $(this).val("/"+v);
});
