/* ---------------------------------------------
 Contact form
 --------------------------------------------- */
$(document).ready(function(){

    $("#submit_btn").click(function(){

        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window,document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '2606766389335516');
        fbq('track', 'PageView');

        //get input field values
        var user_name = $('input[name=name]').val();
        var user_email = $('input[name=email]').val();
        var user_tel = $('input[name=telefone]').val();

        var user_entrada = $('input[name=entrada]').val();
        var user_saida   = $('input[name=saida]').val();
        var user_quarto = $('select[name=quarto]').val();
        var user_adultos = $('select[name=adultos]').val();
        var user_crianca1 = $('select[name=criancas1]').val();
        var user_crianca2 = $('select[name=criancas2]').val();

        var user_message = $('textarea[name=message]').val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_email == "") {
            $('input[name=email]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_entrada == "") {
            $('input[name=entrada]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_saida == "") {
            $('input[name=saida]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_message == "") {
            $('textarea[name=message]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_tel == "") {
            $('input[name=telefone]').css('border-color', '#e41919');
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userMessage': user_message,
                'userQuarto': user_quarto,
                'userEntrada': user_entrada,
                'userSaida': user_saida,
                'userAdultos': user_adultos,
                'userCrianca1': user_crianca1,
                'userCrianca2': user_crianca2,
                'userTel': user_tel
            };
            //Ajax post data to server

            $.post('https://www.villadoeden.com.br/email/contatoForm.php', post_data, function(response){


                //load json data from server and output message
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';

                }
                else {
                    output = '<div class="success">' + response.text + '</div>';


                    //reset values in all input fields
                    $('#contact_form input').val('');
                    $('#contact_form textarea').val('');
                }

                $("#result").hide().html(output).slideDown();
            }, 'json');

        }

        return false;
    });

    $("#submit_btn3").click(function(){

        //get input field values
        var user_name = $('input[name=name]').val();
        var user_email = $('input[name=email]').val();
        var user_tel = $('input[name=telefone]').val();
        var user_message = $('textarea[name=message]').val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_email == "") {
            $('input[name=email]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_message == "") {
            $('textarea[name=message]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_tel == "") {
            $('input[name=telefone]').css('border-color', '#e41919');
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userMessage': user_message,
                'userTel': user_tel
            };
            //Ajax post data to server

            $.post('email/contatoFaleconosco.php', post_data, function(response){

                //load json data from server and output message
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {
                    output = '<div class="success">' + response.text + '</div>';

                    //reset values in all input fields
                    $('#contact_form input').val('');
                    $('#contact_form textarea').val('');
                }

                $("#result").hide().html(output).slideDown();
            }, 'json');

        }

        return false;
    });


    $("#submit_btn_2").click(function(){

        //get input field values
        var user_name = $('input[name=name]').val();
        var user_email = $('input[name=email]').val();
        var user_tel = $('input[name=telefone]').val();
        var user_message = $('textarea[name=message]').val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_email == "") {
            $('input[name=email]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_message == "") {
            $('textarea[name=message]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_tel == "") {
            $('input[name=telefone]').css('border-color', '#e41919');
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userEmail': user_email,
                'userMessage': user_message,
                'userTel': user_tel
            };
            //Ajax post data to server

            $.post('email/contatoAval.php', post_data, function(response){

                //load json data from server and output message
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {
                    output = '<div class="success">' + response.text + '</div>';

                    //reset values in all input fields
                    $('#contact_form input').val('');
                    $('#contact_form textarea').val('');
                }

                $("#result").hide().html(output).slideDown();
            }, 'json');

        }

        return false;
    });


    $("#btnNews").click(function(){

<!-- Facebook Pixel Code -->

!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 
fbq('init', '2606766389335516');
fbq('track', 'PageView');


<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=2606766389335516&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

        //get input field values
        var user_email2 = $('input[name=emailN]').val();
        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_email2 == "") {
            $('input[name=emailN]').css('border-color', '#e41919');
            proceed = false;
        }

        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userEmail': user_email2
            };
            //Ajax post data to server

            $.post('email/newsForm.php', post_data, function(response){

                //load json data from server and output message
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {
                    output = '<div class="success">' + response.text + '</div>';
                    //reset values in all input fields
                    $('#newsForm input').val('');
                }
                $("#result").hide().html(output).slideDown();
            }, 'json');
        }
        return false;
    });

    $("#cartaoBtn").click(function(){

        //get input field values
        var user_name = $('input[name=name]').val();
        var user_sexo = $('input[name=sexo]:checked').val();
        var user_cpf  = $('input[name=cpf]').val();

        var user_datan = $('input[name=data-n]').val();
        var user_profissao = $('input[name=profissao]').val(); // não obrigatorio
        var user_endereco = $('input[name=endereco]').val();

        var user_numero = $('input[name=numero]').val();
        var user_complemento = $('input[name=complemento]').val(); // nao obrigatorio
        var user_bairro = $('input[name=bairro]').val();

        var user_cidade = $('input[name=cidade]').val();
        var user_estado = $('input[name=estado]').val();
        var user_cep = $('input[name=cep]').val();

        var user_mail     = $('input[name=mail]').val();
        var user_telefone = $('input[name=telefone]').val();
        var user_celular  = $('input[name=celular]').val();

        var termos = $('.termos:checked').val();

        //simple validation at client's end
        //we simply change border color to red if empty field using .css()
        var proceed = true;
        if (user_name == "") {
            $('input[name=name]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_cpf == "") {
            $('input[name=cpf]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_datan == "") {
            $('input[name=data-n]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_endereco == "") {
            $('input[name=endereco]').css('border-color', '#e41919');
            proceed = false;
        }

        if (user_numero == "") {
            $('input[name=numero]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_bairro == "") {
            $('input[name=bairro]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_cidade == "") {
            $('input[name=cidade]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_estado == "") {
            $('input[name=estado]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_cep == "") {
            $('input[name=cep]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_mail == "") {
            $('input[name=mail]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_telefone == "") {
            $('input[name=telefone]').css('border-color', '#e41919');
            proceed = false;
        }
        if (user_celular == "") {
            $('input[name=celular]').css('border-color', '#e41919');
            proceed = false;
        }
        if (termos != "aceito") {
            alert("Aceite os termos do regulamento")
            proceed = false;
        }


        //everything looks good! proceed...
        if (proceed) {
            //data to be sent to server
            post_data = {
                'userName': user_name,
                'userSexo': user_sexo,
                'userCPF':  user_cpf,
                'userNasc':  user_datan,
                'userPro':  user_profissao,
                'userEnd':  user_endereco,
                'userN':  user_numero,
                'userCom':  user_complemento,
                'userBairro':  user_bairro,
                'userCidade':  user_cidade,
                'userEstado':  user_estado,
                'userCEP':  user_cep,
                'userMail':  user_mail,
                'userTel':  user_telefone,
                'userCel':  user_celular

            };
            //Ajax post data to server

            $.post('email/cartaoForm.php', post_data, function(response){

                //load json data from server and output message
                if (response.type == 'error') {
                    output = '<div class="error">' + response.text + '</div>';
                }
                else {
                    output = '<div class="success">' + response.text + '</div>';

                    //reset values in all input fields
                    $('#cartaoForm input').val('');
                    $('#cartaoForm input[type="radio"]').attr('checked', false);
                    $('#cartaoForm input[type="checkbox"]').attr('checked', false)

                }

                $("#result").hide().html(output).slideDown();
            }, 'json');

        }

        return false;
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#cartaoForm input").keyup(function(){
        $("#cartaoForm input").css('border-color', '');
        $("#result").slideUp();
    });

    //reset previously set border colors and hide all message on .keyup()
    $("#contact_form input, #contact_form textarea").keyup(function(){
        $("#contact_form input, #contact_form textarea").css('border-color', '');
        $("#result").slideUp();
    });

});