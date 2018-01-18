<?php

interface MemberRepository
{
    public function save($member);
    public function getAll();
    public function findById($memberId);
}

class ArrayMemberRepository implements MemberRepository
{
    private $members = [];

    public function save($member)
    {
        $this->members[$member->getId()] = $member;
    }

    public function getAll()
    {
        return $this->members;
    }

    public function findById($memberId)
    {
        return $this->members[$memberId];
    }
}