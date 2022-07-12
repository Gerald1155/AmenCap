<?php
/**
 * @see https://github.com/artesaos/seotools
 */

return [
    'meta' => [
        /*
         * The default configurations to be used by the meta generator.
         */
        'defaults'       => [
            'title'        => "Amen Capital", // set false to total remove
            'titleBefore'  => "", // Put defaults.title before page title, like 'It's Over 9000! - Dashboard'
            'description'  => 'Amen Capital Fund I, LP (“Amen Capital”) invests in cryptocurrencies that are related to blockchain technologies, projects, or platforms with a robust utility and development schedule. The Fund employs a proactive investing strategy that combines both technical and fundamental analysis. The primary aim concentrates the portfolio in cryptocurrencies related to blockchain technologies, projects, or platforms that provide advanced solutions to various industry and economic problems. The portfolio comprises both established and emerging cryptocurrencies that address various industry and economic needs. The Fund may invest in both Bitcoin and alternative cryptocurrencies also known as “alt coins” ranging in market capitalization. Through the analysis of white papers published by the cryptocurrency developers, Amen Capital will focus on cryptocurrencies and other blockchain-related digital assets developed by reputable teams that exhibit clear practical applications and have a well-established development schedule, i.e., road map. Amen Capital will also analyze technical trends seeking to invest in cryptocurrencies with a bullish outlook. This approach limits the risk of bearish/downward or uncertain trends while maximizing profitability during extended upward trends. ', // set false to total remove
            'separator'    => ' - ',
            'keywords'     => ["Amen Capital","cryptocurrency","crypto","crypto analytics","crypto analysis","cryptocurrency company","hedge fund","cryptocurrency day trading","cryptocurrency definition","cryptocurrency fund","cryptocurrency for beginners","cryptocurrency hedge fund","cryptocurrency courses","cryptocurrency tutorial"],
            'canonical'    => 'current', // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'robots'       => 'all', // Set to 'all', 'none' or any combination of index/noindex and follow/nofollow
        ],
        /*
         * Webmaster tags are always added.
         */
        'webmaster_tags' => [
            'google'    => null,
            'bing'      => null,
            'alexa'     => null,
            'pinterest' => null,
            'yandex'    => null,
            'norton'    => null,
        ],

        'add_notranslate_class' => false,
    ],
    'opengraph' => [
        /*
         * The default configurations to be used by the opengraph generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set null for using Url::current(), set false to total remove
            'type'        => false,
            'site_name'   => false,
            'images'      => [],
        ],
    ],
    'twitter' => [
        /*
         * The default values to be used by the twitter cards generator.
         */
        'defaults' => [
            //'card'        => 'summary',
            //'site'        => '@LuizVinicius73',
        ],
    ],
    'json-ld' => [
        /*
         * The default configurations to be used by the json-ld generator.
         */
        'defaults' => [
            'title'       => 'Over 9000 Thousand!', // set false to total remove
            'description' => 'For those who helped create the Genki Dama', // set false to total remove
            'url'         => false, // Set to null or 'full' to use Url::full(), set to 'current' to use Url::current(), set false to total remove
            'type'        => 'WebPage',
            'images'      => [],
        ],
    ],
];
