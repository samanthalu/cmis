function getPage()
{ 
    var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();     }
          catch (e3) {  xhr = false;   }
        }
     }
   
    xhr.onreadystatechange  = function()
    { 
         if(xhr.readyState  == 4)
         {
              if(xhr.status  == 200) 

                  document.getElementById("samcontent").innerHTML = xhr.responseText; 
              else
                 document.getElementById("samcontent").innerHTML = "Error code " + xhr.status;
         }
    }
 
   xhr.open("GET", "pages/members/index.php",  true); 
   xhr.send(); 
} 

function loadPage(link, dest, tag)
{ 
    var xhr; 
    try {  xhr = new ActiveXObject('Msxml2.XMLHTTP');   }
    catch (e) 
    {
        try {   xhr = new ActiveXObject('Microsoft.XMLHTTP');    }
        catch (e2) 
        {
          try {  xhr = new XMLHttpRequest();     }
          catch (e3) {  xhr = false;   }
        }
     }
    //alert(link);
    //alert(dest);
    //alert(tag);
    xhr.onreadystatechange  = function()
    { 
         if(xhr.readyState  == 4)
         {
              if(xhr.status  == 200) 

                  document.getElementById("samcontent").innerHTML = xhr.responseText; 
              else
                 document.getElementById("samcontent").innerHTML = "Error code " + xhr.status;
         }
    }
 
   xhr.open("GET", link,  true); 
   xhr.send(); 
} 
