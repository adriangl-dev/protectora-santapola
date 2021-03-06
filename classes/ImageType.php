<?php
/*
* 2007-2014 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Open Software License (OSL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/osl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author PrestaShop SA <contact@prestashop.com>
*  @copyright  2007-2014 PrestaShop SA
*  @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

class ImageTypeCore extends ObjectModel
{
	public $id;
	
	/** @var string Name */
	public $name;

	/** @var integer Width */
	public $width;

	/** @var integer Height */
	public $height;

	/** @var boolean Apply to products */
	public $products;

	/** @var integer Apply to categories */
	public $categories;

	/** @var integer Apply to manufacturers */
	public $manufacturers;

	/** @var integer Apply to suppliers */
	public $suppliers;

	/** @var integer Apply to scenes */
	public $scenes;

	/** @var integer Apply to store */
	public $stores;

	/**
	 * @see ObjectModel::$definition
	 */
	public static $definition = array(
		'table' => 'image_type',
		'primary' => 'id_image_type',
		'fields' => array(
			'name' => 			array('type' => self::TYPE_STRING, 'validate' => 'isImageTypeName', 'required' => true, 'size' => 64),
			'width' => 			array('type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => true),
			'height' => 		array('type' => self::TYPE_INT, 'validate' => 'isImageSize', 'required' => true),
			'categories' => 	array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'products' => 		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'manufacturers' => 	array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'suppliers' => 		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'scenes' => 		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
			'stores' => 		array('type' => self::TYPE_BOOL, 'validate' => 'isBool'),
		),
	);

	/**
	 * @var array Image types cache
	 */
	protected static $images_types_cache = array();
	
	protected static $images_types_name_cache = array();

	protected $webserviceParameters = array();

	/**
	* Returns image type definitions
	*
	* @param string|null Image type
	* @return array Image type definitions
	*/
	public static function getImagesTypes($type = null)
	{
		if (!isset(self::$images_types_cache[$type]))
		{
			$where = 'WHERE 1';
			if (!empty($type))
				$where .= ' AND `'.bqSQL($type).'` = 1 ';

			$query = 'SELECT * FROM `'._DB_PREFIX_.'image_type` '.$where.' ORDER BY `name` ASC';
			self::$images_types_cache[$type] = Db::getInstance()->executeS($query);
		}
		return self::$images_types_cache[$type];
	}

	/**
	* Check if type already is already registered in database
	*
	* @param string $typeName Name
	* @return integer Number of results found
	*/
	public static function typeAlreadyExists($typeName)
	{
		if (!Validate::isImageTypeName($typeName))
			die(Tools::displayError());

		Db::getInstance()->executeS('
			SELECT `id_image_type`
			FROM `'._DB_PREFIX_.'image_type`
			WHERE `name` = \''.pSQL($typeName).'\'');

		return Db::getInstance()->NumRows();
	}

	/**
	 * Finds image type definition by name and type
	 * @param string $name
	 * @param string $type
	 */
	public static function getByNameNType($name, $type = null, $order = null)
	{
		if (!isset(self::$images_types_name_cache[$name.'_'.$type.'_'.$order]))
		{
			self::$images_types_name_cache[$name.'_'.$type.'_'.$order] = Db::getInstance()->getRow('
				SELECT `id_image_type`, `name`, `width`, `height`, `products`, `categories`, `manufacturers`, `suppliers`, `scenes` 
				FROM `'._DB_PREFIX_.'image_type` 
				WHERE 
				`name` LIKE \''.pSQL($name).'\''
				.(!is_null($type) ? ' AND `'.pSQL($type).'` = 1' : '')
				.(!is_null($order) ? ' ORDER BY `'.bqSQL($order).'` ASC' : '')
			);
		}
		return self::$images_types_name_cache[$name.'_'.$type.'_'.$order];
	}
	
	public static function getFormatedName($name)
	{
		$theme_name = Context::getContext()->shop->theme_name;
		$name_without_theme_name = str_replace(array('_'.$theme_name, $theme_name.'_'), '', $name);

		//check if the theme name is already in $name if yes only return $name
		if (strstr($name, $theme_name) && self::getByNameNType($name))
			return $name;
		else if (self::getByNameNType($name_without_theme_name.'_'.$theme_name))
			return $name_without_theme_name.'_'.$theme_name;
		else if (self::getByNameNType($theme_name.'_'.$name_without_theme_name))
			return $theme_name.'_'.$name_without_theme_name;
		else
			return $name_without_theme_name.'_default';
	}
	
}
