<?php

use PHPUnit\Framework\TestCase;

final class AITest extends TestCase
{
    public function testGender_Male(): void
    {
        $result = AI::getGender('สวัสดีครับ');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_Female(): void
    {
        $result = AI::getGender('สวัสดีคะ');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_MaleBeginWord(): void
    {
        $result = AI::getGender('ผมชื่อนาย');
        $expected_result = 'Male';
        $this->assertEquals($expected_result, $result);
    }

    public function testGender_FemaleBeginWord(): void
    {
        $result = AI::getGender('ฉันชื่อนาง');
        $expected_result = 'Female';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Negative(): void
    {
        $result = AI::getSentiment('เธอเป็นคนที่ไม่น่ารัก');
        $expected_result = 'Negative';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Positive(): void
    {
        $result = AI::getSentiment('เธอเป็นคนที่สมบูรณ์แบบมาก');
        $expected_result = 'Positive';
        $this->assertEquals($expected_result, $result);
    }

    public function testSentiment_Neutral(): void
    {
        $result = AI::getSentiment('สวัสดีครับ');
        $expected_result = 'Neutral';
        $this->assertEquals($expected_result, $result);
    }

    public function testRudeWords_True(): void
    {
        $result = AI::getRudeWords('มึงไม่น่ารักกู');
        $expected_result = ['กู', 'มึง'];
        $this->assertTrue(count(array_diff_key($result, $expected_result)) === 0);
    }

    public function testLanguages_English(): void
    {
        $result = AI::getLanguages('Hello');
        $expected_result = ['EN'];
        $this->assertTrue(count(array_diff_key($result, $expected_result)) === 0);
    }

    public function testLanguages_Thai(): void
    {
        $result = AI::getLanguages('สวัสดี');
        $expected_result = ['TH'];
        $this->assertTrue(count(array_diff_key($result, $expected_result)) === 0);
    }

    public function testLanguages_EnglishThai(): void
    {
        $result = AI::getLanguages('Hello สวัสดี');
        $expected_result = ['EN', 'TH'];
        $this->assertTrue(count(array_diff_key($result, $expected_result)) === 0);
    }

}
