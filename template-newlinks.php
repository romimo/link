<?php
/*
Template Name: newlinks
*/
?>

<?php require_once('config.php'); ?>

<?php get_header(); ?>
<div id="tool" class="page">
<?php while ( have_posts() ) : the_post(); ?>
	<nav>
	<div id="top">
        <a class="<?php if (LOGO_FONT) { echo 'icon-icon'; } else { echo 'image-icon'; } ?>" href="javascript:history.back()"></a>
    </div>
	</nav>

<div class="Cr">

<div id="m">

<ul class="hp c">

<li><a href="//www.timem.cn" target="_blank"><img src="/logo_mini2.png"><h3>时光·小站</h3>

<p>一个漂亮的博客</p>

<span>//www.timem.cn</span>

</a>						
</li>

<li style="
    width: 270px;
"><a href="//wx.qq.com" target="_blank"><img src="/wp-content/themes/Diaspora-master/images/me.jpg"><h3 style="
    width: 160px;
">那个男孩(wechat)</h3>

<p>一个95后男孩</p>								

<span>//wx.qq.com</span>							

</a>						
</li>

<li><a href="" target="_blank"><img src="/wp-content/themes/Diaspora-master/images/github.png" class="def"><h3>项目库</h3>

<p>示例、UI、未完成...</p>								

<span></span>							

</a>						
</li>


<li class="hr"></li><li class="hr"><h2>朋友们 ( *・ω・)✄</h2></li>

<?php wp_list_bookmarks('title_li=&show_name=1'); ?>

<li class="hr"></li><li class="hr"><h2>代码部署</h2></li>

<li><a href="https://www.qcloud.com/" target="_blank"><img src="https://ss1.baidu.com/6ONXsjip0QIZ8tyhnq/it/u=1125600949,1078397324&fm=58" class="def"><h3>腾讯云</h3>

<p>腾讯云，我看行</p>								

<span></span>							

</a>						
</li>

<li><a href="https://wordpress.org/" target="_blank"><img src="http://www.timem.cn/wp-admin/images/wordpress-logo.svg" class="def"><h3>WordPress</h3>

<p>超赞的博客程序</p>								

<span></span>							

</a>						
</li>

<li><a href="//isujin.com" target="_blank"><img src="http://isujin.com/wp-content/themes/Diaspora/images/72.png" class="def"><h3>素·锦</h3>

<p>简约主题“创始人”</p>								

<span></span>							

</a>						
</li>

</ul>
</div>
</div>
<?php endwhile; ?>
</div>
<?php get_footer(); ?>



