<?php
namespace frame;

interface Routes{
    function getRoutesAplication(): array;
    function getAutentification(): Autentification;

}