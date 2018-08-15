<?php

declare(strict_types = 1);

namespace maru\formlib;

use pocketmine\form\Form;

abstract class ModalForm implements Form {

    public $id;
    /** @var array */
    private $data = [];
    /** @var string */
    private $content = "";

    /**
     * @param int $id
     * @param callable $callable
     */
    public function __construct(int $id, ?callable $callable) {
        parent::__construct($id, $callable);
        $this->data["type"] = "modal";
        $this->data["title"] = "";
        $this->data["content"] = $this->content;
        $this->data["button1"] = "";
        $this->data["button2"] = "";
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title) : void {
        $this->data["title"] = $title;
    }

    /**
     * @return string
     */
    public function getTitle() : string {
        return $this->data["title"];
    }

    /**
     * @return string
     */
    public function getContent() : string {
        return $this->data["content"];
    }

    /**
     * @param string $content
     */
    public function setContent(string $content) : void {
        $this->data["content"] = $content;
    }

    /**
     * @param string $text
     */
    public function setButton1(string $text) : void {
        $this->data["button1"] = $text;
    }

    /**
     * @return string
     */
    public function getButton1() : string {
        return $this->data["button1"];
    }

    /**
     * @param string $text
     */
    public function setButton2(string $text) : void {
        $this->data["button2"] = $text;
    }

    /**
     * @return string
     */
    public function getButton2() : string {
        return $this->data["button2"];
    }
    
    
    public function jsonSerialize() {
    	return $this->data;
    }
}