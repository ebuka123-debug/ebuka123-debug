<?php
abstract class AbstractRoute{
    abstract protected function CheckIfMethodExist($class,$method);
    abstract protected function ShowPages($class,$method,$parameter);
    abstract protected function CheckUri($uri);
}