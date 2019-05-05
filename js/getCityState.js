function getCityState(zip){
    var xhr = new XMLHttpRequest();
    
    xhr.onreadystatechange = function (){
        if (xhr.readyState === 4 && xhr.status === 200){
            var result = xhr.responseText;
            if(result !== ""){
                var values = result.split (',');
                document.getElementById("city").value = values[0];
                document.getElementById("state").value = values[1];
            } else{
                document.getElementById("city").value = '';
                document.getElementById("state").value = '';
            }
        }
    };
    
    xhr.open ("GET", "php/getCityState.php?zip="+zip, true);
    xhr.send ();
}