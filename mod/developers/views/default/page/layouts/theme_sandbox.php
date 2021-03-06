<?php
/**
 * Theme sandbox layout
 *
 * @uses $vars['title']
 * @uses $vars['content']
 */

$title = elgg_view_title($vars['title'], ['class' => 'theme-sandbox-page-heading']);
$content = elgg_extract('content', $vars);

$sidebar_menu = elgg_view_menu('theme_sandbox', ['sort_by' => 'name']);
$sidebar = elgg_view_module('theme-sandbox-nav', 'Sections', $sidebar_menu);

echo <<<HTML
<div class="elgg-layout clearfix theme-sandbox-layout">
	<div class="theme-sandbox-sidebar">
		$sidebar
	</div>
	<div class="theme-sandbox-main">
		<div class="elgg-head clearfix">
			$title
		</div>
		<div class="theme-sandbox-content">
			$content
		</div>
	</div>
</div>
HTML;
