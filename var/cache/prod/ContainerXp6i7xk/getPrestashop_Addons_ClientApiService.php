<?php

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.
// Returns the public 'prestashop.addons.client_api' shared service.

$this->services['prestashop.addons.client_api'] = $instance = new \PrestaShopBundle\Service\DataProvider\Marketplace\ApiClient(${($_ = isset($this->services['csa_guzzle.client.addons_api']) ? $this->services['csa_guzzle.client.addons_api'] : $this->load('getCsaGuzzle_Client_AddonsApiService.php')) && false ?: '_'}, ${($_ = isset($this->services['translator.default']) ? $this->services['translator.default'] : $this->getTranslator_DefaultService()) && false ?: '_'}->getLocale(), ${($_ = isset($this->services['prestashop.adapter.data_provider.country']) ? $this->services['prestashop.adapter.data_provider.country'] : $this->services['prestashop.adapter.data_provider.country'] = new \PrestaShop\PrestaShop\Adapter\Country\CountryDataProvider()) && false ?: '_'}->getIsoCodebyId(), ${($_ = isset($this->services['prestashop.adapter.tools']) ? $this->services['prestashop.adapter.tools'] : $this->services['prestashop.adapter.tools'] = new \PrestaShop\PrestaShop\Adapter\Tools()) && false ?: '_'}, ${($_ = isset($this->services['prestashop.adapter.legacy.configuration']) ? $this->services['prestashop.adapter.legacy.configuration'] : $this->services['prestashop.adapter.legacy.configuration'] = new \PrestaShop\PrestaShop\Adapter\Configuration()) && false ?: '_'}->get("_PS_BASE_URL_"));

$instance->setSslVerification(($this->targetDirs[0].'/cacert.pem'));

return $instance;
