<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Test/test.latte */
final class Template3d60a32ea3 extends Latte\Runtime\Template
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



  <html>
     <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
     </head>
     <body>
        <form method="POST" id="form">
        <div id="divSelections"></div>
          <script type="text/javascript">
            function textBox(selections){
                selections = selections*1; // Convert to int
                if( selections !== selections ) throw \'Invalid argument\'; // Check NaN
                var container = document.getElementById(\'divSelections\'); //Cache container.

                for(var i = 0; i <= selections; i++){
                    document.write("asdf");
                    var tb = document.createElement(\'input\');
                    tb.type = \'text\';
                    tb.id = \'textBox_\' + i; // Set id based on "i" value
                    tb.form = form;
                    document.write("asdf");
                    container.appendChild(tb);

                }
            }
            textBox(4) ;

          </script>
        </form>
     </body>
  </html>




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
