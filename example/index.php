<? include_once("BitcasaClient.php"); ?>
<html><head><title>Test Login</title></head><body>
<h1>Bitcasa PHP SDK Login</h1>
<a href="<?= BitcasaClient::authorize('', 'http://localhost/bc/example.php'); ?>" > Login</a>
</body></html>
