<?php
$titulo = 'Orçamento - Villa do Éden';
$descricao = 'Agradecemos pelo seu contato e interesse em nosso hotel como destino de sua viagem!';

include 'include/header.php';

if (isset($_POST['recaptcha_response'])) {
    // Build POST request:
    $recaptcha_url = 'https://www.google.com/recaptcha/api/siteverify';
    $recaptcha_secret = '6Le63bAUAAAAAL-Bd_PYOe2TqbvsT9KFbo3T3pGF';
    $recaptcha_response = $_POST['recaptcha_response'];
    // Make and decode POST request:
    $ch = curl_init();
    $timeout = 5; // set to zero for no timeout
    curl_setopt ($ch, CURLOPT_URL, $recaptcha_url . '?secret=' . $recaptcha_secret . '&response=' . $recaptcha_response);
    curl_setopt ($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt ($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
    $recaptcha = curl_exec($ch);
    curl_close($ch);
    $recaptcha = json_decode($recaptcha);
    // Take action based on the score returned:
    if ($recaptcha->score >= 0.5) {
        include 'email/contatoForm.php';
    } else {
    ?>
        <script>
            alert("Sua mensagem foi considerada SPAM tente novamente mais tarde!");
            window.history.go(-1);
        </script>
    <?php
    }
} 
?>

<!-- Facebook Pixel Code -->
<script>
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
</script>
<noscript>
<img height="1" width="1"
src="https://www.facebook.com/tr?id=2606766389335516&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

    <!-- Main -->
    <main>
        <div class="container">
            <section>
                <div class="">
                    <h1 class="titlepage">Orçamento</h1>

                    <div class="col-sm-12 text-center" >
                        <br>
                        <p>Agradecemos pelo seu contato e interesse em nosso hotel como destino de sua viagem!</p>
                        <p>Nossa equipe enviará o mais rápido possível sua solicitação</p>
                        <p>Qualquer dúvida estaremos à disposição</p>
                        <p>Equipe Villa do Éden</p>
                        <br>
                    </div>



                    <div class="clearfix"></div>

                </div>
            </section>
        </div>
    </main>

<?php include 'include/footer.php';?>