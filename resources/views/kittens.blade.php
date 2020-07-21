@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card" style="display: flex">
                    <div class="card-header" style="display: flex;
flex-direction: column;">Kittens</div>

                    <div class="card-body">

                        {{ Form::open(array('route' => 'filterKittens', 'method' => 'GET'))}}
                        {{ csrf_field() }}
                        @if(isset($AvailableFilters))
                            @foreach($AvailableFilters as $key=> $Filter)
                                {{Form::label($key, $key)}}
                                <select  overflow="auto" multiple="multiple" name="{{$key}}[]"
                                        id="{{$key}}">
                                    @foreach($Filter as  $value)
                                        <option
                                            value="{{$value->$key}}">
                                            {{$value->$key}}
                                        </option>
                                    @endforeach
                                </select>
                            @endforeach
                        @endif
                        {{Form::submit('filter')}}
                        <button type="reset">Cancel</button>
                        {{ Form::close() }}
                    </div>

                    <div class="card-body" >
                        kittens
                        @if(isset($kittens))
                            @foreach($kittens as $kitten)
                               <p>
                                <img src="{{$kitten->image}}" height="200" width="300">
                               <li> height =  {{$kitten->height}}</li>
                                <li>  weight =  {{$kitten->weight}}</li>
                                <li>  width =  {{$kitten->width}}</li>
                                <li>  age =  {{$kitten->age}}</li>
                                <li> fur =  {{$kitten->fur}}</li>
                                <li>  color =  {{$kitten->color}}</li>
                                <li>  breed =  {{$kitten->breed->breed}}</li>
                               </p>
                                ================================================
                            @endforeach
                                {{ $kittens->links() }}
                        @endif
                    </div>

                </div>
            </div>
        </div>
    </div>
@endsection

<script>
    function myFunction() {
        document.getElementById("myForm").reset();
    }
</script>
