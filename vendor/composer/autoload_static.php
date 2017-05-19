<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit431c577481cdaa8de349f491dce5df6d
{
    public static $files = array (
        'c964ee0ededf28c96ebd9db5099ef910' => __DIR__ . '/..' . '/guzzlehttp/promises/src/functions_include.php',
        'a0edc8309cc5e1d60e3047b5df6b7052' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/functions_include.php',
        '37a3dc5111fe8f707ab4c132ef1dbc62' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/functions_include.php',
    );

    public static $prefixLengthsPsr4 = array (
        'S' => 
        array (
            'Stripe\\' => 7,
        ),
        'P' => 
        array (
            'Psr\\Http\\Message\\' => 17,
            'Pokemon\\' => 8,
        ),
        'G' => 
        array (
            'GuzzleHttp\\Psr7\\' => 16,
            'GuzzleHttp\\Promise\\' => 19,
            'GuzzleHttp\\' => 11,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Stripe\\' => 
        array (
            0 => __DIR__ . '/..' . '/stripe/stripe-php/lib',
        ),
        'Psr\\Http\\Message\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/http-message/src',
        ),
        'Pokemon\\' => 
        array (
            0 => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src',
        ),
        'GuzzleHttp\\Psr7\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/psr7/src',
        ),
        'GuzzleHttp\\Promise\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/promises/src',
        ),
        'GuzzleHttp\\' => 
        array (
            0 => __DIR__ . '/..' . '/guzzlehttp/guzzle/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'D' => 
        array (
            'Doctrine\\Common\\Inflector\\' => 
            array (
                0 => __DIR__ . '/..' . '/doctrine/inflector/lib',
            ),
        ),
    );

    public static $classMap = array (
        'App\\Controllers\\PagesController' => __DIR__ . '/../..' . '/controllers/PagesController.php',
        'App\\Controllers\\StoreController' => __DIR__ . '/../..' . '/controllers/StoreController.php',
        'App\\Controllers\\UsersController' => __DIR__ . '/../..' . '/controllers/UsersController.php',
        'App\\Core\\App' => __DIR__ . '/../..' . '/core/App.php',
        'App\\Core\\Config' => __DIR__ . '/../..' . '/core/Config.php',
        'App\\Core\\Request' => __DIR__ . '/../..' . '/core/Request.php',
        'App\\Core\\Router' => __DIR__ . '/../..' . '/core/Router.php',
        'CardTest' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/CardTest.php',
        'ComposerAutoloaderInit431c577481cdaa8de349f491dce5df6d' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInit431c577481cdaa8de349f491dce5df6d' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Connection' => __DIR__ . '/../..' . '/core/database/Connection.php',
        'Doctrine\\Common\\Inflector\\Inflector' => __DIR__ . '/..' . '/doctrine/inflector/lib/Doctrine/Common/Inflector/Inflector.php',
        'Doctrine\\Tests\\Common\\Inflector\\InflectorTest' => __DIR__ . '/..' . '/doctrine/inflector/tests/Doctrine/Tests/Common/Inflector/InflectorTest.php',
        'Doctrine\\Tests\\DoctrineTestCase' => __DIR__ . '/..' . '/doctrine/inflector/tests/Doctrine/Tests/DoctrineTestCase.php',
        'GuzzleHttp\\Client' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Client.php',
        'GuzzleHttp\\ClientInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/ClientInterface.php',
        'GuzzleHttp\\Cookie\\CookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJar.php',
        'GuzzleHttp\\Cookie\\CookieJarInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/CookieJarInterface.php',
        'GuzzleHttp\\Cookie\\FileCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/FileCookieJar.php',
        'GuzzleHttp\\Cookie\\SessionCookieJar' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SessionCookieJar.php',
        'GuzzleHttp\\Cookie\\SetCookie' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Cookie/SetCookie.php',
        'GuzzleHttp\\Exception\\BadResponseException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/BadResponseException.php',
        'GuzzleHttp\\Exception\\ClientException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ClientException.php',
        'GuzzleHttp\\Exception\\ConnectException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ConnectException.php',
        'GuzzleHttp\\Exception\\GuzzleException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/GuzzleException.php',
        'GuzzleHttp\\Exception\\RequestException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/RequestException.php',
        'GuzzleHttp\\Exception\\SeekException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/SeekException.php',
        'GuzzleHttp\\Exception\\ServerException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/ServerException.php',
        'GuzzleHttp\\Exception\\TooManyRedirectsException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TooManyRedirectsException.php',
        'GuzzleHttp\\Exception\\TransferException' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Exception/TransferException.php',
        'GuzzleHttp\\HandlerStack' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/HandlerStack.php',
        'GuzzleHttp\\Handler\\CurlFactory' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactory.php',
        'GuzzleHttp\\Handler\\CurlFactoryInterface' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlFactoryInterface.php',
        'GuzzleHttp\\Handler\\CurlHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlHandler.php',
        'GuzzleHttp\\Handler\\CurlMultiHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/CurlMultiHandler.php',
        'GuzzleHttp\\Handler\\EasyHandle' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/EasyHandle.php',
        'GuzzleHttp\\Handler\\MockHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/MockHandler.php',
        'GuzzleHttp\\Handler\\Proxy' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/Proxy.php',
        'GuzzleHttp\\Handler\\StreamHandler' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Handler/StreamHandler.php',
        'GuzzleHttp\\MessageFormatter' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/MessageFormatter.php',
        'GuzzleHttp\\Middleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Middleware.php',
        'GuzzleHttp\\Pool' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/Pool.php',
        'GuzzleHttp\\PrepareBodyMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/PrepareBodyMiddleware.php',
        'GuzzleHttp\\Promise\\AggregateException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/AggregateException.php',
        'GuzzleHttp\\Promise\\CancellationException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/CancellationException.php',
        'GuzzleHttp\\Promise\\Coroutine' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Coroutine.php',
        'GuzzleHttp\\Promise\\EachPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/EachPromise.php',
        'GuzzleHttp\\Promise\\FulfilledPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/FulfilledPromise.php',
        'GuzzleHttp\\Promise\\Promise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/Promise.php',
        'GuzzleHttp\\Promise\\PromiseInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromiseInterface.php',
        'GuzzleHttp\\Promise\\PromisorInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/PromisorInterface.php',
        'GuzzleHttp\\Promise\\RejectedPromise' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectedPromise.php',
        'GuzzleHttp\\Promise\\RejectionException' => __DIR__ . '/..' . '/guzzlehttp/promises/src/RejectionException.php',
        'GuzzleHttp\\Promise\\TaskQueue' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueue.php',
        'GuzzleHttp\\Promise\\TaskQueueInterface' => __DIR__ . '/..' . '/guzzlehttp/promises/src/TaskQueueInterface.php',
        'GuzzleHttp\\Psr7\\AppendStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/AppendStream.php',
        'GuzzleHttp\\Psr7\\BufferStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/BufferStream.php',
        'GuzzleHttp\\Psr7\\CachingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/CachingStream.php',
        'GuzzleHttp\\Psr7\\DroppingStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/DroppingStream.php',
        'GuzzleHttp\\Psr7\\FnStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/FnStream.php',
        'GuzzleHttp\\Psr7\\InflateStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/InflateStream.php',
        'GuzzleHttp\\Psr7\\LazyOpenStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LazyOpenStream.php',
        'GuzzleHttp\\Psr7\\LimitStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/LimitStream.php',
        'GuzzleHttp\\Psr7\\MessageTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MessageTrait.php',
        'GuzzleHttp\\Psr7\\MultipartStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/MultipartStream.php',
        'GuzzleHttp\\Psr7\\NoSeekStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/NoSeekStream.php',
        'GuzzleHttp\\Psr7\\PumpStream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/PumpStream.php',
        'GuzzleHttp\\Psr7\\Request' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Request.php',
        'GuzzleHttp\\Psr7\\Response' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Response.php',
        'GuzzleHttp\\Psr7\\ServerRequest' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/ServerRequest.php',
        'GuzzleHttp\\Psr7\\Stream' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Stream.php',
        'GuzzleHttp\\Psr7\\StreamDecoratorTrait' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamDecoratorTrait.php',
        'GuzzleHttp\\Psr7\\StreamWrapper' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/StreamWrapper.php',
        'GuzzleHttp\\Psr7\\UploadedFile' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UploadedFile.php',
        'GuzzleHttp\\Psr7\\Uri' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/Uri.php',
        'GuzzleHttp\\Psr7\\UriNormalizer' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriNormalizer.php',
        'GuzzleHttp\\Psr7\\UriResolver' => __DIR__ . '/..' . '/guzzlehttp/psr7/src/UriResolver.php',
        'GuzzleHttp\\RedirectMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RedirectMiddleware.php',
        'GuzzleHttp\\RequestOptions' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RequestOptions.php',
        'GuzzleHttp\\RetryMiddleware' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/RetryMiddleware.php',
        'GuzzleHttp\\TransferStats' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/TransferStats.php',
        'GuzzleHttp\\UriTemplate' => __DIR__ . '/..' . '/guzzlehttp/guzzle/src/UriTemplate.php',
        'Lead' => __DIR__ . '/../..' . '/Task.php',
        'Pokemon\\Models\\Ability' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Ability.php',
        'Pokemon\\Models\\AncientTrait' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/AncientTrait.php',
        'Pokemon\\Models\\Attack' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Attack.php',
        'Pokemon\\Models\\Card' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Card.php',
        'Pokemon\\Models\\Model' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Model.php',
        'Pokemon\\Models\\Resistance' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Resistance.php',
        'Pokemon\\Models\\Set' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Set.php',
        'Pokemon\\Models\\Weakness' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Models/Weakness.php',
        'Pokemon\\Pokemon' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Pokemon.php',
        'Pokemon\\Resources\\Interfaces\\QueriableResourceInterface' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Resources/Interfaces/QueriableResourceInterface.php',
        'Pokemon\\Resources\\Interfaces\\ResourceInterface' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Resources/Interfaces/ResourceInterface.php',
        'Pokemon\\Resources\\JsonResource' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Resources/JsonResource.php',
        'Pokemon\\Resources\\QueriableResource' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/src/Resources/QueriableResource.php',
        'Psr\\Http\\Message\\MessageInterface' => __DIR__ . '/..' . '/psr/http-message/src/MessageInterface.php',
        'Psr\\Http\\Message\\RequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/RequestInterface.php',
        'Psr\\Http\\Message\\ResponseInterface' => __DIR__ . '/..' . '/psr/http-message/src/ResponseInterface.php',
        'Psr\\Http\\Message\\ServerRequestInterface' => __DIR__ . '/..' . '/psr/http-message/src/ServerRequestInterface.php',
        'Psr\\Http\\Message\\StreamInterface' => __DIR__ . '/..' . '/psr/http-message/src/StreamInterface.php',
        'Psr\\Http\\Message\\UploadedFileInterface' => __DIR__ . '/..' . '/psr/http-message/src/UploadedFileInterface.php',
        'Psr\\Http\\Message\\UriInterface' => __DIR__ . '/..' . '/psr/http-message/src/UriInterface.php',
        'QueryBuilder' => __DIR__ . '/../..' . '/core/database/QueryBuilder.php',
        'SetTest' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/SetTest.php',
        'Stripe\\Account' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Account.php',
        'Stripe\\AccountTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/AccountTest.php',
        'Stripe\\AlipayAccount' => __DIR__ . '/..' . '/stripe/stripe-php/lib/AlipayAccount.php',
        'Stripe\\ApiRequestor' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApiRequestor.php',
        'Stripe\\ApiRequestorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ApiRequestorTest.php',
        'Stripe\\ApiResource' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApiResource.php',
        'Stripe\\ApiResponse' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApiResponse.php',
        'Stripe\\ApplePayDomain' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApplePayDomain.php',
        'Stripe\\ApplePayDomainTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ApplePayDomainTest.php',
        'Stripe\\ApplicationFee' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApplicationFee.php',
        'Stripe\\ApplicationFeeRefund' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ApplicationFeeRefund.php',
        'Stripe\\ApplicationFeeRefundTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ApplicationFeeRefundTest.php',
        'Stripe\\ApplicationFeeTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ApplicationFeeTest.php',
        'Stripe\\AttachedObject' => __DIR__ . '/..' . '/stripe/stripe-php/lib/AttachedObject.php',
        'Stripe\\AuthenticationErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/AuthenticationErrorTest.php',
        'Stripe\\Balance' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Balance.php',
        'Stripe\\BalanceTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/BalanceTest.php',
        'Stripe\\BalanceTransaction' => __DIR__ . '/..' . '/stripe/stripe-php/lib/BalanceTransaction.php',
        'Stripe\\BalanceTransactionTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/BalanceTransactionTest.php',
        'Stripe\\BankAccount' => __DIR__ . '/..' . '/stripe/stripe-php/lib/BankAccount.php',
        'Stripe\\BankAccountTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/BankAccountTest.php',
        'Stripe\\BitcoinReceiver' => __DIR__ . '/..' . '/stripe/stripe-php/lib/BitcoinReceiver.php',
        'Stripe\\BitcoinReceiverTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/BitcoinReceiverTest.php',
        'Stripe\\BitcoinTransaction' => __DIR__ . '/..' . '/stripe/stripe-php/lib/BitcoinTransaction.php',
        'Stripe\\Card' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Card.php',
        'Stripe\\CardErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CardErrorTest.php',
        'Stripe\\Charge' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Charge.php',
        'Stripe\\ChargeTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ChargeTest.php',
        'Stripe\\Collection' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Collection.php',
        'Stripe\\CollectionTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CollectionTest.php',
        'Stripe\\CountrySpec' => __DIR__ . '/..' . '/stripe/stripe-php/lib/CountrySpec.php',
        'Stripe\\CountrySpecTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CountrySpecTest.php',
        'Stripe\\Coupon' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Coupon.php',
        'Stripe\\CouponTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CouponTest.php',
        'Stripe\\CurlClientTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CurlClientTest.php',
        'Stripe\\Customer' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Customer.php',
        'Stripe\\CustomerTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/CustomerTest.php',
        'Stripe\\DiscountTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/DiscountTest.php',
        'Stripe\\Dispute' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Dispute.php',
        'Stripe\\DisputeTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/DisputeTest.php',
        'Stripe\\ErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ErrorTest.php',
        'Stripe\\Error\\Api' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/Api.php',
        'Stripe\\Error\\ApiConnection' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/ApiConnection.php',
        'Stripe\\Error\\Authentication' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/Authentication.php',
        'Stripe\\Error\\Base' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/Base.php',
        'Stripe\\Error\\Card' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/Card.php',
        'Stripe\\Error\\InvalidRequest' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/InvalidRequest.php',
        'Stripe\\Error\\Permission' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/Permission.php',
        'Stripe\\Error\\RateLimit' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/RateLimit.php',
        'Stripe\\Error\\SignatureVerification' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Error/SignatureVerification.php',
        'Stripe\\Event' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Event.php',
        'Stripe\\ExternalAccount' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ExternalAccount.php',
        'Stripe\\ExternalAccountTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ExternalAccountTest.php',
        'Stripe\\FileUpload' => __DIR__ . '/..' . '/stripe/stripe-php/lib/FileUpload.php',
        'Stripe\\FileUploadTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/FileUploadTest.php',
        'Stripe\\HttpClient\\ClientInterface' => __DIR__ . '/..' . '/stripe/stripe-php/lib/HttpClient/ClientInterface.php',
        'Stripe\\HttpClient\\CurlClient' => __DIR__ . '/..' . '/stripe/stripe-php/lib/HttpClient/CurlClient.php',
        'Stripe\\InvalidRequestErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/InvalidRequestErrorTest.php',
        'Stripe\\Invoice' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Invoice.php',
        'Stripe\\InvoiceItem' => __DIR__ . '/..' . '/stripe/stripe-php/lib/InvoiceItem.php',
        'Stripe\\InvoiceTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/InvoiceTest.php',
        'Stripe\\JsonSerializable' => __DIR__ . '/..' . '/stripe/stripe-php/lib/JsonSerializable.php',
        'Stripe\\Order' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Order.php',
        'Stripe\\OrderReturn' => __DIR__ . '/..' . '/stripe/stripe-php/lib/OrderReturn.php',
        'Stripe\\Payout' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Payout.php',
        'Stripe\\PayoutTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/PayoutTest.php',
        'Stripe\\PermissionErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/PermissionsErrorTest.php',
        'Stripe\\Plan' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Plan.php',
        'Stripe\\PlanTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/PlanTest.php',
        'Stripe\\Product' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Product.php',
        'Stripe\\ProductSKUOrderTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ProductTest.php',
        'Stripe\\RateLimitErrorTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/RateLimitErrorTest.php',
        'Stripe\\Recipient' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Recipient.php',
        'Stripe\\RecipientTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/RecipientTest.php',
        'Stripe\\RecipientTransfer' => __DIR__ . '/..' . '/stripe/stripe-php/lib/RecipientTransfer.php',
        'Stripe\\Refund' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Refund.php',
        'Stripe\\RefundTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/RefundTest.php',
        'Stripe\\RequestOptionsTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/RequestOptionsTest.php',
        'Stripe\\SKU' => __DIR__ . '/..' . '/stripe/stripe-php/lib/SKU.php',
        'Stripe\\SingletonApiResource' => __DIR__ . '/..' . '/stripe/stripe-php/lib/SingletonApiResource.php',
        'Stripe\\Source' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Source.php',
        'Stripe\\SourceTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/SourceTest.php',
        'Stripe\\Stripe' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Stripe.php',
        'Stripe\\StripeObject' => __DIR__ . '/..' . '/stripe/stripe-php/lib/StripeObject.php',
        'Stripe\\StripeObjectTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/StripeObjectTest.php',
        'Stripe\\Subscription' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Subscription.php',
        'Stripe\\SubscriptionItem' => __DIR__ . '/..' . '/stripe/stripe-php/lib/SubscriptionItem.php',
        'Stripe\\SubscriptionItemTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/SubscriptionItemTest.php',
        'Stripe\\SubscriptionTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/SubscriptionTest.php',
        'Stripe\\TestCase' => __DIR__ . '/..' . '/stripe/stripe-php/tests/TestCase.php',
        'Stripe\\ThreeDSecure' => __DIR__ . '/..' . '/stripe/stripe-php/lib/ThreeDSecure.php',
        'Stripe\\ThreeDSecureTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/ThreeDSecureTest.php',
        'Stripe\\Token' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Token.php',
        'Stripe\\TokenTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/TokenTest.php',
        'Stripe\\Transfer' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Transfer.php',
        'Stripe\\TransferReversal' => __DIR__ . '/..' . '/stripe/stripe-php/lib/TransferReversal.php',
        'Stripe\\TransferReversalTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/TransferReversalTest.php',
        'Stripe\\TransferTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/TransferTest.php',
        'Stripe\\UtilTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/UtilTest.php',
        'Stripe\\Util\\AutoPagingIterator' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/AutoPagingIterator.php',
        'Stripe\\Util\\DefaultLogger' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/DefaultLogger.php',
        'Stripe\\Util\\LoggerInterface' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/LoggerInterface.php',
        'Stripe\\Util\\RequestOptions' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/RequestOptions.php',
        'Stripe\\Util\\Set' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/Set.php',
        'Stripe\\Util\\Util' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Util/Util.php',
        'Stripe\\Util\\UtilLoggerTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/UtilDefaultLoggerTest.php',
        'Stripe\\Webhook' => __DIR__ . '/..' . '/stripe/stripe-php/lib/Webhook.php',
        'Stripe\\WebhookSignature' => __DIR__ . '/..' . '/stripe/stripe-php/lib/WebhookSignature.php',
        'Stripe\\WebhookTest' => __DIR__ . '/..' . '/stripe/stripe-php/tests/WebhookTest.php',
        'SubtypeTest' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/SubtypeTest.php',
        'SupertypeTest' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/SupertypeTest.php',
        'TestCase' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/lib/TestCase.php',
        'TypeTest' => __DIR__ . '/..' . '/pokemon-tcg/pokemon-tcg-sdk-php/tests/TypeTest.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit431c577481cdaa8de349f491dce5df6d::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit431c577481cdaa8de349f491dce5df6d::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit431c577481cdaa8de349f491dce5df6d::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit431c577481cdaa8de349f491dce5df6d::$classMap;

        }, null, ClassLoader::class);
    }
}
