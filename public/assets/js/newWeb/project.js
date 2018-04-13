$(function(){
    $(".main").on('mouseover','.child',function(){
        $(".main .child").not($(this)).find(".childHide").stop(false,true).fadeOut(500);
        $(this).find(".childHide").fadeIn(500);
    }).on('mouseleave',function(){
        $(this).find(".childHide").stop(false,false).fadeOut(500);
    });

    /*重点品牌加载更多*/
    $(".projectListMore").click(function () {
        var get_url=$(this).find('#get_url').val();
        var page_size=$(this).find('#page_size').val();
        var conNum=$(this).siblings(".content").find("a").length;
        var page=Math.ceil(conNum/15)+1;
        var _type=$(this).siblings(".content").find("._type").html();
        var conList="";
        var container=$(this).siblings(".content");
        $.ajax({
            url:get_url,
            type:"post",
            data:{page:page,page_size:page_size,type:_type},
            success:function(data){
                if(data.code==2000&&data.data.length!=0){
                    for(var i=0;i<data.data.length;i++){
                        conList+='<a href="'+data.data[i].detail_url+'">';
                        conList+='  <div class="child">';
                        conList+='      <img class="childImg" src="'+data.data[i].img_path+'" alt=""/>';
                        conList+='      <div class="childHide">';
                        conList+='          <img class="childImg" src="'+data.data[i].f_img_path+'" alt=""/>';
                        conList+='      </div>';
                        conList+='   </div>';
                        conList+='</a>';
                    }
                    container.append(conList);
                }
            },
            error:function(){

            }
        })
    });
});


