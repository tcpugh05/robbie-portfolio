function showName(textToBeDisplayedAtTop,imgNameId,fileURLForImage,descriptionToWriteTo,descriptionReadFrom)
{
	var theId = new String(imgNameId);
//	 alert("1");
	$("#test").text(' '+ textToBeDisplayedAtTop); 
 //   alert("2");
	document.images[theId].src= 'images/'+fileURLForImage;
	//alert($("#"+descriptionReadFrom).html());
	$("#"+descriptionToWriteTo).html($("#"+descriptionReadFrom).html());
	//alert("last"); 
	
	
}

function removeName(imgName,fileURL,descriptionToWriteTo)
{
	var theId = new String(imgName);
	document.images[theId].src='images/'+fileURL;
	$("#test").text('');
	//alert(descriptionToWriteTo); 
	$("#"+descriptionToWriteTo).text('');
//	alert($("#"+descriptionToWriteTo).text())
}
