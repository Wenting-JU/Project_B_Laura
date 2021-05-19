//
// Tutorial JS File.
// 2021-05-11
// 


// void function; no return.
function init()
{
	console.log("The 'tut_script.js' file has been loaded.");
}

// init function call.
init();


// void function; no return. Inserts the "GEF;" text in the appropriate tag-section.
 
function buttonAction()
{
	var str = document.getElementById("second_p").innerHTML;
	document.getElementById("second_p").innerHTML = str + "<b>GEF; </b>";

	// if the content in the tag with id "second_p" has length >80, send a JS-alert.
	if(str.length > 80)
	{
		alert("There's a lot og 'GEF;' tags already.\n\nNOTE: after clicking 'OK', another tag will be added.");
	}
}

// void function; no return. Opens the secondary page in the existing window.
function Page1()
{
	window.open("page1.html", "_self");
}
function Page2()
{
	window.open("page2.html", "_self");
}
function Page3()
{
	window.open("page3.html", "_self");
}
// void function; no return. Opens the main page in the existing window.
function homePage()
{
	window.open("homepage.html", "_self");
}
function myProjects(){
	window.open("myProjects.html", "_self");
}
function newProject(){
	window.open("newProject.html", "_self");
}
function search(){
	window.open("search.html", "_self");
}
function logOut(){
	window.open("loginpage.html", "_self");
}
function newDocs(){
	window.open("newDocs.html", "_self");
}

function newPDoc(){
	window.open("newPDoc.html", "_self");
}
function searchFunction(){
	
	//declare variables
	var input, filter, ul, li, a, i, txtValue;
	intput = document.getElementById("search");
	filter = input.value.toUpperCase();
	
	//need a full list of the projects to search through
}



