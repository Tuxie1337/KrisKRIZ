<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Homepage/default.latte */
final class Template0c0aa3e639 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 3 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 3 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 5 */;
		echo '</div>

<div id="content">
	<h2>Právě jste se objevili na stránkách mého projektu k bakalářské práci.</h2>

	<p>
	 <img src="img/logo.png" width="100" height="100">
	Kliknutím na tlačítko vstoupit prohlašujete že jste četli
	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Homepage:terms")) /* line 14 */;
		echo '">podmínky užívání</a>, a souhlasíte s nimi. </p>

	<a href="';
		echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Landingpage:welcome")) /* line 16 */;
		echo '"><button class="btn btn-primary" justify-content="center" display="flex">Vstoupit</button></a>


	<h2>© Kristýna Bukalová, 2023 </h2>
</div>

<style>
	html { font: normal 18px/1.3 Georgia, "New York CE", utopia, serif; color: #666; -webkit-text-stroke: 1px rgba(0,0,0,0); overflow-y: scroll; }
	body { background: #dfffd8; color: #333; margin: 2em auto; padding: 0 .5em; max-width: 600px; min-width: 320px; padding-top: 80px;}

	a { color: #006aeb; padding: 3px 1px; }
	a:hover, a:active, a:focus { background-color: #006aeb; text-decoration: none; color: white; }

	#banner { border-radius: 12px 12px 0 0; background-color: #87ab69 }

	h1 { font: inherit; color: white; font-size: 50px; line-height: 121px; margin: 0; padding-left: 4%; background: url(https://files.nette.org/images/logo-nette@2.png) no-repeat 95%; background-size: 130px auto; text-shadow: 1px 1px 0 rgba(0, 0, 0, .9); }
	@media (max-width: 600px) {
		h1 { background: none; font-size: 40px; }
	}

	#content { background: white; border: 1px solid #eff4f7; border-radius: 0 0 12px 12px; padding: 10px 4%; overflow: hidden; }

	h2 { font: inherit; padding: 1.2em 0; margin: 0; }

	nav {
	  display: none !important;
	}

	img { border: none; float: right; margin: 0 0 1em 3em; }

	button { display: block; margin-left: auto; margin-right: auto; }
</style>
';
	}


	/** {block title} on line 5 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<h1>Vítejte!</h1>
';
	}

}
