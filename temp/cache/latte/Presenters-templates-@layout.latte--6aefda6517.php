<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/@layout.latte */
final class Template6aefda6517 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['scripts' => 'blockScripts'],
	];


	public function main(): array
	{
		extract($this->params);
		echo '<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="';
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 7 */;
		echo '/css/style.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">

<link rel ="stylesheet" href="https://bootswatch.com/5/spacelab/bootstrap.min.css">

	<title>';
		if ($this->hasBlock("title")) /* line 12 */ {
			$this->renderBlock('title', [], function ($s, $type) {
				$ʟ_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($ʟ_fi, 'html', $this->filters->filterContent('striphtml', $ʟ_fi, $s));
			}) /* line 12 */;
			echo ' | ';
		}
		echo ' KrisKRIZ</title>
</head>

<body>
	<!-- Navbar -->
	 <nav class="navbar navbar-expand-lg navbar-light bg-light text-dark py-3 fixed-top">
		 <div class="container-fluid">
			 <a class="navbar-brand" href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Landingpage:welcome")) /* line 19 */;
		echo '">KrisKriz</a>

			 <button
				 class="navbar-toggler"
				 type="button"
				 data-bs-toggle="collapse"
				 data-bs-target="#navmenu">
				 <span class="navbar-toggler-icon"></span>
			 </button>

			 <div class="collapse navbar-collapse" id="navmenu">
				 <ul class="navbar-nav ms-auto">


		 <li class="nav-item"><a href = "';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Landingpage:welcome")) /* line 33 */;
		echo '" class ="nav-link" >Něco</a></li>


					 <li class="nav-item">
						 <a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Landingpage:about#uvod")) /* line 37 */;
		echo '" class="nav-link">Návod</a>
					 </li>
					 <li class="nav-item">
						 <a href= "';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:terms")) /* line 40 */;
		echo '" class="nav-link">Podmínky</a>
					 </li>
				 </ul>
			 </div>
		 </div>
	 </nav>

';
		$iterations = 0;
		foreach ($flashes as $flash) /* line 47 */ {
			echo '	<div';
			echo ($ʟ_tmp = array_filter(['flash', $flash->type])) ? ' class="' . LR\Filters::escapeHtmlAttr(implode(" ", array_unique($ʟ_tmp))) . '"' : "" /* line 47 */;
			echo '>';
			echo LR\Filters::escapeHtmlText($flash->message) /* line 47 */;
			echo '</div>
';
			$iterations++;
		}
		echo "\n";
		$this->renderBlock('content', [], 'html') /* line 49 */;
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('scripts', get_defined_vars()) /* line 51 */;
		echo '
</body>
</html>
';
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		if (!$this->getReferringTemplate() || $this->getReferenceType() === "extends") {
			foreach (array_intersect_key(['flash' => '47'], $this->params) as $ʟ_v => $ʟ_l) {
				trigger_error("Variable \$$ʟ_v overwritten in foreach on line $ʟ_l");
			}
		}
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block scripts} on line 51 */
	public function blockScripts(array $ʟ_args): void
	{
		echo '	<script src="https://nette.github.io/resources/js/3/netteForms.min.js"></script>
';
	}

}
