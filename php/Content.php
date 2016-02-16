<?php
namespace IMSC\php;
use \IMSC\php\Facebook\Feeds;
require_once 'Facebook/Feeds.php';

/**
 *
 * @author  Mario Preishuber <preishuber.mario@gmail.com>
 */
class Content
{
  const NR_OF_FACEBOOK_FEEDS_SHOWN = 5;
  const SRC_NEWS = './content/news/*.html';
  const SRC_SPONSORS = './content/sponsors.csv';
  const NEWS = 0;
  const HOME = 1;
  const FACEBOOK = 2;
  const SPONSORS = 3;
  const CALENDAR = 4;

  public function printContent($which)
  {
    switch ($which) {
       case self::NEWS:
         $title = 'News';
         $subtitle = '';
         $content = self::getNews(self::NEWS);
         break;

       case self::HOME:
         $title = 'Innviertler Motor-Sport-Club';
         $subtitle = 'Motorsport zum greifen nahe.';
         $content = self::getNews(self::HOME);
         break;

        case self::FACEBOOK:
          $title = 'Facebook';
          $subtitle = 
            '<a href="https://www.facebook.com/imsc.ried">https://www.facebook.com/imsc.ried</a>
             <br>(Auch ohne Facebook-Account!!!).';
          $content = self::getFacebookFeed();
          break;

        case self::SPONSORS:
          $title = 'Sponsoren';
          $subtitle = 'Wir bedanken uns bei allen die den IMSC unterst&uuml;tzen.';
          $content = self::getSponsors();
          break;

        case self::CALENDAR:
          $title = 'Kalendar';
          $subtitle = 'Alle Termine auf einen Blick auch auf deinem Smartphone.';
          $content = self::getCalendar();
          break;

       default:
         $title = '';
         $subtitle = '';
         $content = '';
         break;
     }

     echo 
      '<div class="container">'                           .
        '<div id="fb-feeds" class="row">'                 .
          '<div class="col-sm-12">'                       .
            '<div class="fb-feed-background">&nbsp;</div>'.
            '<div class="my_section fb-feed text-center">'.
              '<h1>' . $title   . '</h1>'                 .
              '<p>' . $subtitle . '</p>'                  . 
            '</div>'                                      .
          '</div>'                                        .
        '</div>'                                          .
        $content                                          .
      '</div>'                                            ;
  }

  private function getNews($what)
  {
    $files = glob(self::SRC_NEWS); // put all files in an array 
    usort($files, create_function('$a,$b', 'return filemtime($a)<filemtime($b);'));

    $news = '';
    $i = 0;
    foreach($files as $file) 
    { 
        // skip the first two news
        if($what == self::NEWS && $i < 2) {
          $i++;
          continue;
        }

        if($i%2 == 0)
          $news .= 
            '<div id="fb-feeds" class="row">'             .   // open new row
              '<div class="col-sm-6">'                    ;   // open 1st box
        else                
          $news .= 
              '<div class="col-sm-5 col-sm-offset-1">'    ;   // open 2nd box
        
        $news .= 
          '<div class="fb-feed-background">&nbsp;</div>'  .   // print background div
          '<div class="my_section fb-feed">'              .   // print content div    
              date ("d. F Y, H:i", filemtime($file))      ;   // print current date
        $news .= file_get_contents($file);                    // print content of file
        $news .= 
            '</div>'                                      .   // close content div
          '</div>';                                       ;   // close box div

        if($i%2 != 0)
          $news .= '</div>'                               ;   // close row      

        $i++;
        // only display the first two news
        if($what == self::HOME && $i == 2)
          break;
    }
    return $news;
  } 

  private function getFacebookFeed()
  {
    $f = new Feeds();
    $data = $f->getFeeds();
    $i = 0;
    foreach ($data as &$feed)
    {
      if($i == self::NR_OF_FACEBOOK_FEEDS_SHOWN)              // show only the last entries
        break;

      if($i%2 == 0)
          $feeds .= 
            '<div id="fb-feeds" class="row">'             .   // open new row
              '<div class="col-sm-6">'                    ;   // open 1st box
        else                
          $feeds .= 
              '<div class="col-sm-5 col-sm-offset-1">'    ;   // open 2nd box
        
        $feeds .= 
          '<div class="fb-feed-background">&nbsp;</div>'  .   // print background div
          '<div class="my_section fb-feed">'              .   // print content div    
              $feed->getDate() . '<br><br>'               ;   // print current date
        
        // set content
        // set message
        $feeds .= $feed->getMessage();

        // set images
        $feeds .= self::getFacebookFeedContentImages($feed->getCoverImg()); 

        // set videos
        $feeds .= self::getFacebookFeedContentVideos($feed->getSource());

        
        $feeds .= 
            '</div>'                                      .   // close content div
          '</div>';                                       ;   // close box div

        if($i%2 != 0)
          $feeds .= '</div>'                              ;   // close row      

        $i++;

    }
    return $feeds;
  }

