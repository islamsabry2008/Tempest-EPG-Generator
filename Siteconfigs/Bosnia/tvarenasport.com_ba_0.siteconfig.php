<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'tvarenasport.com_ba',
  'creator_name' => 'Kivanc',
  'creation_date' => '2021-11-29',
  'rev_no' => 'R0',
  'timezone' => 'Europe/Sarajevo',
  'culture' => 'bs',
  'max_day' => '6.1',
  'keepindexpage' => 'on',
  'url1' => 'https://tvarenaprogram.com/live/v2/ba||#edit#(\\R)##(<div class="tv-scheme-new-slider-wrapper">.*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>)||##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'show' => '\\/icons\\/##channel##\\..*?(?:"slider-content">)(.*?)(?:\\/div>\\s*<\\/div>).*?<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>\\s*<\\/div>',
  'start' => '<span>(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => '<p>(.*?)<\\/p>',
  'category' => '"blob-text">(.*?)<\\/span>|#|(?:middle"|\\/p)>\\s*<span>(.*?)<\\/span>',
  'channel_logo' => '||#add#https://www.tvarenasport.ba/files/img/icons/##channel##.png',
  'ccurl1' => 'https://tvarenaprogram.com/live/v2/ba',
  'ccrequestOption1' => '1',
  'ccchannel_block' => '<div class="tv-scheme-chanel-header">.*?<\\/div>',
  'ccchannel_id' => '\\/icons\\/(.*?)\\.',
  'ccchannel_name' => '\\/icons\\/chanel-(.*?)\\.||#replace#(a)##(p)##^0(\\d)||Arena##Premium##ArenaSport \\1',
);
?>