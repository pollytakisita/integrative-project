(function() {
    const CEP = document.querySelector("#CEP");
    const rua = document.querySelector("#endereco");
    const bairro = document.querySelector("#bairro");
    const localidade = document.querySelector("#cidade");
    const uf = document.querySelector("#uf");

    CEP.oninput = () => {
        console.log(CEP.value)
        if (CEP.value === "" || CEP.value.length < 9) {
            rua.value = "";
            bairro.value = "";
            localidade.value = "";
            uf.value = "";
        }

        fetch(`https://viacep.com.br/ws/${CEP.value}/json/`)
            .then(response => response.json())
            .then(data => {
                rua.value = data.logradouro;
                bairro.value = data.bairro;
                localidade.value = data.localidade;
                uf.value = data.uf;
            });

        CEP.value = CEP.value.replace(/D/g, "").replace(/^(\d{5})(\d)/, "$1-$2");
    };





/* Buscas Por Palavra Chave*/

$('#busca').focus(function(){									
    if($('.reset') || $('#alert-busca')){
        $('.reset').empty()	
        /* $('#alert-busca').empty() */	
        $('#alert-busca').prop('style', 'display:none;')
    }
})
$('#btn-busca').click(function(e){									
    var busca = $('#busca').val()
    if(!busca){
        $('#alert-busca').prop('style', 'display:block;')
        }else{
            $.ajax({
                method:'GET',
                url: 'busca/'+busca,                                             
                success: function(response){
                    if(response.length > 0){
                        $('#box-result').css('display', 'block')
                        $('#box-result').css('max-height', '800px')
                        $('#box-result').css('overflow', 'scroll')
                            for(var i = 0; i < response.length; i++ ){
                                $('#tabela').addClass('reset').append('<tr class="result-busca"><td><a href="ong/'+response[i].id+'" ><img src="'+response[i].avatar+'"></a></td><td>'+response[i].name+'</td><td>'+response[i].description+'</td> <td>'+response[i].district+'</td></tr>') 
                            }
                        }
                        else{
                            alert('Nenhum resultado encontrado')
                            $('#tabela').empty()
                        }
                    }  											
                }) 
            }
            e.preventDefault()
                if($('.result-busca').length >0 ){
                    $('.reset').empty()
                }				
});



})();