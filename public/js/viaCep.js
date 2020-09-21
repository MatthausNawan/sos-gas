$(document).ready(function() {

    function limpa_formulário_cep() {
        // Limpa valores do formulário de cep.
        $("#rua,#contabilidade_rua").val("");
        $("#bairro,#contabilidade_bairro").val("");
        $("#cidade,#contabilidade_cidade").val("");
        $("#uf,#contabilidade_uf").val("");
    }

  function limpa_formulário_cep_contabilidade() {
    // Limpa valores do formulário de cep.
    $("#contabilidade_rua").val("");
    $("#contabilidade_bairro").val("");
    $("#contabilidade_cidade").val("");
    $("#contabilidade_uf").val("");
  }
            
    //Quando o campo cep perde o foco.
    $("#cep").blur(function() {

        //Nova variável "cep" somente com dígitos.
        let cep = $(this).val().replace(/\D/g, '');

        //Verifica se campo cep possui valor informado.
        if (cep !== "") {

            //Expressão regular para validar o CEP.
            let validacep = /^[0-9]{8}$/;

            //Valida o formato do CEP.
            if(validacep.test(cep)) {

                //Preenche os campos com "..." enquanto consulta webservice.
                $("#rua").val("carregando...");
                $("#bairro").val("carregando...");
                $("#cidade").val("carregando...");
                $("#uf").val("carregando...");

                //Consulta o webservice viacep.com.br/
                $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

                    if (!("erro" in dados)) {
                        //Atualiza os campos com os valores da consulta.
                        $("#rua").val(dados.logradouro);
                        $("#bairro").val(dados.bairro);
                        $("#cidade").val(dados.localidade);
                        $("#uf").val(dados.uf);
                    } //end if.
                    else {
                        //CEP pesquisado não foi encontrado.
                        limpa_formulário_cep();
                        alert("CEP não encontrado.");
                    }
                });
            } //end if.
            else {
                //cep é inválido.
                limpa_formulário_cep();
                alert("Formato de CEP inválido.");
            }
        } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep();
        }
    });

    //Quando o campo cep perde o foco.
    $("#contabilidade_cep").blur(function() {

    //Nova variável "cep" somente com dígitos.
    let cep = $(this).val().replace(/\D/g, '');

    //Verifica se campo cep possui valor informado.
    if (cep !== "") {

    //Expressão regular para validar o CEP.
    let validacep = /^[0-9]{8}$/;

    //Valida o formato do CEP.
    if(validacep.test(cep)) {

        //Preenche os campos com "..." enquanto consulta webservice.
        $("#contabilidade_rua").val("carregando...");
        $("#contabilidade_bairro").val("carregando...");
        $("#contabilidade_cidade").val("carregando...");
        $("#contabilidade_uf").val("carregando...");

        //Consulta o webservice viacep.com.br/
        $.getJSON("//viacep.com.br/ws/"+ cep +"/json/?callback=?", function(dados) {

            if (!("erro" in dados)) {
                //Atualiza os campos com os valores da consulta.
                $("#contabilidade_rua").val(dados.logradouro);
                $("#contabilidade_bairro").val(dados.bairro);
                $("#contabilidade_cidade").val(dados.localidade);
                $("#contabilidade_uf").val(dados.uf);

            } //end if.
            else {
                //CEP pesquisado não foi encontrado.
                limpa_formulário_cep_contabilidade();
                alert("CEP não encontrado.");
            }
        });
    } //end if.
      else {
        //cep é inválido.
        limpa_formulário_cep_contabilidade();
        alert("Formato de CEP inválido.");
      }
    } //end if.
        else {
            //cep sem valor, limpa formulário.
            limpa_formulário_cep_contabilidade();
        }
    });
  });
