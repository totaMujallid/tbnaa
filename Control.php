<?php require("head.php"); ?>

	<body>		
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
	<script>
			$(document).ready(function(){
  $('#search-trigger').click(function(){
    $(this).next('#search-content').slideToggle();
    $(this).toggleClass('active');          
    
    if ($(this).hasClass('active')) $(this).find('span').html('&#x25B2;')
      else $(this).find('span').html('&#x25BC;')
    })
});
			</script>
		<header class="cf">
        <div id="headerright"></div>
<nav id="nav_top">
    <ul>
        <li><a href="blank">تسجيل الخروج</a></li>
        <li><a href="blank">تعديل الملف</a></li>
        <li>إسم المستخدم</li>
        <li id="search">
            <a id="search-trigger" href="#">
                بحث <span>&#x25BC;</span>
            </a>
            <div id="search-content">
                <?php require("search_new.php"); ?>
            </div>                     
        </li>
        
    </ul>
</nav>
</header>
  
				
		<main>
        
		
		<h1 style="color:#414141">الصفحة الرئيسية</h1>		
				
    <iframe name="pages"  allowTransparency="true" scrolling="no" frameborder="0" align="right" height="100%" width="100%" ></iframe>
 
		
		</main>

		<nav id="nav">
			<div class="innertube">
				<ul>
					<li><a href="Add.php"  target="pages" >إضافة قطط للتبني</a></li>
					<li><a href="blank"  target="pages">عرض السجلات</a></li>
					<li><a href="blank"  target="pages">إشعارات طلب التبني</a></li>
					<li><a href="blank"  target="pages">عرض المتعاونين</a></li>
					<li><a href="blank"  target="pages">عرض المشرفين</a></li>
				</ul>
				
			</div>
		</nav>	
		
		<footer id="footer">
			<div class="innertube" align="center">
				&copy; 2015 All Rights Reserved. Designed by <a href="#" title="GoAppz Team" style="color:#76c7ca" >GoAppz Team</a> for Tbnaa .
			</div>
		</footer>	
			
	</body>
</html>
