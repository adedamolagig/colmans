@extends('layouts.master')

    @section('body')
        
        @include('layouts.navbar')
        <!--Request Information Page-->
          <form class="container form-horizontal" style="padding-top: 100px; padding-bottom: 100px; background: #BEBEBE" method="POST" action=" {{ route('RequestInformation.submit') }} " >
            {{csrf_field()}}

            <div class="form-group {{ $errors->has('programmes')? ' has-error' : '' }} ">
              <label for="programmes" class="col-md-4 control-label"><p> Programmes </p></label>
              <div class="col-md-6">
                
                <select id="programmes"  class="form-control" name="programmes">
                @foreach (App\Http\Utilities\Programmes::all() as $programmes )
                  <option value="{{ $programmes }}">{{ $programmes }} </option>
                @endforeach
                </select>  

                @if ($errors->has('programmes'))
                    <span class="help-block">
                        <strong>{{ $errors->first('programmes') }}</strong>
                    </span>
                @endif

              </div>
              
            </div>



            <div class="form-group{{ $errors->has('last_name') ? ' has-error' : '' }}">
                <label for="last_name" class="col-md-4 control-label"><p> Last or Family Name *</p></label>

                <div class="col-md-6">
                    <input id="last_name" type="text" class="form-control" name="last_name" value="{{ old('last_name') }}" required autofocus>

                    @if ($errors->has('last_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('last_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('first_name') ? ' has-error' : '' }}">
                <label for="first_name" class="col-md-4 control-label"><p> First or Given Name * </p></label>

                <div class="col-md-6">
                    <input id="first_name" type="text" class="form-control" name="first_name" value="{{ old('first_name') }}" required autofocus>

                    @if ($errors->has('first_name'))
                        <span class="help-block">
                            <strong>{{ $errors->first('first_name') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label"><p> E-Mail Address </p></label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>



            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label"><p>Title</p></label>

                <div class="col-md-6">
                    <select id="title" class="form-control" name="title">
                      @foreach(App\Http\Utilities\Titles::all() as $title)
                        <option value=" {{ $title }} "> {{ $title }} </option>

                      @endforeach
                      
                    </select>
                    @if ($errors->has('email'))
                        <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

             <div class="form-group{{ $errors->has('DateOfBirth') ? ' has-error' : '' }}">
                <label for="DateOfBirth" class="col-md-4 control-label"><p>Date Of Birth</p></label>

                <div class="col-md-6">
                    <input type="date" name="DateOfBirth">
                    @if ($errors->has('DateOfBirth'))
                        <span class="help-block">
                            <strong>{{ $errors->first('DateOfBirth') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


            <div class="form-group{{ $errors->has('nationality') ? ' has-error' : '' }}">
                <label for="nationality" class="col-md-4 control-label"><p>Nationality</p></label>

                <div class="col-md-6">
                    <select id="title" class="form-control" name="nationality">
                      @foreach(App\Http\Utilities\Nationality::all() as $nationality)
                        <option value=" {{ $nationality }} "> {{ $nationality }} </option>

                      @endforeach
                      
                    </select>
                    @if ($errors->has('nationality'))
                        <span class="help-block">
                            <strong>{{ $errors->first('nationality') }}</strong>
                        </span>
                    @endif
                </div>
            </div>


             <div class="form-group{{ $errors->has('question') ? ' has-error' : '' }}">
                <label for="question" class="col-md-4 control-label"><p>Please type your question for the admission team</p></label>

                <div class="col-md-6">
                    <textarea rows="5" cols="50" name="question">
                      
                    </textarea>
                    @if ($errors->has('question'))
                        <span class="help-block">
                            <strong>{{ $errors->first('question') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Register
                    </button>
                </div>
            </div>
          </form>
    @endsection