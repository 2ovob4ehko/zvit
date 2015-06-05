function parseDoc(doc){
  xmlhttp=new XMLHttpRequest();
  xmlhttp.open("GET",doc,false);
  xmlhttp.send();
  xmlDoc=xmlhttp.responseXML;
}
function parseDoc2(doc){
var xml = document.createElement("xml");
xml.src = doc;
document.body.appendChild(xml);
var xmlDocument = xml.XMLDocument;
document.body.removeChild(xml);
}
