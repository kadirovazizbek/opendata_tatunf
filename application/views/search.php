<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<style>
body{background:url(/assets/search/images/pageBg2.png) repeat; color:#d4dae0;}
h1{font:normal 20px/20px Georgia, "Times New Roman", Times, serif;  text-align:center; padding-top:20px;}
p{text-align:center; padding:20px; border-bottom:#bbb dotted 3px; font:normal 13px/16px Georgia, "Times New Roman", Times, serif}
a{;color:#999;} a:hover{color:#666;} form{ margin:0 auto;}
/*  Скопируйте код ниже в ваш файл стилей (CSS файл)  */

#search-block-form{
	width:248px;
	height:28px;
	border-radius:15px;
	border:none;
	background:url(/assets/search/images/searchBgDark.png) left top repeat-x;
	box-shadow:0px 1px 2px rgba(255,255,255,0.2);
	}
#search-block-form input{
	padding:0;
	margin:0;
	display:block;
	border:none;
	outline:none;
	background:none;
	width:100%;
	height:100%;
	}
#search-block-form .form-actions{
	width:28px;
	height:28px;
	float:left;
	background:url(/assets/search/images/searchIconDark.png) 12px 9px no-repeat;
	}
#search-block-form .form-actions input:hover{
	cursor:pointer;
	}
#search-block-form .form-actions input{
	overflow:hidden;
	text-indent:-9999px;
	}
#search-block-form .form-item{
	width:210px;
	padding:0px 5px;
	float:right;
	height:28px;
	}
#search-block-form .form-item input{
	font:13px/16px "Trebuchet MS", Arial, Helvetica, sans-serif;
	color:#93979c;
	height:auto !important;
	padding:6px 0;
	}
.placeholder{color:#606368 !important;}

/* Конец */
</style>
<!-- Если в вашем шаблоне уже подключается jquery, то дополнительно подключать его не нужно, но обязательно вставьте вторую строчку (где подключается jquery.placeholder.min.js) -->
<script src="/assets/search/jquery-1.7.2.min.js"></script>
<script src="/assets/search/jquery.placeholder.min.js"></script>
<script>
/*  Скопируйте код ниже в ваш js файл. (JavaScript). */

$(document).ready(function(e) {
	$("input[placeholder]").placeholder();
	$("#search-block-form .form-item input").focus(function(){
		$("#search-block-form").addClass("focus-active");
			})
	.blur(function(){
		$("#search-block-form").removeClass("focus-active");
	});
});

/* Конец */
</script>
</head>
<body>

<!-- Сам код формы (вставляется непосредственно в страницу) -->
<div class="container">
<div class="col-md-12"></br></br></br></br></br></br></br></br></br></br><h1>
<?php echo lang('search_sistem');?></h1>

<form action="" method="post" id="search-block-form">
      <div class="form-item">
        <input type="text" name="" value="" size="15" maxlength="128" placeholder="Найти...">
      </div>
      <div class="form-actions">
        <input type="submit" id="edit-submit" name="op" value="Поиск" class="form-submit">
		
      </div>
	  </br>
	  
		
		<h1><?php echo lang('smart_assistent');?></h1>
</form>
</div>
</div>
<!-- Конец -->
</body>
</html>
