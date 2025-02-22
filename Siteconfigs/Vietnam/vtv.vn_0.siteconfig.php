<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'vtv.vn',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-10-20',
  'rev_no' => 'R0',
  'timezone' => 'Asia/Ho_Chi_Minh',
  'culture' => 'vi',
  'max_day' => '8',
  'url1' => 'https://vtv.vn/truyen-hinh-truc-tuyen/##channel##',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'vtv.vn',
  'cookie_jar1' => 'on',
  'static_url1' => 'on',
  'grabber_1' => 'on',
  'gpattern_1' => 'channelid="(\\d+)',
  'url2' => 'https://vtvapi3.vtv.vn/aj-schedulechannel-d##urldate2##-c##grabber_1##.htm',
  'requestOption2' => '1',
  'accept_header2' => '*/*',
  'host_header2' => 'vtvapi3.vtv.vn',
  'origin_header2' => 'https://vtv.vn',
  'cookie_jar2' => 'on',
  'urldate_format2' => 'd-m-Y',
  'show' => '(<li class=.*?<\\/li>)',
  'start' => 'data-s="(.*?)"',
  'start_format' => 'Y-m-d-H-i-s',
  'title' => 'title="">(.*?)<',
  'desc' => '"name_ct1">(.*?)<\\/',
  'channel_logo' => '||#add#https://cdn-images.vtv.vn/##cclogo##',
  'ccurl1' => 'https://vtv.vn/lich-phat-song-ngay-##urldate1_1##-thang-##urldate1_2##-nam-##urldate1_3##.htm',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'vtv.vn',
  'ccurldate_format1' => 'd-m-Y||#split#(-)',
  'ccchannel_block' => '<ul class="list-channel">.*?(?:<li>)(.*?)(?:<\\/li>).*?<\\/ul>',
  'ccchannel_id' => '-tuyen\\/(.*?)"',
  'ccchannel_name' => '\\skênh\\s(.*?)"',
  'ccchannel_logo' => '<img src=".*?\\.vn\\/(.*?)"',
);
?>