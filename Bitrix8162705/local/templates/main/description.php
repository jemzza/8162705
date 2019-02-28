<?php
/**
 * Created by PhpStorm.
 * User: allidemocracy
 * Date: 2019-02-28
 * Time: 20:07
 */
?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<?use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
$arTemplate = Array(
    "NAME" => Loc::getMessage("TEMPLATE_DESCRIPTION_NAME"), "DESCRIPTION" => Loc::getMessage("TEMPLATE_DESCRIPTION_DESC")
); ?>
