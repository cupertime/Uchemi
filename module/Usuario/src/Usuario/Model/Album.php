<?php

namespace Usuario\Model;

class Album{
    public $id;
    public $artist;
    public $title;
    
    public function exchangeArray($data){
        /*Si id se encuentra definido y no es null */
        $this->id = ( isset( $data['id'] ) ? $data['id'] : null );
        $this->artist = ( isset( $data['artist'] ) ? $data['artist'] : null );
        $this->title = ( isset( $data['title'] ) ? $data['title'] : null );
        
    }
    
}