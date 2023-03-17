<?php

// This file has been auto-generated by the Symfony Dependency Injection Component
// You can reference it in the "opcache.preload" php.ini setting on PHP >= 7.4 when preloading is desired

use Symfony\Component\DependencyInjection\Dumper\Preloader;

if (in_array(PHP_SAPI, ['cli', 'phpdbg'], true)) {
    return;
}

require dirname(__DIR__, 3).'/vendor/autoload.php';
(require __DIR__.'/App_KernelDevDebugContainer.php')->set(\ContainerIzDUqhX\App_KernelDevDebugContainer::class, null);
require __DIR__.'/ContainerIzDUqhX/EntityManager_9a5be93.php';
require __DIR__.'/ContainerIzDUqhX/getWebProfiler_Controller_RouterService.php';
require __DIR__.'/ContainerIzDUqhX/getWebProfiler_Controller_ProfilerService.php';
require __DIR__.'/ContainerIzDUqhX/getWebProfiler_Controller_ExceptionPanelService.php';
require __DIR__.'/ContainerIzDUqhX/getValidator_NotCompromisedPasswordService.php';
require __DIR__.'/ContainerIzDUqhX/getValidator_ExpressionService.php';
require __DIR__.'/ContainerIzDUqhX/getValidator_EmailService.php';
require __DIR__.'/ContainerIzDUqhX/getTwig_Runtime_SecurityCsrfService.php';
require __DIR__.'/ContainerIzDUqhX/getTwig_Runtime_HttpkernelService.php';
require __DIR__.'/ContainerIzDUqhX/getTwig_Mailer_MessageListenerService.php';
require __DIR__.'/ContainerIzDUqhX/getTwig_Form_RendererService.php';
require __DIR__.'/ContainerIzDUqhX/getTwig_Form_EngineService.php';
require __DIR__.'/ContainerIzDUqhX/getSession_FactoryService.php';
require __DIR__.'/ContainerIzDUqhX/getServicesResetterService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Validator_UserPasswordService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_UserPasswordHasherService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_User_Provider_Concrete_AppUserProviderService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_PasswordHasherFactoryService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Logout_Listener_Default_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Logout_Listener_CsrfTokenClearingService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_UserProviderService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_UserChecker_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_UserChecker_LoginService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_UserChecker_ApiService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_Session_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_PasswordMigratingService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_Main_UserProviderService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_CsrfProtectionService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Listener_CheckAuthenticatorCredentialsService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_HttpUtilsService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Firewall_Map_Context_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Firewall_Map_Context_LoginService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Firewall_Map_Context_DevService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Firewall_Map_Context_ApiService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_ExpressionLanguageService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_EventDispatcher_LoginService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_EventDispatcher_ApiService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Csrf_TokenStorageService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Csrf_TokenManagerService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_ChannelListenerService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Authenticator_Jwt_ApiService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Authenticator_JsonLogin_LoginService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_Authenticator_FormLogin_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_AuthenticationUtilsService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_AccessMapService.php';
require __DIR__.'/ContainerIzDUqhX/getSecurity_AccessListenerService.php';
require __DIR__.'/ContainerIzDUqhX/getSecrets_VaultService.php';
require __DIR__.'/ContainerIzDUqhX/getRouting_LoaderService.php';
require __DIR__.'/ContainerIzDUqhX/getPropertyAccessorService.php';
require __DIR__.'/ContainerIzDUqhX/getLexikJwtAuthentication_KeyLoaderService.php';
require __DIR__.'/ContainerIzDUqhX/getLexikJwtAuthentication_JwtManagerService.php';
require __DIR__.'/ContainerIzDUqhX/getLexikJwtAuthentication_EncoderService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_TwigExtension_SerializerRuntimeHelperService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_StopwatchSubscriberService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_SerializationContextFactoryService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_Metadata_TypedPropertiesDriverService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_IteratorHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_ExpressionEvaluatorService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_DoctrineProxySubscriberService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_DeserializationContextFactoryService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_DatetimeHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_ConstraintViolationHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializer_ArrayCollectionHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getJmsSerializerService.php';
require __DIR__.'/ContainerIzDUqhX/getFragment_Renderer_InlineService.php';
require __DIR__.'/ContainerIzDUqhX/getFragment_Renderer_HincludeService.php';
require __DIR__.'/ContainerIzDUqhX/getFosRest_ViewHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getFosRest_Serializer_FormErrorHandlerService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeGuesser_ValidatorService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeGuesser_DoctrineService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeExtension_Form_ValidatorService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeExtension_Form_HttpFoundationService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeExtension_Form_DataCollectorService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_TypeExtension_CsrfService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_Type_FormService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_Type_FileService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_Type_EntityService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_Type_ColorService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_Type_ChoiceService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_ServerParamsService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_RegistryService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_FactoryService.php';
require __DIR__.'/ContainerIzDUqhX/getForm_ChoiceListFactory_CachedService.php';
require __DIR__.'/ContainerIzDUqhX/getErrorHandler_ErrorRenderer_HtmlService.php';
require __DIR__.'/ContainerIzDUqhX/getErrorControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_UuidGeneratorService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_UlidGeneratorService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_Orm_Validator_UniqueService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_Orm_Listeners_DoctrineTokenProviderSchemaSubscriberService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_Orm_Listeners_DoctrineDbalCacheAdapterSchemaSubscriberService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php';
require __DIR__.'/ContainerIzDUqhX/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Voter_VoteListenerService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Voter_Security_Access_RoleHierarchyVoterService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Voter_Security_Access_ExpressionVoterService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Voter_Security_Access_AuthenticatedVoterService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_UserValueResolverService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Firewall_Authenticator_MainService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Firewall_Authenticator_LoginService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_Security_Firewall_Authenticator_ApiService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_FileLinkFormatter_UrlFormatService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_VariadicService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_SessionService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_ServiceService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_RequestAttributeService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_RequestService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_NotTaggedControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_DefaultService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_DatetimeService.php';
require __DIR__.'/ContainerIzDUqhX/getDebug_ArgumentResolver_BackedEnumResolverService.php';
require __DIR__.'/ContainerIzDUqhX/getDataCollector_Request_SessionCollectorService.php';
require __DIR__.'/ContainerIzDUqhX/getContainer_GetenvService.php';
require __DIR__.'/ContainerIzDUqhX/getContainer_GetRoutingConditionServiceService.php';
require __DIR__.'/ContainerIzDUqhX/getContainer_EnvVarProcessorsLocatorService.php';
require __DIR__.'/ContainerIzDUqhX/getContainer_EnvVarProcessorService.php';
require __DIR__.'/ContainerIzDUqhX/getCache_SystemClearerService.php';
require __DIR__.'/ContainerIzDUqhX/getCache_GlobalClearerService.php';
require __DIR__.'/ContainerIzDUqhX/getCache_AppClearerService.php';
require __DIR__.'/ContainerIzDUqhX/getTemplateControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getRedirectControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getProfilerControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getUserRepositoryService.php';
require __DIR__.'/ContainerIzDUqhX/getRegistrationFormTypeService.php';
require __DIR__.'/ContainerIzDUqhX/getRegistrationControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getMyControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getLoginControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getApiUserDashboardControllerService.php';
require __DIR__.'/ContainerIzDUqhX/getApiRegistrationControllerService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_ZFcJjKUService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_XUrKPVUService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_JIxfAsiService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_DQsEc8uService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_YU8H6veService.php';
require __DIR__.'/ContainerIzDUqhX/get_ServiceLocator_X2bD95Service.php';

