# GoDaddy Domain API client

This is a library to access GoDaddy's domain registration/management API via PHP.  This library uses the published Swagger file to auto-generate the client using the Jane libraries from [https://github.com/janephp/janephp](https://github.com/janephp/janephp)

```
use GoDaddy\Domain\ClientFactory;

$apiKey = 'ABCD';
$apiSecret = '1234';

$client = ClientFactory::create($apiKey, $apiSecret);

$domains = $client->listDomains();
dump($domains);
```