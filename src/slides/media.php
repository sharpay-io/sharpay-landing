<?php

$mediaList = [
  [
    'url' => '#',
    'image' => '/images/media/ccn.svg',
    'cls' => 'media-cnn'
  ],
  [
    'url' => 'https://btcmanager.com/sharpay-ico-review/',
    'image' => '/images/media/btcmanager.png'
  ],
  [
    'url' => 'http://www.livebitcoinnews.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/livebitcoinnews.png',
    'cls' => 'media-bitcoinnews'
  ],
  [
    'url' => 'https://www.newsbtc.com/2018/02/23/sharpay-share-buttons-successfully-raised-2400-eth-presale-announcing-token-sale/',
    'image' => '/images/media/newsbtc.png',
    'cls' => 'media-newsbtc'
  ],
  [
    'url' => 'http://bitcoinist.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/bitcoinist.png',
    'cls' => 'bitcoinist'
  ],
  [
    'url' => 'https://themerkle.com/sharpay-share-buttons-successfully-raised-2400-eth-in-presale-and-announcing-token-sale/',
    'image' => '/images/media/themerkle.png'
  ],
  [
    'url' => 'https://bitscreener.com/news/sharpay-share-buttons-successfully-raised',
    'image' => '/images/media/bitscreener.png'
  ],
  [
    'url' => 'https://www.cryptoninjas.net/2018/02/23/sharpay-share-buttons-successfully-raises-2400-eth-presale/',
    'image' => '/images/media/cryptoninjias.png',
    'cls' => 'media-cryptoninjias'
  ],
  [
    'url' => 'https://icopulse.com/ico/sharpay',
    'image' => '/images/media/icopulse_white.svg',
    'cls' => 'media-icopulse'
  ],
  [
    'url' => 'https://coinjournal.net/pr-release/sharpay-share-buttons-successfully-raised-2400-eht-presale-now-announcing-token-sale/',
    'image' => '/images/media/coinjournal.png'
  ],
  [
    'url' => 'https://www.coinstaker.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/coinstaker.png',
    'cls' => 'media-coinstaker'
  ],
  [
    'url' => 'https://coincodex.com/ico/sharpay/',
    'image' => '/images/media/coincodexdark.svg',
    'cls' => 'media-coincodex'
  ],
  [
    'url' => 'https://www.investing.com/studios/article-179',
    'image' => '/images/media/invrsting.png',
    'cls' => 'media-cnn'
  ],
  [
    'url' => 'https://cryptosrus.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/cryptosrus.png',
    'cls' => 'media-cryptorus'
  ],
  [
    'url' => 'https://coininfo.news/sharpay-the-share-button-with-blockchain-profit/',
    'image' => '/images/media/coininfo-news.png',
    'cls' => ''
  ],
  [
    'url' => 'https://cryptorunner.com/sharpay-share-button-blockchain-rewards/',
    'image' => '/images/media/cryptorunner.jpeg',
    'cls' => ''
  ]
];

?>


<div id="media-text" data-ix="l-init">
	<h2 class="h2"><span class="orange-span"><?= L::media_header ?></span></h2>
</div>

<div id="media-baners" data-ix="r-init">
	<div id="media-carousel">
        <? foreach ($mediaList as $media) { ?>
			<div class="media-item">
				<a href="<?= $media['url'] ?>" target="_blank" rel="nofollow">
					<img class="media-img <?= isset($media['cls']) ? $media['cls'] : '' ?>"
					     src="<?= $media['image'] ?>"/>
				</a>
			</div>
        <? } ?>
	</div>
</div>