  private function getFacebookFeedContentImages($coverImgs)
  {
    $imgGallery = '';
    $imgCover = '';
    foreach($coverImgs as $imgsrc)
    {
      if(strcmp($imgCover,'') == 0)
      {
        $imgCover .= '<a href="' . $imgsrc . '" class="col-sm-8" '
              .'data-toggle="lightbox" data-gallery="multiimages">'
              . '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
            . '</a>';
      }
      else
      {
        $imgGallery .= '<a href="' . $imgsrc . '" class="col-sm-2" '
              .'data-toggle="lightbox" data-gallery="multiimages">'
              . '<img src="' . $imgsrc . '" class="img-thumbnail img-responsive center-block" />'
            . '</a>';
      }
    }
    return $imgGallery;
  }

  private function getFacebookFeedContentVideos($srcs) 
  {
    $output .= '';
    foreach($srcs as $src)
    {
      if($src == null || strcmp($src, "") == 0) continue;
        
      $video_src = str_replace("autoplay=1", "autoplay=0", $src);
      $output .= 
        '<object class="fb-feed-video center-block">
          <param name="movie" value="' . $video_src . '"></param>
          <param name="allowFullScreen" value="true"></param>
          <param name="allowscriptaccess" value="always"></param>
          <embed src="' . $video_src . '" 
            type="application/x-shockwave-flash" class="fb-feed-video center-block" 
            allowscriptaccess="always" 
            allowfullscreen="true">
          </embed>
          </object>';
      $output .= '<br />';
    }
    return $output;
  }

  private function getSponsors()
  {
    ini_set('auto_detect_line_endings',TRUE);
    $handle = fopen(self::SRC_SPONSORS,'r');

    $items_per_row = 3;
    $sponsors = '';
    $sponsors .= 
      '<div id="fb-feeds" class="row">'                          .   // open new row
        '<div class="col-sm-12">'                                .   // open row item box
          '<div class="fb-feed-background">&nbsp;</div>'         .   // print background div
          '<div class="my_section fb-feed">'                     .   // open content div  
            '<div class="col-sm-12 text-center">' ; 

    $i = 0;
    
    while ( ($data = fgetcsv($handle) ) !== FALSE ) 
    {
      $num = count($data);
      if($i == 0) { $i++; continue; }   // skip first row (header)

      $company  = $data[0]; // Firma
      $address  = $data[1]; // Adresse
      $zipcode  = $data[2]; // PLZ
      $city     = $data[3]; // Ort
      $homepage = $data[4]; // WWW
      // $donation = $data[6]; // Betrag
      // $text     = $data[7]; // Text

      $sponsors .= 
        '<a href="' . $homepage . '" target="_blank">'.   // print content
          $company . '<br>'                           .
          $address . '<br>'                           .
          $zipcode . ' ' . $city . '<br>'             .
        //$text                                       .
        '</a>'                                        ;

      $i++;
    }
    ini_set('auto_detect_line_endings',FALSE);

    $sponsors .=
              '<br><br>'                              .
            '</div>'                                  .
          '</div>'                                    .
        '</div>'                                      .  
      '</div>'                                        ;   


    return $sponsors;
  }

  public function getCalendar() 
  {
     $cal = '';
     $cal .= 
      '<div id="fb-feeds" class="row">'                          .   // open new row
        '<div class="col-sm-12">'                                .   // open row item box
          '<div class="fb-feed-background">&nbsp;</div>'         .   // print background div
          '<div class="my_section fb-feed">'                     .   // open content div  
            '<div class="col-sm-12 text-center">'                ;
      $cal .=  
      '<iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;height=600&amp;wkst=2&amp;bgcolor=%23e3e9ff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23A32929&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23AB8B00&amp;ctz=Europe%2FVienna" class="cal_div cal_div_month cal" frameborder="0" scrolling="no"></iframe>

        <iframe src="https://www.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;mode=AGENDA&amp;height=600&amp;wkst=2&amp;bgcolor=%23ffffff&amp;src=imsc.ried%40gmail.com&amp;color=%23182C57&amp;src=4lbippnpc3kecmdmlcfmu7c0b4%40group.calendar.google.com&amp;color=%23AB8B00&amp;src=1q0fnqg9mnib8nebph0d6aaop4%40group.calendar.google.com&amp;color=%23A32929&amp;ctz=Europe%2FVienna" class="cal_div cal_div_events cal_events" frameborder="0" scrolling="no"></iframe>';

      $cal .= 
              '<br><br>'                              .
            '</div>'                                  .
          '</div>'                                    .
        '</div>'                                      .  
      '</div>'                                        ;   

      return $cal;
  }

  /************************************************************************************
   * Background
   ***********************************************************************************/
  public function printBackground() 
  { 
    echo '<div class="background" ' . self::getBackgroundImage() . ' >&nbsp;</div>';
  }
  
  private function getBackgroundImage() 
  { 
    $nrImgs = 20;
    $bgImg = '';
    $path = 'https://raw.githubusercontent.com/mpreis/www-imsc/master/imgs/bg/section_home_';
    $detect = new MobileDetect();
    if(!$detect->isMobile()) {
      $bgImgIdx = rand(0, $nrImgs);
      $bgImg = 'style="background-image: url(\'' . $path . $bgImgIdx . '.jpg\');"';
    }
    return $bgImg ;
  }

}
?>