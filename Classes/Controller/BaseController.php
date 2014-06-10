<?php
namespace Gjo\GjoBookslibrary\Controller;

use TYPO3\CMS\Extbase\Mvc\Controller\ActionController;

class BaseController extends ActionController
{
    public function storeRedirectConfig($requestArguments)
    {
        if (array_key_exists('redirectConfig', $requestArguments)) {
            $GLOBALS['TSFE']->fe_user->setKey('ses', 'redirectConfig', $requestArguments['redirectConfig']);
            $GLOBALS["TSFE"]->fe_user->storeSessionData();
        }
    }

    public function makeRedirect($action = NULL, $controller = NULL, $extension = NULL, $arguments = NULL, $pageUid = null)
    {
        $redirectConfig = $GLOBALS['TSFE']->fe_user->getKey('ses', 'redirectConfig');

        if ($redirectConfig) {

            $this->redirect(
                $redirectConfig['action'],
                $redirectConfig['controller'],
                $redirectConfig['extension'],
                $redirectConfig['arguments'],
                $redirectConfig['pageUid']
            );

        } elseif ($action !== NULL) {
            $this->redirect($action, $controller, $extension, $arguments, $pageUid);
        } else {
            $this->redirect("list");
        }
    }
}