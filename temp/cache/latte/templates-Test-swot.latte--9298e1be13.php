<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Test/swot.latte */
final class Template9298e1be13 extends Latte\Runtime\Template
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
    <a href="\\test\\eta" class="btn btn-primary">ETA</a>
    <a href="\\test\\swot" class="btn btn-secondary">SWOT</a>
    <a href="\\test\\umra" class="btn btn-primary">UMRA</a>
  <!--  <a href="\\test\\test" class="btn btn-primary">TEST</a> -->
  </div>


  <form method="POST" id="swot_test">

    <div class="table">

      <table style="width:100%" id="internal">

        <tr>
          <td colspan="10">
              <input type="text" name="Název" form="swot_test" value="Název: " style="width: 800px;">
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
                <input type="text" name="SIST1" form="swot_test" style="width: 300px;">
            </td>
            <td id="col1">
                <input type="text" name="SIST_V1" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'SIST_V1\',\'col1\')">
            </td>
            <td id="col2">
                <input type="text" name="SIST_H1" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_H1\',\'col2\')">
            </td>
            <td id="col3">
                <input type="button" name="SIST_S1" form="swot_test" style="width: 75px;" onclick="multiply(\'SIST_V1\',\'SIST_H1\',\'col3\')">
            </td>
            <td id="col4">
                <input type="text" name="SLST1" form="swot_test" style="width: 300px;">
            </td>
            <td id="col5">
                <input type="text" name="SLST_V1" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V1\',\'col5\')">
            </td>
            <td id="col6">
                <input type="text" name="SLST_H1" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_H1\',\'col6\')">
            </td>
            <td id="col7">
                <input type="button" name="SLST_S1" form="swot_test" style="width: 75px;" onclick="multiply(\'SLST_V1\',\'SLST_H1\',\'col7\')">
            </td>
        </tr>
        <tr>
            <td id="col8">
                <input type="text" name="SIST2" form="swot_test" style="width: 300px;">
            </td>
            <td id="col9">
                <input type="text" name="SIST_V2" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_V2\',\'col9\')">
            </td>
            <td id="col10">
                <input type="text" name="SIST_H2" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_V2\',\'col10\')">
            </td>
            <td id="col11">
                <input type="button" name="SIST_S2" form="swot_test" style="width: 75px;" onclick="multiply(\'SIST_V2\',\'SIST_H2\',\'col11\')">
            </td>
            <td id="col12">
                <input type="text" name="SLST2" form="swot_test" style="width: 300px;">
            </td>
            <td id="col13">
                <input type="text" name="SLST_V2" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V2\',\'col13\')">
            </td>
            <td id="col14">
                <input type="text" name="SLST_H2" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V2\',\'col14\')">
            </td>
            <td id="col15">
                <input type="button" name="SLST_S2" form="swot_test" style="width: 75px;" onclick="multiply(\'SLST_V2\',\'SLST_H2\',\'col15\')">
            </td>
        </tr>
        <tr>
            <td id="col16">
                <input type="text" name="SIST3" form="swot_test" style="width: 300px;">
            </td>
            <td id="col17">
                <input type="text" name="SIST_V3" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'SIST_V3\',\'col17\')">
            </td>
            <td id="col18">
                <input type="text" name="SIST_H3" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_H3\',\'col18\')">
            </td>
            <td id="col19">
                <input type="button" name="SIST_S3" form="swot_test" style="width: 75px;" onclick="multiply(\'SIST_V3\',\'SIST_H3\',\'col19\')">
            </td>
            <td id="col20">
                <input type="text" name="SLST3" form="swot_test" style="width: 300px;">
            </td>
            <td id="col21">
                <input type="text" name="SLST_V3" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V3\',\'col21\')">
            </td>
            <td id="col22">
                <input type="text" name="SLST_H3" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_H3\',\'col22\')">
            </td>
            <td id="col23">
                <input type="button" name="SLST_S3" form="swot_test" style="width: 75px;" onclick="multiply(\'SLST_V3\',\'SLST_H3\',\'col23\')">
            </td>
        </tr>
        <tr>
            <td id="col24">
                <input type="text" name="SIST4" form="swot_test" style="width: 300px;">
            </td>
            <td id="col25">
                <input type="text" name="SIST_V4" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_V4\',\'col25\')">
            </td>
            <td id="col26">
                <input type="text" name="SIST_H4" form="swot_test" style="width: 100px;" onchange="checkInp(\'SIST_V4\',\'col26\')">
            </td>
            <td id="col27">
                <input type="button" name="SIST_S4" form="swot_test" style="width: 75px;" onclick="multiply(\'SIST_V4\',\'SIST_H4\',\'col27\')">
            </td>
            <td id="col28">
                <input type="text" name="SLST4" form="swot_test" style="width: 300px;">
            </td>
            <td id="col29">
                <input type="text" name="SLST_V4" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V4\',\'col29\')">
            </td>
            <td id="col30">
                <input type="text" name="SLST_H4" form="swot_test" style="width: 100px;" onchange="checkInp(\'SLST_V4\',\'col30\')">
            </td>
            <td id="col31">
                <input type="button" name="SLST_S4" form="swot_test" style="width: 75px;" onclick="multiply(\'SLST_V4\',\'SLST_H4\',\'col31\')">
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
                <input type="text" name="PRI1" form="swot_test" style="width: 300px;">
            </td>
            <td id="col51">
                <input type="text" name="PRI_V1" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'PRI_V1\',\'col51\')">
            </td>
            <td id="col52">
                <input type="text" name="PRI_H1" form="swot_test" style="width: 100px;" onchange="checkInp(\'PRI_H1\',\'col52\')">
            </td>
            <td id="col53">
                <input type="button" name="PRI_S1" form="swot_test" style="width: 75px;" onclick="multiply(\'PRI_V1\',\'PRI_H1\',\'col53\')">
            </td>
            <td id="col54">
                <input type="text" name="HRO1" form="swot_test" style="width: 300px;">
            </td>
            <td id="col55">
                <input type="text" name="HRO_V1" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_V1\',\'col55\')">
            </td>
            <td id="col56">
                <input type="text" name="HRO_H1" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_H1\',\'col56\')">
            </td>
            <td id="col57">
                <input type="button" name="HRO_S1" form="swot_test" style="width: 75px;" onclick="multiply(\'HRO_V1\',\'HRO_H1\',\'col57\')">
            </td>
        </tr>
        <tr>
            <td id="col58">
                <input type="text" name="PRI2" form="swot_test" style="width: 300px;">
            </td>
            <td id="col59">
                <input type="text" name="PRI_V2" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'PRI_V2\',\'col59\')">
            </td>
            <td id="col60">
                <input type="text" name="PRI_H2" form="swot_test" style="width: 100px;" onchange="checkInp(\'PRI_H2\',\'col60\')">
            </td>
            <td id="col61">
                <input type="button" name="PRI_S2" form="swot_test" style="width: 75px;" onclick="multiply(\'PRI_V2\',\'PRI_H2\',\'col61\')">
            </td>
            <td id="col62">
                <input type="text" name="HRO2" form="swot_test" style="width: 300px;">
            </td>
            <td id="col63">
                <input type="text" name="HRO_V2" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_V2\',\'col63\')">
            </td>
            <td id="col64">
                <input type="text" name="HRO_H2" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_H2\',\'col64\')">
            </td>
            <td id="col65">
                <input type="button" name="HRO_S2" form="swot_test" style="width: 75px;" onclick="multiply(\'HRO_V2\',\'HRO_H2\',\'col65\')">
            </td>
        </tr>
        <tr>
            <td id="col66">
                <input type="text" name="PRI3" form="swot_test" style="width: 300px;">
            </td>
            <td id="col67">
                <input type="text" name="PRI_V3" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'PRI_V3\',\'col67\')">
            </td>
            <td id="col68">
                <input type="text" name="PRI_H3" form="swot_test" style="width: 100px;" onchange="checkInp(\'PRI_H3\',\'col68\')">
            </td>
            <td id="col69">
                <input type="button" name="PRI_S3" form="swot_test" style="width: 75px;" onclick="multiply(\'PRI_V3\',\'PRI_H3\',\'col69\')">
            </td>
            <td id="col70">
                <input type="text" name="HRO3" form="swot_test" style="width: 300px;">
            </td>
            <td id="col71">
                <input type="text" name="HRO_V3" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_V3\',\'col71\')">
            </td>
            <td id="col72">
                <input type="text" name="HRO_H3" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_H3\',\'col72\')">
            </td>
            <td id="col73">
                <input type="button" name="HRO_S3" form="swot_test" style="width: 75px;" onclick="multiply(\'HRO_V3\',\'HRO_H3\',\'col73\')">
            </td>
        </tr>
        <tr>
            <td id="col74">
                <input type="text" name="PRI4" form="swot_test" style="width: 300px;">
            </td>
            <td id="col75">
                <input type="text" name="PRI_V4" form="swot_test" value="" style="width: 100px;" onchange="checkInp(\'PRI_V4\',\'col75\')">
            </td>
            <td id="col76">
                <input type="text" name="PRI_H4" form="swot_test" style="width: 100px;" onchange="checkInp(\'PRI_H4\',\'col76\')">
            </td>
            <td id="col77">
                <input type="button" name="PRI_S4" form="swot_test" style="width: 75px;" onclick="multiply(\'PRI_V4\',\'PRI_H4\',\'col77\')">
            </td>
            <td id="col78">
                <input type="text" name="HRO4" form="swot_test" style="width: 300px;">
            </td>
            <td id="col79">
                <input type="text" name="HRO_V4" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_V4\',\'col79\')">
            </td>
            <td id="col80">
                <input type="text" name="HRO_H4" form="swot_test" style="width: 100px;" onchange="checkInp(\'HRO_H4\',\'col80\')">
            </td>
            <td id="col81">
                <input type="button" name="HRO_S4" form="swot_test" style="width: 75px;" onclick="multiply(\'HRO_V4\',\'HRO_H4\',\'col81\')">
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
  <button onClick="window.location.reload();" style="margin-left: 300px;">Opravit</button>
  <button onclick="checkAll();"" >Vyhodnotit</button>

