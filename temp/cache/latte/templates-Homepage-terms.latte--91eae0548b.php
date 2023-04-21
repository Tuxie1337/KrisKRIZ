<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Homepage/terms.latte */
final class Template91eae0548b extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent', 'title' => 'blockTitle'],
	];


	public function main(): array
	{
		extract($this->params);
		echo "\n";
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 2 */;
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 2 */
	public function blockContent(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '<div id="banner">
';
		$this->renderBlock('title', get_defined_vars()) /* line 4 */;
		echo '</div>

<div id="content">
	<h2>Podmínky K užívání webové aplikace KrisKriz</h2>
	<p><b>1.</b>Aplikace vznikla jako prototyp k bakalářské práci studentky Kristýny Bukalové s názvem Návrh a implementace informačního systému pro
	bezpečnostní management.</p>
	<p>Jedná se o studentskou práci, buďte prosím trpěliví při jejím používání.</p>
	<p><b>2.</b>Uživatel stvrzuje, že aplikace nebude využívána k podvodu při zkouškách a testech, pouze jako pomoc při přípravě na ně.</p>
	<p>Toto zahrnuje i užití při cvičení bez předchozího povolení od vyučujícího</p>
	<p><b>3.</b>Uživatel se zavazuje že bude aplikaci používat pro vlastní projekty a bude-li spokojen poví o ní dalším dvěma kamarádům</p>
	<p><b>4.</b>Autorka se zavazuje nechat aplikaci online minimálně do data 22.10.2023 a dále dle uvážení.
		V případě zájmu o prodloužení hostingu informujte autorku na franta01011000@gmail.com</p>
	<p><b>5.</b>Uživatelé souhlasí že použití webové aplikace KrisKRIZ je na vlastní nebezpečí a veškeré úrazy spojené s užitím nejsou zodpovědností autorky.
		Je-li aplikace používána za chůze tak se koukejte pod nohy.</p>
	<p><b>6.</b>Jste-li členem komise u státní závěrečné zkoušky souhlasením s podmínkami se zavazujete k ohodnocení této práce jedničkou.</p>
	<p><b>7.</b>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent ac mattis nulla, a placerat sapien. Vivamus sagittis leo metus, id feugiat magna tincidunt nec. Nam id massa lectus. Pellentesque consequat et neque et sagittis. Morbi in turpis non dui mattis tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Etiam nibh turpis, laoreet vulputate nulla non, volutpat mattis nisl. Duis et elit at mi suscipit varius ut tincidunt enim. Donec egestas rhoncus nulla nec vulputate. Mauris pulvinar convallis dictum.
	</p>




	<h2>© Kristýna Bukalová, 2023 </h2>
</div>

<style>
	html { font: normal 18px/1.3 Georgia, "New York CE", utopia, serif; color: #666; -webkit-text-stroke: 1px rgba(0,0,0,0); overflow-y: scroll; }
	body { background: #dfffd8; color: #333; margin: 2em auto; padding: 0 .5em; max-width: 600px; min-width: 320px; padding-top: 80px;}

	a { color: #006aeb; padding: 3px 1px; }
	a:hover, a:active, a:focus { background-color: #006aeb; text-decoration: none; color: white; }

	#banner { border-radius: 12px 12px 0 0; background-color: #87ab69 }

	h1 { font: inherit; color: white; font-size: 50px; line-height: 121px; margin: 0; padding-left: 4%;  background-size: 130px auto; text-shadow: 1px 1px 0 rgba(0, 0, 0, .9); }
	@media (max-width: 600px) {
		h1 { background: none; font-size: 40px; }
	}

	#content { background: white; border: 1px solid #eff4f7; border-radius: 0 0 12px 12px; padding: 10px 4%; overflow: hidden; }

	h2 { font: inherit; padding: 1.2em 0; margin: 0; }

	img { border: none; float: right; margin: 0 0 1em 3em; }

	button { display: block; margin-left: auto; margin-right: auto; }
</style>
';
	}


	/** {block title} on line 4 */
	public function blockTitle(array $ʟ_args): void
	{
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '	<h1>Vítejte!</h1>
';
	}

}
