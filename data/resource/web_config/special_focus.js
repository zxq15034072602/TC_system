  var screen_max = 5;//大图数
  var focus_max = 5;//小图组数
  var pic_max = 4;//组内小图数
  var screen_obj = {};
  var ap_obj = {};
  var upload_obj = {};
  var focus_obj = {};
  var focus_ap_obj = {};
  var focus_upload_obj = {};
  var focus_group_obj={};
  $(function(){
	    $('#screen_color').colorpicker({showOn:'both'});//初始化切换大图背景颜色控件
	    $('#screen_color').parent().css("width",'');
	    $('#screen_color').parent().addClass("color");
	    $('#ap_color').colorpicker({showOn:'both'});//初始化广告位背景颜色控件
	    $('#ap_color').parent().css("width",'');
	    $('#ap_color').parent().addClass("color");
		$(".type-file-file").change(function() {//初始化图片上传控件
			$(this).prevAll(".type-file-text").val($(this).val());
		});
		$("#homepageFocusTab .tab-menu li").click(function() {//切换
		    var pic_form = $(this).attr("form");
		    $('form').hide();
		    $("#homepageFocusTab li").removeClass("current");
		    $('#'+pic_form).show();
		    $(this).addClass("current");
		});
		screen_obj = $("#upload_screen_form");//初始化焦点大图区数据
		index_screen_obj = $("#upload_screen_form_index");//初始化焦点大图区数据
		focus_group_obj=$("#upload_join_form");//初始化集团首页加入我们数据
		
	    ap_obj = $("#ap_screen");
	    upload_obj = $("#upload_screen");
		screen_obj.find("ul").sortable({ items: 'li' });
		$("#ap_id_screen").append(screen_adv_append);

		focus_obj = $("#upload_focus_form");//初始化三张联动区数据
		focus_obj.find(".focus-trigeminy").sortable({ items: 'div[focus_id]' });
		focus_obj.find("ul").sortable({ items: 'li' });
		$("#ap_id_focus").append(focus_adv_append);
	    focus_ap_obj = $("#ap_focus");
	    focus_upload_obj = $("#upload_focus");
	});
//焦点区切换大图上传
  function add_screen(add_type) {//增加图片
	 
  	for (var i = 1; i <= screen_max; i++) {//防止数组下标重复
  		
  		if (screen_obj.find("li[screen_id='"+i+"']").size()==0) {//编号不存在时添加
      	    var text_input = '';
      	    var text_type = '图片调用';
      	    var ap = 0;
      	    text_input += '<input name="screen_list['+i+'][pic_id]" value="'+i+'" type="hidden">';
      	    text_input += '<input name="screen_list['+i+'][pic_name]" value="" type="hidden">';
      	    if(add_type == 'adv') {
      	        ap = 1;
      	        text_type = '广告调用';
      	        text_input += '<input name="screen_list['+i+'][ap_id]" value="" type="hidden">';
      	    } else {
      	        text_input += '<input name="screen_list['+i+'][pic_url]" value="" type="hidden">';
      	    }
      	    text_input += '<input name="screen_list['+i+'][color]" value="" type="hidden">';
      	    text_input += '<input name="screen_list['+i+'][pic_img]" value="" type="hidden">';
  			var add_html = '';
  			add_html = '<li ap="'+ap+'" screen_id="'+i+'" title="可上下拖拽更改显示顺序">'+text_type+
  			'<a class="del" href="JavaScript:del_screen('+i+
  			');" title="删除">X</a><div class="focus-thumb" onclick="select_screen('+i+');" title="点击编辑选中区域内容"><img src="" /></div>'+text_input+'</li>';
  			
  			screen_obj.find("ul").append(add_html);
  			select_screen(i);
  			break;
  		}
      }
  }
  function select_screen(pic_id) {//选中图片
	    var obj = screen_obj.find("li[screen_id='"+pic_id+"']");
	    var ap = obj.attr("ap");
	    screen_obj.find("li").removeClass("selected");
	    screen_obj.find("input[name='key']").val(pic_id);
	    obj.addClass("selected");
	    if(ap == '1') {
	        upload_obj.hide();
	        screen_obj.find("input[name='ap_pic_id']").val(pic_id);
	        var a_id = obj.find("input[name='screen_list["+pic_id+"][ap_id]']").val();
	        if(a_id == '') {//未选择广告位时用默认的
	            $("#ap_id_screen").trigger("onchange");
	        } else {
	            var color = obj.find("input[name='screen_list["+pic_id+"][color]']").val();
	            $("#ap_id_screen").val(a_id);
	            $("#ap_color").val(color);
	            ap_obj.find('.evo-pointer').css("background-color",color);
	        }
	        ap_obj.show();
	    } else {
	        ap_obj.hide();
	        var pic_name = obj.find("input[name='screen_list["+pic_id+"][pic_name]']").val();
	        var pic_url = obj.find("input[name='screen_list["+pic_id+"][pic_url]']").val();
	        var color = obj.find("input[name='screen_list["+pic_id+"][color]']").val();
	        $("input[name='screen_id']").val(pic_id);
	        $("input[name='screen_pic[pic_name]']").val(pic_name);
	        $("input[name='screen_pic[pic_url]']").val(pic_url);
	        $("input[name='screen_pic[color]']").val(color);
	        upload_obj.find(".type-file-file").val('');
	        upload_obj.find(".type-file-text").val('');
	        upload_obj.show();
	        upload_obj.find('.evo-pointer').css("background-color",color);
	    }
	}
  function screen_pic(pic_id,pic_img) {//更新图片
		if (pic_img!='') {
		    var color = screen_obj.find("input[name='screen_pic[color]']").val();
		    var pic_name = screen_obj.find("input[name='screen_pic[pic_name]']").val();
		    var pic_url = screen_obj.find("input[name='screen_pic[pic_url]']").val();
		    var obj = screen_obj.find("li[screen_id='"+pic_id+"']");
		    obj.find("img").attr("src",UPLOAD_SITE_URL+'/'+pic_img);
		    obj.find("img").attr("title",pic_name);
	        obj.find("input[name='screen_list["+pic_id+"][pic_name]']").val(pic_name);
	        obj.find("input[name='screen_list["+pic_id+"][pic_url]']").val(pic_url);
	        obj.find("input[name='screen_list["+pic_id+"][color]']").val(color);
	        obj.find("input[name='screen_list["+pic_id+"][pic_img]']").val(pic_img);
		    obj.find("div").css("background-color",color);
		}
		screen_obj.find('.web-save-succ').show();
		setTimeout("screen_obj.find('.web-save-succ').hide()",2000);
	}
  function del_screen(pic_id) {//删除图片
	    if (screen_obj.find("li").size()<2) {
	         return;//保留一个
	    }
		screen_obj.find("li[screen_id='"+pic_id+"']").remove();
		var slide_id = screen_obj.find("input[name='key']").val();
		if (pic_id==slide_id) {
	    	screen_obj.find("input[name='key']").val('');
	    	ap_obj.hide();
	    	upload_obj.hide();
		}
	}