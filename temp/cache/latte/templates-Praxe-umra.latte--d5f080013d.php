<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Praxe/umra.latte */
final class Templated5f080013d extends Latte\Runtime\Template
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
    <a href="\\praxe\\eta" class="btn btn-primary">ETA</a>
    <a href="\\praxe\\swot" class="btn btn-primary">SWOT</a>
    <a href="\\praxe\\umra" class="btn btn-secondary">UMRA</a>
  </div>
  <div id="makepdf">
    <form method="POST" id="umra_test">
      <div class="table">
        <table style="width:100%" id="tojefuk">
          <tr>
            <td colspan="10">UMRA</td>
          </tr>
          <tr style="height: 155px;" >
            <td>Placeholder</td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
            <td>
              <input type="text" form="umra_test" style="width: 150px;" class="rotate">
            </td>
          <td>
          </tr>
          <tr>
            <td>
                <input type="text" form="umra_test" style="width: 300px;">
            </td>
            <td id="num0">
                <input type="text" name="n0" form="umra_test" style="width: 30px;">
            </td>
            <td id="num1">
                <input type="text" name="n1" form="umra_test" style="width: 30px;">
            </td>
            <td id="num2">
                <input type="text" name="n2" form="umra_test" style="width: 30px;">
            </td>
            <td id="num3">
                <input type="text" name="n3" form="umra_test" style="width: 30px;">
            </td>
            <td id="num4">
                <input type="text" name="n4" form="umra_test" style="width: 30px;">
            </td>
            <td id="num5">
                <input type="text" name="n5" form="umra_test" style="width: 30px;">
            </td>
            <td id="num6">
                <input type="text" name="n6" form="umra_test" style="width: 30px;">
            </td>
            <td id="num7">
                <input type="text" name="n7" form="umra_test" style="width: 30px;">
            </td>
          </tr>
          <tr>
            <td>
                <input type="text" form="umra_test" style="width: 300px;">
            </td>
            <td id="num8">
                <input type="text" name="n8" form="umra_test" style="width: 30px;">
            </td>
            <td id="num9">
                <input type="text" name="n9" form="umra_test" style="width: 30px;">
            </td>
            <td id="num10">
                <input type="text" name="n10" form="umra_test" style="width: 30px;">
            </td>
            <td id="num11">
                <input type="text" name="n11" form="umra_test" style="width: 30px;">
            </td>
            <td id="num12">
                <input type="text" name="n12" form="umra_test" style="width: 30px;">
            </td>
            <td id="num13">
                <input type="text" name="n13" form="umra_test" style="width: 30px;">
            </td>
            <td id="num14">
                <input type="text" name="n14" form="umra_test" style="width: 30px;">
            </td>
            <td id="num15">
                <input type="text" name="n15" form="umra_test" style="width: 30px;">
            </td>
          </tr>
          <tr>
            <td>
                <input type="text" form="umra_test" style="width: 300px;">
            </td>
            <td id="num16">
                <input type="text" name="n16" form="umra_test" style="width: 30px;">
            </td>
            <td id="num17">
                <input type="text" name="n17" form="umra_test" style="width: 30px;">
            </td>
            <td id="num18">
                <input type="text" name="n18" form="umra_test" style="width: 30px;">
            </td>
            <td id="num19">
                <input type="text" name="n19" form="umra_test" style="width: 30px;">
            </td>
            <td id="num20">
                <input type="text" name="n20" form="umra_test" style="width: 30px;">
            </td>
            <td id="num21">
                <input type="text" name="n21" form="umra_test" style="width: 30px;">
            </td>
            <td id="num22">
                <input type="text" name="n22" form="umra_test" style="width: 30px;">
            </td>
            <td id="num23">
                <input type="text" name="n23" form="umra_test" style="width: 30px;">
            </td>
          </tr>
          <tr>
            <td>
                <input type="text" form="umra_test" style="width: 300px;">
            </td>
            <td id="num24">
                <input type="text" name="n24" form="umra_test" style="width: 30px;">
            </td>
            <td id="num25">
                <input type="text" name="n25" form="umra_test" style="width: 30px;">
            </td>
            <td id="num26">
                <input type="text" name="n26" form="umra_test" style="width: 30px;">
            </td>
            <td id="num27">
                <input type="text" name="n27" form="umra_test" style="width: 30px;">
            </td>
            <td id="num28">
                <input type="text" name="n28" form="umra_test" style="width: 30px;">
            </td>
            <td id="num29">
                <input type="text" name="n29" form="umra_test" style="width: 30px;">
            </td>
            <td id="num30">
                <input type="text" name="n30" form="umra_test" style="width: 30px;">
            </td>
            <td id="num31">
                <input type="text" name="n31" form="umra_test" style="width: 30px;">
            </td>
          </tr>



        </table>
      </div>
    </form>


    <table>
      <tr>
        <td colspan="2">Mezivýsledky tabulky</td>
      </tr>
      <tr>
        <td>Σ Sv</td>
        <td id="sum1">X</td>
      </tr>
      <tr>
        <td>Sv(max)</td>
        <td id="sum2">X</td>
      </tr>
      <tr>
        <td>n</td>
        <td id="sum3">X</td>
      </tr>
      <tr>
        <td colspan="2">Hlavní výsledek tabulky</td>
      </tr>
      <tr>
        <td>Σ Sv</td>
        <td id="sum4"><input type="button" value="Vypočítej" onClick="allsum();"></td>
      </tr>
    </table>
  </div>
  <button onClick="window.location.reload(); PDFbutton.disabled=true;" style="margin-left: 300px;">Opravit</button>
  <button id="PDFbutton" onClick="generatePDF();" disabled>Genereuj PDF</button>
  <!-- html2pdf CDN-->
    <script src=
    "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
    </script>
  <script type="text/javascript">

  function test(x){
    alert("alespoň něco to dělá");
    alert(x);
  }
  function checkInp(name, col)
  {
      var x=document.forms["umra_test"][name].value;
      var cell = document.getElementById(col);
      if (isNaN(x))
      {
        cell.style.backgroundColor = \'red\';
        document.forms[\'umra_test\'][name].value = "";
        alert("V tomto poli musí být číslo nebo nic");
        return false;
      }
      else{
        cell.style.backgroundColor = \'white\';
     }

  }
  function suma(){
    var sum = 0;
    var x = 0;
    var sum1 = document.getElementById(\'sum1\');
  //  alert("boo!");
    for (let i = 0; i < 31; i++) {
      x=document.forms[\'umra_test\'][\'n\'+i].value;
      if(x==""){
        x=0;
      }
      x = parseInt(x, 10);
      if (isNaN(x))
      {
        sum4.innerHTML="Nelze vypočítat, v tabulce se objevila jiná hodnota než číslo nebo nic";
        fail;
      }
      else {
        sum+=x;
      }
    }
    sum1.innerHTML=sum;
  }

  function maxim(){
    var max = 0;
    var x = 0;
    var sum2 = document.getElementById(\'sum2\');
  //  alert("boo!");
    for (let i = 0; i < 31; i++) {
      x=document.forms[\'umra_test\'][\'n\'+i].value;
      if(x==""){
        x=0;
      }
      x = parseInt(x, 10);
      if (isNaN(x))
      {
        sum4.innerHTML="Nelze vypočítat, v tabulce se objevila jiná hodnota než číslo nebo nic";
        fail;
      }
      else {
        if(max<x){
          max=x;
        }
      }
    }
    sum2.innerHTML=max;
  }

  function countfull(){
    var full = 0;
    var x = 0;
    var sum3 = document.getElementById(\'sum3\');
    //alert("boo!");
    for (let i = 0; i < 31; i++) {
      x=document.forms[\'umra_test\'][\'n\'+i].value;
      if(x==""){
        x=825;
      }
      x = parseInt(x, 10);
      if (isNaN(x))
      {
        sum4.innerHTML="Nelze vypočítat, v tabulce se objevila jiná hodnota než číslo nebo nic";
        fail;
      }
      else if(x!=825){
        full++;
        }
      }

    sum3.innerHTML=full;
  }

  function allsum(){
    suma();
    maxim();
    countfull();
    var x = document.getElementById(\'sum1\').innerText;
    var y = document.getElementById(\'sum2\').innerText;
    var z = document.getElementById(\'sum3\').innerText;
    var sum4 = document.getElementById(\'sum4\');
    var all = 0;

    x = parseInt(x, 10);
    y = parseInt(y, 10);
    z = parseInt(z, 10);

    if (isNaN(x) || isNaN(y) || isNaN(z))
    {
      sum4.innerHTML="Nelze vypočítat, není hotov některý mezivýpočet";
      fail;
    }
    else {
      all=x/(y*z);
      document.getElementById("PDFbutton").disabled = false;
      sum4.innerHTML=Number(all).toFixed(6);


    }

  }
  function generatePDF(){
    var makepdf = document.getElementById("makepdf");
    var opt = {
      margin:       [0, 0, 0, 0], //top, left, buttom, right
      filename:     \'umra.pdf\',
      image:        { type: \'jpeg\', quality: 0.98 },
      html2canvas:  { scale: 2, width: 1200 },
      jsPDF:        { unit: \'mm\', format: \'a4\', orientation: \'landscape\' }
    };
    html2pdf().set(opt).from(makepdf).save();
  }


</script>

<style>

.menu  {     
  display: flex;
  justify-content: center;
  text-align: center;
}
table {
  display: flex;
  justify-content: center;
  text-align: center;
}
.rotate {
  transform: rotate(90deg);
}
th, td {
  border: 1px solid black;
}

</style>
';
	}

}