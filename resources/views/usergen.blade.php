@extends('master')

@section('bodycontent')
    <div class="container">
        <h1>Random User Generator</h1>

        <form method='POST' action='usergen'>
            <input type='hidden' name='_token' value='{{ csrf_token() }}'>

            <div class="form-group">
                <div class="form-group">
                    <label for="users">Enter number of users to generate (1-500)</label>
                    <input type="text" name="users" class="form-control" id="users" placeholder="Enter number of users">
                </div>
                <label>Select Options:</label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="birthdate" type="checkbox"> add birthdate
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="location" type="checkbox"> add location
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="email" type="checkbox"> add email
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="password" type="checkbox"> add password
                </label>
            </div>
            <div class="checkbox">
                <label>
                    <input name="profile" type="checkbox"> add profile text
                </label>
            </div>
            <div class="form-group">
                <button type="submit" class="form-control btn btn-xs btn-success">Generate</button>
            </div>
        </form>
    </div>
    <div class="well">
        <div class="row">
            <div class="col-md-12">

                @if (isset($name))
                    <table class="table">
                        <thead>
                        <tr>
                            @if (isset($name))
                                <th>Name</th>
                            @endif
                            @if (isset($email))
                                <th>Email</th>
                            @endif
                            @if (isset($password))
                                <th>Password</th>
                            @endif
                            @if (isset($location))
                                <th>Location</th>
                            @endif
                            @if (isset($profile))
                                <th>Profile</th>
                            @endif
                            @if (isset($birthdate))
                                <th>Birth Date</th>
                            @endif

                        </tr>
                        </thead>
                        <tbody>
                        @for ($i = 0; $i < count($name); $i++)
                            <tr>
                                @if (isset($name))
                                    <td>{{ $name[$i] }}</td>
                                @endif
                                @if (isset($email))
                                    <td>{{ $email[$i] }}</td>
                                @endif
                                @if (isset($password))
                                    <td>{{ $password[$i] }}</td>
                                @endif
                                @if (isset($location))
                                    <td>{{ $location[$i] }}</td>
                                @endif
                                @if (isset($profile))
                                    <td>{{ $profile[$i] }}</td>
                                @endif
                                @if (isset($birthdate))
                                    <td>{{ $birthdate[$i] }}</td>
                                @endif
                            </tr>
                        @endfor
                        </tbody>
                    </table>

                @else
                    Click Generate button to output random users.
                @endif
            </div>
@stop