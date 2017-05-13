<?php
$app  = JFactory::getApplication();
$doc  = JFactory::getDocument();
$user = JFactory::getUser();
$templateparams     = $app->getTemplate(true)->params;
$this->language = $doc->language;
$this->direction = $doc->direction;





// Add Stylesheets
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/site_global.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/master_a-mestre.css");
$doc->addStyleSheet($this->baseurl."/templates/".$this->template."/css/index.css");



?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $this->language; ?>" lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/jquery.min.js"></script>
	
 


 <jdoc:include type="head" />



  <!-- JS includes -->
  <!--[if lt IE 9]>
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/html5shiv.js" type="text/javascript"></script>
  <![endif]-->
</head>


<body>
	

  <div class="clearfix borderbox" id="page"><!-- column -->
   <div class="position_content" id="page_position_content">
    <div class="clearfix colelem" id="pu116"><!-- group -->
     <div class="clip_frame grpelem" id="u116"><!-- svg -->
      <img class="svg" id="u114" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-8145x177.svg?crc=158692083" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%208145x177_poster_.png?crc=175153238" data-image-width="815" data-image-height="177"/>
     </div>
     <div class="clearfix grpelem" id="u1423-6"><!-- content -->
      <p>Nº <span id="u1423-2">45 - </span><span id="u1423-3"> ABRIL DE 2017</span></p>
     </div>
    </div>
    <div class="clearfix colelem" id="pu188"><!-- group -->
     <div class="clip_frame grpelem" id="u188"><!-- svg -->
      <img class="svg" id="u186" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-800x56.svg?crc=4137645187" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20800x56_poster_.png?crc=76307399" data-image-width="800" data-image-height="56"/>
     </div>
     <nav class="MenuBar clearfix grpelem" id="menuu140"><!-- horizontal box -->
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u141"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u144" href="http://socicom.org.br/novoinformativo/index.php?option=com_content&view=article&id=45&Itemid=281"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u147-4"><!-- content --><p>A SOCICON</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u880"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u881" href="http://www.socicom.org.br/"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u882-4"><!-- content --><p>Site SOCICOM</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u909"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u910" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=527&Itemid=218"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u912-4"><!-- content --><p>Edições Anteriores</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u937"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem MuseMenuActive" id="u940" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1105&Itemid=218"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u941-4"><!-- content --><p>Edição Atual</p></div></a>
      </div>
      <div class="MenuItemContainer borderbox clearfix grpelem" id="u965"><!-- vertical box -->
       <a class="nonblock nontext MenuItem MenuItemWithSubMenu borderbox clearfix colelem" id="u966" href="http://www.socicom.org.br/novoinformativo/index.php?option=com_content&view=article&id=458&Itemid=57"><!-- horizontal box --><div class="MenuItemLabel NoWrap borderbox clearfix grpelem" id="u968-4"><!-- content --><p>Contato</p></div></a>
      </div>
     </nav>
    </div>

