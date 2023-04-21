<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Landingpage/welcome.latte */
final class Template12a7fd6ca0 extends Latte\Runtime\Template
{
	protected const BLOCKS = [
		['content' => 'blockContent'],
	];


	public function main(): array
	{
		extract($this->params);
		if ($this->getParentName()) {
			return get_defined_vars();
		}
		$this->renderBlock('content', get_defined_vars()) /* line 1 */;
		echo "\n";
		return get_defined_vars();
	}


	public function prepare(): void
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	/** {block content} on line 1 */
	public function blockContent(array $ʟ_args): void
	{
		echo '<!-- Showcase -->
<div id = "collection" hx-swap="outerHTML"  style="margin-top: -10px;">
    <section
      class="bg-light text-dark p-5 p-lg-0 pt-lg-5 text-center text-sm-start"
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div>
            <h1>Vítejte ve výukovém programu  <span class="text-success"> KrisKriz </span></h1>
            <p class="lead my-4">
              Kde se můžete naučit používat vybrané metody krizového managementu.</p>
            <p class="lead my-4">  Zvolit si můžete ze dvou modulů a to je výuka a praxe. Ve výukové části se můžete
            naučit vše co budete potřebovat pro úspěšné složení zkoušek z těchto vybraných metod. V praktické části si
            můžete ověřit získané znalosti a vygenerovat použitelnou tabulku pro vaše projekty.

            <img
              src="../img/logo.png"
              width="250"
              height="250"
              alt=""
              align="right"
           >
            </p>
        </div>
      </div>
    </section>
     <!-- Boxes -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4" >



      <div class="row">

      <!-- Výuka -->
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Výuka</h5>
              <p class="card-text">Ve výukové části máte možnost prozkoumat a otestovat různé metody s interaktivním průvodcem, který vám bude po celou dobu napomáhat.</p>
              <a href="\\test\\uvod" class="btn btn-primary">Vstoupit</a>
            </div>
          </div>
        </div>

      <!-- Praxe -->

        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Praxe</h5>
              <p class="card-text">  V praktické části máte možnost zpracovávat vybrané metody bez nápovědy a poté si nechat vyhodnotit správnost řešení.</p>
              <a href="\\praxe\\uvod" class="btn btn-primary">Vstoupit</a>
            </div>
          </div>
        </div>
      </div>

        </div>
      </div>
    </section>
  </div>
';
	}

}
