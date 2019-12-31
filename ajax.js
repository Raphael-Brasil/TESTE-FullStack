
function acton(int, verification){
if(verification==="Contratar"){
    $.ajax
    ({
        //Configurações
        type: 'POST',//Método que está sendo utilizado.
        dataType: 'html',//É o tipo de dado que a página vai retornar.
        url: '/struct/page.php',//Indica a página que está sendo solicitada.
        data: {
            int: int
            },//Dados para consulta
        //função que será executada quando a solicitação for finalizada.
        success: function (msg)
        {
            $("#base").html(msg);
        }
    });
}else{
    $.ajax
    ({
        //Configurações
        type: 'POST',//Método que está sendo utilizado.
        dataType: 'html',//É o tipo de dado que a página vai retornar.
        url: '/struct/charge.php',//Indica a página que está sendo solicitada.
        data: {
            int: int,
            verification: verification
            },//Dados para consulta
        //função que será executada quando a solicitação for finalizada.
        success: function (msg)
        {
            $("#Botao"+int).html(msg);
        }
    });
               
}          
          



}

function preencher(registro, cortit, tit, corback, sign, ref, comm, stat)
{

    //O método $.ajax(); é o responsável pela requisição
    $.ajax
            ({
                //Configurações
                type: 'POST',//Método que está sendo utilizado.
                dataType: 'html',//É o tipo de dado que a página vai retornar.
                url: '/struct/body.php',//Indica a página que está sendo solicitada.
                data: {
                    registro: registro,
                    cortit: cortit,
                    tit: tit,
                    corback: corback,
                    sign: sign,
                    ref: ref,
                    comm: comm,
                    stat: stat 

                },
                success: function ()
                {
                    var ConstruHTML;
                    
                    ConstruHTML = '<div class="card bg-light mb-3" style="max-width: 18rem;"><div  div="'+registro+'" class="Title" style="background-color:'+cortit+';">'+tit+'</div><div class="iconbk" style="background-color: '+corback+';"><i class="'+sign+'" style="font-size: 7rem;"></i></div><div class="card-body"><h5 class="card-title">'+ref+'</h5><p class="card-text">'+comm+'</p><spam id="Botao'+registro+'"> <spam class="btn btn1" onclick="acton('+registro+',`'+stat+'`);">'+stat+'</spam></spam></div></div>';

                    $("#col"+registro).html(ConstruHTML);
                },
                error: function (request, status, erro) {
                    alert("Problema ocorrido: " + status + "\nDescição: " + erro);
                }
            });
}


function contratar(registro)
{
    
        $.ajax
        ({
            //Configurações
            type: 'POST',//Método que está sendo utilizado.
            dataType: 'html',//É o tipo de dado que a página vai retornar.
            url: '/struct/contratar.php',//Indica a página que está sendo solicitada.
            data: {
                int: registro
                },//Dados para consulta
            //função que será executada quando a solicitação for finalizada.
            success: function (msg)
            {
                $("#base").html(msg);
            }
        });
    }
        

  