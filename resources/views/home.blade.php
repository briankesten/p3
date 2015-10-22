@extends('master')

@section('title')
    Dev Pal - Home
@stop

@section('bodycontent')
    <div class="page-header">
        <h1>Dev Tools</h1>
    </div>
    <div class="list-group">
        <a href="ipsum" class="list-group-item">
            <h4 class="list-group-item-heading">Lorem Ipsum Generator</h4>
            <p class="list-group-item-text">The Dev Pal Lorem Ipsum Generator will output text that you can use for your web development projects. This site makes use of the badcow/lorem-ipsum package which provides a library for generating lorem ipsum text.  In publishing and graphic design, lorem ipsum (derived from Latin dolorem ipsum, translated as "pain itself") is a filler text commonly used to demonstrate the graphic elements of a document or visual presentation. Reference: Wikipedia - https://en.wikipedia.org/wiki/Lorem_ipsum <b>Click Here</b> </p>
        </a>
        <a href="usergen" class="list-group-item">
            <h4 class="list-group-item-heading">Random User Generator </h4>
            <p class="list-group-item-text">The Dev Pal Random User Generator will output a list of random users which can save countless time when this type of information needs to be generated. This script makes use of the fzaninotto/faker package. <b>Click Here</b></p>
        </a>
        <a href="xkcd" class="list-group-item">
            <h4 class="list-group-item-heading">VocabPass XKCD Password Generator </h4>
            <p class="list-group-item-text">Generate a new password while expanding your vocabulary with VOCABPASS. This tool is a modified
                version of the XKCD password generator combines common words into a hard to decipher password. The VOCABPASS tool also uses this concept but instead pulls from a large dictionary and provides the definitions below of each
                word. <b>Click Here</b></p>
        </a>
    </div>
@stop