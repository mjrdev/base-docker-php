<?php
namespace App\Core\Domain\Message;

class Message
{
    private string $_id;
    private string $ddd;
    private string $number;
    private string $content;

    /**
     * @param string $ddd
     * @param string $number
     * @param array $content
     * @return void
     */
    public function __construct(string $ddd)
    {
        $this->ddd = $ddd;
    }

    public function setProps(array $data)
    {
        $this->ddd = $data['ddd'];
        $this->number = $data['number'];
        $this->content = $data['content'];
    }

    public function getFullNumber()
    {
        return $this->ddd . $this->number;
    }

    /**
     * Get the value of _id
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->_id;
    }

    /**
     * Set the value of _id
     *
     * @param string $_id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->_id = $id;

        return $this;
    }

    /**
     * Get the value of ddd
     *
     * @return string
     */
    public function getDdd(): string
    {
        return $this->ddd;
    }

    /**
     * Set the value of ddd
     *
     * @param string $ddd
     *
     * @return self
     */
    public function setDdd(string $ddd): self
    {
        $this->ddd = $ddd;

        return $this;
    }

    /**
     * Get the value of number
     *
     * @return string
     */
    public function getNumber(): string
    {
        return $this->number;
    }

    /**
     * Set the value of number
     *
     * @param string $number
     *
     * @return self
     */
    public function setNumber(string $number): self
    {
        $this->number = $number;

        return $this;
    }

    /**
     * Get the value of content
     *
     * @return string
     */
    public function getContent(): string
    {
        return $this->content;
    }

    /**
     * Set the value of content
     *
     * @param string $content
     *
     * @return self
     */
    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }
}