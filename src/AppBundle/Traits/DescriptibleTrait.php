<?php

namespace AppBundle\Traits;

use Doctrine\ORM\Mapping as ORM;

trait DescriptibleTrait
{
	/**
	 * @var string
	 *
	 * @ORM\Column(name="name", type="string", length=255)
	 */
	private $name;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="description", type="string", length=255)
	 */
	private $description;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="icon", type="string", length=255)
	 */
	private $icon;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="image", type="string", length=255)
	 */
	private $image;

	 /**
	 * Set name
	 *
	 * @param string $name
	 */
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	/**
	 * Get name
	 *
	 * @return string
	 */
	public function getName()
	{
		return $this->name;
	}

	/**
	 * Set description
	 *
	 * @param string $description
	 */
	public function setDescription($description)
	{
		$this->description = $description;

		return $this;
	}

	/**
	 * Get description
	 *
	 * @return string
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * Set icon
	 *
	 * @param string $icon
	 */
	public function setIcon($icon)
	{
		$this->icon = $icon;

		return $this;
	}

	/**
	 * Get icon
	 *
	 * @return string
	 */
	public function getIcon()
	{
		return $this->icon;
	}

	/**
	 * Set image
	 *
	 * @param string $image
	 */
	public function setImage($image)
	{
		$this->image = $image;

		return $this;
	}

	/**
	 * Get image
	 *
	 * @return string
	 */
	public function getImage()
	{
		return $this->image;
	}
}