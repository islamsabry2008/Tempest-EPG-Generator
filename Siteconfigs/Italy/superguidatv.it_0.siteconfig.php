<?php 
/*     Tempest EPG Generator (made by Kvanc)
https://github.com/K-vanc/Tempest-EPG-Generator.git  */
return array (
  'filename' => 'superguidatv.it',
  'creator_name' => 'Kivanc',
  'creation_date' => '2024-02-07',
  'rev_no' => 'R0',
  'remarks' => 'Ciao Ragazzi',
  'timezone' => 'Europe/Rome',
  'culture' => 'it',
  'max_day' => '3',
  'episodeOption' => '1',
  'url1' => 'https://www.superguidatv.it/programmazione-canale/##urldate1##/guida-programmi-##channel##/',
  'requestOption1' => '1',
  'accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'host_header1' => 'www.superguidatv.it',
  'urldate_format1' => '#daylist#oggi|domani|dopodomani',
  'show' => '(<div class="sgtvchannelplan_divTableRow.*?<\\/div>\\s*<\\/div>\\s*<\\/div>)||#include#_hoursCell',
  'start' => 'sgtvchannelplan_hoursCell".*?>\\s*(\\d+:\\d+)',
  'start_format' => 'H#i',
  'title' => 'spanInfoNextSteps">(.*?)(?:<\\/|\\s\\((?:St|Ep)\\.|\\s\\(\\d{4})',
  'category' => 'spanEventType".*?>(.*?)\\s*\\(\\d+||#addend#,##detail##||#split#(,)',
  'season' => 'St\\.\\s(\\d+)',
  'episode' => 'Ep\\.\\s(\\d+)',
  'channel_logo' => '||#add#https://api.superguidatv.it/v1/channels/##cclogo##/logo?width=120&theme=light',
  'production_date' => '\\s\\((\\d{4})',
  'pagekey1' => 'href="(.*?)"|>|location_href\\(\'(.*?)\'',
  'detail_url1' => '##pagekey1##',
  'detail_requestOption1' => '1',
  'detail_accept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'detail_host_header1' => 'www.superguidatv.it',
  'detail_subtitle' => 'Trama Episodio:\\s*(.*?)<\\/h2>',
  'detail_desc' => 'Trama Episodio:.*?"sgtvdetails_divContentText">(.*?)<\\/div|>|"sgtvdetails_divContentText">(.*?)<\\/div',
  'detail_category' => '"genre":\\s*"(.*?)"||#split#(,)',
  'detail_showicon' => 'imgBackdrop" src="(.*?)"',
  'detail_actor' => '"sgtvdetails_divActorContainer">\\s*(.*?)\\s*<\\/div>\\s*<\\/div>||#replace#.*?<strong>(.*?)<\\/strong>.*||\\1',
  'detail_role' => '"sgtvdetails_divActorContainer">\\s*(.*?)\\s*<\\/div>\\s*<\\/div>||#include#interpreta||#replace#.*?\\s*interpreta\\s*(.*?)">.*##("\\sstyle.*)||\\1##',
  'detail_director' => '>Regia:\\s*(.*?)<\\/||#split#(,)',
  'detail_country' => 'middle;">([A-Z\\s,]+)\\s*\\d{4}||#split#(,)',
  'detail_star_rating' => '"ratingValue":\\s*"(?!0)(\\d+(?:[\\.,]\\d+)?)||#addend#/5',
  'ccurl1' => 'https://www.superguidatv.it/canali/',
  'ccrequestOption1' => '1',
  'ccaccept_header1' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header1' => 'www.superguidatv.it',
  'ccgrabber_1' => 'on',
  'ccgpattern_1' => '<div class="sgtv-source-container">\\s*(.*?)\\s*<a id="sgtvAltriA"||#replace#.*?superguidatv\\.it\\/canali(.*?)".*?<\\/(?:select|option|a)>(?:\\s*<\\/select>)?##(\\|)$||\\1|##',
  'ccurl2' => 'https://www.superguidatv.it/canali##subpage2##',
  'ccrequestOption2' => '1',
  'ccaccept_header2' => 'text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.7',
  'cchost_header2' => 'www.superguidatv.it',
  'ccsubpage_format2' => '##grabber_1##',
  'ccchannel_block' => '<a class="spanFullPlanA".*?<\\/p>',
  'ccchannel_id' => '\\/guida-programmi-(.*?)\\/"',
  'ccchannel_name' => '"pchannel">(.*?)<\\/p>',
  'ccchannel_logo' => '\\/channels\\/(\\d+)',
);
?>