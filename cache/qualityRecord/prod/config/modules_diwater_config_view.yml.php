<?php
// auto-generated by sfViewConfigHandler
// date: 2015/12/03 11:01:54
$context  = $this->getContext();
$response = $context->getResponse();


  $templateName = $response->getParameter($this->moduleName.'_'.$this->actionName.'_template', $this->actionName, 'symfony/action/view');
  $this->setTemplate($templateName.$this->viewName.$this->getExtension());



  if (!$context->getRequest()->isXmlHttpRequest())
  {
    $this->setDecoratorTemplate('layout'.$this->getExtension());
  }
  $response->addHttpMeta('content-type', 'text/html', false);
  $response->addMeta('title', 'Singapore Quality Records :: Micronclean Singapore', false, false);
  $response->addMeta('robots', 'index, follow', false, false);
  $response->addMeta('description', 'Micronclean Singapore', false, false);
  $response->addMeta('keywords', 'micronclean, singapore', false, false);
  $response->addMeta('language', 'en', false, false);

  $response->addStylesheet('style', '', array ());
  $response->addJavascript('script');


