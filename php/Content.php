<?php
namespace IMSC\php;

/**
 *
 * @author  Mario Preishuber <preishuber.mario@gmail.com>
 */
class Content
{
  const SRC_HOME = './content/home/*.html';
  const SRC_NEWS = './content/news/*.html';
  const SRC_SPONSORS = './content/sponsors.csv';
  const NEWS = 0;
  const HOME = 1;
  const SPONSORS = 3;
  const CALENDAR = 4;

  public function printContent($which)
  {
    switch ($which) {
       case self::NEWS:
         $title = 'News';
         $subtitle = '';
         $content = self::getNews(self::SRC_NEWS);
         break;

       case self::HOME:
         $title = 'Innviertler Motor-Sport-Club';
         $subtitle = 'Motorsport zum greifen nahe.';
         $content = self::getHome(self::SRC_HOME);
         break;

        case self::SPONSORS:
          $title = 'Sponsoren';
          $subtitle = 'Wir bedanken uns bei allen die den IMSC unterst&uuml;tzen.';
          $content = self::getSponsors();
          break;

        case self::CALENDAR:
          $title = 'Kalender';
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

  private function getHome($dir) 
  {
    $files = glob($dir);
    usort($files, create_function('$a,$b', 'return filemtime($a)<filemtime($b);'));
    $file = $files[0];
    return '<div id="fb-feeds" class="row">'                    .   // open new row
              '<div class="col-sm-6">'                          .   // open 1st box
                '<div class="fb-feed-background">&nbsp;</div>'  .   // print background div
                '<div class="my_section fb-feed">'              .   // print content div    
                  date ("d. F Y, H:i", filemtime($file))        .   // print current date
                  file_get_contents($file)                      .   // print content of file
                '</div>'                                        .   // close content div
              '</div>'                                          .   // close 1st box
              '<div class="col-sm-5 col-sm-offset-1">'          .   // open 2nd box
                '<div class="fb-feed-background">&nbsp;</div>'  .   // print background div
                '<div class="my_section fb-feed">'              .   // print content div 
                  '<div class="fb-page" data-href="https://www.facebook.com/imsc.ried/" data-tabs="timeline" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/imsc.ried/"><a href="https://www.facebook.com/imsc.ried/">IMSC - Innviertler Motor Sport Club</a></blockquote></div></div>' .
                '</div>'                                        .   // close content div
              '</div>'                                          .   // close 2nd box
            '</div>'                                            ;   // close row

  }

  private function getNews($dir)
  {
    $files = glob($dir); // put all files in an array 
    usort($files, create_function('$a,$b', 'return filemtime($a)<filemtime($b);'));

    $news = '';
    $i = 0;
    foreach($files as $file) 
    { 
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
    }
    return $news;
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
      '<iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=imsc.ried%40gmail.com&amp;color=%23e6c800&amp;ctz=Europe%2FVienna" class="cal_div cal_div_month cal" frameborder="0" scrolling="no"></iframe>

        <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showNav=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=AGENDA&amp;height=600&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=imsc.ried%40gmail.com&amp;color=%23e6c800&amp;ctz=Europe%2FVienna"  class="cal_div cal_div_events cal_events" frameborder="0" scrolling="no"></iframe>';

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
    $bgImgIdx = rand(0, $nrImgs);
    $bgImg = 'style="background-image: url(\'' . $path . $bgImgIdx . '.jpg\');"';
    return $bgImg ;
  }

}
?>