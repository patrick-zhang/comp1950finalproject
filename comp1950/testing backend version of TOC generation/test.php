<?php $htmlcode = <<< EOHTML
<h1> Animals </h1>
Some content goes here.
Some content goes here.
<h2> Mammals </h2>
Some content goes here.
Some content goes here.
<h3> Terrestrial Mammals </h3>
Some content goes here.
Some content goes here.
<h3> Marine Mammals </h3>
Some content goes here.
Some content goes here.
<h4> Whales </h4>
Some content goes here.
Some content goes here.
EOHTML;
// simpehtmldom or other dom manipulating library
require_once 'simple_html_dom.php';

$html = str_get_html($htmlcode);

$toc = '';
$last_level = 0;

foreach($html->find('h1,h2,h3,h4,h5,h6') as $h){
    $innerTEXT = trim($h->innertext);
    $id =  str_replace(' ','_',$innerTEXT);
    $h->id= $id; // add id attribute so we can jump to this element
    $level = intval($h->tag[1]);

    if($level > $last_level)
        $toc .= "<ol>";
    else{
        $toc .= str_repeat('</li></ol>', $last_level - $level);
        $toc .= '</li>';
    }

    $toc .= "<li><a href='#{$id}'>{$innerTEXT}</a>";

    $last_level = $level;
}

$toc .= str_repeat('</li></ol>', $last_level);
$html_with_toc = $toc . "<hr>" . $html->save();
echo $toc;
echo $html;

?>
