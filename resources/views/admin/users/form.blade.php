
{!! \App\MyApp\Base\Helper\Field::text('name' , __('الأسم'))!!}
{!! \App\MyApp\Base\Helper\Field::email('email' , __('البريد الالكتروني')) !!}
{!! \App\MyApp\Base\Helper\Field::password('password' , __('كلمة المرور')) !!}
{!! \App\MyApp\Base\Helper\Field::password('password_confirmation' , __('تاكيد كلمة المرور')) !!}

<br>
<div class="form-group" id="permissions_wrap">
    <label for="permissions">{{__('الرتب')}}</label>
    <div class="">
        <br>

        @foreach( $roles as $role)
            {{--{{dd($role->name)}}--}}

            {{--                @if($model->hasRole($role->name))--}}
            {{--                {!! Form::checkBox('roles[]',$role->id) !!}--}}
            {{--                <label for="{{$role->name}}">{{$role->name}}</label>--}}
            {{--                @else--}}

            {{--                @endif--}}

            @if($model->hasRole($role->name))
                {!! Form::checkBox('roles[]',$role->id) !!}

                <label for="{{$role->name}}">{{$role->name}}</label>
            @else

                {!! Form::checkBox('roles[]',$role->id) !!}
                <label for="{{$role->name}}">{{$role->name}}</label>
            @endif
        @endforeach
    </div>




    <br>
    <br>

</div>
