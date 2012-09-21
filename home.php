<!-- Updated: 09/12/2012 -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<title>Robert Gregson-Filmmaker</title>
		<meta name="generator" content="Studio 3 http://aptana.com/">
		<meta name="author" content="TC">
		<!-- JS third party include files, jQuery, flash API,   -->
		<script type="text/javascript" src="js/expandingMenu.js"></script>
		<script type="text/javascript"src="js/jquery-1.6.2.min.js"></script>
		<script type="text/javascript" src="js/jquery-ui-1.8.16.custom.min.js"></script>
		<script type="text/javascript" src="js/froogaloop.js"></script>
		<script type="text/javascript" src="js/froogaloop.min.js"></script>
		<script type="text/javascript" src="js/swfobject.js"></script>
		
		<!-- JS custom files -->
		<script type="text/javascript" src="js/clickedOn.js"></script>
		<script type="text/javascript" src="js/hoverOver.js"></script>
		
		<!-- CSS Style sheets -->
		<link rel = "stylesheet" type="text" href="css/style.css"/>
		<link rel = "stylesheet" type="text/css" href="css/jquery-ui-1.8.16.custom.css"/>
		<link rel = "stylesheet" type="text/css" href="css/localStyle.css"/>
	</head>
<body>
</br></br></br></br>
<div id="name" class="inline">Robert Gregson    </div><div id="test" class="inline"></div>
<div id="permTitle" class="inline"></div>
<div id="title">  Filmmaker</div>
</br>
<div id="wrapper">
<div id="accordion">
  <li><h3 a href="#" onclick="sideBarClicked('about')">About</a></h3></li>
  <h3 a href="#">Work</a></h3>
 
    <ol id="list">
      <li><a href="#" onclick="sideBarClicked('direction')">Directing</a></li>
      <li><a href="#" onclick="sideBarClicked('editing')">Editing</a></li>
      <li><a href="#" onclick="sideBarClicked('cinematography')">Cinematography</a></li>
    </ol>
 
  <h3 a href="#" onclick="sideBarClicked('contact')">Contact</a></h3>
</div>


<div class="demo">

