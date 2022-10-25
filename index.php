<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" href="css.css">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body onload="Sprawdzcookie()">
  
    <form name = "form"><br>
     <button type="button" name="xd" value="&" id = "xd1" onclick="zmiana('xd1')" class = "xd" >xd </button>
   <button type="button" name="xd" value="&" id = "xd2"  onclick="zmiana('xd2')" class = "xd">xd </button>
      <button type="button" name="xd" value="&" id = "xd3" onclick="zmiana('xd3')" class = "xd">xd </button>
	     <button type="button" name="xd" value="&" id = "xd4"  onclick="zmiana('xd4')" class = "xd">xd </button>
	   <button type="button" name="xd" value="&" id = "xd5" onclick="zmiana('xd5')" class = "xd">xd </button>
<br>
   <button type="button" name="xd" value="&" id = "xd6" onclick="zmiana('xd6')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd7" onclick="zmiana('xd7')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd8" onclick="zmiana('xd8')" class = "xd" >xd </button>
   <button type="button" name="xd" value="&" id = "xd9" onclick="zmiana('xd9')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd10" onclick="zmiana('xd10')" class = "xd" >xd </button>   
<br>
   <button type="button" name="xd" value="&" id = "xd11" onclick="zmiana('xd11')"class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd12" onclick="zmiana('xd12')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd13" onclick="zmiana('xd13')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd14" onclick="zmiana('xd14')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd15" onclick="zmiana('xd15')" class = "xd">xd </button>
   <br>
   <button type="button" name="xd" value="&" id = "xd16" onclick="zmiana('xd16')"  class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd17" onclick="zmiana('xd17')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd18" onclick="zmiana('xd18')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd19" onclick="zmiana('xd19')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd20" onclick="zmiana('xd20')" class = "xd">xd </button>
   <br>
   <button type="button" name="xd" value="&" id = "xd21" onclick="zmiana('xd21')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd22" onclick="zmiana('xd22')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd23" onclick="zmiana('xd23')" class = "xd" >xd </button>
   <button type="button" name="xd" value="&" id = "xd24" onclick="zmiana('xd24')" class = "xd">xd </button>
   <button type="button" name="xd" value="&" id = "xd25"  onclick="zmiana('xd25')"  class = "xd">xd </button>   
   <br>
   <p  id = "lul"> xd </p>
<button type="button" name="xd" value="text" onclick="kawa()">Losuj </button> 
<script type="text/javascript">
function podmiana(nazwa,cyfra)
{
	
	var array1 = document.cookie.split(';');
	var array2 = document.cookie.split(';'); //dzielenie/pobranie
	var id = nazwa.replace("xd","");
	if(cyfra=="&"){
		
	array2[id-1] = array2[id-1].replace("&","^");
	}
	else{
		array2[id-1] = array2[id-1].replace("^","&");
	}
	for(i=0;i<25;i++)
	{
		const text = array1[i] + ";expires=Thu, 01 Jan 1970 00:00:00 GMT";
	document.cookie = text;
	}
	for(i=0;i<25;i++)
	{
	document.cookie=array2[i];
	
	}
}
function zmiana(nazwa)

{
	var x = document.getElementById(nazwa).value;// nie dziala nazwa
	var btn = document.getElementById(nazwa);
	
	 
	if(x=="&")
	{
		btn.style.backgroundColor = "#4BA2EA";
	  btn.value = "^";
	  podmiana(nazwa,"&");
	}
	else
	{
	btn.value = "&";
	btn.style.backgroundColor = "#FF0000";
	podmiana(nazwa,"^")
	
	
	
	
	
}

}
function wczytaj()
{
var array1 = document.cookie.split(';');
x = array1.length;
for(i=0;i<x;i++)
{
	if(array1[i].charAt((array1[i].length)-1)=="^")
	{
		var btn = document.getElementById("xd"+(i+1));
		btn.style.backgroundColor = "#4BA2EA";
		array1[i] = array1[i].replace("^","");
	}
	else
	{
		array1[i] = array1[i].replace("&","");
	}
const tek = "xd"+ (i+1) + "=";
const nazwa = "xd" + (i+1);
document.getElementById(nazwa).innerHTML =array1[i].replace(tek,"") ;





}

}
function Sprawdzcookie()
{
	if(document.cookie)
	{
		wczytaj();
		
		
	
	}
	else{
		kawa();
	
}}
function coockie()
  {
	  
  console.log(document.cookie);
	// document.cookie = "nazwa12=wartosc12";
	 //do dopracowania
	 //document.cookie = "nazwa2=wartosc2";//tworzenie
	//const cookies = document.cookie.split(/; */);
	//do dopracowania
  var array1 = document.cookie.split(';'); //dzielenie/pobranie
  document.getElementById("lul").innerHTML = array1[1];
  //document.cookie = "10;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  function kawa()
  {
	  
	  if(document.cookie)
	{
		var array1 = document.cookie.split(';'); //dzielenie/pobranie

	for(i=0;i<25;i++)
	{
		const text = array1[i] + ";expires=Thu, 01 Jan 1970 00:00:00 GMT";
	document.cookie = text;
	
	
	}}
	
	  
	  
   const x = 25;
   const tab = ["no","2","3","4","5","6","7","8","9","10","11","12","13","14","16","17","18","19","20","21","22","23","24","25"];
	const tab1 = [x];
	
  for(i=1;i<26;i++)
  {
   const wynikLosowania = tab[Math.floor(Math.random() * tab.length)];
 tab1[i-1] = wynikLosowania;
  
  for(g=0; g<i-1; g++)
  {
  if(tab1[g]==tab1[i-1])
  {
  const wynikLosowania1 = tab[Math.floor(Math.random() * tab.length)];
   tab1[i-1] = wynikLosowania1;
  g=0;
  }
  
  }


   nazwa = "xd"+ i;
   var btn = document.getElementById(nazwa);
   btn.style.backgroundColor = "#FF0000";
  document.getElementById(nazwa).innerHTML = tab1[i-1];
 
  const nazwa1 =   nazwa + "=" + tab1[i-1] + "&" ;
document.cookie=nazwa1;
  }
  //document.cookie="nazwa5=5wartosc";//do dopracowania
  }
  
  
</script>




    </form>

  </body>
</html>
