<?php
/**
 * Extension class file.
 *
 * @author Maxim Zemskov <nodge@yandex.ru>
 * @link http://github.com/Nodge/yii2-eauth/
 * @license http://www.opensource.org/licenses/bsd-license.php
 */

namespace nodge\eauth;

use Yii;
use yii\base\BootstrapInterface;
use yii\base\Application;

/**
 * This is the bootstrap class for the yii2-eauth extension.
 */
class Extension implements BootstrapInterface {
    /**
     * @inheritdoc
     */
    public function bootstrap(Application $app) {
        $app->on(Application::EVENT_BEFORE_REQUEST, function() {
            Yii::setAlias('@eauth', __DIR__);
        });
    }
}
