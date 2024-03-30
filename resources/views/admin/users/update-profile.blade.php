@extends('admin.admins.layouts.main',[
                                'page_header'       => __('المستخدمين'),
                                'page_description'  => __('حسابي'),
                                'link' => ''
                                ])
@section('content')
    <!-- general form elements -->
    <div class="ibox">
        <!-- form start -->
        {!! Form::open([
                                'action'=>'Admin\UserController@updateProfile',
                                'id'=>'myForm',
                                'role'=>'form',
                                'method'=>'POST',
                                'files' => true
                                ])!!}

        <div class="ibox-content">
            {{-- @include('flash::message')
           @include('admin.admins.layouts.partials.validation-errors') --}}


            {!! \App\Base\Helper\Field::fileWithPreview('photo',__('الصورة الشخصية')) !!}
            <div class="col-sm-12">
                <img src="{{asset(auth()->user()->attachmentRelation[0]->path ?? null)}}" style="height: 100px" alt="">
            </div>

            <div class="clearfix"></div>

            {!! \App\Base\Helper\Field::password('old-password',__('كلمة المرور الحالية')) !!}
            {!! \App\Base\Helper\Field::password('password',__('كلمة المرور الجديدة')) !!}
            {!! \App\Base\Helper\Field::password('password_confirmation',__('تأكيد كلمة المرور الجديدة')) !!}

            <div class="ibox-footer">
                <button type="submit" class="btn btn-primary">{{ __('حفظ') }}</button>
            </div>

        </div>
        {!! Form::close()!!}

    </div><!-- /.box -->

@endsection
