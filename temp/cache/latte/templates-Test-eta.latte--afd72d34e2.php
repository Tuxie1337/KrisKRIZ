<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Test/eta.latte */
final class Templateafd72d34e2 extends Latte\Runtime\Template
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
    <a href="\\test\\eta" class="btn btn-secondary">ETA</a>
    <a href="\\test\\swot" class="btn btn-primary">SWOT</a>
    <a href="\\test\\umra" class="btn btn-primary">UMRA</a>
  </div>



  <button id="button1" class="MetroBtn" onClick="myFunc(this.id);">Btn1</button>
  <button id="button2" class="MetroBtn" onClick="myFunc(this.id);">Btn2</button>
  <button id="button3" class="MetroBtn" onClick="myFunc(this.id);">Btn3</button>
  <button id="button4" class="MetroBtn" onClick="myFunc(this.id);">Btn4</button>

  <script type="text/javascript">
  function myFunc(id){
    alert(id);
    }     

  </script>

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
