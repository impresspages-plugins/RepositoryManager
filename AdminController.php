<?php
/**
 * @package   ImpressPages
 */


/**
 * Created by PhpStorm.
 * User: mangirdas
 * Date: 14.9.21
 * Time: 23.39
 */

namespace Plugin\RepositoryManager;

class AdminController
{
    public function index()
    {
        ipAddCss('assets/repositoryLayout.css');
        ipAddJs('assets/layout.js');
        $routeVariables = array(
            'aa' => 'RepositoryManager.repository',
            'disableAdminNavbar' => 1
        );

//        ipResponse()->setLayoutVariable('repositoryUrl', ipActionUrl($routeVariables));
//        ipResponse()->setLayout('Plugin/RepositoryManager/view/index.php');
////        ipSetLayout('view/index.php');
//        return 'a';
        ipResponse()->setLayoutVariable('removeAdminContentWrapper', true);
        return ipView('view/index.php', array('repositoryUrl' => ipActionUrl($routeVariables)));

    }

    public function repository()
    {
        ipAddJs('assets/repositoryManager.js');
        ipAddCss('assets/repositoryManager.css');
    }
}
