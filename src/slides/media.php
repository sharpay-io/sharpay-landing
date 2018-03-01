<?php

$mediaList = [
  [
    'url' => 'https://www.ccn.com/sharpay-share-buttons-successfully-raised-2400-eth-presale-announcing-token-sale/',
    'image' => '/images/media/ccn.svg',
    'cls' => 'media-cnn'
  ],
  [
    'url' => 'https://btcmanager.com/',
    'image' => '/images/media/btcmanager.png'
  ],
  [
    'url' => 'https://cryptosrus.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/cryptosrus.png',
    'cls' => 'media-cryptorus'
  ],
  [
    'url' => 'https://www.newsbtc.com/2018/02/23/sharpay-share-buttons-successfully-raised-2400-eth-presale-announcing-token-sale/',
    'image' => '/images/media/newsbtc.png',
    'cls' => 'media-newsbtc'
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
    'image' => '/images/media/livebitcoinnews.png',
    'cls' => 'media-bitcoinnews'
  ],
  [
    'url' => 'https://coinjournal.net/pr-release/sharpay-share-buttons-successfully-raised-2400-eht-presale-now-announcing-token-sale/',
    'image' => '/images/media/coinjournal.png'
  ],
  [
    'url' => 'https://www.cryptoninjas.net/2018/02/23/sharpay-share-buttons-successfully-raises-2400-eth-presale/',
    'image' => '/images/media/cryptoninjias.png',
    'cls' => 'media-cryptoninjias'
  ],
  [
    'url' => 'https://www.coinstaker.com/sharpay-share-buttons-successfully-raised-2400-eht-presale-announcing-token-sale/',
    'image' => '/images/media/coinstaker.png',
    'cls' => 'media-coinstaker'
  ]
];

?>

<style type="text/css">

  #media-left {
    margin-right: 30px;
    padding-top: 15px;
  }

  #media-carousel {
    width: 950px;
  }

  .media-img {
    height: 50px;
    margin: 10px 25px;
  }

  .media-cryptorus {
    padding-top: 15px;
    padding-bottom: 15px;
  }

  .media-newsbtc, .media-cryptoninjias {
    background: white;
    border: solid 5px white;
  }

  .media-bitcoinnews {
    margin: 3px 25px 7px 25px;
    height: 70px;
  }

  .media-cnn, .media-coinstaker {
    height: 36px;
    margin: 17px 25px;
  }

</style>

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
            <img class="media-img <?= isset($media['cls']) ? $media['cls'] : ''?>" <?= isset($media['id']) ? 'id="' . $media['id'] . '"' : '' ?>  src="<?=$media['image']?>" />
          </a>
        </div>
        <? } ?>
      </div>
    </div>

  </div>
</div>
