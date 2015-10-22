@extends('master')

@section('title')
    Dev Pal - Lorem Ipsum Generator
@stop

@section('bodycontent')
    <div class="container-fluid">
        <!-- Main component for a primary marketing message or call to action -->

        <div class="panel">
            <div class="panel-body">
                <strong>Generate a new password while expanding your vocabulary with VOCABPASS. This tool is a modified
                    version of the <a href="http://xkcd.com/936/">XKCD Password Generator</a>. The XKCD password
                    generator combines common words into a hard to decipher password. The VOCABPASS tool also uses this
                    concept but instead pulls from a large dictionary and provides the definitions below of each
                    word.</strong>
            </div>
        </div>
        @if (isset($final))
            <div class="alert alert-success" role="alert">
                <h3 class="text-center"><strong>{{ $final }}</strong></h3></div>
        @endif
        <div class="container">
            <form action="/xkcd" method="post">
                <input type='hidden' name='_token' value='{{ csrf_token() }}'>
                <table class="table">
                    <tbody>
                    <tr>
                        <td>Number of Words</td>
                        <td>
                            <select class="form-control" name="wordcount">
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                            </select>
                        </td>
                        <td>
                            <button type="button" class="btn btn-primary tooltip-bottom"
                                    title="Select the number of words that you would like in your password">?
                            </button>
                            <!-- <button id="tooltip1" type="button" title="This should be shifted to the left" class="btn btn-info pull-right tooltip-bottom">?</button>-->
                        </td>

                    </tr>
                    <tr>
                        <td>Special Character</td>
                        <td>
                            <select class="form-control" name="specialcharacter">
                                <option value="0">None</option>
                                <option value="1">!</option>
                                <option value="2">#</option>
                                <option value="3">?</option>
                                <option value="4">-</option>
                                <option value="5">@</option>
                            </select>
                        </td>
                        <td>
                            <button id="tooltip2" type="button" class="btn btn-primary tooltip-bottom"
                                    title="If you would like each word seperated by a special character please choose one">
                                ?
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Numeric Prefix</td>
                        <td>
                            <select class="form-control" name="addnumericprefix">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </td>
                        <td>
                            <button id="tooltip3" type="button" class="btn btn-primary tooltip-bottom"
                                    title="This option will add a number prefix to the beginning of the password">?
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Numeric Suffix</td>
                        <td>
                            <select class="form-control" name="addnumericsuffix">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </td>
                        <td>
                            <button id="tooltip4" type="button" class="btn btn-primary tooltip-bottom"
                                    title="This option will add a number suffix to the end of the password">?
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td>Capitalize First Letter:</td>
                        <td>
                            <select class="form-control" name="capitlizefirstletter">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </td>
                        <td>
                            <button id="tooltip5" type="button" class="btn btn-primary tooltip-bottom"
                                    title="This option will capitalize the first letter of each word in the password">?
                            </button>
                        </td>
                    </tr>
                    </tbody>
                </table>
                <p>
                    <button type="submit" class="btn btn-lg btn-primary btn-block">Get Your Password</button>
                </p>
            </form>
        </div>
        <div class="page-header">
            <h2>Definitions</h2>
        </div>
        <div class="container">
            <table class="table">
                <thead>
                <tr>
                    <th>Word</th>
                    <th>Type</th>
                    <th>Definition</th>
                </tr>
                </thead>
                <tbody>
                @if (isset($words))
                    @foreach($words as $word)
                        <tr>
                            <td>  {{$word->word}}  </td>
                            <td>  {{$word->ss_type}}  </td>
                            <td> {{$word->gloss}}  </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>


        <!-- Build Definition Table  -->

    </div>
    <!-- /container -->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/tooltip-viewport.js"></script>
@stop