<div class="toggler">
<div id="content">
	<div id="about" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			Robert Gregson is a NYC-based filmmaker. His films have been featured at Anthology Film Archives, Avignon Film
			 Festival, University of Mary Washington Film Festival, and the Rappahannock Independent Film Festival. He 
			 writes, directs, edits, and shoots short and long-form media.
			</br></br>
			Currently, he is in postproduction on Demon Fighters, a feature documentary he produced and directed with 
			Shoebox Story Productions and is also in post on Just a Phase, a short documentary. He recently finished a 
			fictional short film, Advice, and is in preproduction on his next short. 
		</p>
		</br>
	</div>
	
	<div id="cinematography" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			 <a href="#"  onclick="filmClicked('cinematographyReel','Cinematography Reel')" 
			 onmouseover="showName('Cinematography Reel','cine','cinematography color.JPG','movieDescription','cineDescription')" 
			 onmouseout="removeName('cine','cinematography bw.JPG','movieDescription')">
			 <img name="cine" height=113 width=200 src="images/cinematography bw.JPG"></a>
			 
		 	 <a href="#" 
		 	onclick="filmClicked('rxrEp1','Route by Route - Episode 1')" 
		 	onmouseover="showName('Route By Route - Episode 1','rxrEp1Img','charitycolor.jpg','movieDescription','rxrEp1Description')" 
		 	onmouseout="removeName('rxrEp1Img','charitybw.jpg','movieDescription')">
			 <img name="rxrEp1Img"  width=200 src="images/charitybw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('rxrreel','Route By Route - Sizzle Reel')"
			 onmouseover="showName('Route by Route - Sizzle Reel','rxrreelImg','RBRcolor.jpg','movieDescription','rxrreelDescription')" 
			 onmouseout="removeName('rxrreelImg','RBRbw.jpg','movieDescription')">
			 <img name="rxrreelImg"  width=200 src="images/RBRbw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('adweekNewModel','Adweek New Model Agency')" 
			 onmouseover="showName('Adweek New Model Agency','adweekNewModelImg','SRcolor.jpg','movieDescription','adweekNewModelDescription')"
			 onmouseout="removeName('adweekNewModelImg','SRbw.jpg','movieDescription')">
			 <img name="adweekNewModelImg"  width=200 src="images/SRbw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('adweekSixQues','Adweek Six Questions with Rob Schwartz')" 
			 onmouseover="showName('Adweek Six Questions with Rob Schwartz','adweekSixQuesImg','Robcolor.jpg','movieDescription','adweekSixQuesDescription')" 
			 onmouseout="removeName('adweekSixQuesImg','Robbw.jpg','movieDescription')">
			 <img name="adweekSixQuesImg"  width=200 src="images/Robbw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('adweekSixDave','Adweek Six Questions with Dave Damman')"
			 onmouseover="showName('Adweek Six Questions with Dave Damman','adweekDaveImg','CarLynchcolor.jpg','movieDescription','adweekDaveDescription')" 
			 onmouseout="removeName('adweekDaveImg','CarLynchbw.jpg','movieDescription')">
			 <img name="adweekDaveImg" width=200 src="images/CarLynchbw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('aroma','Aromachology')"
			 onmouseover="showName('Aromachology','aromaImg','aromachologycolor.jpg','movieDescription','aromaDescription')" 
			 onmouseout="removeName('aromaImg','aromachologybw.jpg','movieDescription')">
			 <img name="aromaImg" width=200 src="images/aromachologybw.jpg"></a>
			 
 			 <div id="movieDescription" class="description"></div>
			 </br>
		</p>
	</div>
	<div id="direction" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<a href="#" onclick="filmClicked('demonFighters','Demon Fighters')" onmouseover="showName('Demon Fighters','df','demon fighters color.jpg','movieDescriptionForDirection','demonFightersDescription')" onmouseout="removeName('df','demon fighters bw.jpg','movieDescriptionForDirection')">
			 <img name="df" heigh=200 width=200 src="images/demon fighters bw.jpg"></a> 
			 
			 <a href="#" onclick="filmClicked('basedOnBefore','Dave Beck-Based on Before')" onmouseover="showName('Dave Beck-Based on Before','bob','based on before color.JPG','movieDescriptionForDirection','basedOnBeforeDescription')" onmouseout="removeName('bob','based on before bw.JPG','movieDescriptionForDirection')">
			 <img name="bob" heigh=200 width=200 src="images/based on before bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('alderRoads','Dave Beck-Alder Roads')" onmouseover="showName('Dave Beck-Alder Roads','alderRoads','alder roads color.JPG','movieDescriptionForDirection','alderRoadsDescription')" onmouseout="removeName('alderRoads','alder roads bw.JPG','movieDescriptionForDirection')">
			 <img name="alderRoads" heigh=200 width=200 src="images/alder roads bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('noLand','No Land Trailer')" onmouseover="showName('No Land Trailer','noLand','no land color.JPG','movieDescriptionForDirection','noLandDescription')" onmouseout="removeName('noLand','no land bw.JPG','movieDescriptionForDirection')">
			 <img name="noLand" heigh=200 width=200 src="images/no land bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('atEveryTurn','At Every Turn: The Work of Bob Gregson')" onmouseover="showName('At Every Turn: The Work of Bob Gregson','bobGreg','at every turn color.JPG','movieDescriptionForDirection','atEveryTurnDescription')" onmouseout="removeName('bobGreg','at every turn bw.JPG','movieDescriptionForDirection')">
			 <img name="bobGreg" heigh=200 width=200 src="images/at every turn bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('kristianRoad','Kristian Rose EPK')" onmouseover="showName('Kristian Rose EPK','EPK','kristian rose color.JPG','movieDescriptionForDirection','kristianRoadDescription')" onmouseout="removeName('EPK','kristian rose bw.JPG','movieDescriptionForDirection')">
			 <img name="EPK" heigh=200 width=200 src="images/kristian rose bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('leanStart','Lean Startup Machine')" onmouseover="showName('Lean Startup Machine','LSM','lean startup machine color.JPG','movieDescriptionForDirection','leanStartUpDescription')" onmouseout="removeName('LSM','lean startup machine bw.JPG','movieDescriptionForDirection')">			 
			 <img name="LSM" heigh=200 width=200 src="images/lean startup machine bw.JPG"></a>
			 
			  <a href="#" onclick="filmClicked('jw','Justice Woman')" 
			  	onmouseover="showName('Justice Woman','jwImg','justicewomanCOLOR.jpg','movieDescriptionForDirection','jwDescription')" 
			  	onmouseout="removeName('jwImg','justicewomanBW.jpg','movieDescriptionForDirection')">			 
			 <img name="jwImg" heigh=200 width=200 src="images/justicewomanBW.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('advice','Advice')" 
			 			onmouseover="showName('Advice','adviceImg','Advicecolor.jpg','movieDescriptionForDirection','adviceDescription')" 
			 			onmouseout="removeName('adviceImg','Advicebw.jpg','movieDescriptionForDirection')" >
			 <img name="adviceImg" hwidth=200 src="images/Advicebw.jpg"></a>
			 
			 <div id="movieDescriptionForDirection" class="description"></div>
			 
			 
			 </br> 
		</p>
	</div>
	<div id="editing" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			 <a href="#" onclick="filmClicked('editingReel','Editing Reel')" onmouseover="showName('Editing Reel','editReel','editing reel color.JPG','movieDescriptionForEditing','editingReelDescription')" onmouseout="removeName('editReel','editing reel bw.JPG','movieDescriptionForEditing')">
			 <img name="editReel" heigh=200 width=200 src="images/editing reel bw.JPG"></a>
			 
			 <a href="#" onclick="filmClicked('serbology','Serbology Music Video')" onmouseover="showName('Serbology Music Video','serb','serbology color.jpg','movieDescriptionForEditing','serbologyDescription')" onmouseout="removeName('serb','serbology bw.jpg','movieDescriptionForEditing')">
			 <img name="serb" heigh=200 width=200 src="images/serbology bw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('bnaiZion','Bnai Zion Medical Center')" onmouseover="showName('Bnai Zion Medical Center','zion','bnai zion color.jpg','movieDescriptionForEditing','bnaiZionDescription')" onmouseout="removeName('zion','bnai zion bw.jpg','movieDescriptionForEditing')">
			 <img name="zion" heigh=200 width=200 src="images/bnai zion bw.jpg"></a>
			 
			 <a href="#" onclick="filmClicked('bnaiZionVillage','Bnai Zion - Ahava Village')" onmouseover="showName('Bnai Zion - Ahava Village','zionVillage','bnaizionAHAVAcolor.jpg','movieDescriptionForEditing','bnaiZionVillageDescription')" onmouseout="removeName('zionVillage','bnaizionAHAVAbw.jpg','movieDescriptionForEditing')">
			 <img name="zionVillage" heigh=200 width=200 src="images/bnaizionAHAVAbw.jpg"></a>		
			 
			<a href="#" onclick="filmClicked('levoGetMoving','Levo League \x22Get Moving\x22')" 
				onmouseover="showName('Levo League \x22Get Moving\x22','levoImg','levoFINALcolor.jpg','movieDescriptionForEditing','levoDescription')" 
				onmouseout="removeName('levoImg','levoFINALbw.jpg','movieDescriptionForEditing')">
			 <img name="levoImg" heigh=200 width=200 src="images/levoFINALbw.jpg"></a>	
			 
			 
			 <div id="movieDescriptionForEditing" class="description"></div> 
	
			 </br> 
		</p>
	</div>
	<div id="contact" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			 Phone: 540.207.5609</br>
			 Email: robbie@shoeboxstory.com
			</br>
			</br>
		</p>
	</div>
