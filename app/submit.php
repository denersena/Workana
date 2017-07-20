<?php
if(isset($_POST['mod_name'])):

    // Variáveis
    $save               = md5(time()).'.txt';
    $mod_name           = trim(addslashes($_POST['mod_name']));
    $mod_image          = trim(addslashes($_POST['mod_image']));
    $mod_game           = trim(addslashes($_POST['mod_game']));
    $mod_author         = trim(addslashes($_POST['mod_author']));
    $mod_version        = trim(addslashes($_POST['mod_version']));
    $mod_infor          = trim(addslashes($_POST['mod_infor']));
    $mod_video          = trim(addslashes($_POST['mod_video']));
    $mod_code           = trim(addslashes($_POST['mod_code']));
    $mod_original       = trim(addslashes($_POST['mod_original']));
    $mod_simuladores    = trim(addslashes($_POST['mod_simuladores']));

    $mod_author = ($mod_author == '') ? ('NOME DESCONHECIDO') : ($mod_author);
    $mod_infor = ($mod_infor == '') ? ('NENHUMA INFORMAÇÃO ENCONTRADA') : ($mod_infor);
    $mod_video = ($mod_video == '') ? ('NENHUMA VIDEO ENCONTRADO') : ($mod_video);
    
    // Defini os Headers
    header ("Content-type: text/html; charset=utf-8");
    header ("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
    header ("Last-Modified: " . gmdate("D,d M YH:i:s") . " GMT");
    header ("Cache-Control: no-cache, must-revalidate");
    header ("Pragma: no-cache");
    header ("Content-type: application/octet-stream");
    header ("Content-Disposition: attachment; filename=\"{$save}\"" );
    header ("Content-Description: PHP Generated Data" );

    echo '
    <p style="text-align: center;">'.$mod_name.'</p>
    <img class="wp-image-129 size-full" title="'.$mod_name.'" src="IMAGEM DO MOD AQUI" alt="'.$mod_name.'" width="700" height="420" />
    <h2 style="text-align: center;"><strong>'.$mod_name.'</strong></h2>
    <p style="text-align: center;">[divider style="normal" top="20" bottom="10"]</p>
    <p style="text-align: center;">[ads2]</p>
    <h2 style="text-align: center;"><span style="color: #114f85;"><strong>Informações do mod:</strong></span></h2>
    <p style="text-align: center;"><span style="color: #000000;"><strong>Mod para o Jogo:</strong> MOD PARA O JOGO AQUI</span>
    <span style="color: #000000;"><strong>Desenvolvedor:</strong> '.$mod_author.'</span>
    <span style="color: #000000;"><strong>Versão:</strong> '.$mod_version.' (Nao testado em outras Versoes)</span></p>
    <p style="text-align: center;">[divider style="normal" top="20" bottom="10"]</p>
    <h2 style="text-align: center;"><span style="color: #114f85;"><strong>Informações Gerais do mod:</strong></span></h2>
    <p style="text-align: center;"><span style="color: #000000;">'.$mod_infor.'</span></p>
    <p style="text-align: center;">[divider style="normal" top="20" bottom="10"]</p> 
    <h2 style="text-align: center;"><span style="color: #114f85;"><strong>Imagens do mod:</strong></span></h2>
    '.$mod_code.'
    <p style="text-align: center;">[divider style="normal" top="20" bottom="10"]</p>
    <h2 style="text-align: center;"><span style="color: #114f85;"><strong>Video da apresentação do mod:</strong></span></h2>
    [embed width="" height=""]'.$mod_video.'[/embed]
    <p style="text-align: center;">[divider style="normal" top="20" bottom="10"]</p>
    <h2 style="text-align: center;"><span style="color: #114f85;"><strong>Fazer download do mod:</strong></span></h2>
    <p style="text-align: center;">[ads1]</p>
    [sociallocker id="16412"]
    <p style="text-align: center;">[button color="black" size="small" link="'.$mod_original.'" target="true"]DOWNLOAD DO MOD (LINK ORIGINAL)[/button]</p>
    [/sociallocker]
    [sociallocker id="17307"]
    <p style="text-align: center;">[button color="blue" size="small" link="'.$mod_simuladores.'" target="true"]DOWNLOAD DO MOD (MEDIAFIRE - LINK MOD SIMULADORES)[/button]</p>
    [/sociallocker]
    [box type="warning" align="aligncenter" class="" width=""]Invadimos sua privacidade? Por favor não reporte abuso e entre em contato através do nosso e-mail: <b>contato@modsimuladores.com</b> e informe o link que está violando seus direitos autorais e iremos resolver o problema o mais rápido possível. Obrigado![/box]
    ';

endif;
