<?php

class GuestBookUser
{
    private $userId;
    public $comment;

    /**
     * @param int $userId
     * @param string $comment
     * @throws Exception выкидывает экзепшн, если пустая строка поля $userName
     * @throws Exception выкидывает экзепшн, если пользователя нет в таблице users
     */

    public function getUser(string $userName): int
    {
        //находим userId пользователя userName
    }

    public function writeComment(int $userId, string $comment): void
    {
        //найти пользователя в талибце users
        //записать в таблицу comments коментарий от пользователя $userId
    }
}


class GuestBookComments
{
    private $comment;

    /**
     * @param string $comment
     * @throws Exception выкидывает экзепшн, если пустая строка поля $comment
     */

    public function getComment(string $comment): string
    {
        //получаем comment
        //валидация comment
        //ретурн $comment для writeComment
    }

    public function giveComments(): array
    {
        //вывести все комментарии всех users
    }
}