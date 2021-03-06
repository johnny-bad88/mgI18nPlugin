<?php
/*
 * This file is part of the mgWidgetsPlugin package.
 * (c) 2008 MenuGourmet 
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */


/**
 *
 *
 * @package    mgI18nPlugin
 * @author     Thomas Rabaix <thomas.rabaix@soleoweb.com>
 * @version    SVN: $Id$
 */
abstract class PluginmgI18nCatalogue extends BasemgI18nCatalogue
{

  public function __toString()
  {

    return $this->getName();
  }
  
  
  public function getLanguage()
  {
    
    return substr($this->getName(), strrpos($this->getName(), '.') + 1);
  }
}