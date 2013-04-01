			</div> 	</div><!-- end #main-area -->


	<?php wp_footer(); ?>
<script type="text/javascript" language="javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.carouFredSel-5.6.1-packed.js"></script>
<script type="text/javascript" language="javascript">
			$(function() {

				//	Fuild layout example 2, centering the items
				$("#foo3").carouFredSel({
					auto		:  {
						play: true,
						delay: 2000,
					},
					height: 70,
					width: '100%',
					scroll: 2,
				});
				
				//	Scrolled by user interaction
				$('#foo2').carouFredSel({
					pagination	: {
						container		: "#pager2",
						anchorBuilder	: function( nr, item ) {
							var title = item.find( "h2.agenda_title" ).text();
							return "<span>" + title + "</span>";
						}
					},
					auto: false,
				});
				
				$("#foo1").carouFredSel({
					auto		: true,
					auto : {pauseDuration   : 5000},
					scroll      : {
						duration        : 900},
					width: '100%',
				});
				
				//if (navigator.platform.match(/iP(od|hone|ad)/i)) {
				//    $(window).scroll(function() {
				//        $('#fixed-div').css({
				//            position : 'absolute',
				//            top      : ($(window).height() + $(document).scrollTop() - 110) + 'px'
				//        });
				//    });
				//}

				//back to top button
				var pxShow = 300;//height on which the button will show
				var fadeInTime = 1000;//how slow/fast you want the button to show
				var fadeOutTime = 1000;//how slow/fast you want the button to hide
				var scrollSpeed = 300;//how slow/fast you want the button to scroll to top. can be a value, 'slow', 'normal' or 'fast'
				jQuery(window).scroll(function(){
					if(jQuery(window).scrollTop() >= pxShow){
						jQuery("#backtotop").fadeIn(fadeInTime);
					}else{
						jQuery("#backtotop").fadeOut(fadeOutTime);
					}
				});
				 
				jQuery('#backtotop a').click(function(){
					jQuery('html, body').animate({scrollTop:0}, scrollSpeed); 
					return false; 
				}); 

			});
		</script>
		<img class="title-tab" src="<?php echo get_template_directory_uri(); ?>/images/sponsors-tab.png" />
<div class="image_carousel">	
	<ul id="foo3">
	   <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/top-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 161px;"><a href="http://www.sina.com.cn/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/sina.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.qq.com/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/tencent.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
	  <li style="width: 161px;"><a href="http://www.91.com/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/91.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
	  
	   <li style="width: 161px;"><a href="http://www.uc.cn/index.html" target="_blank"><img src="/cn/wp-content/uploads/sponsors/ucweb.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
	    <li style="width: 161px;"><a href="http://www.xiaomi.com" target="_blank"><img src="/cn/wp-content/uploads/sponsors/xiaomi.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
		 <li style="width: 161px;"><a href="http://china.inmobi.com/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/inmobi.png" height="57" style="border: 1px solid #7b6596; padding: 0;" /></a></li>
		 
	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/GGS-partner.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
      <li style="width: 161px;"><a href="http://store.wo.com.cn/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/wostore.png" height="57" style="border: 1px solid #e70012; padding: 0;" /></a></li>	  
		
	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/platinum-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.domob.cn/" target="_blank"><img src="/cn/wp-content/uploads/2012/09/domob2.png" height="57" 
	  style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.maxthon.com/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/aoyou.png" height="57" 
	  style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.boyaa.com/" target="_blank"><img src="/cn/wp-content/uploads/sponsors/boyaa.png" height="57" 
	  style="border: 1px solid #547bed; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.hdtmedia.com/" target="_blank"><img src="/wp-content/uploads/sponsors/hdt.png" height="57" 
	  style="border: 1px solid #547bed; padding: 0;" /></a></li>
	   
	  <li style="width: 111px;"><img src="<?php echo get_template_directory_uri(); ?>/images/gold-sponsor-tab.jpg" width="97" height="59" style="padding:0; border: none;" /></li>
	  <li style="width: 139px;"><a href="http://www.yicha.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/yicha.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.admaster.com.cn/" target="_blank"><img src="/wp-content/uploads/sponsors/admaster.jpg" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.pacific-crest.com/" target="_blank"><img src="/wp-content/uploads/sponsors/pacific-crest.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li>
	  <li style="width: 139px;"><a href="http://www.100tv.com/" target="_blank"><img src="/wp-content/uploads/sponsors/100tv.png" height="57" 
	  style="border: 1px solid #eba706; padding: 0;" /></a></li> 
	</ul>
	<div class="clearfix"></div>
	<div class="pagination" id="foo3_pag"></div>
