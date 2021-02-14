<?php

namespace App\Entity;

use DateTime;

/**
* @Entity
*/
class Article {
	/**
	* @Column(type="integer")
	* @Id
	* @GeneratedValue
	*/

	private $id;
	/**
	* @column(type="string")
	*/
	private $name;
	/**
	* @column(type="string", unique=true)
	*/
	private $slug;
	/**
	* @column(type="string")
	*/
	private $image;
	/**
	* @column(type="text")
	*/
	private $body;
	/**
	* @column(type="datetime")
	*/
	private $publiched;

	public function getId() {
		return $this->id;
	}

	public function setId($value) {
		$this->id = $value;
	}

	public function getName() {
		return $this->name;
	}

	public function setName($value) {
		$this->name = $value;
	}

	public function getSlug() {
		return $this->slug;
	}

	public function setSlug($value) {
		$this->slug = $value;
	}

	public function getImage() {
		return $this->image;
	}

	public function setImage($value) {
		$this->image = $value;
	}

	public function getBody() {
		return $this->body;
	}

	public function setBody($value) {
		$this->body = $value;
	}

	public function getPubliched() {
		return $this->publiched;
	}

	public function setPublish(DateTime $value = null) {
		$this->publiched = $value;
	}
}