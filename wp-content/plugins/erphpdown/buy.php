<html lang="zh-CN">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="/wp-content/plugins/erphpdown/static/erphpdown.css?v=17.3" type="text/css">
	<link rel="shortcut icon">
	<script type="text/javascript" src="/wp-content/plugins/erphpdown/static/jquery-1.7.min.js"></script>
	<script type="text/javascript" id="erphpdown-js-extra">
	/* <![CDATA[ */
	var _ERPHP = {"ajaxurl":"/wp-admin/admin-ajax.php"};
	var erphpdown_ajax_url = "/wp-admin/admin-ajax.php";
	/* ]]> */
	window._ERPHPDOWN = {"uri":"/wp-content/plugins/erphpdown", "tuan":"", "author": "mobantu"}
	</script>
	<script type="text/javascript" src="/wp-content/plugins/erphpdown/static/erphpdown.js?v=17.3"></script>
</head>
<style>::-webkit-scrollbar {width:0;height:6px}
::-webkit-scrollbar-thumb {background-color: #c7c7c7;border-radius:5px;}
body{margin:10px 20px;padding: 0;}</style>
<body>
	<div id="erphpdown-paybox">
	文章ID错误
	</div>

	<script>$(".erphpdown-jump").click(function(){
			setTimeout(function(){
				parent.layer.closeAll();
				window.parent.erphpdownOrderSuccess();
			},1000);
		});

		$(".erphpdown-jump2").click(function(){
			parent.layer.closeAll();
		});</script>

		<script>$(".do-erphpdown-pay").click(function(){
			var that = $(this);
			that.text("处理中...").attr("disabled","disabled");
			$.ajax({  
	            type: 'GET',  
	            url:  $(this).data("href"),  
	            dataType: 'json',
				data: {

				},
	            success: function(data){
	            	that.text("余额支付").removeAttr("disabled");  
	                if( data.error ){
	                    if( data.msg ){
	                        layer.msg(data.msg);
	                    }
	                }else{
	                	if(data.jump == '2'){
	                		parent.location.reload();
	                	}else if(data.jump == '1'){
	                		parent.location.href=data.link;
	                	}else{
	                		parent.location.reload();
	                	}
	                }

	            }  

	        });
	        return false;
		});</script>
	</body>
</html>