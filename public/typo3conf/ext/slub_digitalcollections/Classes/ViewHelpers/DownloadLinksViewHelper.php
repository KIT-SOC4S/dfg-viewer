<?php
namespace Slub\DigitalCollections\ViewHelpers;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2017 Alexander Bigga <alexander.bigga@slub-dresden.de>
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * ViewHelper to get page info
 *
 * # Example: Basic example
 * <code>
 * <si:pageInfo page="123">
 *	<span>123</span>
 * </code>
 * <output>
 * Will output the page record
 * </output>
 *
 * @package TYPO3
 */
class DownloadLinksViewHelper extends \TYPO3\CMS\Fluid\Core\ViewHelper\AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * Initialize arguments.
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('type', 'string', 'type of download ("page-left", "page-right" or "work")', false, 'page-left');
        $this->registerArgument('pagenumber', 'integer', 'current page number', false, 1);
    }

    /**
     * @param array $arguments
     * @param \Closure $renderChildrenClosure
     * @param RenderingContextInterface $renderingContext
     */
    public static function renderStatic(
        array $arguments,
        \Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $type = $arguments['type'];
        $pagenumber = $arguments['pagenumber'];

        $doc = GeneralUtility::makeInstance(\Slub\DigitalCollections\Helpers\GetDoc::class);

        switch ($type) {
          case 'page-right':
                    $result = $doc->getPageLink((int)$pagenumber + 1);
                    break;
          case 'work':
                    $result = $doc->getWorkLink((int)$pagenumber);
                    break;
          case 'page-left':
          default:
                    $result = $doc->getPageLink((int)$pagenumber);
                    break;
        }

        return $result;
    }
}
