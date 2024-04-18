<?php

namespace KmrSystems\KMRConfig\Controller;


final class Constructor {
  
  
	public function head(string $content, array $conf): string
  		{            
            $content = '                    
                    <div class="alert alert-warning d-flex align-items-center" role="alert">
                        <i icon-name="alert-circle" class="bi flex-shrink-0 me-2"></i>
                        <div>Конфігурація встановлена, але для даного розділу відсутня!</div>
                    </div>
                    ';
      
    		return $content;
  		}
}