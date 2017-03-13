
@extends('../master')

@section('content')
    <div class="posts-wrap col-md-12">

        <!-- Posts Style 1
        =============================================================== -->
        <div class="post single-post">

            <div class="post-info">
                <!-- Post Title -->
                <h2 class="post-title">Contact</h2>

                <!-- Post Exepert -->
                <div class="post-content page-content">

                    <p>
                        Pellentesque penatibus, sed rutrum viverra quisque pede, mauris commodo sodales enim porttitor. Magna convallis mi mollis, neque nostra mi vel volutpat lacinia, vitae blandit est, bibendum vel ut. Congue ultricies, libero velit amet magna erat.
                    </p>
                    @include('front.partials.message_block')
                    {!!Form::open( array('route' =>['save.contact'],'method'=>'post','class'=>'form-horizontal contact_form'))!!}

                    <div class="form-group " >
                        {{Form::label('contact_first_name', 'First Name', array('class' => 'col-sm-3'))}}
                        <div class="col-sm-10">
                            {{ Form::text('contact_first_name', $contact_first_name = null, array('class' => 'form-control input-md','id'=>'contact_first_name', 'placeholder' => 'First Name')) }}
                            @if ($errors->has('contact_first_name')) <p class="text-danger">{{ $errors->first('contact_first_name') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('contact_last_name') ? 'has-error': '' }}" >

                        {{Form::label('contact_last_name', 'Last Name', array('class' => 'col-sm-3'))}}
                        <div class="col-sm-10">
                            {{ Form::text('contact_last_name', $contact_last_name = null, array('class' => 'form-control input-md','id'=>'contact_last_name',  'placeholder' => 'Last Name')) }}
                            @if ($errors->has('contact_last_name')) <p class="text-danger">{{ $errors->first('contact_last_name') }}</p> @endif
                        </div>
                    </div>


                    <div class="form-group {{ $errors->has('contact_email_address') ? 'has-error': '' }}" >

                        {{Form::label('contact_email_address', 'Your Email', array('class' => 'col-sm-3'))}}
                        <div class="col-sm-10">
                            {{Form::email('contact_email_address', $contact_email_address = null, array('class' => 'form-control input-md','id'=>'contact_email_address',  'placeholder' => 'example@domain.com'))}}
                            @if ($errors->has('contact_email_address')) <p class="text-danger">{{ $errors->first('contact_email_address') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('message_subject') ? 'has-error': '' }}" >

                        {{Form::label('message_subject', 'Subject', array('class' => 'col-sm-3'))}}
                        <div class="col-sm-10">
                            {{ Form::text('message_subject', $message_subject = null, array('class' => 'form-control input-md','id'=>'message_title',  'placeholder' => 'Subject')) }}
                            @if ($errors->has('message_subject')) <p class="text-danger">{{ $errors->first('message_subject') }}</p> @endif
                        </div>
                    </div>

                    <div class="form-group {{ $errors->has('contact_message') ? 'has-error': '' }}" >

                        {{Form::label('contact_message', 'Your Message', array('class' => 'col-sm-3'))}}
                        <div class="col-sm-10">

                            {{ Form::textarea('contact_message', $message = null, array('class' => 'form-control input-md',  'id'=>'contact_message', 'placeholder' => 'Your Message')) }}
                            @if ($errors->has('contact_message')) <p class="text-danger">{{ $errors->first('contact_message') }}</p> @endif
                        </div>
                    </div>

                    <!-- <div class="form-group">
                         <label for="exampleInputFile" class="col-sm-3">File input</label>
                         <input name="user_image" type="file" id="exampleInputFile">

                     </div>-->

                    <div class="form-group">
                        <div class="col-sm-10 ">
                            <button type="submit" id="submit" class="btn btn-default">Send</button>
                        </div>
                    </div>

                    {!!Form::close()!!}


                </div>

            </div>
        </div>



    </div>
@endsection