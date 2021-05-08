$url = preg_split('/\?/',$_SERVER['REQUEST_URI']);
$url = preg_split('/\//',$url[0]);
$lng = array('de'=>'','en'=>'','ru'=>'');
if(!empty($url[1])) $lng[$url[1]] = ' selected';
echo '<select>';
    foreach($lng as $key=>$val)
    {
    echo '<option value="'.$key.'"'.$val.'>'.$key.'</option>';
    }
    echo '</select>';g.options.selectedIndex].value + 'index.html'}