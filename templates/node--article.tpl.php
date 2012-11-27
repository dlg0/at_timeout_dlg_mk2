<?php
// $Id: node.tpl.php,v 1.2.4.13 2010/12/03 06:15:05 jmburnz Exp $
?>

<section style="clear:left;" >

<?php if($teaser): ?>
<article style="float:left;margin-right:15px;margin-top:0;margin-bottom:0;padding:0;" id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
	<div  <?php print $content_attributes; ?> >
		<?php print render($content['field_teaser_image']);	?>
	</div>
</article>
<?php endif; ?>

<article id="article-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  	<?php print $unpublished; ?>

  	<?php if ($title && !$page): ?>
  	  <header>
  	    <?php print render($title_prefix); ?>
  	    <?php if ($title): ?>
  	      <h1<?php print $title_attributes; ?>>
  	        <a href="<?php print $node_url; ?>" rel="bookmark"><?php print $title; ?></a>
  	      </h1>
  	    <?php endif; ?>
  	    <?php print render($title_suffix); ?>
  	  </header>
  	<?php endif; ?>

  	<?php if ($display_submitted && !$teaser): ?>
  	  <?php print $user_picture; ?>
  	  <footer class="submitted">
  	    <?php print $submitted; ?>
  	  </footer>
  	<?php endif; ?>

  	<div<?php print $content_attributes; ?>>
  	<?php
  	  hide($content['comments']);
  	  hide($content['links']);
  	  hide($content['field_teaser_image']);
  	  print render($content);
  	?>
  	</div>

  	<?php if (!empty($content['links'])): ?>
  	  <nav class="clearfix"><?php print render($content['links']); ?></nav>
  	<?php endif; ?>

  	<?php print render($content['comments']); ?>

</article>
</section>
