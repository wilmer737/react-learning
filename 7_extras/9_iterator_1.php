<?php

class AddressIterator implements AddressIteratorInterface
{
    const TYPE_EMAIL = 'email';
    const TYPE_STREET = 'street';

    private $collection;
    private $position;

    public function __construct($type, $collection)
    {
        $this->collection = $collection;
        $this->position = 0;
    }

    public function hasNext()
    {
        if ($this->position >= count($this->collection) ||
            $this->collection[$this->position] == null) {
            return false;
        } else {
            return true;
        }
    }

    public function next()
    {
        $item = $this->collection[$this->position];
        $this->position = $this->position + 1;
        return $item;
    }
}

$iterator = new AddressIterator(AddressIterator::TYPE_EMAIL, ['someone@me.com', 'someone1@you.co.uk']);
while($iterator->hasNext()) {
    // ... do the work here
}