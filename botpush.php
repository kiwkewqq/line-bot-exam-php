<?php



require "vendor/autoload.php";

$access_token = "O8fAN0RcTbEltLBlwwsC6iXg2xOeTvBiJHg9GdvKhI6mYzOUFd1GlmLnG/f2VEL58J+Lwwf7pg2Xu2hl/2FHlaPHccgs7zYAbtDXvcvOE5n/GO6JwHdqscJIdVHUSA/9sRVjAFhtlEHqh38LC+xQAQdB04t89/1O/w1cDnyilFU=";

$channelSecret = 'e8e6cfd72737e57b843bc76275d20fba';

$pushID = 'U32fb6b2d6ceb741f198896700348db1f';

$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $channelSecret]);

$textMessageBuilder = new \LINE\LINEBot\MessageBuilder\TextMessageBuilder('hello world');
$response = $bot->pushMessage($pushID, $textMessageBuilder);

echo $response->getHTTPStatus() . ' ' . $response->getRawBody();
