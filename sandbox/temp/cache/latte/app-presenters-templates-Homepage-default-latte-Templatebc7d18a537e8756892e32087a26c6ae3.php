<?php
// source: /home/richmond/vhosts/nette-test/sandbox/app/presenters/templates/Homepage/default.latte

class Templatebc7d18a537e8756892e32087a26c6ae3 extends Latte\Template {
function render() {
foreach ($this->params as $__k => $__v) $$__k = $__v; unset($__k, $__v);
// prolog Latte\Macros\CoreMacros
list($_b, $_g, $_l) = $template->initialize('887a94e1ef', 'html')
;
// prolog Latte\Macros\BlockMacros
//
// block content
//
if (!function_exists($_b->blocks['content'][] = '_lbdf2d13383d_content')) { function _lbdf2d13383d_content($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
;call_user_func(reset($_b->blocks['title']), $_b, get_defined_vars())  ?>

<?php if ($user->loggedIn) { ?>	<a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Post:create"), ENT_COMPAT) ?>
">Vytvoř nový příspěvek</a>
<?php } ?>

<?php $iterations = 0; foreach ($posts as $post) { ?>	<div>
		<h2><a href="<?php echo Latte\Runtime\Filters::escapeHtml($_control->link("Post:show", array($post->id)), ENT_COMPAT) ?>
"><?php echo Latte\Runtime\Filters::escapeHtml($post->title, ENT_NOQUOTES) ?></a></h2>
		<div><?php echo Latte\Runtime\Filters::escapeHtml($template->date($post->created_at, "F j, Y"), ENT_NOQUOTES) ?></div>
		<p><?php echo Latte\Runtime\Filters::escapeHtml($post->content, ENT_NOQUOTES) ?></p>
	</div>
<?php $iterations++; } 
}}

//
// block title
//
if (!function_exists($_b->blocks['title'][] = '_lbd9d63fce0c_title')) { function _lbd9d63fce0c_title($_b, $_args) { foreach ($_args as $__k => $__v) $$__k = $__v
?>	<h1>Blogisek</h1>
<?php
}}

//
// end of blocks
//

// template extending

$_l->extends = empty($_g->extended) && isset($_control) && $_control instanceof Nette\Application\UI\Presenter ? $_control->findLayoutTemplateFile() : NULL; $_g->extended = TRUE;

if ($_l->extends) { ob_start();}

// prolog Nette\Bridges\ApplicationLatte\UIMacros

// snippets support
if (empty($_l->extends) && !empty($_control->snippetMode)) {
	return Nette\Bridges\ApplicationLatte\UIRuntime::renderSnippets($_control, $_b, get_defined_vars());
}

//
// main template
//
if ($_l->extends) { ob_end_clean(); return $template->renderChildTemplate($_l->extends, get_defined_vars()); }
call_user_func(reset($_b->blocks['content']), $_b, get_defined_vars()) ; 
}}