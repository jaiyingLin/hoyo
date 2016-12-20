<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>HO YO 好遊 | 自由行規劃</title>

<script src="https://cdnjs.cloudflare.com/ajax/libs/d3/3.5.6/d3.min.js" ></script>
<script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js"></script>
<!-- menu -->
<link rel="icon" type="image/gif" href="favicon.ico">
<link rel="stylesheet" type="text/css" href="css/CSS_reset.css">
<link rel="stylesheet" type="text/css" href="css/hoyo_navFree.css">
<!-- <script src="nav/js/jquery-3.1.0.min.js"></script> -->
<!-- end of menu -->
<link rel="stylesheet" type="text/css" href="css/free/common.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="css/LMcard.css">
<link rel="stylesheet" type="text/css" href="css/free/free.css">
</head>
<body>

	<div id="LC_container"></div>
	

<div id="hoyo_wrapper">
	<header id="hoyo_header">
		<?php include 'hoyo_navFree.php';?>
		<script>
			$(function(){
				$('#nav_mainList li:nth-child(1)').addClass('nav_active');
				// $('#nav_hamberUl li:nth-child(1)').addClass('nav_active');
			});
		</script>
	</header>

	<div id="f_breadWrapper">
	<!-- 麵包屑 -->
	        <section class="breadcrumb">
	             <a href="index.php">首頁</a> &gt; <a class="bread_active" href="free.php">行程規劃</a>
	        </section>
	
	         <div class="f_title ch">行程規劃</div>
	</div>

	
	<div id="s5_steps"></div>

	<div id="hoyo_content">
	<div id="outOfW">

		<div id="wrapper" class="ch">
		
		
		<!-- <h1>01</h1> -->
			<div id="block5" class="blockwrapper">
			    <div class="block">

			        <div class="f1_title">
			        	<div class="imgbox">
			        		<img src="icon/free/cicLast_img_logo.png">
			        	</div>
			        	<br>
			        	<h2>修改成功</h2>
			        </div>

			        <div class="s5_content">
			        	<p>恭喜您！</p>
			        	<br>
			        	<div id="tr_info"></div>
			        	<p>已修改成功！</p>
			        	<p>您可以回到 <a href="member.php" class="f_alink">會員專區</a> 的 <a href="memberfree.php" class="f_alink">我的行程</a> 查看</p>
			        </div>

			    </div>
		    </div>

		
		</div>		<!-- end of <div id="wrapper"> -->
	</div>		<!-- end of <div id="outOfW"> -->
	</div>

	<footer id="hoyo_footer" class="ch">HO YO 好遊 | 鐵路支線任你遊</footer>

</div>



<?php include 'php/free/import_LMTR.php';?>
<script src="js/free/freedata.js"></script>
<script>
	//四個箭頭設定
	var svg3 = d3.select('#s5_steps').append('svg').attr({
	                'class': 'svg3',
	                'width': 570,
	                'height': 60
	            });

	svg3.selectAll('g').data(arrow_data).enter().append('g')
	    .attr({
	        'class': (d,i)=>i==4?'arrow0 active' : 'arrow'+i
	    });

	svg3.selectAll('g').append('path')
	    .attr({
	        'fill':'hsla(240, 0%, 22%, .2)',
	        'stroke':'none',
	        'd': d=>d
	    });
	svg3.selectAll('g').append('text')
	    .attr({
	        'x': (d,i) => i==0? i*109+30 : (i==4? i*109+50 : i*109+40),
	        'y': 36,
	        'font-size': 18
	    })
	    .text((d,i) => ['填資料','選地標','排行程','做確認','完成'][i]);







	//產生自由行的資訊給使用者看
    var freeModify_tr_name = storage['freeModify_tr_name'] || '我的自由行';
    var freeModify_tr_no = storage['freeModify_tr_no'] || 0;

    $('#tr_info').append("<p>您的自由行 <span>#"+freeModify_tr_no+" "+freeModify_tr_name+"</span></p>");

    storage.removeItem("freeModify_tr_name");
    storage.removeItem("freeModify_tr_no");

</script>


</body>
</html>