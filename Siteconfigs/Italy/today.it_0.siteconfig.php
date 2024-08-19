<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'today.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-08-05',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '8',
  'url1' => 'https://www.today.it/tv/programmi/v/orario-completo/c/##channel##/q/##stopdate1####urldate1##/||#replace#(\\/q\\/)1.*?\\/##(\\/q\\/)2.*?\\/##(\\/q\\/)\\d+||\\1oggi/##\\1domani-notte/##\\1',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'urldate_format1' => '#weekdayname#lunedi|martedi|mercoledi|giovedi|venerdi|sabato|domenica',
  'stopdate_format1' => '#daycounter#0',
  'show' => '(<article class="u.*?<\\/article>)',
  'start' => '\\s*alle\\s*(\\d+[\\.:]\\d+)',
  'start_format' => 'H#i',
  'title' => '<h1 class="u-title.*?>(.*?)<\\/h1>',
  'desc' => '<p class="u.*?>(.*?)<\\/p>',
  'category' => '<span class="c-story__kicker.*?>\\s*(.*?)\\s*<\\/span>||#split#(\\/)',
  'showicon' => '<img decoding.*?src="(.*?)"||#replace#^(\\/\\/)##(thumbs\\/)##(_small\\.png)||https://####.jpg',
  'channel_logo' => '<img class="u.*?src="(.*?)"||#replace#^(\\/\\/)||https://',
  'pagekey1' => 'href="(.*?)"',
  'detail_url1' => 'https://www.today.it##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_desc' => '<p class="u.*?>(.*?)<\\/p>',
  'detail_production_date' => 'Anno: <\\/span>.*?>\\s*(\\d{4})',
  'detail_actor' => 'Attori: <\\/span>.*?>\\s*(.*?)<\\/span>||#split#(,)',
  'detail_director' => 'Regia: <\\/span>.*?>\\s*(.*?)<\\/span>||#split#(,)',
  'detail_writer' => 'Sceneggiatura: <\\/span>.*?>\\s*(.*?)<\\/span>||#split#(,)',
  'detail_country' => 'Paese di produzione: <\\/span>.*?>\\s*(.*?)<\\/span>||#split#(,|\\/)',
  'ccurl1' => 'https://www.today.it/tv/programmi/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'ccchannel_block' => '<input  data-filter="c".*?<\\/span>',
  'ccchannel_id' => 'value="(.*?)"',
  'ccchannel_name' => '<a class="u.*?>\\s*(.*?)\\s*\\(',
);
?>