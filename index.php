<?php
/**
 * J!Blank Template for Joomla by JBlank.pro (JBZoo.com)
 *
 * @package    JBlank
 * @author     SmetDenis <admin@jbzoo.com>
 * @copyright  Copyright (c) JBlank.pro
 * @license    http://www.gnu.org/licenses/gpl.html GNU/GPL
 * @link       http://jblank.pro/ JBlank project page
 */

defined('_JEXEC') or die;


// init $tpl helper
require dirname(__FILE__) . '/php/init.php';


?><?php echo $tpl->renderHTML(); ?>
<head>
    <jdoc:include type="head" />
</head>
<body class="<?php echo $tpl->getBodyClasses(); ?>">

    <!--[if lt IE 7]><p class="browsehappy">
        You are using an <strong>outdated</strong> browser. Please
        <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience. </p><![endif]-->


    <!--
        your HTML code here
    -->


    <?php if ($tpl->isMobile()) : ?>
        <!-- only for mobiles  -->
    <? endif; ?>

    <?php if ($tpl->isTablet()) : ?>
        <!-- only for tablets  -->
    <? endif; ?>

    <?php
    // test Joomla messages
    if (class_exists('JError')) { // it depricated
        JError::raiseNotice(0, 'Notice message example');
        JError::raiseWarning(0, 'Warning message example');
        //JError::raiseError(500, 'Fatal error message example');
    }
    ?>

    <!-- show modules and components -->
    <div class="component-wrapper">

        <!-- show Joomla messages -->
        <?php if ($tpl->isError()) : ?>
            <jdoc:include type="message" />
        <?php endif; ?>

        <jdoc:include type="modules" name="pre_component" />
        <jdoc:include type="component" />
        <jdoc:include type="modules" name="post_component" />
    </div>

    <!-- partial example -->
    <?php echo $tpl->partial('counters.php', array(
        'myVar' => 123
    ));?>

    <?php if ($tpl->isDebug()) : ?>
        <jdoc:include type="modules" name="debug" />
    <?php endif; ?>

</body></html>