<!--BEGIN DIRECTION DESCRIPTIONS-->
	<div id="demonFighters" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<!-- Currently Removed:working on new trailer <iframe id="demonFightersVid" class="vim" 
					src="http://player.vimeo.com/video/20112538?api=1&amp;title=0&amp;byline=0&amp;portrait=0" 
					width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen><
					/iframe><p><a href="http://vimeo.com/20112538"></a> -->	
			<img width="400" height="225" src="images/demon fighters color.jpg">
			<div id="demonFightersDescription" class="description">
			Director/Producer</br>
			Feature Documentary</br>
			</br>
			</br>
			</br>
			Demon Fighters tells the story of Demarcus Reed, a man who claimed to have a divinely inspired vision of his soulmate when he was 19. He spent the next 11 years as a celibate virgin searching for her around the world. A group of believers support his vision and the church he developed around it. The film follows his search as well as the complicated relationships he has with the people who join and leave the church.
			</div>
		</p>
	</div>

	<div id="basedOnBefore" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="bobVid" class="vim" src="http://player.vimeo.com/video/20414154?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/20414154"></a>
			<div id="basedOnBeforeDescription" class="description">
			Director/Editor</br>
			Music Video</br>
			</br>
			</br>
			</br>
			Shot on location in New York City's Central Park and Upstate New York.
			</div>
		</p>
	</div>
	<div id="alderRoads" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="alderRoadsVid" class="vim" src="http://player.vimeo.com/video/19235816?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/19235816"></a> 
			<div id="alderRoadsDescription" class="description">
			Director/Editor</br>
			Music Video</br>
			</br>
			</br>
			</br>
			Shot on location in the woods and outer space.
			</div>
		</p>
	</div>
	<div id="noLand" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="noLandVid" class="vim" src="http://player.vimeo.com/video/10917925?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/10917925"></a> 
			</br>
			<div id="noLandDescription" class="description">
			Writer/Director/Editor</br>
			Short Film</br>
			</br>
			</br>
			</br>
			Jon comes home on his first winter break from college to find his best friend Clifton obsessed with carrying out their same bible-stealing prank from high school. Clifton convinces him to stick around by inviting a girl to hang out, but plans get complicated when she discovers they're the legendary "bible bandits" she once read about in the local newspaper.
			</div>
		</p>
	</div>
	<div id="atEveryTurn" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="atEveryTurnVid" class="vim" src="http://player.vimeo.com/video/10488796?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/10488796"></a> 
			</br>
			<div id="atEveryTurnDescription" class="description">
			Director/Cinematographer/Editor</br>
			Short Documentary</br>
			</br>
			</br>
			</br>
			Portrait of Bob Gregson, artist.
			</div>
		</p>
	</div>
	<div id="kristianRoad" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="krVid" class="vim" src="http://player.vimeo.com/video/20113636?api=1$amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe><p><a href="http://vimeo.com/20113636"></a> 
			</br>
			<div id="kristianRoadDescription" class="description">
			Director/Editor</br>
			Electronic Press Kit</br>
			</br>
			</br>
			</br>
			EPK for gospel artist, Kristian Rose.
			</div>
		</p>
	</div>
	
	<div id="leanStart" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			</br>
			<iframe id="leanStartVid" class="vim" src="http://player.vimeo.com/video/34682518?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</br>
			<div id="leanStartUpDescription" class="description">
			Director/Editor</br>
			Commercial</br>
			</br>
			</br>
			</br>
			Promotional video produced for Lean Startup Machine.
			</div>
		</p>
	</div>
	
	<div id="jw" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			</br>
			<iframe id="jwVid" class="vim" src="http://player.vimeo.com/video/38291962?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</br>
			<div id="jwDescription" class="description">
			Producer/Director</br>
			Web Series
			</br>
			</br>
			</br>
			 Excerpt from the web series Justice Woman.
			</div>
		</p>
	</div>
	
	<div id="advice" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			</br>
				<img width="400" height="225" src="images/Advicecolor.jpg">
			</br>
			<div id="adviceDescription" class="description">
				Writer/Director/Editor</br>
				Short Film
				</br>
				
				</br>
				</br>
					Sometimes breaking up is easier with a gun.
			</div>
		</p>
	</div>
		
