<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Praxe/swot.latte */
final class Template07d5092bb8 extends Latte\Runtime\Template
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
    <a href="\\praxe\\swot" class="btn btn-secondary">SWOT</a>
    <a href="\\praxe\\umra" class="btn btn-primary">UMRA</a>
  <!--  <a href="\\test\\test" class="btn btn-primary">TEST</a> -->
  </div>

  <div id="makepdf">
    <form method="POST" id="swot_praxe">

      <div class="table">

        <table style="width:100%" id="internal">

          <tr>
            <td colspan="10">
                <input type="text" id="Název" form="swot_praxe" value="Název: " style="width: 1100px;">
            </td>
          </tr>

          <tr>
              <th style="background-color: hsl(120,100%,75%);">
                  SILNÉ STRÁNKY
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  VÁHA
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  HODNOCENÍ
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  SOUČIN
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  SLABÉ STRÁNKY
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  VÁHA
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  HODNOCENÍ
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  SOUČIN
              </th>
          </tr>


          <tr>
              <td id="col0">
                  <input type="text" id="SIST1" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col1">
                  <input type="text" id="SIST_V1" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col2">
                  <input type="text" id="SIST_H1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sis1">
                  X
              </td>
              <td id="col4">
                  <input type="text" id="SLST1" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col5">
                  <input type="text" id="SLST_V1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col6">
                  <input type="text" id="SLST_H1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sls1">
                  X
              </td>
          </tr>
          <tr>
              <td id="col8">
                  <input type="text" id="SIST2" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col9">
                  <input type="text" id="SIST_V2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col10">
                  <input type="text" id="SIST_H2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sis2">
                  X
              </td>
              <td id="col12">
                  <input type="text" id="SLST2" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col13">
                  <input type="text" id="SLST_V2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col14">
                  <input type="text" id="SLST_H2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sls2">
                X
              </td>
          </tr>
          <tr>
              <td id="col16">
                  <input type="text" id="SIST3" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col17">
                  <input type="text" id="SIST_V3" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col18">
                  <input type="text" id="SIST_H3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sis3">
                  X
              </td>
              <td id="col20">
                  <input type="text" id="SLST3" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col21">
                  <input type="text" id="SLST_V3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col22">
                  <input type="text" id="SLST_H3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sls3">
                  X
              </td>
          </tr>
          <tr>
              <td id="col24">
                  <input type="text" id="SIST4" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col25">
                  <input type="text" id="SIST_V4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col26">
                  <input type="text" id="SIST_H4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sis4">
                X
              </td>
              <td id="col28">
                  <input type="text" id="SLST4" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col29">
                  <input type="text" id="SLST_V4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col30">
                  <input type="text" id="SLST_H4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="sls4">
                  X
              </td>
          </tr>


        </table>

  <!--
        <img src="https://www.dayconnexion.fr/wp-content/uploads/2018/11/plus.png" width="50" height="50" alt="Přidej řádek"  onclick="addRows(\'internal\')"  />
        <img src="https://icon-library.com/images/minus-icon/minus-icon-7.jpg" width="50" height="50" alt="Smaž řádek" onclick="deleteRows(\'internal\')" />
  -->
        <table>
          <tr style="background-color: hsl(60,100%,75%);">
              <td style="width:300px">
                Σ
              </td>
              <td id="per1" style="width:100px">
                Součet %
              </td>
              <td style="width:100px">
                Nic
              </td>
              <td id="suma1" style="width:75px">
                Součet
              </td>
              <td style="width:300px">
                Σ
              </td>
              <td id="per2" style="width:100px">
                Součet %
              </td>
              <td style="width:100px">
                Nic
              </td>
              <td id="suma2" style="width:75px">
                Součet
              </td>
          </tr>
        </table>
  <!-- EXTERNÍ TABULKA ZAČÍNÁ ZDE!!! -->
        <table style="width:100%" id="external">
          <tr></tr> <!-- tohle je tu kvůli přidávání řádků, nemazat -->
          <tr>
              <th style="background-color: hsl(120,100%,75%);">
                  PŘÍLEŽITOSTI
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  VÁHA
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  HODNOCENÍ
              </th>
              <th style="background-color: hsl(120,100%,75%);">
                  SOUČIN
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  HROZBY
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  VÁHA
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  HODNOCENÍ
              </th>
              <th style="background-color: hsl(0,100%,75%);">
                  SOUČIN
              </th>
          </tr>

          <tr>
              <td id="col50">
                  <input type="text" id="PRI1" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col51">
                  <input type="text" id="PRI_V1" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col52">
                  <input type="text" id="PRI_H1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="prs1">
                  X
              </td>
              <td id="col54">
                  <input type="text" id="HRO1" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col55">
                  <input type="text" id="HRO_V1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col56">
                  <input type="text" id="HRO_H1" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="hrs1">
                  X
              </td>
          </tr>
          <tr>
              <td id="col58">
                  <input type="text" id="PRI2" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col59">
                  <input type="text" id="PRI_V2" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col60">
                  <input type="text" id="PRI_H2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="prs2">
                  X
              </td>
              <td id="col62">
                  <input type="text" id="HRO2" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col63">
                  <input type="text" id="HRO_V2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col64">
                  <input type="text" id="HRO_H2" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="hrs2">
                  X
              </td>
          </tr>
          <tr>
              <td id="col66">
                  <input type="text" id="PRI3" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col67">
                  <input type="text" id="PRI_V3" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col68">
                  <input type="text" id="PRI_H3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="prs3">
                  X
              </td>
              <td id="col70">
                  <input type="text" id="HRO3" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col71">
                  <input type="text" id="HRO_V3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col72">
                  <input type="text" id="HRO_H3" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="hrs3">
                  X
              </td>
          </tr>
          <tr>
              <td id="col74">
                  <input type="text" id="PRI4" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col75">
                  <input type="text" id="PRI_V4" form="swot_praxe" value="" style="width: 100px;">
              </td>
              <td id="col76">
                  <input type="text" id="PRI_H4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="prs4">
                X
              </td>
              <td id="col78">
                  <input type="text" id="HRO4" form="swot_praxe" style="width: 300px;">
              </td>
              <td id="col79">
                  <input type="text" id="HRO_V4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="col80">
                  <input type="text" id="HRO_H4" form="swot_praxe" style="width: 100px;">
              </td>
              <td id="hrs4">
                  X
              </td>
          </tr>



        </table>
  <!--
        <img src="https://www.dayconnexion.fr/wp-content/uploads/2018/11/plus.png" width="50" height="50" alt="Přidej řádek"  onclick="addRows(\'external\')"  />
        <img src="https://icon-library.com/images/minus-icon/minus-icon-7.jpg" width="50" height="50" alt="Smaž řádek" onclick="deleteRows(\'external\')" />
  -->
        <table>
          <tr style="background-color: hsl(60,100%,75%);">
              <td style="width:300px">
                Σ
              </td>
              <td id="per3" style="width:100px">
                Součet %
              </td>
              <td style="width:100px">
                Nic
              </td>
              <td id="suma3" style="width:75px">
                Součet
              </td>
              <td style="width:300px">
                Σ
              </td>
              <td id="per4" style="width:100px">
                Součet %
              </td>
              <td style="width:100px">
                Nic
              </td>
              <td id="suma4" style="width:75px">
                Součet
              </td>
          </tr>
        </table>

      </div>
    </form>

    <p>Výsledek tabulky je:</p><br>
    <p id=sumarum></p>
  </div>
