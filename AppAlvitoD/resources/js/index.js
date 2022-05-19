$(".filter-button").on("click",function(){
    let data=$(this).attr('data-filter');
    if(data==="all")
     {
    $(".filter").show(300); 
     }
    else
     {
    $(".filter")
     .not("."+data)
     .hide(300);
    $(".filter")
     .filter("."+data)
     .show(300);
     }
    $(this).addClass("active").siblings().removeClass("active");
})