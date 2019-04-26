<?php declare(strict_types=1);


namespace Swoft\Rpc\Server;


use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Context\AbstractContext;

/**
 * Class ServiceCloseContext
 *
 * @since 2.0
 *
 * @Bean(scope=Bean::PROTOTYPE)
 */
class ServiceCloseContext extends ServiceConnectContext
{

}