$classes = [];
$classes[] = 'Symfony\Bundle\FrameworkBundle\FrameworkBundle';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DoctrineBundle';
$classes[] = 'Doctrine\Bundle\MigrationsBundle\DoctrineMigrationsBundle';
$classes[] = 'Symfony\Bundle\TwigBundle\TwigBundle';
$classes[] = 'Symfony\Bundle\MakerBundle\MakerBundle';
$classes[] = 'Symfony\Bundle\SecurityBundle\SecurityBundle';
$classes[] = 'SymfonyCasts\Bundle\VerifyEmail\SymfonyCastsVerifyEmailBundle';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\WebProfilerBundle';
$classes[] = 'FOS\RestBundle\FOSRestBundle';
$classes[] = 'JMS\SerializerBundle\JMSSerializerBundle';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\LexikJWTAuthenticationBundle';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\Profiler';
$classes[] = 'Symfony\Component\HttpKernel\Profiler\FileProfilerStorage';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\TimeDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector';
$classes[] = 'Symfony\Component\Validator\DataCollector\ValidatorDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\EventDataCollector';
$classes[] = 'Symfony\Component\Cache\DataCollector\CacheDataCollector';
$classes[] = 'Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector';
$classes[] = 'Symfony\Bridge\Twig\DataCollector\TwigDataCollector';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector';
$classes[] = 'Symfony\Component\Mailer\DataCollector\MessageDataCollector';
$classes[] = 'JMS\SerializerBundle\Debug\DataCollector';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector';
$classes[] = 'Symfony\Component\ExpressionLanguage\Expression';
$classes[] = 'Symfony\Component\HttpFoundation\RequestMatcher';
$classes[] = 'Symfony\Component\DependencyInjection\ServiceLocator';
$classes[] = 'App\Controller\ApiRegistrationController';
$classes[] = 'App\Controller\ApiUserDashboardController';
$classes[] = 'App\Controller\LoginController';
$classes[] = 'App\Controller\MyController';
$classes[] = 'App\Controller\RegistrationController';
$classes[] = 'App\Form\RegistrationFormType';
$classes[] = 'App\Repository\UserRepository';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\RedirectController';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\TemplateController';
$classes[] = 'Symfony\Component\Cache\Adapter\PhpArrayAdapter';
$classes[] = 'Doctrine\Common\Annotations\PsrCachedReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationReader';
$classes[] = 'Doctrine\Common\Annotations\AnnotationRegistry';
$classes[] = 'Symfony\Component\Cache\Adapter\TraceableAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\AdapterInterface';
$classes[] = 'Symfony\Component\Cache\Adapter\AbstractAdapter';
$classes[] = 'Symfony\Component\Cache\Adapter\FilesystemAdapter';
$classes[] = 'Symfony\Component\Cache\Marshaller\DefaultMarshaller';
$classes[] = 'Symfony\Component\HttpKernel\CacheClearer\Psr6CacheClearer';
$classes[] = 'Symfony\Component\Cache\Adapter\ArrayAdapter';
$classes[] = 'Symfony\Component\Config\Resource\SelfCheckingResourceChecker';
$classes[] = 'Symfony\Component\DependencyInjection\EnvVarProcessor';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataCollector';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\FormDataExtractor';
$classes[] = 'Symfony\Component\HttpKernel\DataCollector\RequestDataCollector';
$classes[] = 'Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\TraceableValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\BackedEnumValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DateTimeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\NotTaggedControllerValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\ServiceValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DebugHandlersListener';
$classes[] = 'Symfony\Component\HttpKernel\Debug\FileLinkFormatter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AccessDecisionManager';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Strategy\AffirmativeStrategy';
$classes[] = 'Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\Debug\TraceableAuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AuthenticatorManagerListener';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticatorManager';
$classes[] = 'Symfony\Component\Security\Http\Controller\UserValueResolver';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\TraceableVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\AuthenticatedVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\ExpressionVoter';
$classes[] = 'Symfony\Component\Security\Core\Authorization\Voter\RoleHierarchyVoter';
$classes[] = 'Symfony\Bundle\SecurityBundle\EventListener\VoteListener';
$classes[] = 'Symfony\Component\Stopwatch\Stopwatch';
$classes[] = 'Symfony\Component\Validator\Validator\TraceableValidator';
$classes[] = 'Symfony\Component\Validator\Validator\ValidatorInterface';
$classes[] = 'Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\DisallowRobotsIndexingListener';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Registry';
$classes[] = 'Doctrine\DBAL\Connection';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ConnectionFactory';
$classes[] = 'Doctrine\DBAL\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\DebugMiddleware';
$classes[] = 'Symfony\Bridge\Doctrine\ContainerAwareEventManager';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Middleware\BacktraceDebugDataHolder';
$classes[] = 'Doctrine\ORM\Mapping\Driver\AttributeDriver';
$classes[] = 'Doctrine\ORM\Proxy\Autoloader';
$classes[] = 'Doctrine\ORM\EntityManager';
$classes[] = 'Doctrine\ORM\Configuration';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\MappingDriver';
$classes[] = 'Doctrine\Persistence\Mapping\Driver\MappingDriverChain';
$classes[] = 'Doctrine\ORM\Mapping\UnderscoreNamingStrategy';
$classes[] = 'Doctrine\ORM\Mapping\DefaultQuoteStrategy';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Mapping\ContainerEntityListenerResolver';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Repository\ContainerRepositoryFactory';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\ManagerConfigurator';
$classes[] = 'Symfony\Bridge\Doctrine\PropertyInfo\DoctrineExtractor';
$classes[] = 'Doctrine\ORM\Tools\AttachEntityListenersListener';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\DoctrineDbalCacheAdapterSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\SchemaListener\RememberMeTokenProviderDoctrineSchemaSubscriber';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntityValidator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UlidGenerator';
$classes[] = 'Symfony\Bridge\Doctrine\IdGenerator\UuidGenerator';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ErrorController';
$classes[] = 'Symfony\Bridge\Twig\ErrorRenderer\TwigErrorRenderer';
$classes[] = 'Symfony\Component\ErrorHandler\ErrorRenderer\HtmlErrorRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher';
$classes[] = 'Symfony\Component\EventDispatcher\EventDispatcher';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ErrorListener';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\CachingFactoryDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\PropertyAccessDecorator';
$classes[] = 'Symfony\Component\Form\ChoiceList\Factory\DefaultChoiceListFactory';
$classes[] = 'Symfony\Component\Form\FormFactory';
$classes[] = 'Symfony\Component\Form\FormRegistry';
$classes[] = 'Symfony\Component\Form\Extension\DependencyInjection\DependencyInjectionExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Proxy\ResolvedTypeFactoryDataCollectorProxy';
$classes[] = 'Symfony\Component\Form\ResolvedFormTypeFactory';
$classes[] = 'Symfony\Component\Form\Util\ServerParams';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ChoiceType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\ColorType';
$classes[] = 'Symfony\Bridge\Doctrine\Form\Type\EntityType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FileType';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\FormType';
$classes[] = 'Symfony\Component\Form\Extension\Csrf\Type\FormTypeCsrfExtension';
$classes[] = 'Symfony\Component\Form\Extension\DataCollector\Type\DataCollectorTypeExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\Type\FormTypeHttpFoundationExtension';
$classes[] = 'Symfony\Component\Form\Extension\HttpFoundation\HttpFoundationRequestHandler';
$classes[] = 'Symfony\Component\Form\Extension\Core\Type\TransformationFailureExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\FormTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\RepeatedTypeValidatorExtension';
$classes[] = 'Symfony\Component\Form\Extension\Validator\Type\SubmitTypeValidatorExtension';
$classes[] = 'Symfony\Bridge\Doctrine\Form\DoctrineOrmTypeGuesser';
$classes[] = 'Symfony\Component\Form\Extension\Validator\ValidatorTypeGuesser';
$classes[] = 'FOS\RestBundle\EventListener\FormatListener';
$classes[] = 'FOS\RestBundle\Negotiation\FormatNegotiator';
$classes[] = 'FOS\RestBundle\Serializer\Normalizer\FormErrorHandler';
$classes[] = 'JMS\Serializer\Handler\FormErrorHandler';
$classes[] = 'FOS\RestBundle\View\ViewHandler';
$classes[] = 'FOS\RestBundle\Serializer\JMSSerializerAdapter';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\FragmentListener';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\HIncludeFragmentRenderer';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\InlineFragmentRenderer';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\HttpKernelRunner';
$classes[] = 'Symfony\Component\Runtime\Runner\Symfony\ResponseRunner';
$classes[] = 'Symfony\Component\Runtime\SymfonyRuntime';
$classes[] = 'Symfony\Component\HttpKernel\HttpKernel';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableControllerResolver';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\Controller\ArgumentResolver';
$classes[] = 'Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory';
$classes[] = 'JMS\Serializer\Serializer';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\DeserializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Construction\DoctrineObjectConstructor';
$classes[] = 'JMS\Serializer\Construction\UnserializeObjectConstructor';
$classes[] = 'JMS\Serializer\Accessor\DefaultAccessorStrategy';
$classes[] = 'JMS\Serializer\GraphNavigator\Factory\SerializationGraphNavigatorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlSerializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\JsonDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Visitor\Factory\XmlDeserializationVisitorFactory';
$classes[] = 'JMS\Serializer\Handler\ArrayCollectionHandler';
$classes[] = 'Symfony\Component\Security\Core\Authorization\AuthorizationChecker';
$classes[] = 'JMS\Serializer\Handler\ConstraintViolationHandler';
$classes[] = 'JMS\Serializer\Handler\DateHandler';
$classes[] = 'JMS\SerializerBundle\ContextFactory\ConfiguredContextFactory';
$classes[] = 'JMS\Serializer\EventDispatcher\Subscriber\DoctrineProxySubscriber';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableEventDispatcher';
$classes[] = 'JMS\Serializer\Expression\ExpressionEvaluator';
$classes[] = 'Symfony\Component\ExpressionLanguage\ExpressionLanguage';
$classes[] = 'JMS\SerializerBundle\ExpressionLanguage\BasicSerializerFunctionsProvider';
$classes[] = 'JMS\Serializer\Handler\IteratorHandler';
$classes[] = 'Metadata\Cache\FileCache';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableFileLocator';
$classes[] = 'Metadata\Driver\FileLocator';
$classes[] = 'JMS\Serializer\Metadata\Driver\TypedPropertiesDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\DoctrineTypeDriver';
$classes[] = 'Metadata\Driver\DriverChain';
$classes[] = 'JMS\Serializer\Metadata\Driver\YamlDriver';
$classes[] = 'JMS\Serializer\Naming\SerializedNameAnnotationStrategy';
$classes[] = 'JMS\Serializer\Naming\CamelCaseNamingStrategy';
$classes[] = 'JMS\Serializer\Metadata\Driver\XmlDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AnnotationDriver';
$classes[] = 'JMS\Serializer\Metadata\Driver\AttributeDriver\AttributeReader';
$classes[] = 'JMS\SerializerBundle\Serializer\StopwatchEventSubscriber';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableHandlerRegistry';
$classes[] = 'JMS\Serializer\Handler\LazyHandlerRegistry';
$classes[] = 'JMS\SerializerBundle\Debug\TraceableMetadataFactory';
$classes[] = 'Metadata\MetadataFactory';
$classes[] = 'Metadata\Driver\LazyLoadingDriver';
$classes[] = 'JMS\SerializerBundle\Debug\RunsListener';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeHelper';
$classes[] = 'JMS\Serializer\Type\Parser';
$classes[] = 'App\Kernel';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Encoder\LcobucciJWTEncoder';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWSProvider\LcobucciJWSProvider';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\JWTManager';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Services\KeyLoader\RawKeyLoader';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleAwareListener';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\LocaleListener';
$classes[] = 'Symfony\Component\HttpKernel\Log\Logger';
$classes[] = 'Symfony\Component\Mailer\EventListener\EnvelopeListener';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageLoggerListener';
$classes[] = 'Symfony\Component\DependencyInjection\ParameterBag\ContainerBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ProfilerListener';
$classes[] = 'Symfony\Component\PropertyAccess\PropertyAccessor';
$classes[] = 'Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor';
$classes[] = 'Symfony\Component\HttpFoundation\RequestStack';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ResponseListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\Router';
$classes[] = 'Symfony\Component\Config\ResourceCheckerConfigCacheFactory';
$classes[] = 'Symfony\Component\Routing\Matcher\ExpressionLanguageProvider';
$classes[] = 'Symfony\Component\Routing\RequestContext';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\RouterListener';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\DelegatingLoader';
$classes[] = 'Symfony\Component\Config\Loader\LoaderResolver';
$classes[] = 'Symfony\Component\Routing\Loader\XmlFileLoader';
$classes[] = 'Symfony\Component\HttpKernel\Config\FileLocator';
$classes[] = 'Symfony\Component\Routing\Loader\YamlFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\PhpFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\GlobFileLoader';
$classes[] = 'Symfony\Component\Routing\Loader\DirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\ContainerLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Routing\AnnotatedRouteControllerLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationDirectoryLoader';
$classes[] = 'Symfony\Component\Routing\Loader\AnnotationFileLoader';
$classes[] = 'Symfony\Bundle\FrameworkBundle\Secrets\SodiumVault';
$classes[] = 'Symfony\Component\String\LazyString';
$classes[] = 'Symfony\Component\Security\Http\Firewall\AccessListener';
$classes[] = 'Symfony\Component\Security\Http\AccessMap';
$classes[] = 'Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver';
$classes[] = 'Symfony\Component\Security\Http\Authentication\AuthenticationUtils';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\FormLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\DefaultAuthenticationFailureHandler';
$classes[] = 'Symfony\Component\Security\Http\Authenticator\JsonLoginAuthenticator';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationSuccessHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationSuccessHandler';
$classes[] = 'Symfony\Component\Security\Http\Authentication\CustomAuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Http\Authentication\AuthenticationFailureHandler';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\Security\Authenticator\JWTAuthenticator';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\ChainTokenExtractor';
$classes[] = 'Lexik\Bundle\JWTAuthenticationBundle\TokenExtractor\AuthorizationHeaderTokenExtractor';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ChannelListener';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ContextListener';
$classes[] = 'Symfony\Component\Security\Csrf\CsrfTokenManager';
$classes[] = 'Symfony\Component\Security\Csrf\TokenGenerator\UriSafeTokenGenerator';
$classes[] = 'Symfony\Component\Security\Csrf\TokenStorage\SessionTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authorization\ExpressionLanguage';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallMap';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\ExceptionListener';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\FirewallConfig';
$classes[] = 'Symfony\Bundle\SecurityBundle\Security\LazyFirewallContext';
$classes[] = 'Symfony\Component\Security\Http\Firewall\LogoutListener';
$classes[] = 'Symfony\Component\Security\Http\HttpUtils';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CheckCredentialsListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfProtectionListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserProviderListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\PasswordMigratingListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionStrategyListener';
$classes[] = 'Symfony\Component\Security\Http\Session\SessionAuthenticationStrategy';
$classes[] = 'Symfony\Component\Security\Http\EventListener\UserCheckerListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\CsrfTokenClearingLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\DefaultLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\EventListener\SessionLogoutListener';
$classes[] = 'Symfony\Component\Security\Http\Logout\LogoutUrlGenerator';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory';
$classes[] = 'Symfony\Component\Security\Core\Role\RoleHierarchy';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\UsageTrackingTokenStorage';
$classes[] = 'Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage';
$classes[] = 'Symfony\Bridge\Doctrine\Security\User\EntityUserProvider';
$classes[] = 'Symfony\Component\Security\Core\User\InMemoryUserChecker';
$classes[] = 'Symfony\Component\PasswordHasher\Hasher\UserPasswordHasher';
$classes[] = 'Symfony\Component\Security\Core\Validator\Constraints\UserPasswordValidator';
$classes[] = 'Symfony\Component\DependencyInjection\ContainerInterface';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter';
$classes[] = 'Symfony\Component\HttpFoundation\Session\SessionFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\NativeSessionStorageFactory';
$classes[] = 'Symfony\Component\HttpFoundation\Session\Storage\MetadataBag';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\SessionListener';
$classes[] = 'Symfony\Component\String\Slugger\AsciiSlugger';
$classes[] = 'Twig\Cache\FilesystemCache';
$classes[] = 'Twig\Extension\CoreExtension';
$classes[] = 'Twig\Extension\EscaperExtension';
$classes[] = 'Twig\Extension\OptimizerExtension';
$classes[] = 'Twig\Extension\StagingExtension';
$classes[] = 'Twig\ExtensionSet';
$classes[] = 'Twig\Template';
$classes[] = 'Twig\TemplateWrapper';
$classes[] = 'Twig\Environment';
$classes[] = 'Twig\Loader\FilesystemLoader';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ProfilerExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\TranslationExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\AssetExtension';
$classes[] = 'Symfony\Component\Asset\Packages';
$classes[] = 'Symfony\Component\Asset\PathPackage';
$classes[] = 'Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy';
$classes[] = 'Symfony\Component\Asset\Context\RequestStackContext';
$classes[] = 'Symfony\Bridge\Twig\Extension\CodeExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\RoutingExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\YamlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\StopwatchExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\ExpressionExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpFoundationExtension';
$classes[] = 'Symfony\Component\HttpFoundation\UrlHelper';
$classes[] = 'Symfony\Bridge\Twig\Extension\FormExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\LogoutUrlExtension';
$classes[] = 'Symfony\Bridge\Twig\Extension\SecurityExtension';
$classes[] = 'Symfony\Component\Security\Http\Impersonate\ImpersonateUrlGenerator';
$classes[] = 'Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension';
$classes[] = 'Twig\Extension\DebugExtension';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension';
$classes[] = 'Symfony\Component\VarDumper\Dumper\HtmlDumper';
$classes[] = 'JMS\Serializer\Twig\SerializerRuntimeExtension';
$classes[] = 'Symfony\Bridge\Twig\AppVariable';
$classes[] = 'Twig\RuntimeLoader\ContainerRuntimeLoader';
$classes[] = 'Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator';
$classes[] = 'Symfony\Bridge\Twig\Form\TwigRendererEngine';
$classes[] = 'Symfony\Component\Form\FormRenderer';
$classes[] = 'Symfony\Component\Mailer\EventListener\MessageListener';
$classes[] = 'Symfony\Bridge\Twig\Mime\BodyRenderer';
$classes[] = 'Twig\Profiler\Profile';
$classes[] = 'Symfony\Bridge\Twig\Extension\HttpKernelRuntime';
$classes[] = 'Symfony\Component\HttpKernel\DependencyInjection\LazyLoadingFragmentHandler';
$classes[] = 'Symfony\Component\HttpKernel\Fragment\FragmentUriGenerator';
$classes[] = 'Symfony\Bridge\Twig\Extension\CsrfRuntime';
$classes[] = 'Symfony\Component\HttpKernel\UriSigner';
$classes[] = 'Symfony\Component\HttpKernel\EventListener\ValidateRequestListener';
$classes[] = 'Symfony\Component\Validator\ValidatorBuilder';
$classes[] = 'Symfony\Component\Validator\Validation';
$classes[] = 'Symfony\Component\Validator\ContainerConstraintValidatorFactory';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineInitializer';
$classes[] = 'Symfony\Component\Validator\Mapping\Loader\PropertyInfoLoader';
$classes[] = 'Symfony\Component\PropertyInfo\PropertyInfoExtractor';
$classes[] = 'Symfony\Bridge\Doctrine\Validator\DoctrineLoader';
$classes[] = 'Symfony\Component\Validator\Constraints\EmailValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\ExpressionValidator';
$classes[] = 'Symfony\Component\Validator\Constraints\NotCompromisedPasswordValidator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ExceptionPanelController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\ProfilerController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Controller\RouterController';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator';
$classes[] = 'Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener';

$preloaded = Preloader::preload($classes);
