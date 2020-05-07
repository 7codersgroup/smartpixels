$(document).ready(function() {

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
        }
    });

    $('.follow').click(function(){
        var user_id = $(this).data('id');
        var cObj = $(this);
        var c = $(this).parent("p").find(".tl-follower").text();

        $.ajax({
            type:'POST',
            url:'/follow',
            data:{user_id:user_id},
            success:function(data){
                console.log(data.success);
                if(data.success){
                    cObj.find("strong").text("Follow");
                    cObj.parent("p").find(".tl-follower").text(parseInt(c) + 1);
                }else{
                    cObj.find("strong").text("UnFollow");
                    cObj.parent("p").find(".tl-follower").text(parseInt(c) - 1);
                }
            }
        });
    });

});

