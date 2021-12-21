<?php
declare(strict_types=1);

namespace Merophp\HtmlViewPlugin;

use DOMDocument;
use Exception;
use Merophp\ViewEngine\ViewInterface;

class HtmlView implements ViewInterface{

    /**
     * @var DOMDocument
     */
	protected DOMDocument $domDocument;

    /**
     * @var string
     */
    protected string $contentType = 'text/html;charset=utf-8';

    /**
     * @return string
     */
	public function render(): string
    {
		ob_start();
		echo $this->domDocument->saveHTML();
		$result=ob_get_contents();
		ob_end_clean();
		return $result;
	}


    /**
     * @param string|DOMDocument $value
     * @throws Exception
     * @api
     */
    public function html($value)
    {
	    if($value instanceof DOMDocument){
	        $this->domDocument = $value;
        }
	    else{
            $this->domDocument = new DOMDocument;
            if(!$this->domDocument->loadHTML($value))
                throw new Exception('Invalid HTML!');
        }
	}

    /**
     * @return string
     */
    public function getContentType(): string
    {
        return $this->contentType;
    }
}
