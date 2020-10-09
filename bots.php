<?php

function useronline_get_bots() {
	$bots = array(
		'360Spider' => '360spider',
		'AddThis' => 'addthis',
		'Adsbot' => 'Adsbot',
		'AdScanner' => 'adscanner',
		'AHC' => 'AHC',
		'Ahrefs' => 'ahrefsbot',
		'Alex' => 'ia_archiver',
		'AllTheWeb' => 'fast-webcrawler',
		'Altavista' => 'scooter',
		'Amazon' => 'amazonaws.com',
		'Anders Pink' => 'anderspinkbot',
		'Apple' => 'applebot',
		'Archive.org' => 'archive.org_bot',
		'Ask Jeeves' => 'jeeves',
		'Aspiegel' => 'AspiegelBot',
		'Axios' => 'axios',
		'Baidu' => 'baidu',
		'Become.com' => 'become.com',
		'Bing' => 'bingbot',
		'Bing Preview' => 'bingpreview',
		'Blackboard' => 'Blackboard',
		'BLEXBot' => 'blexbot',
		'Bloglines' => 'bloglines',
		'Blog Search Engine' => 'blogsearch',
		'BUbiNG' => 'bubing',
		'Buck' => 'Buck',
		'CCBot' => 'ccbot',
		'CFNetwork' => 'cfnetwork',
		'CheckMarkNetwork' => 'CheckMarkNetwork',
		'Cliqzbot' => 'cliqzbot',
		'Coccoc' => 'coccocbot',
		'Crawl' => 'crawl',
		'Curl' => 'Curl',
		'Cyotek' => 'Cyotek',
		'Daum' => 'Daum',
		'Dispatch' => 'Dispatch',
		'DomainCrawler' => 'domaincrawler',
		'DotBot' => 'dotbot',
		'DuckDuckGo' => 'duckduckbot',
		'EveryoneSocialBot' => 'everyonesocialbot',
		'Exalead' => 'exabot',
		'Facebook' => 'facebook',
		'Facebook Preview' => 'facebookexternalhit',
		'faceBot' => 'facebot',
		'Feedfetcher' => 'Feedfetcher',
		'Findexa' => 'findexa',
		'Flipboard Preview' => 'FlipboardProxy',
		'Gais' => 'gaisbo',
		'Gigabot' => 'gigabot',
		'Gluten Free' => 'gluten free crawler',
		'Go-http-client' => 'Go-http-client',
		'Goforit' => 'GOFORITBOT',
		'Google' => 'google',
		'Grid' => 'gridbot',
		'GroupHigh' => 'grouphigh',
		'Heritrix' => 'heritrix',
		'IA Archiver' => 'ia_archiver',
		'Inktomi' => 'slurp@inktomi',
		'IPS Agent' => 'ips-agent',
		'James' => 'james bot',
		'Jobboerse' => 'Jobboerse',
		'KomodiaBot' => 'komodiabot',
		'Konqueror' => 'konqueror',
		'Lindex' => 'linkdexbot',
		'Linguee' => 'Linguee',
		'Linkfluence' => 'linkfluence',
		'Lycos' => 'lycos',
		'Maui' => 'mauibot',
		'Mediatoolkit' => 'mediatoolkitbot',
		'MegaIndex' => 'MegaIndex',
		'MetaFeedly' => 'MetaFeedly',
		'MetaURI' => 'metauri',
		'MJ12bot' => 'mj12bot',
		'MojeekBot' => 'mojeekBot',
		'Moreover' => 'moreover',
		'MSN' => 'msnbot',
		'NBot' => 'nbot',
		'Node-Fetch' => 'node-fetch',
		'oBot' => 'oBot',
		'NextLinks' => 'findlinks',
		'Panscient' => 'panscient.com',
		'PaperLiBot' => 'paperliBot',
		'PetalBot' => 'PetalBot',
		'PhantomJS' => 'phantomjs',
		'Picsearch' => 'picsearch',
		'Proximic' => 'proximic',
		'PubSub' => 'pubsub',
		'Radian6' => 'radian6',
		'RadioUserland' => 'userland',
		'RyteBot' => 'RyteBot',
		'Moz' => 'rogerbot',
		'Qwantify' => 'Qwantify',
		'Scoutjet' => 'Scoutjet',
		'Screaming Frog SEO Spider' => 'Screaming Frog SEO Spider',
		'SEOkicks' => 'seokicks-robot',
		'Semanticbot' => 'Semanticbot',
		'SemrushBot' => 'semrushbot',
		'SerendeputyBot' => 'serendeputybot',
		'Seznam' => 'seznam',
		'SirdataBot ' => 'SirdataBot ',
		'SiteExplorer' => 'siteexplorer',
		'Sixtrix' => 'SIXTRIX',
		'Slurp' => 'slurp',
		'SMTBot' => 'SMTBot',
		'Sogou' => 'Sogou',
		'OpenLinkProfiler.org' => 'spbot',
		'SurveyBot' => 'surveybot',
		'Syndic8' => 'syndic8',
		'Technorati' => 'technorati',
		'TelegramBot' => 'telegrambot',
		'Thither' => 'thither',
		'TraceMyFile' => 'tracemyfile',
		'Trendsmap' => 'trendsmap',
		'Turnitin.com' => 'turnitinbot',
		'The Tweeted Times' => 'tweetedtimes',
		'TweetmemeBot' => 'tweetmemeBot',
		'Twingly' => 'twingly',
		'Twitter' => 'twitterbot',
		'VoilaBot' => 'VoilaBot',
		'Wget' => 'wget',
		'WhatsApp' => 'whatsapp',
		'WhoisSource' => 'surveybot',
		'WiseNut' => 'zyborg',
		'Wotbox' => 'wotbox',
		'Xenu Link Sleuth' => 'xenu link sleuth',
		'XoviBot' => 'xoviBot',
		'Yahoo' => 'yahoo',
		'Yandex' => 'yandex',
		'YisouSpider' => 'yisouspider'
	);

	return apply_filters( 'useronline_bots', $bots );
}

