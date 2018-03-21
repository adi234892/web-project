  var index=1; 
    showimage(1);
function plusindex(n){
  index=index+n;
  showimage(index);
}
function showimage(n)
{
  var i;
  var x=document.getElementsByClassName("image");
  if(n>x.length){index=1}
  if(n<1){index=x.length}
  for(i=0;i<x.length;i++)
    {
      x[i].style.display="none";
    }
  x[index-1].style.display="block";
  
  }
autoslide();
  function autoslide(){
    plusindex(1);
    setTimeout(autoslide,10000);
  }