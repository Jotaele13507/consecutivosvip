const form = document.getElementById('registro');
form.addEventListener('submit',function(e){
    e.preventDefault();
    let http = new XMLHttpRequest();
    let url = 'action.php';
    let data = new FormData(form);
    http.open('POST',url,true);
    http.onreadystatechange = function(){
        if(http.readyState == 4 && http.status == 200 ){
            let resp = JSON.parse(http.responseText);
            if(resp.response == 'true'){
                document.getElementById('resp').innerHTML= "Redireccionando";
               setTimeout(function(){
                   window.location.href = "../notas/buscador.php";
               },2000);
            }else{
                alert('incorrecto');
            }
        }
    }
    http.send(data);
});
