<?php

namespace AppBundle\Menu;

use Knp\Menu\ItemInterface;
use Knp\Menu\MenuFactory;
use Knp\Menu\MenuItem;

class Builder
{
    /**
     * @param MenuFactory $factory
     * @param array       $options
     *
     * @return ItemInterface|MenuItem
     */
    public function mainMenu(MenuFactory $factory, array $options) {
        $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        $menu->addChild('Home', ['route' => 'homepage']);
        $menu->addChild('Login', ['route' => 'login']);
        return $menu;
    }
}