<?php
class ImageWDTColumn extends WDTColumn {
	
    protected $_jsDataType = 'string';
    protected $_dataType = 'string';
    
    public function __construct( $properties = array () ) {
		parent::__construct( $properties );
		$this->_dataType = 'icon';
    }
    
    public function prepareCellOutput( $content ) {
    	if( FALSE !== strpos( $content, '||' ) ){
    		$image = ''; $link = '';
    		list($image,$link) = explode('||',$content);
    		$formattedValue = "<a href='{$link}' target='_blank'><img src='{$image}' /></a>";
    	}else{
                $formattedValue = "<img src='{$content}' />";
    	}
    	$formattedValue = apply_filters( 'wpdatatables_filter_image_cell', $formattedValue );
    	return $formattedValue;
    }    
    
}


?>