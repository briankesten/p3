@extends('master')

@section('title')
    Dev Pal - Lorem Ipsum Generator
@stop

@section('bodycontent')
    <div class="container">
    <h1>Lorem Ipsum Generator</h1>
    <form method='POST' action='ipsum'>
        <input type='hidden' name='_token' value='{{ csrf_token() }}'>
        <div class="form-group">
            <label for="paragraph">Select the number of paragraphs of text to output.</label>
        <select class="form-control" id="paragraph" name="paragraph">
            <option value=1>1</option>
            <option value=2>2</option>
            <option value=3>3</option>
            <option value=4>4</option>
            <option value=5>5</option>
            <option value=6>6</option>
            <option value=7>7</option>
            <option value=8>8</option>
            <option value=9>9</option>
            <option value=10>10</option>
        </select>
        </div>
        <div class="form-group">
        <button type="submit" class="form-control btn btn-xs btn-success">Generate</button>
        </div>
    </form>
    </div>
    <div class="well">
        @if (isset($value))
            @foreach ($value as $val)
                <p>{{ $val }}</p>
            @endforeach
        @else
            Click Generate button to output Lorem Ipsum text.
        @endif
    </div>
@stop