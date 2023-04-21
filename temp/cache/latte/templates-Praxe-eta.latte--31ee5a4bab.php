<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Praxe/eta.latte */
final class Template31ee5a4bab extends Latte\Runtime\Template
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
		extract($this->params);
		extract($ʟ_args);
		unset($ʟ_args);
		echo '
  <div class="menu">
    <a href="\\praxe\\eta" class="btn btn-secondary">ETA</a>
    <a href="\\praxe\\swot" class="btn btn-primary">SWOT</a>
    <a href="\\praxe\\umra" class="btn btn-primary">UMRA</a>
  </div>


<style>

.menu  {     
  display: flex;
  justify-content: center;
  text-align: center;
}

</style>
';
	}

}
