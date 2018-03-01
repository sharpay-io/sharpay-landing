<?php

$mediaList = [
  [
    'url' => 'https://www.ccn.com/sharpay-share-buttons-successfully-raised-2400-eth-presale-announcing-token-sale/',
    'image' => '/images/media/ccn.svg'
  ],
  [
    'url' => 'https://btcmanager.com/',
    'image' => '/images/media/btcmanager.webp'
  ],
  [
    'url' => 'https://cryptosrus.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/cryptosrus.png'
  ],
  [
    'url' => 'https://www.newsbtc.com/2018/02/23/sharpay-share-buttons-successfully-raised-2400-eth-presale-announcing-token-sale/',
    'image' => '/images/media/newsbtc.png'
  ],
  [
    'url' => 'http://bitcoinist.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/bitcoinist.png'
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
    'url' => 'http://www.livebitcoinnews.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/livebitcoinnews.png'
  ],
  [
    'url' => '',
    'image' => ''
  ],
  [
    'url' => '',
    'image' => ''
  ],
  [
    'url' => '',
    'image' => ''
  ]
];

?>

<div id="media" class="section section-dark">
  <div class="container">
    <div id="media-left" data-ix="l-init">
      <h2 class="h2"><span class="orange-span">Featured&nbsp;in</span></h2>
      <p></p>
    </div>
    <div data-ix="r-init">
      <div id="media-carousel">
        <? foreach ( $mediaList as $media ) { ?>
        <div>
          <a href="<?=$media['url']?>" target="_blank">
            <img class="media-img" src="<?=$media['image']?>" />
          </a>
        </div>
        <? } ?>
      </div>
    </div>
  </div>
</div>
