<?php

use Latte\Runtime as LR;

/** source: D:\Ambis\Bakalářka\Projekt\app\Presenters/templates/Landingpage/about.latte */
final class Template8b341745cf extends Latte\Runtime\Template
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

<div class="sidenav">
  <a href="#uvod">Úvod</a>
  <a href="#test_swot">Test SWOT</a>
  <a href="#test_umra">Test UMRA</a>
  <a href="#praxe_swot">Praxe SWOT</a>
  <a href="#praxe_umra">Praxe UMRA</a>
</div>

<div class="main">
  <div id="uvod">
    <br><br><br><br>
    <h1>Navigace na stránce</h1>
    <p>Celou touto aplikací vás bude provázet jednoduchý navigační panel, vypadá takto, ale můžete si jej prohlédnout i na horní části obrazovky.<br>
      <img
        src="../img/navod/navbar.png"
        width="1200"
        height=auto
        alt="Navigační panel"
     >
    </p>
    <br><br>
    <p>Kliknutím na slova <b>KrisKriz</b> v levé části panelu se dostanete na rozcestníkovou stránku a výběr kam dále.<br>
      <img
        src="../img/navod/navbar1.png"
        width="1200"
        height=auto
        alt="Navigační panel užití KrisKriz"
     >
    </p>
    <br><br>
    <p>Kliknutím na slova <b>něco</b> v pravé části panelu se zatím nedostanete nikam, sem musím ještě domyslet co dám, nebo jestli to nesmazat úplně.<br>
      <img
        src="../img/navod/navbar2.png"
        width="1200"
        height=auto
        alt="Navigační panel užití něco"
     >
    </p>
    <br><br>
    <p>Kliknutím na slovo <b>Návod</b> v pravé části panelu se dostanete na tuto stránku. Předpokládám, že toto jste již alespoň jednou vyzkoušeli.<br>
      <img
        src="../img/navod/navbar3.png"
        width="1200"
        height=auto
        alt="Navigační panel užití Návod"
     >
    </p>
    <br><br>
    <p>Kliknutím na slovo <b>Podmínky</b> v pravé části panelu se dostanete na stránku s podmínkami užití této aplikace. Doufám že jste ji alespoň jednou viděli,
      tím že jste se dostali až sem jste totiž s právě těmito podmínkami souhlasili.<br>
      <img
        src="../img/navod/navbar4.png"
        width="1200"
        height=auto
        alt="Navigační panel užití Podmínky"
     >
    </p>
    <br><br>
    <h2>Rozcestí</h2>
    <p>Po kliknutí na tlačítko vstoupit, či na navigačním panelu zvolíte KrisKriz, dotanete se na stránku s rozcestím, kde si můžete vybrat typ kontroly
      průchodem různých metod krizového managementu.<br>
      Zvolíte-li <b>Výuka</b>, budete kontrolováni při každém kroku zpracování metody a bude tedy jednodužší si uvědomit všechny mezikroky.<br>
      Zvolíte-li <b>Praxe</b>, vyhodnocení bude provedeno až v případě že si tak budete přát. Bude-li vše v pořádku, je zde možné tabulku převést na PDF
      a použít například v projektu. Nastane-li při výpočtu chyba, dle druhu chybové hlášky je možné určit oblast výskytu chyby.<br>
      <img
        src="../img/navod/uvod.png"
        width="1200"
        height=auto
        alt="Rozcestí"
     >
    </p>
    <br><br>
    <p>Ať zvolíte Výuku či praxi, máte na výběr <i>zatím</i> z těchto tří metod. ETA není naimplemetovaná, a kdo ví jestli bude, kdyžtak to smažu.
      K metodám <b>SWOT</b> a <b>UMRA</b> se více dočtete dále.<br>
      <img
        src="../img/navod/vyber.png"
        class="center"
        width="200"
        height=auto
        alt="Výběr metody"
     >
    </p>


  </div>

  <div id="test_swot" style="margin-top: 100px;">
  <br><br><br><br>
    <h1>Testovací část SWOT</h1>
    <br><br>
    <p>V tréningové části SWOT anaýzy vás přivítá tato tabulka.<br>
      V horní části popsané jako název si zvolíte jak se bude celá tabulka jmenovat. Dále vidíte 4 submatice, <b>Silné stránky</b>, <b>slabé stránky</b>, <b>příležitosti</b>
        a <b>hrozby</b>, které jsou pro tuto metodu specifické, viz teoretická část práce.<br><br>
      <img
        src="../img/navod/SWOT/test/swot.png"
        width="1200"
        height=auto
        alt="Úvodní tabulka"
     >
    </p>
    <br><br>
    <p>Rozeberme si teď funkčnost v jedné ze submatic.<br>
      V prvním poli zadáte název aspektu který hodnotíte, v tomto případě zde není omezení na vámi zvolené pojmenování. Pole váha a hodnocení musí být čísla.
      Váhu zde udávejte pouze jako číslice, bez znaku %, toto za vás tabulka v pozdější fázi doplní.<br>
      Pokusíte-li se do těchto polí zadat něco jiného, program vás upozorní na problém, pole vymaže a červeně označí kde chyba nastala.
      Toto se děje neustále při každém jednom vyplnění této části.<br></p>
      <div class="row">
       <div class="column">
         <img
            src="../img/navod/SWOT/test/swot1.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
       <div class="column">
         <img
            src="../img/navod/SWOT/test/swot2.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
       <div class="column">
         <img
            src="../img/navod/SWOT/test/swot3.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
      </div>
      <br><br>
      <p>Vyhodnocení řádku provedete kliknutím na tlačítko v poli součin. Máte-li vše tak jak má být, provede se výpočet a výsledek se zanese na místo tlačítka.
        Dále se take přepočítají průběžné výsledky a tyto se projeví ve spodní (žluté) části submatice.<br></p>
        <div class="row">
         <div class="column">
           <img
              src="../img/navod/SWOT/test/swot4.png"
              alt="Snow"
              width="400"
              height=auto
             >
         </div>
         <div class="column">
           <img
              src="../img/navod/SWOT/test/swot5.png"
              alt="Snow"
              width="400"
              height=auto
             >
         </div>
        </div>
        <br><br>
        <p>Je-li ovšem na některé pozici problém, například chybějící údaj či špatný typ záznamu (číslo tam, kde být nesmí atd.), program vás upozorní, výpočet neprovede
          a označí tlačítko řádku kde byla chyba nalezena. Máte tak možnost řádek opravit a výpočet provést ještě jednou.<br></p>
          <div class="row">
           <div class="column">
             <img
                src="../img/navod/SWOT/test/swot7.png"
                alt="Snow"
                width="400"
                height=auto
               >
           </div>
           <div class="column">
             <img
                src="../img/navod/SWOT/test/swot6.png"
                alt="Snow"
                width="400"
                height=auto
               >
           </div>
          </div>
          <br><br>
          <p>Postupně vyplňujte tabulku tak, až se dostanete ke konečnému součtu procent rovnému 100. Když se k tomuto číslu dostanete,
            budete upozorněni že již není žádoucí do této subtabulky cokoliv přidávat a procentuelní hodnota se pro přehlednost ve spodní časti označí zelenou barvou.<br></p>
            <div class="row">
             <div class="column">
               <img
                  src="../img/navod/SWOT/test/swot8.png"
                  alt="Snow"
                  width="400"
                  height=auto
                 >
             </div>
             <div class="column">
               <img
                  src="../img/navod/SWOT/test/swot9.png"
                  alt="Snow"
                  width="400"
                  height=auto
                 >
             </div>
            </div>
            <br><br>
            <p>Jelikož se tabulka vyplňuje postupně, je možné přesáhnout hodnotu v součtu vyšší jak 100%. Když se toto stane,
              budete upozorněni že jste již přesáhli 100% a procentuelní hodnota se pro přehlednost ve spodní časti označí červenou barvou.<br></p>
              <div class="row">
               <div class="column">
                 <img
                    src="../img/navod/SWOT/test/swot10.png"
                    alt="Snow"
                    width="400"
                    height=auto
                   >
               </div>
               <div class="column">
                 <img
                    src="../img/navod/SWOT/test/swot11.png"
                    alt="Snow"
                    width="400"
                    height=auto
                   >
               </div>
              </div>
            <br><br>
            <p>Tento postup opakujte na všech submaticích.<br>
              Jakmile budete připraveni ozkoušet jestli máte tabulku vyplněnou správně, stiskněte tlačítko <b>vyhodnotit</b>.
              Tato možnost je otevřena po celou dobu vyplňování submatic, kdykoliv v průběhu vkládání dat si tedy můžete zkontrolovat
              zda již tabulka splňuje všechny náležitosti.<br>
              Tlačítkem <b>Opravit</b> aktivujete obnovení stránky, vymažete tím všechny mezivýpočty, ale vámi vyplňené buňky zůstanou zachovány.
              Tohoto je též možné využít kdykoliv v průběhu tvoření.
              <br><br>
              <img
                src="../img/navod/SWOT/test/swot13.png"
                width="400"
                height=auto
                alt="Oprava a vyhodnocení"
             >
            </p>
            <br><br>
            <h4>Správný výsledek</h4>
            <p>Dosadíte-li ve všech buňkách i ve všech submaticích správné hodnoty a mezivýpočty vám ve všech případech dávají součet vah 100%, gratuluji,
              testovací část SWOT analýzy jste zdarně zvládli a odměnou budiž vám vypočtená hodnota analýzy.
              <i>Přemýšlím jestli přidat i slovní hodnocení, jako pozitivní, negativní a neutrální</i><br>
              Naleznete ji ve spodní části tabulky.

              <br><br>
              <img
                src="../img/navod/SWOT/test/swot12.png"
                width="1200"
                height=auto
                alt="Swotka ok"
             >
            </p>
            <br><br>
            <h4>Špatný výsledek</h4>
            <p>V případě, že některá součást nemá ve výsledku součet 100% a to v kladném i záporném smyslu, bude místo výsledku ve spodní části
              pouze informace o chybě. Zkontrolujte tedy kde máte například špatné hodnocení, či jste zapomněli provést mezivýpočet a toto opravte.
              Je-li třeba, využijte tlačítka opravit. <br>
              <b>Tabulka pracuje poze s těmi řádky, u kterých je proveden mezivýpočet. Vyplněné ale nepřičtené řádky budou ve vyhodnocení ignorovány.</b>

              <br><br>
              <img
                src="../img/navod/SWOT/test/swot14.png"
                width="1200"
                height=auto
                alt="Swotka ok"
             >
            </p>






  </div>

  <div id="test_umra">
    <br><br><br><br>
    <h1>Testovací část UMRA</h1>
    <br><br>
    <p>V tréningové části UMRA anaýzy vás přivítá tato tabulka.<br>
      Zde můžete doplňovat různé možnosti a jejich prolnutí v matici, viz teoretická část práce.<br><br>
      <img
        src="../img/navod/UMRA/test/umra.png"
        width="1200"
        height=auto
        alt="Úvodní tabulka"
     >
    </p>
    <br><br>
    <p>Doplnění polí je hlídáno automaticky.<br>
      Do levého sloupce doplňujete segmenty projektu a do horního řádku pak zdroje nebezpečí. Buňky v matici pak musí obsahovat číselné prolnutí obou aspektů či nic.
      Pokusíte-li se do těchto polí zadat něco jiného, program vás upozorní na problém, pole vymaže a červeně označí kde chyba nastala.
      Toto se děje neustále při každém jednom vyplnění této části.<br></p>
      <div class="row">
       <div class="column">
         <img
            src="../img/navod/UMRA/test/umra1.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
       <div class="column">
         <img
            src="../img/navod/UMRA/test/umra2.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
       <div class="column">
         <img
            src="../img/navod/UMRA/test/umra3.png"
            alt="Snow"
            width="400"
            height=auto
           >
       </div>
      </div>
      <h1>TODO - Přidat zákaz psaní čísel tam, co nejsou názvy</h1>
      <br><br>
      <br><br>
      <p>Správně vyplněná tabulka pak může vypadat následovně.<br>
        <br>
        <img
          src="../img/navod/UMRA/test/umra4.png"
          width="1200"
          height=auto
          alt="Úvodní tabulka"
       >
      </p>
      <br><br>
      <p>Jestliže vám přijde tabulka dostatečně vyplněná, můžete se pustit do výpočtu mezivýsledků. Na pořadí v tomto případě nezáleží.<br></p>
        <div class="row">
         <div class="column">
           <img
              src="../img/navod/UMRA/test/umra5-1.png"
              alt="Snow"
              width="200"
              height=auto
             >
         </div>
         <div class="column">
           <img
              src="../img/navod/UMRA/test/umra5-2.png"
              alt="Snow"
              width="200"
              height=auto
             >
         </div>
         <div class="column">
           <img
              src="../img/navod/UMRA/test/umra5-3.png"
              alt="Snow"
              width="200"
              height=auto
             >
         </div>
        </div>
        <br><br>
        <p>Záleží ovšem na tom, aby byly vypočítány <b>všechny</b> mezivýpočty. Bez nich nelze stanovit výsledek.<br>
          <br>
          <img
            src="../img/navod/UMRA/test/umra7.png"
            width="400"
            height=auto
            alt="Úvodní tabulka"
         >
        </p>
        <br><br>
        <p>Správně vypočítané součásti vás doveou až ke zdárnému cíli, výslednému hodnocení.<br>
          <br>
          <img
            src="../img/navod/UMRA/test/umra6.png"
            width="200"
            height=auto
            alt="Úvodní tabulka"
         >
        </p>


  </div>

  <div id="praxe_swot">
    <br><br><br><br>
    <h1>Praktická část SWOT</h1>
    <br><br>
    <p>V praktické části SWOT anaýzy vás přivítá téměř totožná tabulka jako v části teoretické.<br>
      Hlavním rozdílem je, že vyhodnocování proběhne současně, chybí tedy vyhodnocení pro každý řádek zvlášť.<br><br>
      <img
        src="../img/navod/SWOT/praxe/swot.png"
        width="1200"
        height=auto
        alt="Úvodní tabulka"
     >
      <br><br>
      <h3>Vyhodnocení</h3>
      <br><br>
      <p>Po stisknutí tlačítka vyhodnotit nastane jedna z možností níž.</p><br><br>
      <h4>Kladné vyhodnocení</h4>
      <br><br>
      <p>V případě, že je tabulka zpracována správně, vyhodnocení proběhne bez zastavení a hodnocení se objeví ve spodní části tabulky.<br><br>
        <img
          src="../img/navod/SWOT/praxe/swot1.png"
          width="1200"
          height=auto
          alt="SWOTka ok"
       >
        <p>Aktivuje se též možnost vygenerovat PDF. Po stsknutí tlačítka <b>Generuj PDF</b>
           soubor automaticky vyskočí v další záložce prohlížeče a uloží se do stažených souborů pod názvem swot.pdf<br><br>
          <img
            src="../img/navod/SWOT/praxe/swot4.png"
            width="800"
            height=auto
            alt="Generuj PDF"
         >
          <br><br>
          <h4>Záporné vyhodnocení</h4>
          <br><br>
          <p>V případě, že je v tabulce chyba, vyhodnocení proběhne až do místa chyby. Chyba jako taková se neoznačí, ale jelikož
            se vyhodnocování hned ukončí je možné vypátrat kde se tak stalo. V tomto případě chybí jedna z hodnot a výpočet se zastavil v tomto místě.
            Zbylé výpočty tedy nemusí dávat smysl. To ovšem nevadí, špatně zpracovaná tabulka stejně není použitelná.
             Z tohoto důvodu se též neaktivuje možnost vytvořit PDF.<br><br>
            <img
              src="../img/navod/SWOT/praxe/swot2.png"
              width="1200"
              height=auto
              alt="SWOTka ok"
           >
            <p>Další možné chyby ve výpočtu jsou procentuální hodnoty submatic či špatné zadání hodnot.
              Je-li v analýze více chyb nelze určit, program vyhodnotí tu první a tam se zastaví.<br><br>
               <div class="row">
                <div class="column">
                  <img
                     src="../img/navod/SWOT/praxe/swot3.png"
                     alt="Snow"
                     width="400"
                     height=auto
                    >
                </div>
                <div class="column">
                  <img
                     src="../img/navod/SWOT/praxe/swot5.png"
                     alt="Snow"
                     width="400"
                     height=auto
                    >
                </div>
               </div>




  </div>

  <div id="praxe_umra">
    <br><br><br><br>
    <h1>Praktická část UMRA</h1>
    <br><br>
    <p>V praktické části UMRA anaýzy vás přivítá téměř totožná tabulka jako v části teoretické.<br>
      Hlavním rozdílem je, že vyhodnocování proběhne současně, chybí tedy vyhodnocení pro každý mezivýpočet zvlášť.<br><br>
      <img
        src="../img/navod/UMRA/praxe/umra.png"
        width="1200"
        height=auto
        alt="Úvodní tabulka"
     >
      <br><br>
      <h3>Vyhodnocení</h3>
      <br><br>
      <p>Po stisknutí tlačítka vyhodnotit nastane jedna z možností níž.</p><br><br>
      <h4>Kladné vyhodnocení</h4>
      <br><br>
      <p>V případě, že je tabulka zpracována správně, vyhodnocení proběhne bez zastavení a hodnocení se objeví ve spodní části tabulky.<br><br>
        <img
          src="../img/navod/UMRA/praxe/umra1.png"
          width="1200"
          height=auto
          alt="SWOTka ok"
       >
        <p>Aktivuje se též možnost vygenerovat PDF. Po stsknutí tlačítka <b>Generuj PDF</b>
           soubor automaticky vyskočí v další záložce prohlížeče a uloží se do stažených souborů pod názvem umra.pdf<br><br>
          <img
            src="../img/navod/UMRA/praxe/umra3.png"
            width="800"
            height=auto
            alt="Generuj PDF"
         >
          <br><br>
          <h4>Záporné vyhodnocení</h4>
          <br><br>
          <p>V případě, že je v tabulce chyba, vyhodnocení proběhne až do místa chyby. Momentálně jediná chyba co se detekuje je číselné hodnocení matice.
             Špatnou tabulku nelze využít, z tohoto důvodu se též neaktivuje možnost vytvořit PDF.<br><br>
            <img
              src="../img/navod/UMRA/praxe/umra2.png"
              width="1200"
              height=auto
              alt="UMRA ok"
           >

  </div>

</div>

<style>

.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 70;
  left: 0;
  background-color: #ededed;
  overflow-x: hidden;
  padding-top: 10px;
  margin-top: -10px;
}

.sidenav a {
  padding: 6px 6px 6px 32px;
  text-decoration: none;
  font-size: 25px;
  color: #818181;
  display: block;
}

.sidenav a:hover {
  color: #87ab69;
}

.main {
  margin-left: 250px; /* Same as the width of the sidenav - nope, edited for aesthetic purposes*/
}

p {
  width: 1200px;
}

.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
}

.column {
  float: left;
  width: 400px;
  padding: 5px;
}

/* Clear floats after image containers */
.row::after {
  content: "";
  clear: both;
  display: table;
}

</style>


';
	}

}
