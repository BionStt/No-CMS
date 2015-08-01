<style type="text/css">
    ul._archive_widget a{
        color: inherit;
    }
    ul._archive_widget a:hover{
        color: inherit;
    }
</style>
<?php
if($module_path == 'blog'){
    $module_url = 'blog';
}else{
    $module_url = '{{ module_path }}/blog';
}
echo '<ul class="_archive_widget">';
echo '<li>'.anchor(site_url($module_url), 'All').'</li>';
foreach($archives as $key=>$value){
    echo '<li>';    
    $url = $module_url.'/index?archive='.$key;
    echo anchor(site_url($url), $value);
    echo '</li>';
}
echo '</ul>';