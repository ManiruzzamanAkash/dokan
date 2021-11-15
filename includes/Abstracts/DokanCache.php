<?php

namespace WeDevs\Dokan\Abstracts;

use WeDevs\Dokan\Abstracts\Traits\ObjectCache;
use WeDevs\Dokan\Abstracts\Traits\TransientCache;

/**
 * Dokan Cache class.
 *
 * Manage all of the caches of your WordPress plugin and handles it beautifully.
 *
 * @since 3.3.2
 *
 * @package WeDevs\Dokan\Abstracts\Cache
 */
abstract class DokanCache {

    use ObjectCache, TransientCache;

    /**
     * Get Cache Group Prefix.
     *
     * @since 3.3.2
     *
     * @return string
     */
    abstract protected static function get_cache_group_prefix();

    /**
     * Get Cache Key Prefix.
     *
     * @since 3.3.2
     *
     * @return string
     */
    abstract protected static function get_cache_prefix();

    /**
     * Add Cache Group Prefix to group.
     *
     * @since 3.3.2
     *
     * @param string $group
     *
     * @return string
     */
    private static function get_cache_group_with_prefix( $group ) {
        // Add prefix to group.
        return empty( $group ) ? '' : static::get_cache_group_prefix() . '_' . sanitize_key( $group );
    }
}
