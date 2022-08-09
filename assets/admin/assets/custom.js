//fetchsubmenu using menu id
$(document).on("change","#cat_id",function(){
    var cat_id = $("#cat_id").val();
    var base_url   = $("#base_url").val();
    if(cat_id){
        $.ajax({
                url : base_url+'admin/AjaxController/FetchSubCategory',
                method :"POST",
                data :{cat_id:cat_id},
                success:function(data){
                    console.log(data);
                    if(data){
                        $("#sub_id").html(data);
                    }
                }
        });
    }
});

//fetchsubsub menu using submenu id
$(document).on("change","#sub_id",function(){
    var sub_id = $("#sub_id").val();
    var cat_id = $("#cat_id").val();
    var base_url   = $("#base_url").val();
    if(cat_id && sub_id){
        $.ajax({
                url : base_url+'admin/AjaxController/FetchSubSubCategory',
                method :"POST",
                data :{sub_id:sub_id,cat_id:cat_id},
                success:function(data){
                    console.log(data);
                    if(data){
                        $("#sub_sub_id").html(data);
                    }
                }
        });
    }
});
//fetch sub sub sub menu

$(document).on("change","#subsub_id",function(){
    var sub_id      = $("#sub_id").val();
    var cat_id         = $("#cat_id").val();
    var subsub_id   = $("#subsub_id").val();
    var base_url        = $("#base_url").val();
    if(cat_id){
        $.ajax({
                url : base_url+'admin/AjaxController/FetchSubSubSubmenu',
                method :"POST",
                data :{sub_id:sub_id,cat_id:cat_id,subsub_id:subsub_id},
                success:function(data){
                    console.log(data);
                    if(data){
                        $("#subsubsub_id").html(data);
                    }
                }
        });
    }
});