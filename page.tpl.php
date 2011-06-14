<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?php print $language->language ?>" xml:lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
<head>
  <title><?php print $head_title; ?></title>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
</head>

<body>
<div id="wrapper">

	<div id="header">
		<?php if ($site_name) { ?>
		<h1 class='site-name'><a href="<?php print $base_path ?>" title="<?php print t('Home') ?>"><?php print $site_name ?></a></h1>
		<?php } ?>
		<?php if ($primary_links): ?>
  			<div id="primary">
    		<?php print theme('links', $primary_links); ?>
			</div> <!-- /#primary -->
		<?php endif; ?>
	</div>
	
	<div id="main">
		<div id="left">
      		<?php print $left; ?>
		</div>
		<div id="content">
		<?php if ($title): ?><h1 class="title"><?php print $title; ?></h1><?php endif; ?>
		<?php if ($tabs): ?><div class="tabs"><?php print $tabs; ?></div><?php endif; ?>
		<?php if ($show_messages): print $messages; endif; ?>
		<?php print $help; ?>

		<?php print $content; ?>
		</div>
		<div id="footer">
			<div id="footer_left">
			<?php if ($footer_message) : ?>
			<?php print $footer_message; ?>
			<?php endif; ?>
			</div>		
			<?php if ($secondary_links): ?>
				<div id="secondary">
			<?php print theme('links', $secondary_links); ?>
				</div> <!-- /#secondary -->
			<?php endif; ?>
		</div>
	</div>
<?php print $closure ?>
</body>
</html>
