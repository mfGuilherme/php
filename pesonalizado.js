$(function(){ 
    $("#pesquisa").keyup(function(){
        var pesquisa = $ (this).val();

        if(pesquisa !='') {
            var dados = {
                palavra : pesquisa
            }
            $.post('proc_pesq_user.php', dados, function(retorna){
                $(".resultado").html (retorna)
            })
        }   
    });

});