<div style="margin-top:100px;"><jdoc:include type="component" /></div>
							
    
    
    
    
    <?php if ($this->countModules('conteudoinformativo2017')): ?>
    
    <style>.item-page{ display:none;}</style>
  <!--inicio do bloco do Informativo-->  
    
    <div class="clearfix colelem" id="ppu706" style="margin-top:0px;"><!-- group -->

     <div class="clearfix grpelem" id="pu706"><!-- column -->
      <div class="clearfix colelem" id="u706"><!-- column -->
       <div class="clearfix colelem" id="pu629"><!-- group -->
           							
        <div class="clip_frame grpelem" id="u629"><!-- svg -->
        
         <img class="svg" id="u627" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-176694x33.svg?crc=4141169722" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20176694x33_poster_.png?crc=334117559" data-image-width="159" data-image-height="30"/>
        </div>
        <div class="clearfix grpelem" id="u828-4"><!-- content -->
         <p>DESTAQUES</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1021"><!-- group -->
        <div class="clip_frame grpelem" id="u1021"><!-- image -->
         <img class="block" id="u1021_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/destaque-01.png" alt="" data-image-width="310" data-image-height="219" />
        </div>
        <div class="clearfix grpelem" id="u1015-12"><!-- content -->
         <p id="u1015-3"><span id="u1015">DESENVOLVIMENTO CIENTÍFICO SOB  ATAQUE</span><span id="u1015-2"></span></p>
         <p id="u1015-9"><span id="u1015-4">O governo federal publicou, no último dia 30 de março, o decreto 9.018 que contingencia R$ 2,2 bilhões do orçamento do Ministério da Ciência, Tecnologia, Inovação e Comunicações (MCTI). A medida representa séria ameaça ao desenvolvimento científico do pais. Para SBPC, a redução de recursos gera incertezas e leva, inclusive, à perda de competitividade dos centros universitários e de pesquisa do pais...</span><span id="u1015-5"> </span><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1083&Itemid=218">Leia mais</span></a><span id="u1015-8"></span></p>
         <p>&nbsp;</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1018-9"><!-- group -->
        <div class="clearfix grpelem" id="u1018-9"><!-- content -->
         <p id="u1018-2">AVALIAÇÃO DA ÉTICA NA PESQUISA EM HUMANIDADES AMEAÇADA</p>
         <p id="u1018-6"><span id="u1018-3">Fórum das Ciências Humanas, Sociais e Sociais Aplicadas (FCHSSA) alerta para o não cumprimento, por parte do Conselho Nacional de Saúde (CONEP), das medidas que implementam novo sistema de avaliação da ética em pesquisas nas Humanidades e Ciências Sociais...</span><span id="u1018-4"> </span><span id="u1018-5"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1084&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p>&nbsp;</p>
        </div>
        <div class="clip_frame grpelem" id="u1024"><!-- image -->
         <img class="block" id="u1024_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/destaque-02.png" alt="" data-image-width="261" data-image-height="172"/>
        </div>
       </div>
      </div>
      <div class="clearfix colelem" id="u743"><!-- group -->
       <div class="clearfix grpelem" id="ppu789"><!-- column -->
        <div class="clearfix colelem" id="pu789"><!-- group -->
         <div class="clip_frame grpelem" id="u789"><!-- svg -->
          <img class="svg" id="u787" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-21575x33.svg?crc=4145037444" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%2021575x33_poster_.png?crc=4023522455" data-image-width="216" data-image-height="33"/>
         </div>
         <div class="clearfix grpelem" id="u837-4"><!-- content -->
          <p>PONTO DE VISTA</p>
         </div>
        </div>
        <div class="clearfix colelem" id="pu1059"><!-- group -->
         <div class="clip_frame grpelem" id="u1059"><!-- image -->
          <img class="block" id="u1059_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/ponto-de-vista-01.png" alt="" data-image-width="139" data-image-height="139"/>
         </div>
         <div class="clearfix grpelem" id="u1046-9"><!-- content -->
          <p id="u1046-2">AVANÇOS E RETROCESSOS NA AVALIAÇÃO DOS CURSOS DE JORNALISMO BRASILEIROS</p>
          <p id="u1046-6"><span id="u1046-3">Participar do processo de avaliação dos cursos de Jornalismo no Brasil sempre foi uma demanda do Fórum Nacional de Professores de Jornalismo (FNPJ), hoje Associação Brasileira de Ensino de Jornalismo (Abej), junto ao Instituto Nacional de Estudos e Pesquisas Educacionais Anísio Teixeira (Inep). Membros da diretoria participaram da Comissão Técnica que preparou o documento orientador para avaliação in loco com base nas Diretrizes Curriculares Nacionais (DCN). O que seria um avanço, porém, tornou-se um retrocesso...</span><span id="u1046-4"> / </span><span id="u1046-5"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1082&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
          <p>&nbsp;</p>
         </div>
        </div>
       </div>

      </div>
      <div class="clearfix colelem" id="u723"><!-- group -->
       <div class="clearfix grpelem" id="ppu798"><!-- column -->
        <div class="clearfix colelem" id="pu798"><!-- group -->
         <div class="clip_frame grpelem" id="u798"><!-- svg -->
          <img class="svg" id="u796" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-261666x33.svg?crc=432962652" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20261666x33_poster_.png?crc=454367383" data-image-width="262" data-image-height="33"/>
         </div>
         <div class="clearfix grpelem" id="u842-4"><!-- content -->
          <p>SOCICOM INFORMA</p>
         </div>
        </div>
        <div class="clearfix colelem" id="pu1084"><!-- group -->
         <div class="clip_frame grpelem" id="u1084"><!-- image -->
          <img class="block" id="u1084_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/socicom-informa-01.png" alt="" data-image-width="139" data-image-height="139"/>
         </div>
         <div class="clearfix grpelem" id="u1079-8"><!-- content -->
          <p id="u1079-2">Marco Civil da Internet e WhatsApp em discussão </p>
          <p id="u1079-5"><span id="u1079-3">SOCICOM envia carta ao Supremo Tribunal federal solicitando sua participação em audiência pública que discutirá o bloqueio do aplicativo WhatsApp no Brasil.... </span><span id="u1079-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1106&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
          <p id="u1079-6">&nbsp;</p>
         </div>
        </div>
        <div class="clearfix colelem" id="u1118-8"><!-- content -->
         <p id="u1118-2">Renovação dos representantes do Conselho de Comunicação Social</p>
         <p id="u1118-5"><span id="u1118-3">A Socicom enviou ofício ao presidente do Senado, Eunício de Oliveira, solicitando que a entidade ocupe uma das vagas de representação da sociedade civil no Conselho de Comunicação Social  será renovado em julho deste ano... </span><span id="u1118-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1107&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p id="u1118-6">&nbsp;</p>
        </div>
       </div>
       <div class="clearfix grpelem" id="pu1102-8"><!-- column -->
        <div class="clearfix colelem" id="u1102-8"><!-- content -->
         <p id="u1102-2">Fortalecimento do campo comunicacional</p>
         <p id="u1102-5"><span id="u1102-3">Diretoria da Socicom realiza ações no sentido de fortalecer, interna e externamente, o campo comunicacional brasileiro... </span><span id="u1102-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1108&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        
                <div class="clip_frame colelem" id="u1107"><!-- image -->
         <img class="block" id="u1107_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/socicom-informa-02.png" alt="" data-image-width="296" data-image-height="188"/>
        </div>
        </div>

       </div>
       
 
       
       
      </div>
      <!--copy-->
      <div class="clearfix colelem" id="u733"><!-- column -->
       <div class="clearfix colelem" id="pu807"><!-- group -->
        <div class="clip_frame grpelem" id="u807"><!-- svg -->
         <img class="svg" id="u805" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-264102x33.svg?crc=265267588" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20264102x33_poster_.png?crc=261960392" data-image-width="264" data-image-height="33"/>
        </div>
        <div class="clearfix grpelem" id="u852-4"><!-- content -->
         <p>AGENDA DAS FILIADAS</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1128"><!-- group -->
        <div class="clip_frame grpelem" id="u1128"><!-- image -->
         <img class="block" id="u1128_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/filiadas-01.png" alt="" data-image-width="156" data-image-height="109"/>
        </div>
        <div class="clearfix grpelem" id="u1123-8"><!-- content -->
         <p id="u1123-2">ALCAR</p>
         <p id="u1123-5"><span id="u1123-3">Inscrições para o XI Encontro Nacional de História  da Mídia podem ser feitas até o dia 20 de maio. A conferência de abertura será proferida pelo historiador inglês Peter Burke...</span><span id="u1123-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1093&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p id="u1123-6">&nbsp;</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1137-7"><!-- group -->
        <div class="clearfix grpelem" id="u1137-7"><!-- content -->
         <p id="u1137-2">ABP2</p>
         <p id="u1137-5"><span id="u1137-3">A Associação Brasileira de Pesquisadores em Publicidade e  Propaganda (ABP2) realiza, entre os dias 24 e 26 de maio o VIII Pró-Pesq PP – Encontro Nacional de Pesquisadores em Publicidade e Propaganda. ...</span><span id="u1137-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1091&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        </div>
        <div class="clearfix grpelem" id="u1166-8"><!-- content -->
         <p id="u1166-2"><span id="u1166">ABRAPCORP</span></p>
         <p id="u1166-5"><span id="u1166-3">A Associação Brasileira de Pesquisadores de Comunicação Organizacional e Relações Públicas (ABRAPCORP) realiza, entre os dias 15 e 19 de maio, o XI Congresso ABRAPCORP...</span><span id="u1166-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1092&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p>&nbsp;</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1137-7"><!-- group -->
        <div class="clearfix grpelem" id="u1137-7"><!-- content -->
         <p id="u1137-2">FOLKCOM</p>
         <p id="u1137-5"><span id="u1137-3">Rede Folkcom – Rede de Estudos e Pesquisa em Folkcomunicação realiza no período de 02 a 05 de maio a XVIII Conferência Brasileira de Folkcomunicação...</span><span id="u1137-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1094&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        </div>
        <div class="clearfix grpelem" id="u1166-8"><!-- content -->
         <p id="u1166-2"><span id="u1166">FORCINE</span></p>
         <p id="u1166-5"><span id="u1166-3">Está aberto o período de indicações de curtas das escolas afiliadas ao Forcine para participarem da Mostra Escolas de Cinema Ciba-Cilect...</span><span id="u1166-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1095&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p>&nbsp;</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1128"><!-- group -->
        <div class="clip_frame grpelem" id="u1128"><!-- image -->
         <img class="block" id="u1128_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/filiadas-02.png" alt="" data-image-width="156" data-image-height="109"/>
        </div>
        <div class="clearfix grpelem" id="u1123-8"><!-- content -->
         <p id="u1123-2">INTERCOM</p>
         <p id="u1123-5"><span id="u1123-3">Período de inscrição e submissão de trabalhos para o 40º Congresso Brasileiro de Ciências da Comunicação teve início em 28 de abril...</span><span id="u1123-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1096&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p id="u1123-6">&nbsp;</p>
        </div>
       </div>
       <div class="clearfix colelem" id="pu1137-7"><!-- group -->
        <div class="clearfix grpelem" id="u1137-7"><!-- content -->
         <p id="u1137-2">SBPJOR</p>
         <p id="u1137-5"><span id="u1137-3">Aberto o período para submissão de trabalhos ao I Brazil-India Journalism Research Colloquium...</span><span id="u1137-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1097&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        </div>
        <div class="clearfix grpelem" id="u1166-8"><!-- content -->
         <p id="u1166-2"><span id="u1166">ULEPICC-br</span></p>
         <p id="u1166-5"><span id="u1166-3">Ulepicc Brasil apoia a realização do I Colóquio de Economia Política da Comunicação e da Cultura da Fundação Casa de Rui Barbosa e  do XV Seminário OBSCOM/CEPOS na Universidade Federal de Sergipe...</span><span id="u1166-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1098&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
         <p>&nbsp;</p>
        </div>
       </div>
       
      </div>
      <!--copy-->
      
       
      <div class="clearfix colelem" id="pu816"><!-- group -->
       <div class="clip_frame grpelem" id="u816"><!-- svg -->
        <img class="svg" id="u814" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-222589x33.svg?crc=484078787" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20222589x33_poster_.png?crc=4270956977" data-image-width="223" data-image-height="33"/>
       </div>
       <div class="clearfix grpelem" id="u857-4"><!-- content -->
        <p>EQUIPE EDITORIAL</p>
       </div>
      </div>
      <div class="clearfix colelem" id="pu1181-25"><!-- group -->
       <div class="clearfix grpelem" id="u1181-25"><!-- content -->
        <p id="u1181-3"><span id="u1181">Nélia Rodrigues Del Bianco</span><span id="u1181-2"></span></p>
        <p id="u1181-6"><span id="u1181-4">Editora</span></p>
        <p><span id="u1181-7">Giovanna Massis de Oliveira</span><span id="u1181-8"> </span></p>
        <p id="u1181-13"><span id="u1181-11">Subeditora</span></p>
       <p id="u1181-3"><span id="u1181">Jorge Del Bianco</span><span id="u1181-2"></span></p>
		<p id="u1181-6"><span id="u1181-4">Projeto Gráfico</span></p>
        

        <p id="u1181-22">&nbsp;</p>
        <p>&nbsp;</p>
       </div>
       <div class="clearfix grpelem" id="u1191-20"><!-- content -->
        <p id="u1191-2"><span id="u1191"> Diretoria da SOCICOM 2016-2018:</span></p>
        <p id="u1191-2"><span id="u1191">Ruy Sardinha Lopes</span></p>
        <p id="u1191-4">Presidente</p>
        <p id="u1191-6">Cláudia Lago</p>
        <p id="u1191-8">Vice-presidente</p>


        <p id="u1191-17">&nbsp;</p>
        <p>&nbsp;</p>
       </div>
       <div class="clearfix grpelem" id="u1201-20"><!-- content -->
        <p id="u1191-10">Maria José da Costa Oliveira</p>
        <p id="u1191-12">Diretora-Administrativa</p>
        <p id="u1201-2"><span id="u1201">Nélia Rodrigues Del Bianco</span></p>
        <p id="u1201-4">Diretora de Relações Nacionais </p>
        <p id="u1201-6">Ana Regina Rêgo</p>
        <p id="u1201-8">Diretora de Relações Internacionais</p>

        <p>&nbsp;</p>
        <p>&nbsp;</p>
       </div>
      </div>
     </div>
     <div class="clearfix grpelem" id="u718"><!-- column -->
      <div class="position_content" id="u718_position_content">
       <div class="clearfix colelem" id="pu711"><!-- group -->
        <div class="clip_frame grpelem" id="u711"><!-- svg -->
         <img class="svg svg_mar" id="u709" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-169041x33.svg?crc=3944121131" onload="this.style.height=(this.offsetWidth*33/161)+'px'" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%20169041x33_poster_.png?crc=4089201786" data-image-width="161" data-image-height="33"/>
        </div>
        <div class="clearfix grpelem" id="u832-4"><!-- content -->
         <p>ESPAÇO ABERTO</p>
        </div>
       </div>
       <div class="clip_frame colelem" id="u1228"><!-- image -->
        <img class="block" id="u1228_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/espaco-aberto-01.png" alt="" data-image-width="140" data-image-height="113"/>
       </div>
       <div class="clearfix colelem" id="u1237-10"><!-- content -->
        <p id="u1237-2">IX Seminário ALAIC Cone Sul</p>
        <p id="u1237-4">ALAIC realiza, nos dias 22 e 23 de maio, o IX Seminário ALAIC Cone Sul, na Universidade Federal de Goiás, Goiânia...</p>
        <p id="u1237-7"><span id="u1237-5"> </span><span id="u1237-6"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1086&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p id="u1237-8">&nbsp;</p>
       </div>
       
       <div class="clearfix colelem" id="u1242-9"><!-- content -->
        <p id="u1242-2"><span id="u1242">EICA 2017</span></p>
        <p id="u1242-5"><span id="u1242-3">A Universidade Federal de Sergipe sediará, nos dias 5,6 e 7 de junho o 3º Encontro Interdisciplinar de Comunicação Ambiental...</span><span id="u1242-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1110&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p>&nbsp;</p>
       </div>
       
     
       
       <div class="clearfix colelem" id="u1242-9"><!-- content -->
        <p id="u1242-2"><span id="u1242" style="text-transform:uppercase;">Revista Internacional de Folkcomunicação - RIF</span></p>
        <p id="u1242-5"><span id="u1242-3">A Revista Internacional de Folkcomunicação (RIF) recebe artigos, até o dia 9 de maio, para o dossiê temático "Folkcomunicação e Políticas Públicas".</span><span id="u1242-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1111&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p>&nbsp;</p>
       </div>
       <div class="clip_frame colelem" id="u1228"><!-- image -->
        <img class="block" id="u1228_img" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/imagem%20colada%20391x291-crop-u1228.jpg?crc=148789542" alt="" data-image-width="140" data-image-height="113"/>
       </div>
       <div class="clearfix colelem" id="u1237-10"><!-- content -->
        <p id="u1237-2">CADERNOS FORCINE</p>
        <p id="u1237-4">Cadernos do  Forcine está com chamada aberta de artigos e ensaios para sua próxima edição...</p>
        <p id="u1237-7"><span id="u1237-5"> </span><span id="u1237-6"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1112&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p id="u1237-8">&nbsp;</p>
       </div>
       

              <div class="clearfix colelem" id="u1242-9"><!-- content -->
        <p id="u1242-2"><span id="u1242" style="text-transform:uppercase;">Revista EPTIC</span></p>
        <p id="u1242-5"><span id="u1242-3">A revista EPTIC está com a chamada de artigos para o Dossiê Temático “50 anos da televisão pública brasileira” aberta até o dia 05 de junho...</span><span id="u1242-4"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1113&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p>&nbsp;</p><p>&nbsp;</p>
       </div>
                     <div class="clearfix colelem" id="u1223-10"><!-- content -->
        <p id="u1223-2" style="text-transform:uppercase;">Originais Reprovados</p>
        <p id="u1223-4">A revista Originais Reprovados até com chamada de trabalhos aberta até o dia 20/05...</p>
        <p id="u1223-7"><span id="u1223-5">&nbsp;/ </span><span id="u1223-6"><a class="nonblock" href="http://www.socicom.org.br/index.php?option=com_content&view=article&id=1114&Itemid=218"><span id="u1015-6">Leia mais</span></a></span></p>
        <p id="u1223-8">&nbsp;</p>
       </div>



      </div>
     </div>
    </div>
    
    <!--fim do bloco do Informativo-->
    <jdoc:include type="modules" name="conteudoinformativo2017" style="xhtml" />
    
    <?php endif; ?>
    
    <div class="verticalspacer" data-offset-top="2075" data-content-above-spacer="2075" data-content-below-spacer="89"></div>
    <div class="clearfix colelem" id="u1411"><!-- group -->
     <div class="clearfix grpelem" id="u598-4"><!-- content -->
      <p>Siga-nos</p>
     </div>
     <div class="clip_frame grpelem" id="u572"><!-- svg -->
     <a href="https://www.facebook.com/SocicomOrg/">
      <img class="svg" id="u569" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-31647x31.svg?crc=4216147840" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%2031647x31_poster_.png?crc=4278109281" data-image-width="32" data-image-height="32"/>
      </a>
     </div>
     <div class="clip_frame grpelem" id="u582"><!-- svg -->
      <a href="https://twitter.com/_Socicom"><img class="svg" id="u580" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-23559x31.svg?crc=225886607" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%2023559x31_poster_.png?crc=314547347" data-image-width="24" data-image-height="32"/></a>
     </div>
     <div class="clip_frame grpelem" id="u591"><!-- svg -->
     <a href="https://plus.google.com/">
      <img class="svg" id="u589" src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg-colado-29152x31.svg?crc=4031338245" alt="" data-mu-svgfallback="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/images/svg%20colado%2029152x31_poster_.png?crc=3954419934" data-image-width="29" data-image-height="32"/>
      </a>
     </div>
    </div>
   </div>
  </div>
  <!-- Other scripts -->
  <script type="text/javascript">
   window.Muse.assets.check=function(d){if(!window.Muse.assets.checked){window.Muse.assets.checked=!0;var b={},c=function(a,b){if(window.getComputedStyle){var c=window.getComputedStyle(a,null);return c&&c.getPropertyValue(b)||c&&c[b]||""}if(document.documentElement.currentStyle)return(c=a.currentStyle)&&c[b]||a.style&&a.style[b]||"";return""},a=function(a){if(a.match(/^rgb/))return a=a.replace(/\s+/g,"").match(/([\d\,]+)/gi)[0].split(","),(parseInt(a[0])<<16)+(parseInt(a[1])<<8)+parseInt(a[2]);if(a.match(/^\#/))return parseInt(a.substr(1),
16);return 0},g=function(g){for(var f=document.getElementsByTagName("link"),h=0;h<f.length;h++)if("text/css"==f[h].type){var i=(f[h].href||"").match(/\/?css\/([\w\-]+\.css)\?crc=(\d+)/);if(!i||!i[1]||!i[2])break;b[i[1]]=i[2]}f=document.createElement("div");f.className="version";f.style.cssText="display:none; width:1px; height:1px;";document.getElementsByTagName("body")[0].appendChild(f);for(h=0;h<Muse.assets.required.length;){var i=Muse.assets.required[h],l=i.match(/([\w\-\.]+)\.(\w+)$/),k=l&&l[1]?
l[1]:null,l=l&&l[2]?l[2]:null;switch(l.toLowerCase()){case "css":k=k.replace(/\W/gi,"_").replace(/^([^a-z])/gi,"_$1");f.className+=" "+k;k=a(c(f,"color"));l=a(c(f,"backgroundColor"));k!=0||l!=0?(Muse.assets.required.splice(h,1),"undefined"!=typeof b[i]&&(k!=b[i]>>>24||l!=(b[i]&16777215))&&Muse.assets.outOfDate.push(i)):h++;f.className="version";break;case "js":h++;break;default:throw Error("Unsupported file type: "+l);}}d?d().jquery!="1.8.3"&&Muse.assets.outOfDate.push("jquery-1.8.3.min.js"):Muse.assets.required.push("jquery-1.8.3.min.js");
f.parentNode.removeChild(f);if(Muse.assets.outOfDate.length||Muse.assets.required.length)f="Alguns arquivos no servidor podem estar ausentes ou incorretos. Limpe o cache do navegador e tente novamente. Se o problema persistir, entre em contato com o autor do site.",g&&Muse.assets.outOfDate.length&&(f+="\nOut of date: "+Muse.assets.outOfDate.join(",")),g&&Muse.assets.required.length&&(f+="\nMissing: "+Muse.assets.required.join(",")),alert(f)};location&&location.search&&location.search.match&&location.search.match(/muse_debug/gi)?setTimeout(function(){g(!0)},5E3):g()}};
var muse_init=function(){require.config({baseUrl:""});require(["jquery","museutils","whatinput","jquery.musemenu","jquery.watch"],function(d){var $ = d;$(document).ready(function(){try{
window.Muse.assets.check($);/* body */
Muse.Utils.transformMarkupToFixBrowserProblemsPreInit();/* body */
Muse.Utils.prepHyperlinks(true);/* body */
Muse.Utils.fullPage('#page');/* 100% height page */
Muse.Utils.initWidget('.MenuBar', ['#bp_infinity'], function(elem) { return $(elem).museMenu(); });/* unifiedNavBar */
Muse.Utils.showWidgetsWhenReady();/* body */
Muse.Utils.transformMarkupToFixBrowserProblems();/* body */
}catch(b){if(b&&"function"==typeof b.notify?b.notify():Muse.Assert.fail("Error calling selector function: "+b),false)throw b;}})})};

</script>
  <!-- RequireJS script -->
  <script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/require.js?crc=4234670167" type="text/javascript" async data-main="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/javascript/museconfig.js?crc=4152223963" onload="if (requirejs) requirejs.onError = function(requireType, requireModule) { if (requireType && requireType.toString && requireType.toString().indexOf && 0 <= requireType.toString().indexOf('#scripterror')) window.Muse.assets.check(); }" onerror="window.Muse.assets.check();"></script>












		
	</body>
</html>