<!-- END DIRECTING DESCRIPTIONS --> 
<!-- BEGIN EDITING DESCRIPTIONS -->

	<div id="editingReel" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="editVid" class="vim" src="http://player.vimeo.com/video/19327569?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
			<div id="editingReelDescription" class="description">
			Editor</br>
			</br>
			</br>
			Compilation of Music Videos, Short Films, and Documentary editing.
		</div>
		</p>
	</div>
	<div id="serbology"  class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe id="servVid" class="vim" src="http://player.vimeo.com/video/31387676?api=1&amptitle=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 
			<div id="serbologyDescription" class="description">
			Editor</br>
			</br>
			</br>
			Video for Rale Micic's "Serbology", lensed by Jeff Turick.</div>
		</p>
	</div>
	<div id="bnaiZion" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			 <div id="ytplayer">
			 	<p>You will need Flash 8 or better to view content</p>
			 </div>
			<script type="text/javascript">
				var params = {allowScriptAccess:"always"};
				var atts = {id: "myytplayer"}
				swfobject.embedSWF(
				"http://www.youtube.com/v/x6jsnaYsh0I&enablejsapi=1&playerapiid=ytplayer", "ytplayer", "560", "315", "8", null, null, params,atts);
			</script>
			</br>		
			</br>
			<div id="bnaiZionDescription" class="description">
			Editor</br>
			</br>
			</br>
			Video cut for the Bnai Zion Foundation in New York City highlighting the donation of a portable X-Ray machine.</div>		
		</p>
	</div>
	<div id="bnaiZionVillage" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe id="bnai2" class="vim" src="http://player.vimeo.com/video/36352045?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="bnaiZionVillageDescription" class="description">
			Editor</br>
			</br>
			</br>
			Video cut for the Bnai Zion Foundation to raise awareness for Ahava Village in Israel.</div>
	</div>
	
	<div id="levoGetMoving" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe id="levo" class="vim" src="http://player.vimeo.com/video/38826554?api=1&amp;title=0&amp;byline=0&amp;portrait=0"  width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="levoDescription" class="description"> 
			Editor/Cinematography</br>
			</br>
			</br>
			Video shot and edited for the launch of Levo League.</div>
	</div>
