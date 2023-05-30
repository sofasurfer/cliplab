<?php

if( get('q') ) {

    $query   = get('q');
    $results = $site->search($query, 'title|text');

    $s_results = array();
    foreach($results as $result){
        $item = array(
            'title' => (string)$result->title(),
            'description' => (string)$result->intro()->kirbytext(),
            'modified' => date('d.m.Y',$result->modified()),
            'url' => $result->url(),
        );
        $s_results[] = $item;
    }
    echo json_encode($s_results);
    
}
else {
    Header::status('404');
}