<?php

/**
 *
 * @package yii2-simple-loading
 * @author Javier Cabanillas <jcabanillas@rubiko.mx>
 * @copyright Copyright &copy; Javier Cabanillas, 2021
 * @version 1.0.1
 */

namespace jcabanillas\simpleloading;

use yii\base\Widget;

/**
 * SimpleLoading widget.
 *
 * @see https://github.com/jcabanillas/yii2-simple-loading
 * @since 1.0.0
 */
class SimpleLoading extends Widget
{
    /**
     *
     * {@inheritDoc}
     * @see \yii\base\Widget::run()
     */
    public function run()
    {
        $this->registerClientScript();
        return "";
    }

    /**
     * Registers the required JavaScript.
     */
    public function registerClientScript()
    {
        $view = $this->getView();
        SimpleLoadingAsset::register($view);
    }
}