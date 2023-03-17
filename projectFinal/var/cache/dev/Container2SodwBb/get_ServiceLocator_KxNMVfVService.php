<?php

namespace Container2SodwBb;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class get_ServiceLocator_KxNMVfVService extends App_KernelDevDebugContainer
{
    /**
     * Gets the private '.service_locator.kxNMVfV' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    public static function do($container, $lazyLoad = true)
    {
        return $container->privates['.service_locator.kxNMVfV'] = new \Symfony\Component\DependencyInjection\Argument\ServiceLocator($container->getService, [
            'App\\Controller\\Admin\\BrandCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\BrandCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\BrandCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\BrandCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\BrandCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\BrandCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\BrandCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\BrandCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BrandCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BrandCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController::autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CarsCrudController::configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CarsCrudController::configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CarsCrudController::configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CarsCrudController::configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CarsCrudController::configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CarsCrudController::createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController::createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController::createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CarsCrudController::createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController::createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController::delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController::detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController::renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController::updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\CarsController::details' => ['privates', '.service_locator.LDa1AvT', 'get_ServiceLocator_LDa1AvTService', true],
            'App\\Controller\\CarsController::index' => ['privates', '.service_locator.tOz6.qC', 'get_ServiceLocator_TOz6_QCService', true],
            'App\\Controller\\ContactController::index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\RegistrationController::register' => ['privates', '.service_locator.TB2K.kG', 'get_ServiceLocator_TB2K_KGService', true],
            'App\\Controller\\ResetPasswordController::request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController::reset' => ['privates', '.service_locator.CRElsIS', 'get_ServiceLocator_CRElsISService', true],
            'App\\Controller\\SecurityController::login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'App\\Kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel::registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'App\\Controller\\Admin\\BrandCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\BrandCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\BrandCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\BrandCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\BrandCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\BrandCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\BrandCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\BrandCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\BrandCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BrandCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\BrandCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\BrandCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController:autocomplete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:batchDelete' => ['privates', '.service_locator.Olybskb', 'get_ServiceLocator_OlybskbService', true],
            'App\\Controller\\Admin\\CarsCrudController:configureActions' => ['privates', '.service_locator.CKlWSja', 'get_ServiceLocator_CKlWSjaService', true],
            'App\\Controller\\Admin\\CarsCrudController:configureAssets' => ['privates', '.service_locator.U4Bbnsn', 'get_ServiceLocator_U4BbnsnService', true],
            'App\\Controller\\Admin\\CarsCrudController:configureCrud' => ['privates', '.service_locator.4C0Bh8j', 'get_ServiceLocator_4C0Bh8jService', true],
            'App\\Controller\\Admin\\CarsCrudController:configureFilters' => ['privates', '.service_locator.Nt.ogDb', 'get_ServiceLocator_Nt_OgDbService', true],
            'App\\Controller\\Admin\\CarsCrudController:configureResponseParameters' => ['privates', '.service_locator.2dc0eaX', 'get_ServiceLocator_2dc0eaXService', true],
            'App\\Controller\\Admin\\CarsCrudController:createEditForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController:createEditFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController:createIndexQueryBuilder' => ['privates', '.service_locator.3on9uHL', 'get_ServiceLocator_3on9uHLService', true],
            'App\\Controller\\Admin\\CarsCrudController:createNewForm' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController:createNewFormBuilder' => ['privates', '.service_locator.bgO__Zr', 'get_ServiceLocator_BgOZrService', true],
            'App\\Controller\\Admin\\CarsCrudController:delete' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:deleteEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController:detail' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:edit' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:index' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:new' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:persistEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\CarsCrudController:renderFilters' => ['privates', '.service_locator.ZOQ9v2d', 'get_ServiceLocator_ZOQ9v2dService', true],
            'App\\Controller\\Admin\\CarsCrudController:updateEntity' => ['privates', '.service_locator.l2QwsaZ', 'get_ServiceLocator_L2QwsaZService', true],
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => ['privates', '.service_locator.q6hA_O0', 'get_ServiceLocator_Q6hAO0Service', true],
            'App\\Controller\\CarsController:details' => ['privates', '.service_locator.LDa1AvT', 'get_ServiceLocator_LDa1AvTService', true],
            'App\\Controller\\CarsController:index' => ['privates', '.service_locator.tOz6.qC', 'get_ServiceLocator_TOz6_QCService', true],
            'App\\Controller\\ContactController:index' => ['privates', '.service_locator.CpaXrFh', 'get_ServiceLocator_CpaXrFhService', true],
            'App\\Controller\\RegistrationController:register' => ['privates', '.service_locator.TB2K.kG', 'get_ServiceLocator_TB2K_KGService', true],
            'App\\Controller\\ResetPasswordController:request' => ['privates', '.service_locator.D4nGOut', 'get_ServiceLocator_D4nGOutService', true],
            'App\\Controller\\ResetPasswordController:reset' => ['privates', '.service_locator.CRElsIS', 'get_ServiceLocator_CRElsISService', true],
            'App\\Controller\\SecurityController:login' => ['privates', '.service_locator.UDgw6Ol', 'get_ServiceLocator_UDgw6OlService', true],
            'kernel:loadRoutes' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
            'kernel:registerContainerConfiguration' => ['privates', '.service_locator.KfbR3DY', 'get_ServiceLocator_KfbR3DYService', true],
        ], [
            'App\\Controller\\Admin\\BrandCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\BrandCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\BrandCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\BrandCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\BrandCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\BrandCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\BrandCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BrandCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\BrandCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\BrandCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController::delete' => '?',
            'App\\Controller\\Admin\\BrandCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\BrandCrudController::detail' => '?',
            'App\\Controller\\Admin\\BrandCrudController::edit' => '?',
            'App\\Controller\\Admin\\BrandCrudController::index' => '?',
            'App\\Controller\\Admin\\BrandCrudController::new' => '?',
            'App\\Controller\\Admin\\BrandCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\BrandCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\BrandCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController::autocomplete' => '?',
            'App\\Controller\\Admin\\CarsCrudController::batchDelete' => '?',
            'App\\Controller\\Admin\\CarsCrudController::configureActions' => '?',
            'App\\Controller\\Admin\\CarsCrudController::configureAssets' => '?',
            'App\\Controller\\Admin\\CarsCrudController::configureCrud' => '?',
            'App\\Controller\\Admin\\CarsCrudController::configureFilters' => '?',
            'App\\Controller\\Admin\\CarsCrudController::configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarsCrudController::createEditForm' => '?',
            'App\\Controller\\Admin\\CarsCrudController::createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController::createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController::createNewForm' => '?',
            'App\\Controller\\Admin\\CarsCrudController::createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController::delete' => '?',
            'App\\Controller\\Admin\\CarsCrudController::deleteEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController::detail' => '?',
            'App\\Controller\\Admin\\CarsCrudController::edit' => '?',
            'App\\Controller\\Admin\\CarsCrudController::index' => '?',
            'App\\Controller\\Admin\\CarsCrudController::new' => '?',
            'App\\Controller\\Admin\\CarsCrudController::persistEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController::renderFilters' => '?',
            'App\\Controller\\Admin\\CarsCrudController::updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController::configureUserMenu' => '?',
            'App\\Controller\\CarsController::details' => '?',
            'App\\Controller\\CarsController::index' => '?',
            'App\\Controller\\ContactController::index' => '?',
            'App\\Controller\\RegistrationController::register' => '?',
            'App\\Controller\\ResetPasswordController::request' => '?',
            'App\\Controller\\ResetPasswordController::reset' => '?',
            'App\\Controller\\SecurityController::login' => '?',
            'App\\Kernel::loadRoutes' => '?',
            'App\\Kernel::registerContainerConfiguration' => '?',
            'kernel::loadRoutes' => '?',
            'kernel::registerContainerConfiguration' => '?',
            'App\\Controller\\Admin\\BrandCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\BrandCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\BrandCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\BrandCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\BrandCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\BrandCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\BrandCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\BrandCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\BrandCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\BrandCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\BrandCrudController:delete' => '?',
            'App\\Controller\\Admin\\BrandCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\BrandCrudController:detail' => '?',
            'App\\Controller\\Admin\\BrandCrudController:edit' => '?',
            'App\\Controller\\Admin\\BrandCrudController:index' => '?',
            'App\\Controller\\Admin\\BrandCrudController:new' => '?',
            'App\\Controller\\Admin\\BrandCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\BrandCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\BrandCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController:autocomplete' => '?',
            'App\\Controller\\Admin\\CarsCrudController:batchDelete' => '?',
            'App\\Controller\\Admin\\CarsCrudController:configureActions' => '?',
            'App\\Controller\\Admin\\CarsCrudController:configureAssets' => '?',
            'App\\Controller\\Admin\\CarsCrudController:configureCrud' => '?',
            'App\\Controller\\Admin\\CarsCrudController:configureFilters' => '?',
            'App\\Controller\\Admin\\CarsCrudController:configureResponseParameters' => '?',
            'App\\Controller\\Admin\\CarsCrudController:createEditForm' => '?',
            'App\\Controller\\Admin\\CarsCrudController:createEditFormBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController:createIndexQueryBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController:createNewForm' => '?',
            'App\\Controller\\Admin\\CarsCrudController:createNewFormBuilder' => '?',
            'App\\Controller\\Admin\\CarsCrudController:delete' => '?',
            'App\\Controller\\Admin\\CarsCrudController:deleteEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController:detail' => '?',
            'App\\Controller\\Admin\\CarsCrudController:edit' => '?',
            'App\\Controller\\Admin\\CarsCrudController:index' => '?',
            'App\\Controller\\Admin\\CarsCrudController:new' => '?',
            'App\\Controller\\Admin\\CarsCrudController:persistEntity' => '?',
            'App\\Controller\\Admin\\CarsCrudController:renderFilters' => '?',
            'App\\Controller\\Admin\\CarsCrudController:updateEntity' => '?',
            'App\\Controller\\Admin\\DashboardController:configureUserMenu' => '?',
            'App\\Controller\\CarsController:details' => '?',
            'App\\Controller\\CarsController:index' => '?',
            'App\\Controller\\ContactController:index' => '?',
            'App\\Controller\\RegistrationController:register' => '?',
            'App\\Controller\\ResetPasswordController:request' => '?',
            'App\\Controller\\ResetPasswordController:reset' => '?',
            'App\\Controller\\SecurityController:login' => '?',
            'kernel:loadRoutes' => '?',
            'kernel:registerContainerConfiguration' => '?',
        ]);
    }
}