<p>Výsledek tabulky je:</p><br>
<p id=sumarum></p>


  <script type="text/javascript">
  /*  document.addEventListener("change", function() {
      checkInp()
    }); */
    function checkInp(name, col)
    {
        var x=document.forms["swot_test"][name].value;
        var cell = document.getElementById(col);
        if (isNaN(x))
        {
          cell.style.backgroundColor = \'red\';
          document.forms[\'swot_test\'][name].value = "";
          alert("V tomto poli musí být číslo");
          return false;
        }
        else{
          cell.style.backgroundColor = \'white\';
       }
  /*     if (col = \'col1\'){
         var newbut=document.getElementById(\'col3\');
         newbut.innerHTML = \'<button id="btn" name="btn">Button</button>\'
       }*/

    }
    function multiply(name1, name2, col)
    {
        var x=document.forms["swot_test"][name1].value;
        var y=document.forms["swot_test"][name2].value;
        var cell = document.getElementById(col);
        if (isNaN(x) || x == "")
        {
          cell.style.backgroundColor = \'red\';
          alert("Chyba v poli váha");
          return false;
        }
        else if (isNaN(y) || y == "")
        {
          cell.style.backgroundColor = \'red\';
          alert("Chyba v poli hodnocení");
          return false;
        }
        else{
          cell.style.backgroundColor = \'white\';
          x = parseInt(x, 10);
          var result = Number(((x/100)*y).toFixed(4));
          cell.innerHTML = result;      // TOHLE VYPÍŠE JEN ČÍSLO
    //      alert("výpočet hotov");
       }
  /*     if(col=="col3" || "col11"){
       addition(1, result);
      }
      else if(col=="col7" || "col15"){
      alert("druhej sloupec");
      addition(2, result);
    } */
    //    alert("sem ještě jo");
        switch (col) {
          case \'col3\':
          case \'col11\':
          case \'col19\':
          case \'col27\':
    //        alert("sloupec 1");
            addition(1, result, x);
            break;
          case \'col7\':
          case \'col15\':
          case \'col23\':
          case \'col31\':
    //        alert("sloupec 2");
            addition(2, result, x);
            break;
          case \'col53\':
          case \'col61\':
          case \'col69\':
          case \'col77\':
              addition(3, result, x);
              break;
          case \'col57\':
          case \'col65\':
          case \'col73\':
          case \'col81\':
              addition(4, result, x);
              break;
          default:
            alert("chyba sloupce");
      }

    }
    const percent = [0,0,0,0];
    const suma = [0,0,0,0];
    function addition(position, result, x){
  //    alert(\'position\'+position+result+x);
      var per = document.getElementById(\'per\'+position);
      percent[position-1]+=x;
      if(percent[position-1]>100){
        alert("Součet procent nesmí být více než 100");
        per.style.backgroundColor = \'red\';
      }
      if(percent[position-1]==100){
        alert("Součet procent nesmí být více než 100, v této subtabulce již nelze nic přidat");
        per.style.backgroundColor = \'	#90EE90\';
      }

      per.innerHTML=percent[position-1]+\'%\';

      var total = document.getElementById(\'suma\'+position);
      suma[position-1]+=result;
      total.innerHTML= Number(suma[position-1].toFixed(4));

    }
    function checkAll(){
      var sumarum = document.getElementById(\'sumarum\');

      if(percent[0]==100 && percent[1]==100 && percent[2]==100 && percent[3]==100){
        sumarum.innerHTML= Number((suma[0]-suma[1]+suma[2]-suma[3]).toFixed(4));
      } else{
        sumarum.innerHTML="Nelze vypočítat, procentuální součet jedné nebo více subtabulek není 100%";
      }

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
  padding-left: 300px;
}



</style>
';
	}

}
