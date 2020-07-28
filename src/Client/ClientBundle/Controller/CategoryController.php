<?php

namespace Client\ClientBundle\Controller;

use Admin\AdminBundle\Entity\GameObjectCategory;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Gameobjectcategory controller.
 *
 * @Route("category")
 */
class CategoryController extends Controller
{
	/**
     * Finds and displays a gameObjectCategory.
     *
     * @Route("/{id}", name="category_show")
     * @Method("GET")
     */
    public function showAction(GameObjectCategory $category)
    {
        return $this->render('@ClientClient/Category/show.html.twig', array(
            'category' => $category
        ));
    }
}