<div id="sidebars">

<div id="sidebar0">

<ul>
	<?php if ( function_exists( 'get_featured_content' ) ) { ?>
		<li>
			<h2>Featured Video</h2>
				<?php get_featured_content(); ?>
		</li>
	<?php } ?>
	<?php if ( is_active_sidebar( 'sidebar-full' ) ) {
		dynamic_sidebar( 'sidebar-full' );
	} ?>
</ul>
</div><!-- Closes Sidebar0 -->

<div id="sidebar1">

<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-left') ) : ?>

<li>
<h2>Categories</h2>
<ul>
  <?php wp_list_categories('show_count=0&title_li='); ?>
</ul>
</li>

<li>
<h2>Meta</h2>
<ul>
  <?php wp_register(); ?>
  <li><?php wp_loginout(); ?></li>
  <li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
  <li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
  <?php wp_meta(); ?>
</ul>
</li>

<?php endif; ?>
</ul>

</div> <!-- Closes Sidebar1 -->

<div id="sidebar2">

<ul>
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('sidebar-right') ) : ?>

<li>
<h2>Archives</h2>
<ul>
  <?php wp_get_archives('type=monthly'); ?>
</ul>
</li>

<li>
<h2>Tag Cloud</h2>
<?php wp_tag_cloud(''); ?>
</li>

<?php endif; ?>
</ul>

</div> <!-- Closes Sidebar2 -->


<div class="cleared"></div>
</div> <!-- Closes Sidebars -->