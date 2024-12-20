<?php
$router->map('GET|POST','/', 'app/home.php');
$router->map('GET|POST','/home/[a:lang]?/?', 'app/home.php');
$router->map('GET|POST','/dashboard/?', 'app/dashboard.php');

$router->map('GET|POST','/signup/?', 'global/signup.php');
$router->map('GET|POST','/login/?', 'global/login.php');
$router->map('GET|POST','/logout/?', 'global/logout.php');
$router->map('GET|POST','/message/?', 'global/message.php');
$router->map('GET|POST','/forgot/?', 'global/forgot.php');
$router->map('GET|POST','/transaction/?', 'global/transaction.php');
$router->map('GET|POST','/account-setting/?', 'global/account-setting.php');
$router->map('GET|POST','/report/?', 'global/report.php');
$router->map('GET|POST','/contact/?', 'global/contact.php');
$router->map('GET|POST','/sitemap/?', 'global/sitemap.php');
$router->map('GET|POST','/countries/?', 'global/countries.php');
$router->map('GET|POST','/faq/?', 'global/faq.php');
$router->map('GET|POST','/feedback/?', 'global/feedback.php');
$router->map('GET|POST','/advertise-here/?', 'global/advertise.php');
$router->map('GET|POST','/page/[*:id]?/?', 'global/html.php');
$router->map('GET|POST','/membership/[a:change_plan]?/?', 'global/membership.php');
$router->map('GET|POST','/ipn/[a:i]?/[*:id]?/?', 'global/ipn.php');
$router->map('GET|POST','/payment/[*:access_token]?/[a:status]?/[*:message]?/?', 'global/payment.php');
$router->map('GET|POST','/testimonials/?', 'global/testimonials.php');
$router->map('GET|POST','/blog/?', 'global/blog.php');
$router->map('GET|POST','/blog/category/[*:keyword]/?', 'global/blog-category.php');
$router->map('GET|POST','/blog/author/[*:keyword]/?', 'global/blog-author.php');
$router->map('GET|POST','/blog/[i:id]?/[*:slug]?/?', 'global/blog-single.php');
$router->map('GET|POST','/webhook/[*:i]?/?', 'global/webhook.php');
$router->map('GET|POST','/invoice/[i:id]?/?', 'global/invoice.php');
$router->map('GET','/sitemap.xml/?', 'global/xml.php');
$router->map('GET|POST','/imagecontent/?', 'global/imagecontent.php');
$router->map('GET|POST','/affiliate-program/?', 'global/affiliate-program.php');
$router->map('GET|POST','/withdrawals/?', 'global/withdrawals.php');
$router->map('GET','/manifest.json/?', 'global/manifest_json.php');
$router->map('GET|POST','/test/?', 'global/test.php');

$router->map('GET|POST','/ai-templates/?', 'app/ai-templates.php');
$router->map('GET|POST','/ai-templates/[*:slug]/?', 'app/ai-template-create.php');



$router->map('GET|POST','/ai-images/?', 'app/ai-images.php');
$router->map('GET|POST','/ai-data-extract/?', 'app/ai-data-extract.php');


$router->map('GET|POST','/all-images/?', 'app/all-images.php');
$router->map('GET|POST','/all-documents/?', 'app/all-documents.php');
$router->map('GET|POST','/all-documents/[*:id]/?', 'app/document.php');
$router->map('GET|POST','/ai-chat-bots/?', 'app/ai-chat-bots.php');
$router->map('GET|POST','/ai-chat/[*:id]?/?', 'app/ai-chat.php');
$router->map('GET|POST','/ai-speech-text/?', 'app/ai-speech-text.php');
$router->map('GET|POST','/ai-code/?', 'app/ai-code.php');
$router->map('GET|POST','/ai-text-speech/?', 'app/ai-text-speech.php');
$router->map('GET|POST','/all-speeches/?', 'app/all-speeches.php');