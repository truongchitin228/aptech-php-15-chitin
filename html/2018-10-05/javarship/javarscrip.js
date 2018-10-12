// $(document).ready(function(){
    // $('#js-button-bat').click(function(){
        // $('#js-image').attr('src','./on.gif');
    // })
    // $('#js-button-tat').click(function(){
        // $('#js-image').attr('src','./off.gif');
    // })
// })
var div = document.getElementById('js-div-tat-bat');
function batdiv(){
    div.style.display='block';
}
function tatdiv(){
    div.style.display="none";
}
function anhiendiv(){
    if(div.style.display =='none')
    {
        div.style.display='block';
    } else{
        div.style.display='none';
    }
}