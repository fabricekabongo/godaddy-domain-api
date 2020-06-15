<?php
namespace GoDaddy\Domain;

use GoDaddy\Domain\Api\Client;
use GoDaddy\Domain\Api\Authentication\ApiKeyAuthAuthentication;
use Http\Client\Common\Plugin\AddHostPlugin;
use Http\Client\Common\PluginClient;
use Http\Discovery\Psr17FactoryDiscovery;
use Http\Discovery\Psr18ClientDiscovery;
use Psr\Http\Client\ClientInterface;
use Jane\OpenApiRuntime\Client\Plugin\AuthenticationRegistry;

class ClientFactory
{

    public static function create(string $apiKey, string $apiSecret, string $url = 'https://api.godaddy.com', ClientInterface $httpClient = null): Client
    {
        if (null === $httpClient) {
            $httpClient = Psr18ClientDiscovery::find();
        }

        $authToken = sprintf('sso-key %s:%s', $apiKey, $apiSecret);

        $uri = Psr17FactoryDiscovery::findUrlFactory()->createUri($url);
        $pluginClient = new PluginClient($httpClient, [
            new AddHostPlugin($uri),
            new AuthenticationRegistry([
                new ApiKeyAuthAuthentication($authToken)
            ])
        ]);

        return Client::create($pluginClient);
    }
}