</div>

<div id="backtotop">
   <a href="#">&uarr; TOP</a>
</div>
<div class="footer">
<div class="foot">
	<div class="left">
    	<ul>
        <h2>参会指南</h2>
        	<li><a href="http://beijing.thegmic.com/cn/about-gmic2013/" target="_blank" id="about">关于大会</a></li>
            <li><a href="http://beijing.thegmic.com/cn/logistics/" target="_blank" id="time">时间地点</a></li>
            <li><a href="http://beijing.thegmic.com/cn/transportation/" target="_blank" id="car">交通指示</a></li>
            <li><a href="http://beijing.thegmic.com/cn/hotel-info/" target="_blank" id="hot">酒店住宿</a></li>
        </ul>
        <ul>
        <h2>大会结构</h2>
        	<li><a href="http://beijing.thegmic.com/cn/agenda/" target="_blank" id="quan">主会场日程</a></li>
            <li><a href="http://beijing.thegmic.com/cn/appspace/" target="_blank" id="quan">开发者星球</a></li>
            <li><a href="http://beijing.thegmic.com/cn/g-startup/" target="_blank" id="quan">创新大赛</a></li>
            <li><a href="http://beijing.thegmic.com/cn/ggssummit/" target="_blank" id="quan">GGS游戏峰会</a></li>
            <li><a href="http://beijing.thegmic.com/cn/mobiz/" target="_blank" id="quan">移动价值峰会</a></li>
            <li><a href="http://beijing.thegmic.com/cn/mobilemarketing/" target="_blank" id="quan">移动营销峰会</a></li>
        </ul>
        <ul>
        <h2>往届回顾</h2>
        	<li><a href="http://www.gmic-sv.com/" target="_blank" id="quan">GMIC 硅谷 2012</a></li>
            <li><a href="http://gmic2012.gwc.net/cn" target="_blank" id="quan">GMIC 北京 2012</a></li>
            <li><a href="http://gmic2011.gwc.net/cn" target="_blank" id="quan">GMIC 北京 2011</a></li>
            <li><a href="http://www.gwc.net/GMIC2010" target="_blank" id="quan">GMIC 北京 2010</a></li>
            <li><a href="http://www.gwc.net/GMIC2009" target="_blank" id="quan">GMIC 北京 2009</a></li>
        </ul>
        <ul>
        <h2>文档下载</h2>
        	<li><a href="http://share.gwc.net/sites/default/files/GMIC-Beijing-2013-Brochure-cn.pdf" target="_blank" id="down">大会手册-中文版</a></li>
            <li><a href="http://share.gwc.net/sites/default/files/GMIC-Beijing-2013-Brochure-en.pdf" target="_blank" id="down">大会手册-English</a></li>
        </ul>
    </div>
    <div class="right">
    	<ul>
        <h2>参会指南</h2>
        <li class="m1">赞助及商务合作咨询: biz@gwc.net</li>
        <li class="m2">演讲者、展览、媒体等其他咨询: gmic@gwc.net</li>
        <li class="m3">长城会会员申请咨询: member@gwc.net</li>
        <li class="m4">致电我们: 010-82525377</li>
        <li><select name="各国语言网站快速导航" class="map" onChange="if(this.selectedIndex && this.selectedIndex!=0)
  {window.open(this.value);}this.selectedIndex=0;">

<option selected>各国语言网站快速导航</option>
<option value=http://beijing.thegmic.com>English</option>
<option value=http://beijing.thegmic.com/jp/>日本語</option>
</select>

        </li>
        <span class="bq">Copyright © 全球移动互联网大会 - All rights reserved.</span>
        </ul>
    </div>
</div>
</div>
<script type="text/javascript">
var _bdhmProtocol = (("https:" == document.location.protocol) ? " https://" : " http://");
document.write(unescape("%3Cscript src='" + _bdhmProtocol + "hm.baidu.com/h.js%3F884312b27a5ab6642dce0fb30a688172' type='text/javascript'%3E%3C/script%3E"));
</script>
</body>
</html>