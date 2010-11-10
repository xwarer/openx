<?php

/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2009 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id: translation.php 28570 2008-11-06 16:21:37Z chris.nutting $
*/



// Note: New translations not found in original lang files but found in CSV
$GLOBALS['strInventory'] = "Inventário";
$GLOBALS['strTypeFTPUsername'] = "Login ";
$GLOBALS['strTypeFTPPassword'] = "Senha";
$GLOBALS['strHasTaxID'] = "ID da Taxa";
$GLOBALS['strStatisticsDefaults'] = "Estatísticas";
$GLOBALS['strAdministratorSettings'] = "Configurações de administração";
$GLOBALS['strInstall'] = "Instalar";
$GLOBALS['strLanguageSelection'] = "Seleção de idioma";
$GLOBALS['strDatabaseSettings'] = "Configurações de base de dados";
$GLOBALS['strAdminAccount'] = "Conta de Administrador";
$GLOBALS['strAdvancedSettings'] = "Configurações avançadas";
$GLOBALS['strSpecifySyncSettings'] = "Configurações de sincronização";
$GLOBALS['strOpenadsIdYour'] = "Seu ID OpenX";
$GLOBALS['strOpenadsIdSettings'] = "Configurações de ID OpenX";
$GLOBALS['strBtnContinue'] = "Prosseguir »";
$GLOBALS['strBtnRecover'] = "Recuperar »";
$GLOBALS['strBtnStartAgain'] = "Re-iniciar upgrade »";
$GLOBALS['strBtnGoBack'] = "« Voltar";
$GLOBALS['strBtnAgree'] = "Eu concordo »";
$GLOBALS['strBtnDontAgree'] = "« Eu não concordo";
$GLOBALS['strBtnRetry'] = "Tentar novamente";
$GLOBALS['strFixErrorsBeforeContinuing'] = "Por favor corrija todos erros antes de prosseguir";
$GLOBALS['strWarningRegisterArgcArv'] = "A variável register_argc_argv da configuração do PHP deve estar habilitada para que a manutenção seja executada pela linha de comando";
$GLOBALS['strTablesPrefix'] = "Prefixo das tabelas";
$GLOBALS['strTablesType'] = "Tipo das tabelas";
$GLOBALS['strInstallIntro'] = "Obrigado por escolher o <a href='http://MAX_PRODUCT_URL' target='_blank'><strong>". MAX_PRODUCT_NAME ."</strong></a><p>Este assistente irá guiar você pelo processo de instalação / atualização do servidor de anúncios ". MAX_PRODUCT_NAME.".</p><p>Para ajudar com o processo de instalação criamos um <a href='". OX_PRODUCT_DOCSURL ."/wizard/qsg-install' target='_blank'>Guia de Instalação Rápida</a> que lhe ajudará a ter o serviço no ar rapidamente. Para maiores detalhes sobre instalação ou configuração do MAX_PRODUCT_NAME visite o <a href='". OX_PRODUCT_DOCSURL ."/wizard/admin-guide' target='_blank'>Guia do Administrador</a>.";
$GLOBALS['strRecoveryRequiredTitle'] = "Sua última tentativa de atualizar o sistema encontrou um erro";
$GLOBALS['strRecoveryRequired'] = "Um erro foi encontrado durante a última atualização e o ". MAX_PRODUCT_NAME." deve tentar recuperar esta atualização. Por favor clique no botão de Recuperação abaixo.";
$GLOBALS['strTermsTitle'] = "Termos e Condições de Uso, Política de Privacidade";
$GLOBALS['strTermsIntro'] = "". MAX_PRODUCT_NAME." é distribuido gratuitamente sob uma licença Open Source, a GNU General Public License. Por favor revise e concorde com os documentos abaixo para prosseguir com a instalação.";
$GLOBALS['strPolicyTitle'] = "Politica de privacidade";
$GLOBALS['strPolicyIntro'] = "Por favor confira e concorde com o seguinte documento para prosseguir com a instalação.";
$GLOBALS['strDbSetupTitle'] = "Configurações de base de dados";
$GLOBALS['strDbSetupIntro'] = "Por favor preencha os dados para conectar com sua base de dados. Se não tiver certeza sobre estes dados, contate o administrador de sua rede.<p> O proximo passo irá configurar sua base de dados. Clique 'continuar' para prosseguir.</p>.";
$GLOBALS['strDbUpgradeIntro'] = "Abaixo estão os detalhes da base de dados detectados par sua instalação do ". MAX_PRODUCT_NAME.". Por favor verifique para confirmar que estes dados estão corretos.<p>O próximo passo será atualizar sua base de dados. Clique 'continuar' para atualizar seu sistema.</p>";
$GLOBALS['strOaUpToDate'] = "Sua base de dados ". MAX_PRODUCT_NAME ." e a estrutura de arquivos estão ambos utilizando a versão mais recente e portanto nenhuma atualização é necessária neste momento. Por favor clique Prosseguir para continuar até o painel de Administração do ". MAX_PRODUCT_NAME .".";
$GLOBALS['strOaUpToDateCantRemove'] = "Atenção: o arquivo UPGRADE ainda está presente no seu diretório var. Foi impossível remover este arquivo devido a falta de permissão. Por favor remova o arquivo manualmente.";
$GLOBALS['strRemoveUpgradeFile'] = "Você deve remover o arquivo UPGRADE do diretório var.";
$GLOBALS['strInstallSuccess'] = "Ao clicar em 'Continuar' você será logado em nosso sistema de anúncios.	<p><strong>E agora?</strong></p>	<div class='psub'>	  <p><b>Receba atualizações do produto</b><br>	    <a href='". OX_PRODUCT_DOCSURL ."/wizard/join' target='_blank'>Entra na lista do". MAX_PRODUCT_NAME ."</a> para receber atualizações do produto, alertas de segurança e anúncios de novos produtos.	  </p>	  <p><b>Servir sua primeira campanha</b><br>	    Use nosso <a href='". OX_PRODUCT_DOCSURL ."/wizard/qsg-firstcampaign' target='_blank'>guia de início rápido para começar  servir sua primeira campanha</a>.	  </p>	</div>	<p><strong>Passos opcionais de instalação</strong></p>	<div class='psub'>	  <p><b>Trave seus arquivos de configuração</b><br>	    Este é um bom passo extra para proteger as configurações de seu servidor de alterações.  <a href='". OX_PRODUCT_DOCSURL ."/wizard/lock-config' target='_blank'>Veja mais</a>.	  </p>	  <p><b>Configure uma tarefa de manutenção agendada</b><br>	    Um arquivo de configuração é recomendado para garantir relatórios atualizados e a melhor perfomance de entrega de anúncios.  <a href='". OX_PRODUCT_DOCSURL ."/wizard/setup-cron' target='_blank'>Veja mais</a>	  </p>	  <p><b>Confira as configurações do seu servidor</b><br>	    Antes de utilizar ". MAX_PRODUCT_NAME ." recomendamos que reveja as suas configurações na aba de 'Configurações'.	  </p>	</div>";
$GLOBALS['strSystemCheck'] = "Verificação do sistema";
$GLOBALS['strSystemCheckIntro'] = "O assistente de configuração esta verificando as configurações de seu servidor para garantir que o processo de instalação seja concluído com sucesso. 	<p>Por favor verifique qualquer problemas destacados para completar o processo de instalação.</p>";
$GLOBALS['strDbSuccessIntro'] = "A base de dados do ". MAX_PRODUCT_NAME ." acaba de ser atualizada. Por favor clique em 'Prosseguir' para continuar a verificar as informações de Administração e entrega do ". MAX_PRODUCT_NAME .".";
$GLOBALS['strDbSuccessIntroUpgrade'] = "Seu sistema foi atualizado com sucesso. As próximas telas irão lhe ajudar a atualizar as configurações de seu novo servidor de anúncios.";
$GLOBALS['strErrorWritePermissions'] = "Erros de permissão em arquivos foram detectados, e devem ser corrigidos antes de prosseguir.<br />Para corrigir estes erros em um sistema Linux, tente digitar o(s) seguinte(s) comando(s):";
$GLOBALS['strErrorFixPermissionsCommand'] = "<i>chmod a+w %s</i>";
$GLOBALS['strErrorWritePermissionsWin'] = "Erros de permissão em arquivos foram detectados, e devem ser corrigidos antes de prosseguir.";
$GLOBALS['strCheckDocumentation'] = "Para mais ajuda, verifique a <a href='". OX_PRODUCT_DOCSURL ."'>documentação do ". MAX_PRODUCT_NAME ."</a>.";
$GLOBALS['strAdminUrlPrefix'] = "URL da interface de administração";
$GLOBALS['strDeliveryUrlPrefix'] = "URL da engine de entrega";
$GLOBALS['strDeliveryUrlPrefixSSL'] = "URL da engine de entrega (SSL)";
$GLOBALS['strImagesUrlPrefix'] = "URL do armazenamento de imagens";
$GLOBALS['strImagesUrlPrefixSSL'] = "URL do armazenamento de imagens (SSL)";
$GLOBALS['strEditConfigNotPossible'] = "Não é possível alterar todas as configurações porque o arquivo de configuração esta bloqueado por motivos de segurança. Caso deseje fazer alterações, será necessário desbloquear o arquivo primeiro.";
$GLOBALS['strEditConfigPossible'] = "É possível editar todas a configurações porque o arquivo de configuração não está bloqueado, mas isto pode causar problemas de segurança. Caso deseje tornar o sistema mais seguro, bloqueie o arquivo de configuração.";
$GLOBALS['strUnableToWriteConfig'] = "Não é possível editar todas as configurações pois o arquivo de configuração esta travado por questões de segurança. Se deseja fazer alterações destrave o arquivo de configurações primeiro.";
$GLOBALS['strUnableToWritePrefs'] = "É possível editar toas configurações pois o arquivo de configuração esta liberado, mas isto pode levar a problemas de segurança. Se deseja tornar seus sistema seguro é necessário travar o arquivo de configuração.";
$GLOBALS['strImageDirLockedDetected'] = "O <b>Diretório de imagens</b> fornecido não possui permissão de escrita pelo servidor. <br>Você não poderá prosseguir até alterar as permissões ou criar a pasta.";
$GLOBALS['strConfigurationSetup'] = "Lista de verificações da Configuração";
$GLOBALS['strConfigurationSettings'] = "Dados de configuração";
$GLOBALS['strLoginCredentials'] = "Dados de login";
$GLOBALS['strAdminUsername'] = "Usuário administrativo";
$GLOBALS['strAdminPassword'] = "Senha de administração";
$GLOBALS['strInvalidUsername'] = "Nome de usuário inválido";
$GLOBALS['strAdminFullName'] = "Nome completo do administrador";
$GLOBALS['strAdminEmail'] = "E-mail do admin.";
$GLOBALS['strAdministratorEmail'] = "E-mail do administrador";
$GLOBALS['strCompanyName'] = "Nome da empresa";
$GLOBALS['strUserlogEmail'] = "Registrar todos e-mail enviados";
$GLOBALS['strTimezone'] = "Fuso horário";
$GLOBALS['strTimezoneEstimated'] = "Fuso horário estimado";
$GLOBALS['strTimezoneGuessedValue'] = "Fuso horário do servidor incorretamente configurado no PHP";
$GLOBALS['strTimezoneSeeDocs'] = "Pro favor verifique a %DOCS% sobre como configurar esta variável no PHP";
$GLOBALS['strTimezoneDocumentation'] = "documentação";
$GLOBALS['strLoginSettingsTitle'] = "Login do Administrador";
$GLOBALS['strLoginSettingsIntro'] = "Para continuar o processo de atualização, por favor digite o nome de usuário do administrador do ". MAX_PRODUCT_NAME .". Você logar como administrador para continuar a atualização.";
$GLOBALS['strAdminSettingsTitle'] = "Crie uma conta Administrativa";
$GLOBALS['strAdminSettingsIntro'] = "Por favor preencha este formulário para criar a conta administrativa de seu servidor de anúncios.";
$GLOBALS['strConfigSettingsIntro'] = "Por favor verifique as configurações abaixo e faça qualquer alteração necessária antes de prosseguir. Se não tiver certeza, deixe os valores padrões.";
$GLOBALS['strEnableAutoMaintenance'] = "Executar a manutenção automaticamente durante a entrega de anúncios se a manutenção não estiver agendada";
$GLOBALS['strOpenadsUsername'] = "Nome de usuário do ". MAX_PRODUCT_NAME ."";
$GLOBALS['strOpenadsPassword'] = "Senha do ". MAX_PRODUCT_NAME ."";
$GLOBALS['strDatabaseServer'] = "Configurações globais do servidor de base de dados";
$GLOBALS['strDbType'] = "Tipo de banco";
$GLOBALS['strDbHost'] = "Endereço do banco";
$GLOBALS['strDbPort'] = "Porta do banco";
$GLOBALS['strDbUser'] = "Nome de usuário do banco";
$GLOBALS['strDbPassword'] = "Senha do banco";
$GLOBALS['strDbName'] = "Nome da base";
$GLOBALS['strDatabaseOptimalisations'] = "Configurações de otimização de banco de dados";
$GLOBALS['strPersistentConnections'] = "Usar conexões persistentes";
$GLOBALS['strCantConnectToDb'] = "Impossível conectar à base de dados";
$GLOBALS['strDemoDataInstall'] = "Inserir dados de demonstração";
$GLOBALS['strDemoDataIntro'] = "Dados padronizados pode ser inseridos no ". MAX_PRODUCT_NAME ." para ajudá-lo a iniciar a entrega de anúncios online. Os tipos de banners mais comuns, além de campanhas iniciais podem ser carregadas e pré-configuradas. Isso é altamente recomendado para instalações novas.";
$GLOBALS['strDebug'] = "Configurações de log de debug";
$GLOBALS['strProduction'] = "Servidor de produção";
$GLOBALS['strEnableDebug'] = "Habilitar registro de debug";
$GLOBALS['strDebugMethodNames'] = "Incluir nome de métodos no log de debug";
$GLOBALS['strDebugLineNumbers'] = "Incluir número da linha no log de debug";
$GLOBALS['strDebugType'] = "Tipo de log de debug";
$GLOBALS['strDebugTypeFile'] = "Arquivo";
$GLOBALS['strDebugTypeMcal'] = "mCal";
$GLOBALS['strDebugTypeSql'] = "Base de dados SQL";
$GLOBALS['strDebugTypeSyslog'] = "Syslog";
$GLOBALS['strDebugName'] = "Nome do log, Calendário, Tabela SQL,<br /> ou SysLog";
$GLOBALS['strDebugPriority'] = "Nível de prioridade do debug";
$GLOBALS['strPEAR_LOG_DEBUG'] = "PEAR_LOG_DEBUG - Mais Informação";
$GLOBALS['strPEAR_LOG_INFO'] = "PEAR_LOG_INFO - Informação padrão";
$GLOBALS['strPEAR_LOG_NOTICE'] = "PEAR_LOG_NOTICE";
$GLOBALS['strPEAR_LOG_WARNING'] = "PEAR_LOG_WARNING";
$GLOBALS['strPEAR_LOG_ERR'] = "PEAR_LOG_ERR";
$GLOBALS['strPEAR_LOG_CRIT'] = "PEAR_LOG_CRIT";
$GLOBALS['strPEAR_LOG_ALERT'] = "PEAR_LOG_ALERT";
$GLOBALS['strPEAR_LOG_EMERG'] = "PEAR_LOG_EMERG - Menos informação";
$GLOBALS['strDebugIdent'] = "String de identificação de debug";
$GLOBALS['strDebugUsername'] = "Nome de usuário do mCal, SQL Server";
$GLOBALS['strDebugPassword'] = "Senha do mCal, SQL Server";
$GLOBALS['strDeliverySettings'] = "Configurações de entrega";
$GLOBALS['strWebPath'] = "Endereços de acesso do ". MAX_PRODUCT_NAME ."";
$GLOBALS['strWebPathSimple'] = "Caminho pela Web";
$GLOBALS['strDeliveryPath'] = "Caminho de entrega";
$GLOBALS['strImagePath'] = "Caminho de Imagens";
$GLOBALS['strDeliverySslPath'] = "Caminho de entrega SSL";
$GLOBALS['strImageSslPath'] = "Caminho de imagens SSL";
$GLOBALS['strImageStore'] = "Diretório de imagens";
$GLOBALS['strTypeWebSettings'] = "Configurações de armazenamento local de banners";
$GLOBALS['strTypeWebMode'] = "Forma de armazenamento";
$GLOBALS['strTypeWebModeLocal'] = "Diretório local";
$GLOBALS['strTypeWebDir'] = "Diretório local";
$GLOBALS['strTypeDirError'] = "O diretório local não possui permissão de escrita pelo servidor";
$GLOBALS['strTypeWebModeFtp'] = "Servidor de FTP externo";
$GLOBALS['strTypeFTPHost'] = "Endereço do FTP";
$GLOBALS['strTypeFTPDirectory'] = "Diretório do servidor";
$GLOBALS['strTypeFTPPassive'] = "Use FTP Passivo";
$GLOBALS['strTypeFTPErrorDir'] = "O Diretório não existe no Servidor de FTP";
$GLOBALS['strTypeFTPErrorConnect'] = "Impossível conectar ao servidor de FTP, o login ou senha estão incorretos";
$GLOBALS['strTypeFTPErrorHost'] = "O endereço do Servidor FTP está incorreto";
$GLOBALS['strDeliveryFilenames'] = "Nome de arquivos de entrega";
$GLOBALS['strDeliveryFilenamesAdClick'] = "Clique em anúncio";
$GLOBALS['strDeliveryFilenamesAdConversionVars'] = "Variáveis de conversão de anúncios";
$GLOBALS['strDeliveryFilenamesAdContent'] = "Conteúdo de anúncios";
$GLOBALS['strDeliveryFilenamesAdConversion'] = "Conversão de anúncios";
$GLOBALS['strDeliveryFilenamesAdConversionJS'] = "Conversão de anúncios (JavaScript)";
$GLOBALS['strDeliveryFilenamesAdFrame'] = "Frame de anúncios";
$GLOBALS['strDeliveryFilenamesAdImage'] = "Imagem do anúncio";
$GLOBALS['strDeliveryFilenamesAdJS'] = "Anúncio (Javascript)";
$GLOBALS['strDeliveryFilenamesAdLayer'] = "Layer de anúncio";
$GLOBALS['strDeliveryFilenamesAdLog'] = "Log de anúncio";
$GLOBALS['strDeliveryFilenamesAdPopup'] = "Popup de Anúncio";
$GLOBALS['strDeliveryFilenamesAdView'] = "Visualização de anúncio";
$GLOBALS['strDeliveryFilenamesXMLRPC'] = "Inclusão por XML RPC";
$GLOBALS['strDeliveryFilenamesLocal'] = "Inserção local";
$GLOBALS['strDeliveryFilenamesFrontController'] = "Ponto de entrada único (Front Controller)";
$GLOBALS['strDeliveryFilenamesFlash'] = "Inclusão em Flash (Pode ser URL completo)";
$GLOBALS['strDeliveryCaching'] = "Configurações de Cache de Entrega de Banners";
$GLOBALS['strDeliveryCacheLimit'] = "Tempo entre atualizações do Cache de Banners(segundos)";
$GLOBALS['strOrigin'] = "Usar servidor remoto de origem";
$GLOBALS['strOriginType'] = "Tipo do servidor de Origem";
$GLOBALS['strOriginHost'] = "Endereço do servidor de origem";
$GLOBALS['strOriginPort'] = "Porta da base de dados de origem";
$GLOBALS['strOriginScript'] = "Arquivo de código da base de dados de origem";
$GLOBALS['strOriginTypeXMLRPC'] = "XMLRPC";
$GLOBALS['strOriginTimeout'] = "Timeout da origem (segundos)";
$GLOBALS['strOriginProtocol'] = "Protocolo do servidor de origem";
$GLOBALS['strDeliveryAcls'] = "Avaliar limitações de entrega de banners durante a entrega";
$GLOBALS['strDeliveryObfuscate'] = "Ofuscar canal quando entregando anúncios";
$GLOBALS['strDeliveryExecPhp'] = "Permitir a execução de códigos PHP nos anúncios<br />(Atenção: Risco de segurança)";
$GLOBALS['strDeliveryCtDelimiter'] = "Delimitador de rastreadores de cliques de terceiros";
$GLOBALS['strP3PSettings'] = "Políticas de Privacidade P3P";
$GLOBALS['strUseP3P'] = "Usar políticas P3P";
$GLOBALS['strP3PCompactPolicy'] = "Política P3P compacta";
$GLOBALS['strP3PPolicyLocation'] = "Localização da política P3P";
$GLOBALS['uiEnabled'] = "Interface do usuário habilitada";
$GLOBALS['strGeotargetingSettings'] = "Configurações de Direcionamento Geográfico (GeoTargeting)";
$GLOBALS['strGeotargeting'] = "Configurações de Direcionamento Geográfico (GeoTargeting)";
$GLOBALS['strGeotargetingType'] = "Tipo de módulo de direcionamento";
$GLOBALS['strGeotargetingGeoipCountryLocation'] = "Localização da base de dados de Países da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipRegionLocation'] = "Localização da base de dados de Regiões da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipCityLocation'] = "Localização da base de dados de Cidades da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipAreaLocation'] = "Localização da base de dados de Áreas da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipDmaLocation'] = "Localização da base de dados de DMA da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipOrgLocation'] = "Localização da base de dados de Organizações da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipIspLocation'] = "Localização da base de dados de Provedores de Internet da MaxMind GeoIP";
$GLOBALS['strGeotargetingGeoipNetspeedLocation'] = "Localização da base de dados de Netspeed da MaxMind GeoIP";
$GLOBALS['strGeoShowUnavailable'] = "Mostrar limitações de direcionamento geográfico mesmo se dados GeoIP não existirem";
$GLOBALS['strGeotrackingGeoipCountryLocationError'] = "A base de dados de Países da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipRegionLocationError'] = "A base de dados de Regiões da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipCityLocationError'] = "A base de dados de Cidades da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipAreaLocationError'] = "A base de dados de Áreas da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipDmaLocationError'] = "A base de dados de DMA da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipOrgLocationError'] = "A base de dados de Organizações da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipIspLocationError'] = "A base de dados de Provedores de Internet da MaxMind GeoIP não existe no local informado";
$GLOBALS['strGeotrackingGeoipNetspeedLocationError'] = "A base de dados de Netspeed da MaxMind GeoIP não existe no local informado";
$GLOBALS['strShowCampaignInfo'] = "Mostrar dados extras de campanhas na página de <i>Campanhas</i>";
$GLOBALS['strShowBannerInfo'] = "Mostrar dados extras de banners na página de <i>Banners</i>";
$GLOBALS['strShowCampaignPreview'] = "Mostrar pre-visualização de banners na página de <i>Banners</i>";
$GLOBALS['strShowBannerHTML'] = "Mostrar banner ao invés de código HTML na pré-visualização de banners HTML";
$GLOBALS['strShowBannerPreview'] = "Mostrar pré-visualização do banner em páginas que lidam com banners";
$GLOBALS['strGUIShowMatchingBanners'] = "Mostrar banners compatíveis na página de <i>Banners vinculados</i>";
$GLOBALS['strGUIShowParentCampaigns'] = "Mostrar campanhas superiores na página de <i>Banners vinculados</i>";
$GLOBALS['strGUIAnonymousCampaignsByDefault'] = "Marcar campanhas como anônimas por padrão";
$GLOBALS['strBeginOfWeek'] = "Início da semana";
$GLOBALS['strPercentageDecimals'] = "Decimais de percentagens";
$GLOBALS['strWeightDefaults'] = "Peso padrão";
$GLOBALS['strDefaultBannerWeight'] = "Peso padrão de banners";
$GLOBALS['strDefaultCampaignWeight'] = "Peso padrão de campanhas";
$GLOBALS['strPublisherDefaults'] = "Definições padrão para o site";
$GLOBALS['strModesOfPayment'] = "Modos de pagamento";
$GLOBALS['strCurrencies'] = "Moeda";
$GLOBALS['strCategories'] = "Categorias";
$GLOBALS['strHelpFiles'] = "Arquivos de ajuda";
$GLOBALS['strDefaultApproved'] = "Caixa aprovada";
$GLOBALS['strAllowedInvocationTypes'] = "Tipos de inserção permitidos";
$GLOBALS['strEnable3rdPartyTrackingByDefault'] = "Habilitar por padrão o rastreamento de cliques de terceiros";
$GLOBALS['strCsvImport'] = "Permitir o upload de conversões offline";
$GLOBALS['strLogAdRequests'] = "Logar uma requisição a cada vez que um anúncio é requisitado";
$GLOBALS['strLogAdImpressions'] = "Logar uma impressão a cada vez que um anúncio é visualizado";
$GLOBALS['strLogAdClicks'] = "Logar um clique cada vez que um visualizador clique em um anúncio";
$GLOBALS['strLogTrackerImpressions'] = "Logar uma impressão de rastreador cada vez que um sinalizador de rastreador for visualizado";
$GLOBALS['strReverseLookup'] = "Realizar um lookup reverso de visualizadores quando não for fornecido o endereço (hostname)";
$GLOBALS['strProxyLookup'] = "Tentar determinar o endereço IP real de visualizadores atrás de servidores proxy";
$GLOBALS['strPreventLogging'] = "Bloquear configurações de Log estatístico de banners";
$GLOBALS['strIgnoreHosts'] = "Não armazenar estatísticas para visualizadores usando os seguintes IPs e Hostnames";
$GLOBALS['strBlockAdViews'] = "Não contar impressões se o visualizador ver o mesmo par de anúncio/zona dentro do tempo especificado (segundos)";
$GLOBALS['strBlockAdViewsError'] = "Valor do bloco de impressão de anúncio deve ser um inteiro não-negativo";
$GLOBALS['strBlockAdClicks'] = "Não contar cliques se o visualizador clicar o mesmo par de anúncio/zona dentro do tempo especificado (segundos)";
$GLOBALS['strBlockAdClicksError'] = "Valor do bloco de clique de anúncio deve ser um inteiro não-negativo";
$GLOBALS['strMaintenanceOI'] = "Intervalo de operações de manutenção (minutos)";
$GLOBALS['strMaintenanceOIError'] = "O Intervalo de operações de manutenção não é válido - veja a documentação para valores válidos";
$GLOBALS['strPrioritySettings'] = "Configurações de prioridade";
$GLOBALS['strPriorityInstantUpdate'] = "Atualizar prioridade de anúncios imediatamente após mudanças na interface";
$GLOBALS['strDefaultImpConWindow'] = "Tempo padrão para a conexão de uma impressão de anúncio (segundos)";
$GLOBALS['strDefaultImpConWindowError'] = "Se setado o tempo deve ser um inteiro positivo";
$GLOBALS['strDefaultCliConWindow'] = "Tempo padrão de conexão de clique (segundos)";
$GLOBALS['strDefaultCliConWindowError'] = "Se setado o tempo deve ser um inteiro positivo";
$GLOBALS['strWarnLimit'] = "Enviar um alerta quando o número de impressões restantes for menor que o número especificado";
$GLOBALS['strWarnLimitErr'] = "Limite para alerta deve ser um inteiro positivo";
$GLOBALS['strWarnLimitDays'] = "Enviar um alerta quando os dias restantes forem menor que o número especificado";
$GLOBALS['strWarnLimitDaysErr'] = "Limite para alerta de dias deve ser um inteiro positivo";
$GLOBALS['strWarnAdmin'] = "Enviar um alerta para o administrador quando uma campanha estiver quase expirada";
$GLOBALS['strWarnClient'] = "Enviar um alerta para o anunciante sempre que uma campanha estiver quase expirada";
$GLOBALS['strWarnAgency'] = "Enviar um alerta para a agência sempre que uma campanha estiver quase expirada";
$GLOBALS['strQmailPatch'] = "patch para qmail";
$GLOBALS['strGuiSettings'] = "Configurações da Interface de usuários";
$GLOBALS['strAppName'] = "Nome da aplicação";
$GLOBALS['strMyHeader'] = "Localização do arquivo de cabeçalho";
$GLOBALS['strMyHeaderError'] = "O arquivo de cabeçalho especificado não existe";
$GLOBALS['strMyFooter'] = "Localização do arquivo de rodapé";
$GLOBALS['strMyFooterError'] = "O arquivo de rodapé especificado não existe";
$GLOBALS['strDefaultTrackerStatus'] = "Estado padrão do rastreador";
$GLOBALS['strDefaultTrackerType'] = "Tipo padrão do rastreador";
$GLOBALS['strMyLogo'] = "Nome do arquivo da logomarca padrão";
$GLOBALS['strMyLogoError'] = "O arquivo de logomarca não existe no diretório admin/imagens";
$GLOBALS['strGuiHeaderForegroundColor'] = "Cor do primeiro plano no cabeçalho";
$GLOBALS['strGuiHeaderBackgroundColor'] = "Cor do fundo no cabeçalho";
$GLOBALS['strGuiActiveTabColor'] = "Cor da aba ativa";
$GLOBALS['strGuiHeaderTextColor'] = "Cor do texto no cabeçalho";
$GLOBALS['strColorError'] = "Por favor entre com cores em formato RGB, como '0066CC'";
$GLOBALS['strGzipContentCompression'] = "Usar compressão GZIP no conteúdo";
$GLOBALS['strClientInterface'] = "Interface do anunciante";
$GLOBALS['strReportsInterface'] = "Interface de relatórios";
$GLOBALS['strClientWelcomeEnabled'] = "Habilitar mensagem de boas vindas para anunciantes";
$GLOBALS['strClientWelcomeText'] = "Texto de boas vindas<br />(Tags HTML permitidas)";
$GLOBALS['strPublisherInterface'] = "Interface de Sites";
$GLOBALS['strPublisherAgreementEnabled'] = "Habilitar controle de login para sites que não aceitaram os Termos e Condições";
$GLOBALS['strPublisherAgreementText'] = "Texto de login (Tags HTML permitidas)";
$GLOBALS['strInstallNotSuccessful'] = "<b>a instalação do ". MAX_PRODUCT_NAME ." não foi concluída com sucesso</b><br /><br />Algumas porções do processo de instalação não foram concluídas.\n                                                É possível que estes problemas sejam temporários, neste caso você pode apenas clicar em <b>Prosseguir</b> e retornar para\n                                                o primeiro passo do processo de instalação. Se você desejar saber mais sobre o que a mensagem de erro abaixo significa, e como solucionar o problema, \n                                                por favor consulte a documentação fornecida.";
$GLOBALS['strAuditTrailSettings'] = "Configurações de Auditoria de percurso";
$GLOBALS['requireSSL'] = "Forçar acesso por SSL na interface de usuários";
$GLOBALS['sslPort'] = "Porta SSL usada pelo servidor";
$GLOBALS['strAllowEmail'] = "Permitir globalmente o envio de e-mails";
$GLOBALS['strEmailAddressName'] = "Empresa ou nome pessoal para usar na assinatura do e-mail";
$GLOBALS['strInvocationDefaults'] = "Padrões de inserção";
$GLOBALS['strDbLocal'] = "Usar conexão local por socket";
$GLOBALS['strDbSocket'] = "Socket do Bando de dados";
$GLOBALS['strEmailAddresses'] = "Endereço de remetente de E-mails";
$GLOBALS['strEmailFromName'] = "Nome do remetente de E-mails";
$GLOBALS['strEmailFromAddress'] = "Endereço do remetente do e-mail";
$GLOBALS['strEmailFromCompany'] = "Nome da Companhia de E-mails";
$GLOBALS['strIgnoreUserAgents'] = "<b>Não</b> registre estatísticas de clientes com qualquer uma das palavras abaixo em seu user-agent (um por linha)";
$GLOBALS['strEnforceUserAgents'] = "<b>Somente</b> registre estatísticas de clientes com qualquer uma das palavras abaixo em seu user-agent (um por linha)";
$GLOBALS['strConversionTracking'] = "Configurações de acompanhamento de Conversões";
$GLOBALS['strEnableConversionTracking'] = "Habilitar acompanhamento de Conversões";
$GLOBALS['strDbNameHint'] = "A base de dados será criada caso não exista";
$GLOBALS['strProductionSystem'] = "Sistema em Produção";
$GLOBALS['strTypeFTPErrorUpload'] = "Impossível realizar upload para o servidor FTP, verifique as permissões no diretório do Host";
$GLOBALS['strBannerLogging'] = "Configurações de Log estatístico de banners";
$GLOBALS['strBannerDelivery'] = "Configurações de Entrega de Banners";
$GLOBALS['strEnableDashboardSyncNotice'] = "Por favor habilite <a href='account-settings-update.php'>Verificar atualizações</a> se deseja usar o Painel de Controle.";
$GLOBALS['strDashboardSettings'] = "Configurações do Painel de Controle";
$GLOBALS['strErrorFixPermissionsRCommand'] = "<i>chmod -R a+w %s</i>";
$GLOBALS['strGlobalDefaultBannerUrl'] = "URL padrão de banners de imagem (Global)";
$GLOBALS['strCantConnectToDbDelivery'] = "Impossível conectar ao Banco de dados para entrega";
$GLOBALS['strDefaultConversionStatus'] = "Regras padrões de conversão";
$GLOBALS['strDefaultConversionType'] = "Regras padrões de conversão";
?>