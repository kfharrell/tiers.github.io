function AllowDrop(event)
{
	event.preventDefault();
}

function Drag(event, id)
{
	var img1 = document.getElementById(id);
	event.dataTransfer.setData("osaicon", img1.id);
}

function Drop(event)
{
	var data = event.dataTransfer.getData("osaicon");
	if(event.target.nodeName !== "IMG")
	{
		event.target.appendChild(document.getElementById(data));
	}
	else
	{
		event.target.parentNode.insertBefore(document.getElementById(data), event.target);
	}
}

window.addEventListener("dragover", function(e)
{
  e = e || event;
  e.preventDefault();
},false);

window.addEventListener("drop", function(e)
{
  e = e || event;
  e.preventDefault();
},false);

function DateTitle()
{
	var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
	var d = new Date();
	document.getElementById("title").value = "Smite Tierlist " + d.getDate() + " " + months[d.getMonth()] + " " + d.getFullYear();
}

//searching
function DoSearch()
{
	var searchBox = document.getElementById("search");
	var search = searchBox.value.toLowerCase();
	if(search == "")
	{
		search = "na";
	}
	var searchGods = FindElemsWithClass(search, gods);
	if(searchGods.length > 0 && search != "na")
	{
		for(var i = 0; i < gods.length; i++)
		{
			gods[i].style.opacity = 0.3;
		}
		for(var i = 0; i < searchGods.length; i++)
		{
			searchGods[i].style.opacity = 1;
		}
	}
	else
	{
		for(var i = 0; i < gods.length; i++)
		{
			gods[i].style.opacity = 1;
		}
	}
}

function WipeSearch()
{
	document.getElementById("search").value = "";
	DoSearch()
}

function FindElemsWithClass(search, list)
{
	var returnElems = [];
	for(var i in list)
	{
		if((' ' + list[i].className + ' ').indexOf(' ' + search + ' ') > -1)
		{
			returnElems.push(list[i]);
		}
	}
	return returnElems;
}

function BodyLoad()
{
	DoCache();
	LoadPage();
}

var gods;
var tiers;

function DoCache()
{
	var elems = document.getElementsByTagName('*');
	gods = FindElemsWithClass("god", elems);
}

function GetUrlVars()
{
	var vars = {};
	var parts = window.location.href.replace(/[?&]+([^=&]+)=([^&]*)/gi, 
		function(m, key, value)
		{
			vars[key] = value;
		});
	return vars;
}

function LoadPage()
{
	var params = GetUrlVars();
	var title = document.getElementById("title");
	if("title" in params)
	{
		title.value = params["title"].replace(/%20/gi, " ");;
	}
	for(var i in params)
	{
		var id = i;
		var god = document.getElementById(id);
		var areaId = params[i];
		var area = document.getElementById(areaId);
		if(god == undefined || god == null || area == undefined || area == null)
		{
			continue;
		}
		area.appendChild(god);
	}
}

function ResetPage()
{
	location = location.protocol + location.hostname + location.pathname;
}

function SavePage()
{
	var save = document.getElementById("save");
	var title = document.getElementById("title");
	save.value = "";
	var result = "";
	result = location.protocol + location.hostname + location.pathname + "?";
	if(title.value != "")
	{
		result += "title=" + title.value;
	}
	$("div.ind-list:not('#n') > .god").each(function()
	{
		if(result != "")
		{
			result += "&";
		}
		result += $(this).get(0).id + "=" + $(this).get(0).parentNode.id;
	});
	save.value = result;
	save.select();
}