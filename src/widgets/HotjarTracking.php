<?php
/**
 * @link https://github.com/thiagotalma/yii2-hotjar
 * @copyright Copyright (c) 2015 LLC CyberCog
 * @license http://opensource.org/licenses/BSD-3-Clause
 */
namespace talma\hotjar\widgets;

use yii\base\Widget;

/**
 * Class HotjarTracking
 * @package talma\hotjar\widgets
 * @author Thiago Talma <thiago@thiagomt.com>
 */
class HotjarTracking extends Widget
{
    
    /**
     * Render <script></script> 
     * @var bool
     */
    public $omitScriptTag = false;
    
    /**
     * The Hotjar Tracking ID
     * @var string
     */
    public $trackingId = null;

    /**
     * @var array
     */
    private $_viewParams;

    public function init()
    {
        parent::init();

        $this->_viewParams = [
            'omitScriptTag' => $this->omitScriptTag,
            'trackingId' => $this->trackingId,
        ];
    }

    public function run()
    {
        echo $this->render('tracking', $this->_viewParams);
    }
}
