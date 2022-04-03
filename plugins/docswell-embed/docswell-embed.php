<?php
/*
  Plugin Name: Docswell Embed
  Plugin URI:
  Description: 「埋め込み」ブロックにドクセルのURLを許可
  Version: 1.0.0
  Author: UpLucid, K.K.
  Author URI: https://www.docswell.com/note/
  License: GPLv2
 */
wp_oembed_add_provider( 'https://www.docswell.com/s/*', 'https://www.docswell.com/service/oembed' );