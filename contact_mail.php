<html>
  <head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="jquery.mobile-1.4.2.min.css" />
    <script src="jquery-1.11.0.min.js"></script> <!-- trebuie inclus, JQM îl folosește -->
    <script src="jquery.mobile-1.4.2.min.js"></script> <!-- important să fie după jquery.js -->
	<script>
		$(function() {
			$("#butonspredoi").on("click",function(){
				
			$("#inputs$.mobile.changePage("#pag2"
			});predoi").on("click",function(){
				$.mobile.changePage("#pag3");
				// mergea și cu $("#butonspredoi").trigger("click"), adică putem declanșa evenimentul click al celuilalt buton
			});
			$("#inputspredoi").on("click",function(){
				$.mobile.changePage("#pag4");
				// mergea și cu $("#butonspredoi").trigger("click"), adică putem declanșa evenimentul click al celuilalt buton
			});
		});
	</script>

  </head>
  
  
  <BODY BGCOLOR="#00FFFF">
  <div style="text-align: center;"> 
  <p style color="white">
<FONT COLOR="#00008B" SIZE="4">
    <div data-role="page" id="pag1">
      <div data-role="header"><h1>Bine ati venit ,in pagina iubitorilor de animale !</h1></div>
      <div data-role="content">
		<a data-role="button" id="legaturaladoi" href="#pag2">Despre noi</a> <!-- recomandat pentru navigație -->
		<a data-role="button" id="legaturaladoi" href="#pag3">Contact</a> <!-- recomandat pentru navigație -->
		<a data-role="button" id="legaturaladoi" href="#pag4">Servicii</a> <!-- recomandat pentru navigație -->
		<button id="butonspredoi">Sari la doi</button> <!-- recomandat pentru declanșare evenimente -->
		<input type="button" id="inputspredoi" value="Input spre doi" /> <!-- recomandat pentru trimitere formulare -->
	  </div>
      <div data-role="footer"><h1><strong>Fii voluntar in timpul liber !</strong></h1><br/>
	  <marquee style="border:RED 3px SOLID">*****ADOPTA UN SUFLET SI NU VEI REGRETA !*****STERILIZEAZA SI NU ABANDONA !*****ADOPTA VIRTUAL UN CAINE SAU O PISICA!***** </marquee><br/>
	  <div id="slideshow">
	 
	      <div> <img src="../PAGINA/imagini/1.jpg" alt="" width="850" height="450"></div>
		  <div><img src="../PAGINA/imagini/7.jpg" alt="" width="850" height="450"></div>
		 
		
	 
	 
	 </div>
	  <center><p>Indiferent ca salvezi un caine de pe strada, pierdut de stapanii lui si incerci sa-l readuci acasa
	 sau te orferi voluntar la un adapost canin pentru a ajuta la ingrijirea animalelor de acolo, 
	 gestul tau poate fi considerat un exemplu demn de urmat pentru societate. Pentru a incepe voluntariatul, 
	 ia legatura cu unul centrele de adapost din apropierea casei tale. Afla cum ii poti ajuta si daca te poti descurca in acele conditii.
	 Daca te suprasoliciti fizic sau psihic, nu vei putea sa fii de folos cu adevarat. Este posibil sa nu te simti confortabil lucrand cu animale pe care nu le cunosti. 
	 Insa, nu este cazul sa renunti. Poti face alte lucruri precum: sa raspunzi la telefon, sa te ocupi de site-ul organizatiei, sa pregatesti mancarea pentru catei etc. 
	 Daca iti doresti cu adevarat sa faci ceva pentru animale poti gasi o activitate prin care sa te faci util. Tot ceea ce trebuie sa faci este sa cauti un centru de adapost 
	 din apropierea casei tale sau sa intrebi un medic veterinar ce ti-ar recomanda pentru voluntariat. In general medicii cunosc centrele de adapost si stiu unde este mai mare nevoie de voluntari. </p></center>
	   
	  </div>
    </div>
	
 
		<div data-role="page" id="pag2">
      <div data-role="header"><h1>Despre noi</h1></div>
	  	 <!--/Start cod prognoza-meteo.ro/--> <div id="dmeteo" style='color:#ffffff;border:1px solid #941414;width:160 px;text-align:center;background:#941414;'>
 <a href="http://www.prognoza-meteo.ro" title="Prognoza Meteo" target="_blank" style="color:#ffffff;">Prognoza Meteo</a> </div>
<iframe id="pmeteo" SRC="http://www.prognoza-meteo.ro/preluareprognoza.php?parameters=160 ,941414,941414 ,ffffff,ffffff ,1 ,ROXX0003" NAME="vremea1" hspace=0 vspace=0 ALIGN="left" HEIGHT="199" WIDTH="162" scrolling=no marginheight=0 marginwidth=0 frameborder=0> </iframe> <script language="JavaScript"> function errorHandler(evt) {document.getElementById('pmeteo').style.display="none"; document.getElementById('dmeteo').style.display="none"; } var img = new Image(); img.onerror = errorHandler; img.src ='http://www.prognoza-meteo.ro/ban.gif?x='+Math.random(); </script> <!--/End cod/--> 
</br>
	  
	  <div data-role="header">
	
<div data-role="navbar">
	<ul>
		<li><a href="#pag1" class="ui-btn-active ui-state-persist">Home</a></li>
		<li><a href="#pag2">Despre noi</a></li>
		<li><a href="#pag3">Contact</a></li>
		<li><a href="#pag4">Servicii</a></li>
	</ul>
</div><!-- /navbar -->

	</br>
