<?php

namespace Admin\AdminBundle\Traits;

use Doctrine\ORM\Mapping as ORM;

trait DescriptibleImageTrait
{
	/**
	 * @var string
	 *
	 * @ORM\Column(name="icon_filename", type="string", length=255, nullable=true)
	 */
	private $iconFilename;

	/**
	 * @var string
	 *
	 * @ORM\Column(name="image_filename", type="string", length=255, nullable=true)
	 */
	private $imageFilename;

	/**
	 * Set iconFilename
	 *
	 * @param string $iconFilename
	 */
	public function setIconFilename($iconFilename)
	{
		$this->iconFilename = $iconFilename;

		return $this;
	}

	/**
	 * Get iconFilename
	 *
	 * @return string
	 */
	public function getIconFilename()
	{
		return $this->iconFilename;
	}

	/**
	 * Set imageFilename
	 *
	 * @param string $imageFilename
	 */
	public function setImageFilename($imageFilename)
	{
		$this->imageFilename = $imageFilename;

		return $this;
	}

	/**
	 * Get image
	 *
	 * @return string
	 */
	public function getImageFilename()
	{
		return $this->imageFilename;
	}
}