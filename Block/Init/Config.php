<?php

namespace Iconocoders\OsanoCookieConsent\Block\Init;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Framework\Serialize\Serializer\Json;
use Magento\Framework\View\Element\Block\ArgumentInterface;

/**
 * Class reading system configuration for the cookie consent plugin
 * and transforming it into a format understood by the plugin.
 * @package CarlosReynosa\OsanoCookieConsent\Block\Init
 */
class Config implements ArgumentInterface
{
    protected $scopeConfig;
    protected $jsonSerializer;

    /**
     * Config constructor.
     * @param ScopeConfigInterface $scopeConfig
     * @param Json $jsonSerializer
     * TODO: Check jsonSerializer dependency
     */
    public function __construct(ScopeConfigInterface $scopeConfig, Json $jsonSerializer)
    {
        $this->scopeConfig = $scopeConfig;
        $this->jsonSerializer = $jsonSerializer;
    }

    /**
     * Return the plugin configuration.
     *
     * @return array js plugin inti configuration
     */
    public function getConfig()
    {
        return $this->scopeConfig->getValue('iconocoders')['osano_cookie_consent'];
    }

    /**
     * Return the plugin init configuration as json.
     *
     * @return bool|false|string
     */
    public function getConfigJson()
    {
        $initConfig = $this->systemConfigToInitConfig($this->getConfig());
        return $this->jsonSerializer->serialize($initConfig);
    }

    /**
     * Convert system config values into array structure that can be easily turned into the js plugin init configuration
     *
     * @param array $config Valid Osano Cooke Consent js plugin configuration for use with the init function.
     * @return array
     * @see https://www.osano.com/cookieconsent/documentation/javascript-api/
     */
    protected function systemConfigToInitConfig(array $config)
    {
        return [
            'palette' => [
                'popup' => [
                    'background' => $config['palette_popup_background']
                ],
                'button' => [
                    'background' => $config['palette_button_background']
                ]
            ],
            "content" => [
                "message" => $config['message'],
                "dismiss" => $config['dismiss'],
                "allow" => $config['allow'],
                "decline" => $config['decline'],
                "link" => $config['link'],
                "href" => $config['href'],
                "close" => $config['close'],
                "policy" => $config['policy'],
                "target" => $config['target']
            ]
        ];
    }
}
