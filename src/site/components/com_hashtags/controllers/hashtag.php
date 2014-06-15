<?php

/** 
 * LICENSE: ##LICENSE##
 * 
 * @category   Anahita
 * @package    Com_Hashtag
 * @subpackage Controller
 * @author     Rastin Mehr <rastin@anahitapolis.com>
 * @copyright  2008 - 2014 rmdStudio Inc.
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link       http://www.GetAnahita.com
 */

/**
 * Hashtag Controller
 *
 * @category   Anahita
 * @package    Com_Hashtag
 * @subpackage Controller
 * @author     Rastin Mehr <rastin@anahitapolis.com>
 * @license    GNU GPLv3 <http://www.gnu.org/licenses/gpl-3.0.html>
 * @link       http://www.GetAnahita.com
 */
class ComHashtagsControllerHashtag extends ComBaseControllerService
{
	/**
     * Hides the menubar title
     * {@inheritdoc}
     */
	protected function _actionGet(KCommandContext $context)
	{	  
        $this->getToolbar('menubar')->setTitle(null);        
		return parent::_actionGet($context);
	}
}