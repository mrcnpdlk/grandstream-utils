<?php
/**
 * Grandstream-XMLApp
 *
 * Copyright (c) 2017 pudelek.org.pl
 *
 * @license MIT License (MIT)
 *
 * For the full copyright and license information, please view source file
 * that is bundled with this package in the file LICENSE
 *
 * @author  Marcin Pudełek <marcin@pudelek.org.pl>
 */

namespace mrcnpdlk\Grandstream\XMLApp\Helper;

/**
 * Class Rectangle
 *
 * @package mrcnpdlk\Grandstream\XMLApp\Helper
 */
class Rectangle
{
    /**
     * @var int
     */
    private $iWidth;
    /**
     * @var int
     */
    private $iHeight;

    /**
     * Rectangle constructor.
     *
     * @param int      $w
     * @param int|null $h
     */
    public function __construct(int $w, int $h = null)
    {
        $this->iWidth  = $w < 0 ? 0 : $w;
        $this->iHeight = $h < 0 ? 0 : ($h ?? $this->iWidth);
    }

    /**
     * @return int
     */
    public function getArea()
    {
        return $this->getHeight() * $this->getWidth();
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->iHeight;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->iWidth;
    }
}
