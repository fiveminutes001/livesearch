<?php
session_start();

//ERRORS DISPLAY
error_reporting(E_ALL);
ini_set('display_errors', 'On');


class dataFromDB
{
    // property declaration
    private $db_size;
    private $number_of_queries;

    public function __construct($first_search_term = null, $word_index_start = 0, $word_index_end = 10)
    {
        $this->content = '
			
			<div id="my_nanogallery2"></div>
			<script>
			
			  jQuery("#my_nanogallery2").nanogallery2({
				items:[
				  {
					src:          \'https://vimeo.com/32875422\',                           // media url
					srct:         \'https://i.vimeocdn.com/video/222726041_1280x720.jpg\',  // media thumbnail url
					title:        \'Vimeo video\',                                          // media title
					description:  \'Video\'                                                 // media description
				  },
				  { src: \'https://www.youtube.com/watch?v=Ir098VWCv8Q\', title: \'Youtube video\' },
				  { src: \'https://www.dailymotion.com/video/x4wtyl6\',   title: \'Dailymotion video\' },
				  { src: \'berlin1.jpg\',      srct: \'berlin1t.jpg\',   title: \'Title Image\' }
					],
				thumbnailWidth:  \'auto\',
				thumbnailHeight: 170,
				itemsBaseURL:    \'https://nanogallery2.nanostudio.org/samples/\',
					locationHash:    false
			  });
			
			</script>
			';
    }

    // method declaration
    public function displayContent()
    {
        echo $this->content;
    }
}