</div>
      <div data-role="content">
	  	<div id="col_dr">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3097.8221430997955!2d-3.6167433000000013!3d39.064967200000005!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd6965037dfd834b%3A0x85ae7a933ab654fd!2sedenashop!5e0!3m2!1ses!2sro!4v1441743791923" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
			<div id="col_clear">
			</div>
	   <a href="https://twitter.com/edenashop" class="twitter-follow-button" data-show-count="false" data-size="large">Follow @edenashop</a>
<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	  
	  <p><strong>Adapotul Animalelor Fericite: Neciu Dinea Loredana Narcisa<strong><br/>
	  Adresa: Strada Avram Iancu, Nr. 10, 407280 Floresti, 
	  judetul Cluj, Romania<br/>
      E-mail:edenashop@yahoo.com<br/>
      Program:non-stop<br/>
	   Telefon:0771371348;<br/>
	   </p>
	  
<script type="text/javascript" src=""></script><br>
	  

<!--  CursBnr.ro Code start v.2.3-->
<script language="JavaScript" type="text/javascript" src="http://www.cursbnr.ro/insert/insertmodule0.php?w=180&b=f7f7f7&bl=dcdcdc&ttc=0a6eab&tc=000000"></script>
<!--  CursBnr.ro Code end v.2.3-->

	  <H4>
Credem ca frumusetea unica se poate obtine cand imaginatia si creativitatea vin din inima unui artist pasionat, care traieste pe deplin fiecare opera, careia ii ofera un stil aparte si apoi o rafineaza.

 Tot ceea ce facem este pentru ca tu sa te simti admirata si speciala.

 Consideram ca slefuim diamante, asa ca insuflam fiecarui lucru pe care il facem eleganta, finetea si personalitatea care ti se cuvin.

 Se intampla sa fim cei mai buni in arta infrumusetarii.

 Te invitam sa profiti de pasiunea noastra pentru frumos si impreuna sa oferim stil si rafinament celor mai importante evenimente din viata ta.
</H4>

</br>
<iframe width="854" height="510" src="https://www.youtube.com/embed/qc6cTlHLz8Q" frameborder="0" allowfullscreen></iframe>
	  </div>
      <div data-role="footer"><h1>Copyright copy 2015 Edenashop</h1></div>
    </div>
	
	<div data-role="page" id="pag3">
      <div data-role="header"><h1>Contact</h1></div>
<div data-role="navbar">
	<ul>
		<li><a href="#pag1" class="ui-btn-active ui-state-persist">Acasa</a></li>
		<li><a href="#pag2">Despre noi</a></li>
		<li><a href="#pag3">Contact</a></li>
		<li><a href="#pag4">Servicii</a></li>
	</ul>
</div><!-- /navbar -->
	 
      <div data-role="content">
	  
	 

	<form action="https://192.168.0.243/proiect_final/sender.php" method="post">
		<form style="width:350px; background:#e8e8fe; text-align:center;" name="mailer" method="post"  onsubmit="return Validate()" action="contact_mail.php">
 <h3 id="fc_titlu"><u>Trimiteti mesaj</u></h3>
 Numele dv.: &nbsp;<input type="text" name="nume" id="nume" size="24" maxlength="40" /><br />
 Email :&nbsp;&nbsp; <input type="text" name="email" id="email" size="28" maxlength="58" /><br />
 Subiect:&nbsp; <input type="text" name="subiect" id="subiect" size="28" maxlength="70" /><br />
 Scrieti mesajul: (<i>maxim 500 caractere</i>)<br />
  <textarea name="mesaj" id="mesaj" cols="35" rows="6"></textarea>
  <input type="hidden" name="anti_spam" value="" />
  <div id="div_as" style="display:none;">
   <i>Adaugati urmatorul cod:</i> <b id="codas"> </b><br />
   Verificare: <input type="text" name="anti_spam1" value="" size="7" maxlength="7" />
  </div>
  <input type="submit" value="Trimite" id="submit" />
</form>
	  </div>
	   <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d10930.255977832456!2d23.62215!3d46.77349!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x55e3e88a1a971223!2sSALON+MIRELA+ROMAN!5e0!3m2!1sro!2sro!4v1438939819629" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
	  <div>



      <div data-role="footer"><h1>Copyright copy 2015 Edenashop</h1></div>
    </div>
	
	<div data-role="page" id="pag4">
      <div data-role="header"><h1>Servicii</h1></div>
	  <div data-role="navbar">
	<ul>
		<li><a href="#pag1" class="ui-btn-active ui-state-persist">Home</a></li>
		<li><a href="#pag2">Despre noi</a></li>
		<li><a href="#pag3">Contact</a></li>
		<li><a href="#pag4">Servicii</a></li>
	</ul>
</div><!-- /navbar -->
      <div data-role="content">
	  <a href="http://www.biovetcluj.ro/ro/home.aspx" target="_parent"><img src="PAGINA/imagini/veterinar.png" border="0"></a><br>
		<a href="http://aldovet.ro/" target="_parent"><img src="PAGINA/imagini/caine.png" border="0"></a><br>
		<a href="http://www.turbopet.ro/" target="_parent"><img src="PAGINA/imagini/21.png" border="0"></a><br>
		
	  <p>Pentru mai multe informatii:  <body bgcolor="orange"><br/>
                     <a href="http://www.google.com/">Cautati alte informatii pe GOOGLE!</a>
				  </p>
	  </div>
      <div data-role="footer"><h1>Copyright copy 2015 Edenashop</h1></div>
    </div>
	
  </body>
</html>
