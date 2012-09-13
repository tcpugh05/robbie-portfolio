$(function() {
		$( "#accordion" ).accordion();
		$("#work").accordion({autoHeight:false});
	});
function killVids(){
	var players;
	players=$('.vim');
	for(var i=0;i<players.length;i++){
		$f(players[i]).api('unload');
	}
	//stopYTVid();
	
}	
	
function stopYTVid(){
	//alert("In stop");
	if(ytplayer){
		//alert("In if");
		ytplayer.stopVideo();
	}
	//alert("after if");
}	
	
function onYouTubePlayerReady(playerId){
	ytplayer = document.getElementById("myytplayer"); 
}	
function aboutClicked(f)
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#bnaiZionVillage").hide()
	$("#contact").hide()
	$("#description").hide()
	//alert('About was cliked')
	$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#bnaiZion").hide()
	$("#cinematographyReel").hide()
	$("#leanStart").hide()
	$("#levoGetMoving").hide()
	$("#jw").hide()
	$("#permTitle").text('')
	killVids(); 
	$( "#about" ).show("slide",{direction:"right"})
	
}

function cinematographyClicked()
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#bnaiZionVillage").hide()
	$("#contact").hide()
	$("#description").hide()
//	alert('Music was cliked') 
$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#bnaiZion").hide()
	$("#cinematographyReel").hide()
	$("#leanStart").hide()
	$("#levoGetMoving").hide()
	$("#jw").hide()
	$("#permTitle").text('')
	killVids(); 
	$( "#cinematography" ).show("slide",{direction:"right"})
}
function directionClicked()
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#contact").hide()
	$("#description").hide()
	$("#bnaiZionVillage").hide()
//	alert('Documentary was cliked') 
	$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#bnaiZion").hide()
	$("#cinematographyReel").hide() 
	$("#leanStart").hide()
	$("#levoGetMoving").hide()
	$("#jw").hide()
	$("#permTitle").text('')
	killVids(); 
	$( "#direction" ).show("slide",{direction:"right"})
}
function editingClicked()
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#contact").hide()
	$("#bnaiZionVillage").hide()
	$("#description").hide()
//	alert('Editing was cliked') 
$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#jw").hide()
	$("#bnaiZion").hide()
	$("#cinematographyReel").hide()
	$("#leanStart").hide()
	$("#levoGetMoving").hide()
	$("#permTitle").text('')
	killVids(); 
	$( "#editing" ).show("slide",{direction:"right"})
	
	
}
function contactClicked()
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#contact").hide()
	$("#bnaiZionVillage").hide()
	$("#description").hide()
//	alert('Contacts was cliked') 
	$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#jw").hide()
	$("#bnaiZion").hide()
	$("#cinematographyReel").hide()
	$("#leanStart").hide()
	$("#levoGetMoving").hide()
	$("#permTitle").text('')
	killVids(); 
	$( "#contact" ).show("slide",{direction:"right"})
}
function filmClicked(text, textToBeDisplayedAtTop)
{
	$("#about").hide()
	$("#shorts").hide()
	$("#cinematography").hide()
	$("#direction").hide()
	$("#editing").hide()
	$("#contact").hide()
//	alert('Contacts was cliked') 
	$("#demonFighters").hide()
	$("#basedOnBefore").hide()
	$("#alderRoads").hide()
	$("#jw").hide()
	$("#bnaiZionVillage").hide()
	$("#noLand").hide()
	$("#atEveryTurn").hide()
	$("#kristianRoad").hide() 
	$("#editingReel").hide()
	$("#serbology").hide()
	$("#bnaiZion").hide()
	$("#levoGetMoving").hide()
	$("#cinematographyReel").hide()
	$("#leanStart").hide()
//	 alert("1");
	killVids(); 
	$( "#"+text).show("explode");
	$("#test").text('');
	$("#permTitle").text(textToBeDisplayedAtTop)
//	alert("In film clicked")
	
}
