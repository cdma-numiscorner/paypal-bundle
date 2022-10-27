<?php

namespace Numiscorner\PaypalBundle\Model\Transaction;

class Link
{
    private string $href;

    private string $rel;

    private string $method;

    /**
     * @return string
     */
    public function getHref(): string
    {
        return $this->href;
    }

    /**
     * @param string $href
     * @return Link
     */
    public function setHref(string $href): Link
    {
        $this->href = $href;
        return $this;
    }

    /**
     * @return string
     */
    public function getRel(): string
    {
        return $this->rel;
    }

    /**
     * @param string $rel
     * @return Link
     */
    public function setRel(string $rel): Link
    {
        $this->rel = $rel;
        return $this;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return $this->method;
    }

    /**
     * @param string $method
     * @return Link
     */
    public function setMethod(string $method): Link
    {
        $this->method = $method;
        return $this;
    }
}
