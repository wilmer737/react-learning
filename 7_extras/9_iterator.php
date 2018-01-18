<?php

interface AddressIteratorInterface
{
    public function hasNext();
    public function next();
}

class EmailAddressIterator implements AddressIteratorInterface
{
    private $emailAddresses;
    private $position;

    public function __construct($emailAddresses)
    {
        $this->emailAddresses = $emailAddresses;
        $this->position = 0;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->emailAddresses) ||
            $this->emailAddresses[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        $item = $this->emailAddresses[$this->position];
        $this->position = $this->position + 1;
        return new EmailAddressDisplayAdapter($item);
    }
}

class PhysicalAddressIterator implements AddressIteratorInterface
{
    private $physicalAddresses;
    private $position;

    public function __construct($physicalAddresses)
    {
        $this->physicalAddresses = $physicalAddresses;
        $this->position = 0;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->physicalAddresses) ||
            $this->physicalAddresses[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        $item = $this->physicalAddresses[$this->position];
        $this->position = $this->position + 1;
        return new PhysicalAddressDisplayAdapter($item);
    }
}