<button id="dobutton" onclick="checkAll(); this.disabled=true;" style="margin-left: 300px;">Vyhodnotit</button>
<button onClick="window.location.reload(); PDFbutton.disabled=true;">Opravit</button>
<button id="PDFbutton" onClick="generatePDF();" disabled>Genereuj PDF</button>

<!-- html2pdf CDN-->
  <script src=
  "https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js">
  </script>
  <script type="text/javascript">
  /*  document.addEventListener("change", function() {
      checkInp()
    }); */
    function checkAll(){
    //  alert("boo!");
      for (let i = 1; i < 5; i++) {
        multiply("SIST_V"+i, "SIST_H"+i, "sis"+i);
        multiply("SLST_V"+i, "SLST_H"+i, "sls"+i);
        multiply("PRI_V"+i, "PRI_H"+i, "prs"+i);
        multiply("HRO_V"+i, "HRO_H"+i, "hrs"+i);

      }

    }
/*    function checkInp(name)
    {
        var x=document.forms["swot_praxe"][name].value;
        if (isNaN(x))
        {
          sumarum.innerHTML="Nelze vypočítat, někde je chyba (v poli kde má být číslo není číslo!)"
          return false;
        }
        else{
          cell.style.backgroundColor = \'white\';
       }
  /*     if (col = \'col1\'){
         var newbut=document.getElementById(\'sis1\');
         newbut.innerHTML = \'<button id="btn" name="btn">Button</button>\'
       }

    } */
    function multiply(name1, name2, col)
    {
      //  alert("sem jo");
        var sumarum = document.getElementById(\'sumarum\');
        var x=document.forms["swot_praxe"][name1].value;
        var y=document.forms["swot_praxe"][name2].value;
        var cell = document.getElementById(col);
        if (x=="" && y==""){
          x=0;
          y=0;
        } else if (x=="" || y==""){
           sumarum.innerHTML="Nelze vypočítat, někde je pouze váha či hodnocení";
           document.getElementById("dobutton").disabled = true;
           document.getElementById("PDFbutton").disabled = true;
           fail;
        }

        if (isNaN(x) || isNaN(y))
        {
        //  cell.style.backgroundColor = \'red\';
          sumarum.innerHTML="Nelze vypočítat, některá váha či hodnocení není číslo";
          document.getElementById("dobutton").disabled = true;
          document.getElementById("PDFbutton").disabled = true;
          fail;
        }
        else{
          cell.style.backgroundColor = \'white\';
          x = parseInt(x, 10);
          var result = Number(((x/100)*y).toFixed(4));
          cell.innerHTML = result;      // TOHLE VYPÍŠE JEN ČÍSLO
    //      alert("výpočet hotov");
       }
  /*     if(col=="sis1" || "sis2"){
       addition(1, result);
      }
      else if(col=="sls1" || "sls2"){
      alert("druhej sloupec");
      addition(2, result);
    } */
    //    alert("sem ještě jo");
        switch (col) {
          case \'sis1\':
          case \'sis2\':
          case \'sis3\':
          case \'sis4\':
    //        alert("sloupec 1");
            addition(1, result, x);
            break;
          case \'sls1\':
          case \'sls2\':
          case \'sls3\':
          case \'sls4\':
    //        alert("sloupec 2");
            addition(2, result, x);
            break;
          case \'prs1\':
          case \'prs2\':
          case \'prs3\':
          case \'prs4\':
              addition(3, result, x);
              break;
          case \'hrs1\':
          case \'hrs2\':
          case \'hrs3\':
          case \'hrs4\':
              addition(4, result, x);
              break;
          default:
            alert("chyba sloupce");
      }

    }
    const percent = new Float32Array([0,0,0,0]);
    const suma = new Float32Array([0,0,0,0]);
    function addition(position, result, x){
  //    alert(\'position\'+position+result+x);
      var per = document.getElementById(\'per\'+position);
      percent[position-1]+=x;
  /*    if(percent[position-1]>100){
        alert("Součet procent nesmí být více než 100");
        per.style.backgroundColor = \'red\';
      }
      if(percent[position-1]==100){
        alert("Součet procent nesmí být více než 100, v této subtabulce již nelze nic přidat");
        per.style.backgroundColor = \'	#90EE90\';
      }*/

      per.innerHTML=percent[position-1]+\'%\';

      var total = document.getElementById(\'suma\'+position);
      suma[position-1]+=result;
      total.innerHTML= Number(suma[position-1].toFixed(4));

      var sumarum = document.getElementById(\'sumarum\');

      if(percent[0]==100 && percent[1]==100 && percent[2]==100 && percent[3]==100){
        sumarum.innerHTML= Number((suma[0]-suma[1]+suma[2]-suma[3]).toFixed(4));
        document.getElementById("PDFbutton").disabled = false;
      } else{
        sumarum.innerHTML="Nelze vypočítat, procentuální součet jedné nebo více subtabulek není 100%"
        document.getElementById("dobutton").disabled = true;
      }

    }

    function generatePDF(){
      var makepdf = document.getElementById("makepdf");
      var opt = {
        margin:       [0, 0, 0, 0], //top, left, buttom, right
        filename:     \'swot.pdf\',
        image:        { type: \'jpeg\', quality: 0.98 },
        html2canvas:  { scale: 2 },
        jsPDF:        { unit: \'mm\', format: \'a4\', orientation: \'landscape\' }
      };
      html2pdf().set(opt).from(makepdf).save();
    }
    /*
  function addRows(id){
  	var table = document.getElementById(id);
  	var rowCount = table.rows.length;
  	var cellCount = 7;
  	var row = table.insertRow(rowCount);
  	for(var i =0; i <= cellCount; i++){
  		var cell = \'cell\'+i;
  		cell = row.insertCell(i);
  		var copycel = document.getElementById(\'col\'+i).innerHTML;
  		cell.innerHTML=copycel;

  	}
  }

 Prozatím to nebudu používat
  function deleteRows(id){
  	var table = document.getElementById(id);
  	var rowCount = table.rows.length;
  	if(rowCount > \'3\'){
  		var row = table.deleteRow(rowCount-1);
  		rowCount--;
  	}
  	else{
  		alert(\'Tabulka musí obsahovat alespoň jeden řádek\');
  	}
  }
*/
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
p {
  margin-left: 300px;
}



</style>
';
	}

}
