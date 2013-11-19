Bitcasa SDK for PHP 5.3+
===============

Bitcasa SDK for PHP, providing access to Bitcasa's REST API.

License: MIT

Requirements:
* PHP 5.3+
* pecl_http extension from PEAR

Setup
===============
Include the BitcasaClient.php file:
```
require_once('BitcasaClient.php');
```

Get A Bitcasa Developer API Key
===============
In order to access the API successfully, you need to first get an API key from Bitcasa.
* Go to: [https://developer.bitcasa.com/](https://developer.bitcasa.com/)
* Either sign up with your Bitcasa account, or log in with it
* Click "Console" on the top header, and "Create App" on the top right
* Save your Client ID and your Client Secret locally; you will use them in your code


Using The Bitcasa API
===============
In order to access a Bitcasa user's files, you'll need to do authorize your application with the user via our authentication exchange. Once completed, you'll gain an access token that you can utilize for API usage.

Example
===============
In the example folder is index.php and example.php. If you edit index.php to have your client id in the href of the link on the page, you'll be able to complete an authentication exchange flow and come back to example.php, which executes several API calls as examples.

Note that this expects a redirect variable of http://localhost/bc/example.php. Change that as well in order to fit your needs.

