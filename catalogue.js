function getXhr(){
    var xhr =null;
    if(window.XMLHttpRequest)
        xhr = new XMLHttpRequest();
    else if(window.ActiveXObject){
        try{
            xhr= new ActiveXObject("Msxml2.XMLHTTP");
            
        }catch(e){
            xhr= new ActiveXObject("Microsoft.XMLHTTP");  
        }   
     }
    else{
        
       alert("browser does not support XMLHttpRequest objects..");
        xhr=false;
    }
   return xhr; 
    
}


function chargerCategories(){
    var xhr= getXhr();
    xhr.open("GET","categories.php",true);
    xhr.send(null);
    xhr.onreadystatechange=function(){ //asynchrone
    if((xhr.readyState==4)&&(xhr.status==200)){//arrivé et ok
          var rep=xhr.responseText;
          document.getElementById("divCat").innerHTML=rep;
    }
 }
}

function chargerProduits(idc){
    var xhr= getXhr();
    xhr.open("GET","produits.php?idCat="+idc,false);
    xhr.send(null);
    var rep=xhr.responseText;
    document.getElementById("divProds").innerHTML=rep;

}