<!-- END EDITING DESCRIPTIONS -->	
<!-- BEGIN CINEMATOGRAPHY DESCRIPTIONS -->
	
	<div id="cinematographyReel" class="ui-widget-content ui-corner-all">
		<h3 class="ui-widget-header ui-corner-all"></h3>
		<p>
			<iframe  id="cineVid" class="vim" src="http://player.vimeo.com/video/28338113?api=1&amp;title=0&amp;byline=0&amp;portrait=0" width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe> 		
			<div id="cineDescription" class="description">Compilation of narrative and documentary work.</div>
		</p>
	</div>
	
	<div id="rxrEp1" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<div id="ytplayer">
			 	<p>You will need Flash 8 or better to view content</p>
			 </div>
			<script type="text/javascript">
				var params = {allowScriptAccess:"always"};
				var atts = {id: "myytplayer"}
				swfobject.embedSWF(
				"http://www.youtube.com/v/XhxA3LTPeUo?enablejsapi=1&playerapiid=ytplayer", "ytplayer", "560", "315", "8", null, null, params,atts);
			</script>
			</p>
			<div id="rxrEp1Description" class="description"> 
				Cinematographer/Editor</br>
				Web Series
				</br>
				</br>
				Episode 1: Charity Rose Thielen
			</div>
	</div>
	
	<div id="rxrscreel" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe id="rxrscreelVid" class="vim" src="http://player.vimeo.com/video/45451132?api=1&amp;title=0&amp;byline=0&amp;portrait=0"  
				width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="rxrreelDescription" class="description"> 
				Cinematographer/Editor</br>
				Web Series Sizzle Reel 
				</br>
				</br>
				Sizzle Reel for Route by Route web series
			</div>
	</div>
	
	<div id="adweekNewModel" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe id="adweekNewModelVid" class="vim" src="http://player.vimeo.com/video/49737828?api=1</iframe>" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="adweekNewModelDescription" class="description">   
				Cinematographer/Editor</br>
				Online Series
				</br>
				</br>
				Piece Produced for Adweek featuring Sub Rosa.
			</div>
	</div>
	
	<div id="adweekSixQues" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe class="vim" src="http://player.vimeo.com/video/47371370?api=1" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="adweekSixQuesDescription" class="description"> 
				Cinematographer/Editor</br>
				Online Series 
				</br>
				</br>
				Piece Produced for Adweek featuring Rob Schwartz. 
			</div>
	</div>
		
	<div id="adweekSixDave" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe class="vim" src="http://player.vimeo.com/video/44003476?api=1" width="500" height="281" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="adweekDaveDescription" class="description"> 
				Cinematographer/Editor</br>
				Online Series 
				</br>
				</br>
				Piece Produced for Adweek featuring Dave Damman. 
			</div>
	</div>
	
		<div id="aroma" class="ui-widget-content ui-corner-all">
		<h3 class = "ui-widget-content ui-corner-all"></h3>
			<p>
				<iframe id="aromaVid" class="vim" src="http://player.vimeo.com/video/49785586?api=1&amp;title=0&amp;byline=0&amp;portrait=0"  width="400" height="225" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
			</p>
			<div id="aromaDescription" class="description"> 
				Cinematographer</br>
				Web Commerical
				</br>
				</br>
				Commerical shot for Aromachology 
			</div>
	</div>
	
	
	
	
<!-- END CINEMATOGRAPHY DESCRIPTIONS -->
</div>
</div>
</div>
<script>
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#contact").hide()
	$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#bnaiZion").hide()
	$("#leanStart").hide()
	$("#cinematographyReel").hide()
	$("#bnaiZionVillage").hide()
	$("#levoGetMoving").hide()
	$("#jw").hide()
	$("#advice").hide()
	$("#aroma").hide()
	$("#rxrscreel").hide()
	$("#rxrEp1").hide()
	$("#rxrreel").hide()
	$("#adweekNewModel").hide()
	$("#adweekSixQues").hide()
	$("#adweekSixDave").hide()
	$(function() {$("#about").show();});
	
	</script>
</body>
</html>


