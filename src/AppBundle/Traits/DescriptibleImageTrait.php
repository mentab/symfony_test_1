<?php

namespace AppBundle\Traits;

use Doctrine\ORM\Mapping as ORM;
use AppBundle\Traits\DescriptibleTextTrait;

trait DescriptibleImageTrait
{
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